@extends('admin-master')

@section('body')

    <h2 class="text-center text-success">Questions List</h2>
    <a class="btn btn-warning text-success" href="{{url('admin/delete-user-questions')}}">Delete all Questions</a>
    @foreach($questions as $questions)
    <div class="row mt-5 border rounded border-info">
        <div class="col">
            <p>Mobile No: {{$questions->mobile_no}}</p>
            <p>Course: {{$questions->course_name}}</p>
            <p>Question: {{$questions->question}}</p>
        </div>
    </div>

    @endforeach

@endsection