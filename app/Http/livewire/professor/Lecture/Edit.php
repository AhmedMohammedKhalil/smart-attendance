<?php

namespace App\Http\Livewire\Professor\Lecture;

use App\Models\Lecture;
use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{

    public $title,$qr_url,$qr_code,$lecture_id,$lecture,$generate,$data;


    public function mount($lecture_id) {
        $this->lecture_id = $lecture_id;
        $this->lecture = Lecture::where('id',$this->lecture_id)->first();
        $this->title = $this->lecture->title;
    }

    protected $rules = [
        'title' => ['required', 'string', 'max:100'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
    ];


    public function edit() {
        $this->data = $this->validate();
        if($this->generate == true) {
            $this->qr_code = Str::random(10);
            $this->qr_url = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=".$this->qr_code;

            $this->data = array_merge(
                $this->data,
                [
                    'qr_code' => $this->qr_code,
                    'qr_url' => $this->qr_url
                ]
            );
        }
        Lecture::where('id',$this->lecture_id)->update($this->data);
        session()->flash('message', "تم تعديل المحاضرة بنجاح");
        return redirect()->route('professor.subjects.show',['id'=>$this->lecture->subject_id]);
    }
    public function render()
    {
        return view('livewire.professor.lecture.edit');
    }
}
