<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *   ['approval', '=',"تم الموافقة"]
     */
    public function index()
    {
        $professor_id = Auth::guard('professor')->user()->id;
        $subjects = Subject::where([
            ['professor_id', '=', $professor_id],
                ])->get();
       // dd($subjects);
        $page_name = 'المواد';
        return view('professors.subjects.index', compact('subjects', 'page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'إضافة مادة';
        return view('professors.subjects.create', compact('page_name'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Request $r)
    {
        $subject = Subject::whereId($r->id)->first();
        $page_name = 'عرض المادة';
        return view('professors.subjects.show', compact('subject', 'page_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $r)
    {
        $subject = Subject::whereId($r->id)->first();
        $page_name = 'تعديل المادة';
        return view('professors.subjects.edit', compact('subject', 'page_name'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $department
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $r)
    {
        Subject::destroy($r->id);
        return redirect()->route('professors.subjects.index');
    }

    public function getAll()
    {
        $need_approval_subjects = Subject::where([
            ['approval', '=', "لم يتم الرد"],
                ])->get();

        $all_subjects = Subject::where([
                    ['approval', '!=', "لم يتم الرد"],
                        ])->get();

        $page_name = 'جميع المواد';
        return view('admins.subjects.getAll', compact('need_approval_subjects','all_subjects', 'page_name'));
    }

    public function accept(Request $r)
    {
        $subject = Subject::whereId($r->id)->first();
        $subject->approval="موافقة";
        $subject->update();
        return redirect()->route('admin.subjects.getAll');
    }

    public function createStudent() {

    }


    public function deleteStudent() {

    }
    public function reject(Request $r)
    {
        $subject = Subject::whereId($r->id)->first();
        $subject->approval="مرفوضة";
        $subject->update();
        return redirect()->route('admin.subjects.getAll');
    }

}
