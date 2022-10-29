<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = staff::all();
        return view('admin.staff', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addstaff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request)
    {

        $request->validate([
            'fullname' => 'required|max:255',
            'tel' => 'required|max:255',
            'address' => 'required|max:255',
            'nic' => 'required|max:255',

        ]);

        $staff= new staff();

        $staff->fullname = $request->staffname;
        $staff->tel = $request->stafftel;
        $staff->address = $request->address;
        $staff->nic = $request->nic;

        $staff->save();

        $affected = DB::update(
            'update users set roll = 2 where id = ?',
            ['Anita']
        );

        return redirect()->route('staff.index')
                        ->with('success','Staff added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('admin.updatestafff',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffRequest  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {


        $staff->update($request->all());

        return redirect()->route('staff.index')
                        ->with('success','Staff updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('suppliers.index')
                        ->with('success','Supplire deleted successfully');
    }
}
