<?php

namespace App\Http\Livewire\Professor;

use App\Models\Department;
use App\Models\Professor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $confirm_password, $phone, $department_id, $gender, $departments;


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'email'   => 'required|email|unique:professors,email',
        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],
        'department_id' => ['required','gt:0'],
        'gender' => ['required','gt:0'],


    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'same' => 'لابد ان يكون الباسورد متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'gender.gt' => 'لابد ان يتم الاختيار النوع',
        'department_id.gt' => 'لابد ان يتم الاختيار القسم'
    ];


    public function register(){

        $validatedData = $this->validate();


        $data = array_merge(
            $validatedData,
            ['password' => Hash::make($this->password) , 'gender' => $this->gender == 1 ? 'ذكر': 'انثى']
        );
        Professor::create($data);
        return redirect()->route('professor.login');
    }

    public function render()
    {
        $this->departments = Department::all();
        return view('livewire.professor.register');
    }
}
