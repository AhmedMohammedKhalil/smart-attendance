<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='', $photo,$admin_id='';


    public function mount() {
        $this->admin_id = auth('admin')->user()->id;
        $this->name = auth('admin')->user()->name;
        $this->email = auth('admin')->user()->email;
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا الإيميل غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'unique' => 'هذا الايميل مسجل فى الموقع',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا'
    ];

    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];


    public function updatedPhoto()
    {
            $validatedata = $this->validate(
                ['photo' => ['mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function edit() {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,
                [ 'email'   => ['required','email',"unique:admins,email,".$this->admin_id],
        ]));
        if(!$this->photo)
            Admin::whereId($this->admin_id)->update($validatedata);
        if($this->photo) {
            $photoname = $this->photo->getClientOriginalName();
            Admin::whereId($this->admin_id)->update(array_merge($validatedata,['photo' => $photoname]));
            $dir = public_path('img/admins/'.$this->admin_id);
            if(file_exists($dir))
                File::deleteDirectory($dir);
            else
                mkdir($dir);

            $this->photo->storeAs('img/admins/'.$this->admin_id,$photoname);
            File::deleteDirectory(public_path('livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('admin.profile');
    }

    public function render()
    {
        return view('livewire.admin.settings');
    }
}
