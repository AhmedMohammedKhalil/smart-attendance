<?php

namespace App\Http\Livewire\Professor;

use App\Models\Professor;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='', $photo, $phone='', $address='',$professor_id='';


    public function mount() {
        $this->professor_id = Auth::guard('professor')->user()->id;
        $this->name = Auth::guard('professor')->user()->name;
        $this->email = Auth::guard('professor')->user()->email;
        $this->phone = Auth::guard('professor')->user()->phone;
        $this->address = Auth::guard('professor')->user()->address;

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
    ];


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'address' => ['required', 'string', 'max:255']
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
                [ 'email'   => ['required','email',"unique:professors,email,".$this->professor_id],
        ]));
        if(!$this->photo)
            Professor::whereId($this->professor_id)->update($validatedata);
        if($this->photo) {
            $photoname = $this->photo->getClientOriginalName();
            Professor::whereId($this->professor_id)->update(array_merge($validatedata,['photo' => $photoname]));
            $dir = public_path('img/professors/'.$this->professor_id);
            if(file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->photo->storeAs($dir,$photoname);
            File::deleteDirectory(public_path('uploads/livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('professor.profile');
    }

    public function render()
    {
        return view('livewire.professor.settings');
    }
}