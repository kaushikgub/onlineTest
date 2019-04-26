<!DOCTYPE html>
<html>
<head>
    <title>CG Sarkari Exam</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/exam-style.css">
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
            <h4 class="text-center text-info font-italic"><u>Admin Login Page</u></h4>
            <h5 class="text-center text-success font-italic">Please Enter Your Valid Email and Password</h5>
            {{ Form::open(array('url' => 'admin/login')) }}
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
        </div>
    </div>
</section>

<footer>

</footer>
</body>
</html>