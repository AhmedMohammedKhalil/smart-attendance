<?php

namespace App\Http\Controllers;

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


    public function recordAttendance() {

    }
}
