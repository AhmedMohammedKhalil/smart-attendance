<?php

namespace App\Http\Livewire\Student;
use App\Models\Lecture;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class RecordAttendance extends Component
{
    public $lecture,$code;

    public function mount($lec_id)
    {
        $this->lecture = Lecture::where('id',$lec_id)->first();
    }
    protected $rules = [
        'code' => ['required', 'string', 'max:100'],
    ];

    protected $messages = [
        'required' => 'برجاء ادخال كود المحاضرة',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
    ];

    public function record() {
        if($this->lecture->qr_code==$this->code)
        {
            $student_id = Auth::guard('student')->user()->id;
            $this->lecture->attendance()->attach($student_id);
            session()->flash('message', "تم تسجيل حضورك بنجاح");
            return redirect()->route('student.profile');
        }     
        else{
            session()->flash('error', 'كود المحاضرةغير صحيح');
        } 
    }
    public function render()
    {
        return view('livewire.student.record-attendance');
    }
}
