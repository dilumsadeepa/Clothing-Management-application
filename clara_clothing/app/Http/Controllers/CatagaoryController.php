<?php

namespace App\Http\Controllers;

use App\Models\catagaory;
use App\Http\Requests\StorecatagaoryRequest;
use App\Http\Requests\UpdatecatagaoryRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class CatagaoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagory = catagaory::all();
        return view('admin.catagory', compact('catagory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catagoruadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecatagaoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecatagaoryRequest $request)
    {
        $request->validate([
            'catagoryname' => 'required|max:255',
        ]);

        $catagory = new catagaory();

        $catagory->catagoryname = $request->catagoryname;

        $catagory->save();

        return redirect()->route('catagory.index')
                        ->with('success','Catagory added successfully.');
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
        return $catagaory;
        //$cat = DB::select('select * from catagaories where id = ?', [$catagaory]);
        //return view('admin.catagoryedit', compact('cat'));
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
    public function destroy(Request $catagaory)
    {
        return $catagaory;
    }
}
