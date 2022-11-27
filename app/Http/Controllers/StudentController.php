<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
     public function showLoginForm() {
        return view('students.login');
    }


    public function showRegisterForm() {
        return view('students.register');
    }


    public function profile() {
        return view('students.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('students.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('students.changePassword',['page_name' => 'تعديل كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('student')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }

    public function showSubjects() {
        return view('students.subjects',['page_name' => 'المواد']);
    }

    public function showSubject(Request $r) {

        $subject = Subject::whereId($r->id)->first();
        $lectures = $subject->lectures()->latest()->get();
        $page_name = $subject->name;
        return view('students.subject',compact('subject','lectures','page_name'));
    }


    public function recordAttendance() {

    }
}
