<?php

namespace App\Http\Controllers;

use App\Models\Donors;
use App\Http\Requests\StoreDonorsRequest;
use App\Http\Requests\UpdateDonorsRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DonorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) 
        {
            $data = Donors::select('*') ; 
            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true); 
        }    
        return view('Dashboard.donors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Donors $donors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donors $donors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonorsRequest $request, Donors $donors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donors $donors)
    {
        //
    }
}
