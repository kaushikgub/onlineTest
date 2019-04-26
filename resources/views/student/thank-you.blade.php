<!DOCTYPE html>
<html>
<head>
    <title>CG Sarkari Exam</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/instruction-style.css')}}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}">CG Sarkari Exam</a>
    </nav>
</header>
<section>
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col mx-auto text-center">
                <p class="text-success">Thank You!!</p>
                <p class="text-info font-italic">You have successfully completed the exam</p>
                <p class="text-info font-italic">Please Click the bellow button to Exit</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mx-auto text-center">
                <a class="btn btn-danger w-100" href="{{asset('/student/test')}}">Exit</a>
            </div>
        </div>
    </div>
</section>
<footer>


</footer>
</body>
</html>
