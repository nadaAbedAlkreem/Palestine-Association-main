<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Images;  //Images
use Yajra\DataTables\DataTables;
use App\Services\SliderDatatableService ; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request  , SliderDatatableService $sliderDatatableService)
    {
        if ($request->ajax()) 
        {
            $data = Slider::select('*') ;
        
            
            try {
                return $sliderDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
       return view('Dashboard.sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Dashboard.sliders.create') ;  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        
          $createSliders = Slider::create($request->getData()); 
 

        return $createSliders? parent::successResponse():  parent::errorResponse(); 

    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = Slider::where('id' , $id)->first() ; 
        return view('Dashboard.sliders.edit', ['slider' => $slider]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request)
    {

  
          $updateSlider = Slider::where('id' , $request['id'])->update($request->getData()); 
        return $updateSlider? parent::successResponse():  parent::errorResponse(); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id )
    {
         
           $deleteRowNews= Slider::find($id)->first();
             return  ($deleteRowNews->delete() )  ? parent::successResponse():  parent::errorResponse();
        
    }
}
