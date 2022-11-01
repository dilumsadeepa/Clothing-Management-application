<?php

namespace App\Http\Controllers;

use App\Models\Maincatagories;
use Illuminate\Http\Request;

class MaincatagoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maincatagories = Maincatagories::latest();
    
        return view('admin.maincatagoy',compact('maincatagories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.maincatagoryadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        
        if($request->hasFile('catagory_img')){
            $formFields['catagory_img'] = $request->file('catagory_img')->store('catagory_images' ,'public/images');
        }
    
        Maincatagories::create($request->all());
     
        return redirect()->route('maincatagories.index')
                        ->with('success','Main Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maincatagories  $maincatagories
     * @return \Illuminate\Http\Response
     */
    public function show(Maincatagories $maincatagories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maincatagories  $maincatagories
     * @return \Illuminate\Http\Response
     */
    public function edit(Maincatagories $maincatagories)
    {
        return view('maincatagories.edit',compact('maincatagories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maincatagories  $maincatagories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maincatagories $maincatagories)
    {
        $request->validate([
            'name' => 'required',
        ]);

        
        if($request->hasFile('catagory_img')){
            $formFields['catagory_img'] = $request->file('catagory_img')->store('catagory_images' ,'public/images');
        }
    
        $maincatagories::update($request->all());
     
        return redirect()->route('maincatagories.index')
                        ->with('success','Main Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maincatagories  $maincatagories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maincatagories $maincatagories)
    {
        $maincatagories->delete();
    
        return redirect()->route('maincatagories.index')
                        ->with('success','Category deleted Successfully');
    }
}
