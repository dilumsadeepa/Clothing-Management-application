<?php

namespace App\Http\Controllers;

use App\Models\catagaory;
use App\Http\Requests\StorecatagaoryRequest;
use App\Http\Requests\UpdatecatagaoryRequest;

class CatagaoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecatagaoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecatagaoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catagaory  $catagaory
     * @return \Illuminate\Http\Response
     */
    public function show(catagaory $catagaory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catagaory  $catagaory
     * @return \Illuminate\Http\Response
     */
    public function edit(catagaory $catagaory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecatagaoryRequest  $request
     * @param  \App\Models\catagaory  $catagaory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecatagaoryRequest $request, catagaory $catagaory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catagaory  $catagaory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catagaory $catagaory)
    {
        //
    }
}
