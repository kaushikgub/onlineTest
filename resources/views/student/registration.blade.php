<!DOCTYPE html>
<html>
<head>
    <title>CG Sarkari Exam</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/registration-style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="{{url('/')}}">CG Sarkari Exam</a>
        </nav>
    </header>

    <section class="container">
        <div>
            <h3 class="text-center mb-3 mt-3 text-primary font-italic"><u>Registration Form</u></h3>
        </div>
        {{ Form::open(array('url' => 'student/store','onsubmit' => 'return validation()','enctype'=>"multipart/form-data",'files' => true)) }}

        <div class="row">
            <div class="col">
                <div class="row form-group border p-2 rounded bg-info">
                    <div class="col-sm-2">
                        <label class="col-form-label">Exam</label>
                    </div>
                    <div class="col-sm-10">
                        <select id="exam" name="exam" class="form-control" required>
                            <option value="">Plaease Select Exam</option>
                            <option value="CGPSC-CIVIL JUDGE">CGPSC-CIVIL JUDGE</option>
                            <option value="CGPSC-CMO">CGPSC-CMO</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row form-group border p-2 rounded bg-info">
                    <div class="col-sm-2">
                        <label class="col-form-label">Strem</label>
                    </div>
                    <div class="col-sm-10">
                        <input id="strem" type="text" name="strem" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row border rounded p-2 border-info">
            <div class="col mr-1">
                <h5>Personal Details</h5>
                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Name*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="name" type="text" name="name" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Father`s Name*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="father-name" type="text" name="father-name" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Date of Birth*</label>
                    </div>
                    <div class="col-sm">
                        <select name="day" class="form-control" required>
                            <option id="day" value="">D:</option>
                            @for($i=1;$i<32;$i++)
                                <option>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="month" class="form-control" required>
                            <option id="month" value="">M:</option>
                            @for($i=1;$i<13;$i++)
                                <option>{{$i}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <select name="year" class="form-control" required>
                            <option id="year" value="">Y:</option>
                            @for($i=1975;$i<2020;$i++)
                                <option>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Mobile No* +91</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="mobile" type="text" name="mobile" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Alternate No +91</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="alternate-no" type="text" name="alternate-no" class="form-control">
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Email*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="email" type="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Re-Enter Email*</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="email" name="re-email" class="form-control" id="c-email" required>
                        <span class="text-danger" id="s-email"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h5>Address</h5>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Address Line 1*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="a-line" type="text" name="a-line" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">State*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="state" type="text" name="state" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">City*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="city" type="text" name="city" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Pin Code*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="pin-code" type="number" name="pin-code" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="col ml-1">
                <h5>Educational Details</h5>
                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Qualification*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="qualification" type="text" name="qualification" class="form-control" required>
                    </div>
                </div>
                
                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Stream*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="stream" type="text" name="stream" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">College Name*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="college-name" type="text" name="college-name" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">City*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="city" type="text" name="c-city" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Passing Year*</label>
                    </div>
                    <div class="col-sm-8">
                        <select name="passing-year" class="form-control"  required>
                            <option id="passing-year" value="">Select Year*</option>
                            @for($i=1975;$i<2020;$i++)
                                <option>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">% of Marks*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="city" type="number" name="mark" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Photo*</label>
                    </div>
                    <div class="col-sm-8">
                        <input onchange="validation()" id="image" type="file" name="photo" class="form-control" accept="image/x-png,image/gif,image/jpeg" required>
                        <span id="image-type" class="text-danger"></span>
                    </div>
                </div>

                <div class="row form-group border p-3 rounded bg-danger">
                    <div class="col-sm-12">
                        <h4 class="text-light text-center">Terms And Conditions</h4>
                    </div>
                </div>


                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-4">
                        <label class="col-form-label">Password*</label>
                    </div>
                    <div class="col-sm-8">
                        <input id="password" type="password" name="pass" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group border p-2 rounded bg-light">
                    <div class="col-sm-12 font-italic">
                        <input type="checkbox" name="check" value="check" required> I accept to all the terms & conditions.
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-12">
                        <input class="btn btn-success" style="width: 100%" type="submit" value="Submit">
                    </div>
                </div>

            </div>
        </div>

        {{ Form::close() }}
    </section>

    <footer>
    </footer>

    <script>
        function validation() {
           // alert('ok?');
            var img = document.getElementById('image').value;
            var Extension = img.substring(img.lastIndexOf('.')+1).toLowerCase();

            if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                || Extension == "jpeg" || Extension == "jpg"){
                document.getElementById('image-type').innerHTML="";

            }
            else {
                document.getElementById('image-type').innerHTML="Please Upload Image";
                return false;
            }

            var e1 = document.getElementById('email').value.toLowerCase();
            var e2 = document.getElementById('c-email').value.toLowerCase();
            if (e1==e2){
                document.getElementById('s-email').innerHTML="";
            }
            else {
                document.getElementById('s-email').innerHTML="Email does not same";
                return false;
            }
        }
    </script>
</body>
</html>