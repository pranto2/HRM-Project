<?php

namespace App\Http\Controllers;

use App\Department;
use App\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep = Department::all();

        return view('backend.department.department-list', compact('dep', 'deg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = Input::except(['_token', 'name']);

        $this->validate($request,array(
           'name' => 'required|max:191',
        ));
        $dep = new Department;
        $dep->name = $request->name;
        $dep->save();

        foreach ($inputs as $input => $val) {
            $deg = new Designation;
            $deg->deg_name = $val;
            $deg->dept_id = $dep->id;
            $deg->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Designation::find($id)->delete();
        Department::find($id)->delete();
        return redirect()->back()->withmsg("Removed Successfully");

    }
}
