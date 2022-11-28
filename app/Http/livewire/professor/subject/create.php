<?php

namespace App\Http\Livewire\Professor\Subject;

use App\Models\Subject   ;
use Livewire\Component;
class Create extends Component
{
    public $name,$content;

    protected $rules = [
        'name' => ['required', 'string', 'max:100'],
        'content' => ['required', 'string'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
    ];

    public function add() {
        $data = $this->validate();
        $data = array_merge(
            $data,
            ['professor_id' => auth('professor')->user()->id,
            'department_id' => auth('professor')->user()->department_id]
        );
        Subject::create($data);
        session()->flash('message', "تم إضافة المادة بنجاح");
        return redirect()->route('professor.subjects.index');
    }

    public function render()
    {
        return view('livewire.professor.subject.create');
    }
}
