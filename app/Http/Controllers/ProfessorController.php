<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{
     public function showLoginForm() {
        return view('professors.login');
    }


    public function showRegisterForm() {
        return view('professors.register');
    }


    public function profile() {
        return view('professors.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('professors.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('professors.changePassword',['page_name' => 'تعديل كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('professor')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
