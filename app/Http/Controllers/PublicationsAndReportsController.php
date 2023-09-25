<?php

namespace App\Http\Controllers;

use App\Models\PublicationsAndReports;
use App\Http\Requests\StorePublicationsAndReportsRequest;
use App\Http\Requests\UpdatePublicationsAndReportsRequest;
use App\Services\PublicationsAndReportsDatatableService ; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PublicationsAndReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request  , PublicationsAndReportsDatatableService $publicationsAndReportsDatatableService)
    {
        if ($request->ajax()) 
        {
            $data = PublicationsAndReports::select('*') ;
            
            try {
                return $publicationsAndReportsDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
       return view('Dashboard.PublicationAndReports.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Dashboard.PublicationAndReports.create') ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicationsAndReportsRequest $request)
    {
          
        $create_publications_reports = PublicationsAndReports::create($request->getData()); 
        return $create_publications_reports? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(PublicationsAndReports $publicationsAndReports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $publication = PublicationsAndReports::where('id' , $id)->first(); 
        return view('Dashboard.PublicationAndReports.edit' , ['publication' => $publication]) ; 
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicationsAndReportsRequest $request)
    {
       
        $create_publications_reports = PublicationsAndReports::where('id' ,$request['id'] )->update($request->getData());
        return $create_publications_reports? parent::successResponse():  parent::errorResponse(); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleteRow =  PublicationsAndReports::find($id)->delete();
        return  $deleteRow ? $id :  parent::errorResponse();         
    }
}
