@extends('professors.layout')
@section('section')
    <livewire:professor.lecture.add :subject_id="$subject_id" />
@endsection
