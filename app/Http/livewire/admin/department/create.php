<?php

namespace App\Http\Livewire\Admin\Department;

use App\Models\Department;
use Livewire\Component;
class Create extends Component
{
    public $name,$description;

    protected $rules = [
        'name' => ['required', 'string', 'max:100'],
        'description' => ['required', 'string'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
    ];

    public function add() {
        $data = $this->validate();
        Department::create($data);
        session()->flash('message', "تم إضافة القسم بنجاح");
        return redirect()->route('admin.departments.index');
    }

    public function render()
    {
        return view('livewire.admin.department.create');
    }
}
