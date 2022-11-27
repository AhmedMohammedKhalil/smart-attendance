@extends('professors.layout')
@section('section')
    <livewire:professor.lecture.edit :lecture_id="$lecture_id" />
@endsection
