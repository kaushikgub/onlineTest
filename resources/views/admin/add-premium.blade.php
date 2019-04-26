@extends('admin-master')

@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center">Add Student as Premium</h3>
        </div>
    </div>
    <div class="container">
        {{ Form::open(array('url' => 'admin/add-premium')) }}
            <div class="row mt-5">
                <div class="col-md-6 mx-auto">
                    <div class="form-group">
                        <label class="form-label-group">Select Package</label>
                        <select name="package-id" class="form-control" required>
                            <option value="">Select Package</option>
                            @foreach($package as $package)
                                <option value="{{$package->id}}">{{$package->name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 mx-auto">
                    <div class="form-group">
                        <label class="form-label-group">Select Student</label>
                        <select name="student-id" class="form-control" required>
                            <option value="">Select Student</option>
                            @foreach($student as $student)
                                <option value="{{$student->id}}">{{$student->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6 mx-auto">
                    <input class="btn btn-success w-100" type="submit" value="Add Student to this Package">
                </div>
            </div>
        {{ Form::close() }}
    </div>

@endsection