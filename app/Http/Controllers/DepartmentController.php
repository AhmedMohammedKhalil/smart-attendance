<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=Department::All();
        $page_name='جميع الاقسام';
        return view('admins.departments.index',compact('departments','page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'إضافة قسم';
        return view('admins.departments.create',compact('page_name'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $r)
    {
        $department = Department::whereId($r->id)->first();
        $page_name = 'تعديل القسم';
        return view('admins.departments.edit',compact('department','page_name'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $r)
    {
        Department::destroy($r->id);
        return redirect()->route('admin.departments.index');
    }
}
