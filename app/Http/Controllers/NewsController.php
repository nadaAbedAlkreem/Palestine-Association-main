<?php

namespace App\Http\Controllers;

use App\Models\News;  //Images
use App\Models\Images;  //Images
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Yajra\DataTables\DataTables;
use App\Services\NewsDatatableService ; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request  , NewsDatatableService $newsDatatableService)
    {

        if ($request->ajax()) 
        {
            $data = News::select('*') ;
            
            try {
                return $newsDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
       return view('Dashboard.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
    
     return view('Dashboard.news.create') ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
         $createNews = News::create($request->getData())  ;
               foreach ($request->file('images') as  $imagefile)
                {
                    $news = new News();
                    $path = 'uploads/images/news/';
                    $nameImage = time()+rand(1,10000000).'.'.$imagefile->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $imagefile ));
                        $new_image = Images::create([
                            'url' => $path.$nameImage,
                            'parentable_id' => $createNews->id,
                            'parentable_type' => News::class
                        ]);
                        $new_image->parentable()->associate($createNews);
                        $new_image->save();

                }
         return $createNews? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) 
    {   
        $news =News::select('*')->where('id' , $id)->first();
         

        
          return view('Dashboard.news.edit'  , ['news' => $news] );
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $update = News::where('id',$request['id'])->update($request->getData())  ;
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
                            'parentable_type' => News::class
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
    public function destroy($id)
    {
          $deleteRow =  News::find($id)->images()->get(); 
          $deleteRowNews= News::find($id)->first();
             return  ($deleteRowNews->delete() ) && $deleteRow->delete()  ? parent::successResponse():  parent::errorResponse();
        
    }

    public function imagesDelete($id)
    {   
        $deleteRow =  Images::find($id)->delete($id);
        return  $deleteRow ? $id:  parent::errorResponse();
    }

  
}
