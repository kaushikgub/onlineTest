@extends('admin-master')

@section('body')
    <p class="text-center text-primary font-italic">Please be connected with this Student. They want to buy your packages :)</p>
    <table class="table">
        <thead>
        <tr class="bg-success text-white">
            <th scope="col">Sl.No.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile No</th>
            <th scope="col">Alternative No</th>
            <th scope="col">Package Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <input type="hidden" value="{{$a=1}}">
        @foreach($package as $package)
            <tr class="border-bottom border-light">
                <th scope="row">{{$a++}}</th>
                <td>{{$package->name}}</td>
                <td>{{$package->email}}</td>
                <td>{{$package->mobile_no}}</td>
                <td>{{$package->alternative_no}}</td>
                <td>{{$package->package_name}}</td>
                <td><a class=" btn btn-danger w-100" href="{{ url('/admin/request-package-delete/'.$package->id) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection