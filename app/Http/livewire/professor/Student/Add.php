<?php

namespace App\Http\Livewire\Professor\Student;

use App\Models\Student;
use App\Models\Subject;
use Livewire\Component;

class Add extends Component
{
     public $students,$subject_id,$subject,$data,$student_ids,$unenrollment;


    public function mount($subject_id) {
        $this->subject_id = $subject_id;
        $this->subject = Subject::where('id',$this->subject_id)->first();
        $this->students = Student::where('department_id',$this->subject->department_id)->get();
    }

    protected $rules = [
        'student_ids' => ['required'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function add() {
        $this->subject->students()->syncWithoutDetaching($this->student_ids);
        return redirect()->route('professor.subjects.show',['id'=>$this->subject_id]);

    }
    public function render()
    {
        return view('livewire.professor.student.add');
    }
}
