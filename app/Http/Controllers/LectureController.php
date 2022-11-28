<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Student;
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
        $page_name = 'عرض الغياب والحضور';
        $lecture=Lecture::whereId($r->id)->first();
        $student_attended=$lecture->attendance()->get();
        $ids = [];
        foreach($student_attended as $s) {
            array_push($ids,$s->id);
        }
        $all_students = Student::where('department_id',$lecture->subject->department_id)->get();
        $student_absences = $all_students->whereNotIn('id',$ids);
        return view('professors.lectures.showAttendance',compact('page_name','student_attended','student_absences'));
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
