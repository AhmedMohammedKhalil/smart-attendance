<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;
use App\Models\Department;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Settings extends Component
{
    use WithFileUploads;
    public $name = '', $email = '', $phone = '', $department_id = '', $gender = '',$level = '' , $photo;


    public function mount() {
        $this->student_id = Auth::guard('student')->user()->id;
        $this->name = Auth::guard('student')->user()->name;
        $this->email = Auth::guard('student')->user()->email;
        $this->phone = Auth::guard('student')->user()->phone;
        $this->level = Auth::guard('student')->user()->level;
        $this->gender = auth('student')->user()->gender == 'ذكر' ? 1 : 2 ;
        $this->department_id = auth('student')->user()->department->id;


    }

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


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'department_id' => ['required','gt:0'],
        'gender' => ['required','gt:0'],
        'level' => ['required'],
    ];

    public function updatedPhoto()
    {
            $validatedata = $this->validate(
                ['photo' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function edit() {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,
                [ 'email'   => ['required','email',"unique:students,email,".$this->student_id],
        ]));

        $data = array_merge(
            $validatedata,
            ['gender' => $this->gender == 1 ? 'ذكر': 'انثى']
        );

        if(!$this->photo)
            Student::whereId($this->student_id)->update($data);
        if($this->photo) {
            $photoname = $this->photo->getClientOriginalName();
            Student::whereId($this->student_id)->update(array_merge($data,['photo' => $photoname]));
            $dir = public_path('img/students/'.$this->student_id);
            if(file_exists($dir))
                File::deleteDirectory($dir);
            else
                mkdir($dir);
            $this->photo->storeAs('img/students/'.$this->student_id,$photoname);
            File::deleteDirectory(public_path('livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('student.profile');
    }

    public function render()
    {
        $this->departments = Department::all();

        return view('livewire.student.settings');
    }
}
