<!DOCTYPE html>
<html>
<head>
    <title>CG Sarkari Exam</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/exam-style.css')}}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}">CG Sarkari Exam</a>
    </nav>
</header>

<section class="container">
    <div class="row mt-3">
        <div class="col-md-8">
            <h6 class="text-primary">Test Name:</h6>
            <h2 class="text-info">{{Session::get('testName')}}</h2>
            <p class="text-danger">Contact invigilator if the name and photograph<br> is not yours </p>
        </div>
        <div class="col-md-2">
            <h6 class="text-success">Candidate Name:</h6>
            <h2 class="text-info font-italic">{{$student->name}}</h2>
            {{--<h6 class="text-dark">Subject: Mock Exam</h6>--}}
        </div>
        <div class="col-md-2">
            <img style="height: 100px;width: 100px" src="{{asset($student->photo_link)}}">
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-md-4 mx-auto border border-primary rounded p-3 mt-lg-5">
            {{ Form::open(array('url' => 'student/submitConformLogin')) }}
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control" name="email" type="email" placeholder="Enter Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col mt-3">
                    <input class="form-control" name="password" type="password" placeholder="Enter Password" required>
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
</section>

<footer>

</footer>
</body>
</html>