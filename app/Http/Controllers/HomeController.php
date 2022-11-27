<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Professor;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $professors = Professor::all();
        return view('home',compact('professors'));
    }

    public function showProfessor(Request $r)
    {
        $professor = Professor::whereId($r->id)->first();
        return view('professor_details',compact('professor'));
    }

    public function departments()
    {
        $departments = Department::all();
        return view('all-departments',compact('departments'));
    }

    public function departmentSubject(Request $r)
    {
        $subject = Subject::whereId($r->id)->first();
        $lectures = $subject->lectures()->latest()->get();
        return view('department-subject',compact('subject','lectures'));
    }

     public function departmentProfessor(Request $r)
    {
        $professor = Professor::whereId($r->id)->first();
        return view('department-professor',compact('professor'));
    }

    public function subjects()
    {
        $subjects = Subject::where('approval','موافقة')->get();
        return view('all-subjects',compact('subjects'));
    }

    public function showSubject(Request $r)
    {
        $subject = Subject::whereId($r->id)->first();
        $lectures = $subject->lectures()->latest()->get();
        return view('subject-details',compact('subject','lectures'));
    }

    public function showDepartment(Request $r)
    {
        $department = Department::whereId($r->id)->first();
        return view('department-details',compact('department'));
    }

    public function search() {
        return view('search');
    }
}
