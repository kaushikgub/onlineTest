@extends('admin-master')

@section('body')
    <div class="table-responsive"  style="overflow-x:auto;display: block !important;">
        <table class="table">
            <thead>
            <tr class="bg-success text-white">
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Address</th>
                <th scope="col">Exam</th>
                <th scope="col">College</th>
                <th scope="col">Year</th>
                <th scope="col">Action</th>
                <th scope="col">Details</th>
            </tr>
            </thead>
            <tbody>

            @foreach($student as $student)
                <tr class="border-bottom border-dark">
                    <th scope="row">{{$student->name}}</th>
                    <td>{{$student->email}}</td>
                    <td>{{$student->mobile_no}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->exam}}</td>
                    <td>{{$student->college_name}}</td>
                    <td>{{$student->passing_year}}</td>
                    <td><a class=" btn btn-danger w-100" href="{{ url('/admin/delete/'.$student->id) }}">Delete</a></td>
                    <td><a class=" btn btn-info w-100" href="{{ url('/admin/details/'.$student->id) }}">Details</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection