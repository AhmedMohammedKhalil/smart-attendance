<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{




    public function create(Request $r)
    {
        $subject_id = $r->id;
        $page_name = 'إضافة محاضرة';
        return view('professors.lectures.create', compact('subject_id', 'page_name'));
    }




    public function showAttendance(Request $r)
    {
        $lecture_id = $r->id;
    }



    public function edit(Request $r)
    {
        $lecture_id = $r->id;
        $page_name = 'تعديل محاضرة';
        return view('professors.lectures.edit', compact('lecture_id', 'page_name'));
    }


    public function close(Request $r)
    {
        $lecture = Lecture::whereId($r->id)->first();
        $lecture->update(['status'=>'انتهت']);
        return redirect()->route('professor.subjects.show',['id'=>$lecture->subject_id]);
    }


    public function delete(Request $r) {
        $lecture = Lecture::whereId($r->id)->first();
        $subject_id = $lecture->subject_id;
        if(count($lecture->attendance) > 0) {
            $lecture->attendance()->detach();
        }
        $lecture->delete();
        return redirect()->route('professor.subjects.show',['id'=>$subject_id]);

    }

}
