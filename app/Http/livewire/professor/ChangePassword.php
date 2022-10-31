<?php

namespace App\Http\Livewire\Professor;

use App\Models\Professor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $password='', $confirm_password='',$professor_id='';


    public function mount() {
        $this->professor_id = Auth::guard('professor')->user()->id;
    }


    protected $rules = [

        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'same' => 'لابد ان يكون الباسورد متطابق',
    ];

    public function edit() {

        $validatedata = $this->validate();
        $data =['password' => Hash::make($this->password)];

        Professor::whereId($this->professor_id)->update($data);
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('professor.profile');
    }

    public function render()
    {
        return view('livewire.professor.change-password');
    }
}
