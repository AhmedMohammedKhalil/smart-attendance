<?php

namespace App\Http\Livewire\Professor\Lecture;

use App\Models\Lecture;
use Livewire\Component;
use Illuminate\Support\Str;

class Add extends Component
{
    public $title,$qr_url,$qr_code,$subject_id,$data;


    public function mount($subject_id) {
        $this->subject_id = $subject_id;
    }

    protected $rules = [
        'title' => ['required', 'string', 'max:100'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 100 خانة',
    ];


    public function add() {
        $this->data = $this->validate();
        $this->qr_code = Str::random(10);
        $this->qr_url = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=".$this->qr_code;

        $this->data = array_merge(
            $this->data,
            [
                'subject_id' => $this->subject_id,
                'qr_code' => $this->qr_code,
                'qr_url' => $this->qr_url
            ]
        );

        Lecture::create($this->data);
        session()->flash('message', "تم إضافة المحاضرة بنجاح");
        return redirect()->route('professor.subjects.show',['id'=>$this->subject_id]);
    }
    public function render()
    {
        return view('livewire.professor.lecture.add');
    }
}
