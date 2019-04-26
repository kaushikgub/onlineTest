<!DOCTYPE html>
<html>
<head>
    <title>CG Sarkari Exam</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/exam-style.css')}}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}">CG Sarkari Exam</a>
    </nav>
</header>
<section class="container">
    <div class="row mt-5">
        <div class="col-md-4 border border-primary rounded mx-auto my-lg-auto p-3">
            <h5 class="text-center text-success font-italic">Please Enter Your Valid Email and Password</h5>
            @if(Session::has('message'))
                <p class="alert alert-danger">{{ Session::get('message') }}</p>
            @endif
            {{ Form::open(array('url' => 'student/login')) }}
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control btn btn-success" type="submit" value="Submit">
                </div>
            </div>
            {{ Form::close() }}

            <div class="form-row">
                <div class="col mt-3">
                    <p class="text-center"><span class="text-danger">Forgot Password!!</span> Report to <a href="{{url('student/forgot-password')}}">Admin</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>

</footer>
</body>
</html>