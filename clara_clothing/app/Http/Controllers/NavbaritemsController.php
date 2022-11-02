<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\catagaory;
use App\Models\Navbaritems;
use Illuminate\Http\Request;
use App\Models\Maincatagories;
use Illuminate\Support\Facades\DB;

class NavbaritemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $maincats = Maincatagories::all();
        $cat = catagaory::all();
        $maincatagory = DB::select("select distinct main_catagoryname from catagaories");
        return view('components.layout',compact('product','maincats','cat','maincatagory'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navbaritems  $navbaritems
     * @return \Illuminate\Http\Response
     */
    public function show(Navbaritems $navbaritems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbaritems  $navbaritems
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbaritems $navbaritems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbaritems  $navbaritems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbaritems $navbaritems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbaritems  $navbaritems
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbaritems $navbaritems)
    {
        //
    }
}
