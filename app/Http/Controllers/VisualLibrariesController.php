<?php

namespace App\Http\Controllers;

use App\Models\VisualLibraries;
use App\Http\Requests\StoreVisualLibrariesRequest;
use App\Http\Requests\UpdateVisualLibrariesRequest;
use App\Services\VisualLibrariesDatatableService ; 
use Yajra\DataTables\DataTables;
 use App\Models\Images;  //Images
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;
 

class VisualLibrariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VisualLibrariesDatatableService  $visualLibrariesDatatableService  , Request $request)
    {
        if ($request->ajax()) 
        {
            $data = VisualLibraries::select('*')->get() ;
             
            try {
                return $visualLibrariesDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
        return view('Dashboard.visualLibraries.index') ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Dashboard.visualLibraries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisualLibrariesRequest $request)
    {
        $create_visualLibraries= VisualLibraries::create($request->getData())  ;
        foreach ($request->file('images') as  $imagefile)
         {
              $path = 'uploads/images/visaulLibraries/';
             $nameImage = time()+rand(1,10000000).'.'.$imagefile->getClientOriginalExtension();
             Storage::disk('public')->put($path.$nameImage, file_get_contents( $imagefile ));
                 $new_image = Images::create([
                     'url' => $path.$nameImage,
                     'parentable_id' => $create_visualLibraries->id,
                     'parentable_type' => VisualLibraries::class
                 ]);
                 $new_image->parentable()->associate($create_visualLibraries);
                 $new_image->save();

         }
  return $create_visualLibraries? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(VisualLibraries $visualLibraries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisualLibraries $visualLibraries , $id )
    {
         $visualLibraries_row = $visualLibraries::select('*')->where('id' , $id)->first();
          return view('Dashboard.visualLibraries.edit' , ['visualLibrary' =>$visualLibraries_row]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisualLibrariesRequest $request, VisualLibraries $visualLibraries)
    {
        $update = VisualLibraries::where('id',$request['id'])->update($request->getData())  ;
        $images = $request->file('images') ; 
        if(isset($images))
        {
            foreach ($request->file('images') as  $imagefile)
            {
                     $path = 'uploads/images/news/';
                    $nameImage = time()+rand(1,10000000).'.'.$imagefile->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $imagefile ));
                        $new_image = Images::create([
                            'url' => $path.$nameImage,
                            'parentable_id' =>  $request['id'],
                            'parentable_type' => VisualLibraries::class
                        ]);
                        // $new_image->parentable()->associate($createNews);
                        $new_image->save();


            }
     }
 
        return $update? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisualLibraries $visualLibraries , $id)
    {
         $delete_row= $visualLibraries::find($id)->first();
           return  ($delete_row->delete() )  ? parent::successResponse():  parent::errorResponse();
      
         
    }
}
