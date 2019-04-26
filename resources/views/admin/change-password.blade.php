@extends('admin-master')

@section('body')
    <div class="row mt-5">
        <div class="col-md-4 border border-primary rounded mx-auto my-lg-auto p-3">
            <h5 class="text-center text-success font-italic">Password Change for Student</h5>
            <span id="s" class="text-danger"></span>
            {{ Form::open(array('url' => 'admin/change-password','onsubmit' => 'return validation()')) }}
            <div class="form-row">
                <div class="col mt-3">
                    <input  class="form-control" type="email" name="email" placeholder="Enter Email">
                </div>
            </div>


            <div class="form-row">
                <div class="col mt-3">
                    <input id="password" class="form-control" type="password" name="password" placeholder="Enter Password" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input id="confirm_password" class="form-control" type="password" name="c-password" placeholder="Enter Conform Password" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control btn btn-success" type="submit" value="Submit">
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>

    <script>
        function validation() {
            var p = document.getElementById('password').value;
            var p1 = document.getElementById('confirm_password').value;
            if (p!=p1) {
                document.getElementById('s').innerHTML="Enter The Same Password";
                return false;
            }
        }
    </script>
@endsection