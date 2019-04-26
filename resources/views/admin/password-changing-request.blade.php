@extends('admin-master')

@section('body')
<div class="row">
    <div class="col-md-8 mx-auto">
        <p class="text-center font-italic">All Request For Password Change</p>
        <table class="table">
            <thead>
            <tr class="bg-success text-white">
                <th class="" scope="col">SL.No</th>
                <th class="" scope="col">Name</th>
                <th class="" scope="col">Email</th>
                <th class="" scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <input type="hidden" value="{{$a=0}}">
            @foreach($r_all as $r_all)
                <tr class="border-bottom border-dark">
                    <th class="" scope="row">{{$a=$a+1}}</th>
                    <th class="" scope="row">{{$r_all->name}}</th>
                    <td class="">{{$r_all->email}}</td>
                    <td class=""><a href="{{url('admin/s-c-p/'.$r_all->id)}}" class="btn btn-danger">Change</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection