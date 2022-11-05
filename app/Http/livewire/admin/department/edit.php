<?php

namespace App\Http\Livewire\Admin\department;

use App\Models\Department;
use Livewire\Component;

class Edit extends Component
{

    public $department,$name,$description;

    public function mount($dept_id) {
        $this->department = Department::whereId($dept_id)->first();
        $this->name = $this->department->name;
        $this->description = $this->department->description;
    }
    protected $rules = [
        'name' => ['required', 'string', 'max:100'],
        'description' => ['required', 'string'],
    ];


    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
    ];

    public function edit() {
        $data = $this->validate();
        Department::whereId($this->department->id)->update($data);
        session()->flash('message', "تم تعديل القسم بنجاح");
        return redirect()->route('admin.departments.index');
    }
    public function render()
    {
        return view('livewire.admin.department.edit');
    }
}
