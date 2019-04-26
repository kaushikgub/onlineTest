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
            <h5 class="text-center text-success font-italic">Please Enter Your Email Name</h5>
            <p class="text-center mt-3"><span class="text-danger">Note:</span> please use the registered email</p>
            @if(Session::has('message'))
                <p class="alert alert-danger text-center">{{ Session::get('message') }}</p>
            @endif
            {{ Form::open(array('url' => 'student/forgot-pass')) }}
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control" type="text" name="name" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control btn btn-warning" type="submit" value="Report to Admin">
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</section>

<footer>

</footer>
</body>
</html>