<?php

namespace App\Http\Livewire\Professor\Subject;

use App\Models\Department;
use App\Models\Subject;
use Livewire\Component;

class Edit extends Component
{

    public $subject,$name,$content;

    public function mount($subj_id) {
        $this->subject = Subject::whereId($subj_id)->first();
        $this->name = $this->subject->name;
        $this->content = $this->subject->content;
    }
    protected $rules = [
        'name' => ['required', 'string', 'max:100'],
        'content' => ['required', 'string'],
    ];


    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
    ];

    public function edit() {
        $data = $this->validate();
        Subject::whereId($this->subject->id)->update($data);
        session()->flash('message', "تم تعديل المادة بنجاح");
        return redirect()->route('professor.subjects.index');
    }
    public function render()
    {
        return view('livewire.professor.subject.edit');
    }
}
