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
<section class="container mt-lg-5">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-3">
                    Chose Your Default Language
                </div>
                <div class="col-md-3">
                    <select>
                        <option>--Select--</option>
                        <option>English</option>
                        <option>Hindi</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
            <input onclick="validation()" class="form-check-input" type="checkbox" id="gridCheck1" value="1" required>
            <span class="text-danger" id="s"></span>
            <label class="form-check-label" for="gridCheck1">
                I have read and understood the instructions. All computer hardware allotted to me are in proper
                working condition. I declare that I am not in possession of/not wearing/not carrying any prohibited
                gadget like mobile phone, bluetooth devices etc./any prohibited material with me into examination hall.
                I agree that in case of not adhering to the instructions, I shall be liable to be debarred from this Test and/
                or disciplinary action, which may include ban from future Test/Examination.
            </label>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <a class="btn btn-secondary float-right w-50" href="/student/instruction3">< Previous</a>
        </div>
        <div class="col-md-6">
            <div id="d">
                <p id="n-c" onclick="checked()" class="btn btn-default float-left w-50" href="/student/questions">I am ready to begin</p>
            </div>
        </div>
    </div>
</section>

<footer>

</footer>

<script>
    function validation() {

        if (document.getElementById('gridCheck1').checked) {
            document.getElementById('d').innerHTML="<a class=\"btn btn-info float-left w-50\" href=\"/student/questions\">I am ready to begin</a>";
        }
        else {
            document.getElementById('d').innerHTML="<p id=\"n-c\" onclick=\"checked()\" class=\"btn btn-default float-left w-50\" href=\"/\">I am ready to begin</p>";
            return false;
        }
    }
    function checked() {
        document.getElementById('d').innerHTML="<p class=\"text-danger float-left \" href=\"/student/questions\">Please read the conditions and Mark the CheckBox</p>";
    }
</script>
</body>
</html>