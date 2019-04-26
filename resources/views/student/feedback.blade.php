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
<section class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    <p class="bg-info p-1">Candidate Feedback Form</p>
                    <div class="container">
                        <p class="">Dear,</p>
                        <p>We solicit your valuable feedback to understand your views and your experience on the digital examination.<br>Your feedback will enable us to improve the overall candidate experience.</p>
                        <p>For each question listed below, request you to specify the performance rating as per scale bellow.</p>
                    </div>
                </div>
            </div>
            <div class="row container text-center bg-light">
                <div class="col">
                <p><span class="btn btn-success rounded-circle ml-5 text-center">4</span> Exceeded expectations</p>
                </div>
                <div class="col">
                <p><span class="btn btn-warning rounded-circle ml-5 text-center">3</span> Failed to meet expectations</p>
                </div>
                <div class="col">
                <p><span class="btn btn-primary rounded-circle ml-5 text-center">2</span> Improvement needed</p>
                </div>
                <div class="col">
                <p><span class="btn btn-danger rounded-circle ml-5 text-center">1</span> Exceeded expectations</p>
                </div>
            </div>
            <div class="row container">
                <div class="col">
                    <table class="table">
                        <thead class="bg-primary text-light">
                            <th class="w-25">S.No</th>
                            <th class="w-50">Questions</th>
                            <th class="w-25">Response</th>
                        </thead>
                        <tbody>
                        {{ Form::open(array('url' => 'student/feedback')) }}
                                <tr>
                                    <td class="w-25">01.</td>
                                    <td class="w-50">How was your experience with the exam support provide including usefullness of the mock test, access to exam related information, helpline support, etc?</td>
                                    <td class="w-25">
                                        <fieldset id="group1" >
                                            <label class="radio-inline mr-1"><input value="4" type="radio" name="group1" required>4</label>
                                            <label class="radio-inline mr-1"><input value="3" type="radio" name="group1">3</label>
                                            <label class="radio-inline mr-1"><input value="2" type="radio" name="group1">2</label>
                                            <label class="radio-inline mr-1"><input value="1" type="radio" name="group1">1</label>
                                        </fieldset>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-25">02.</td>
                                    <td class="w-50">How was your experience in giving the digital exam on aspects such as navigating on the candidate consol, ease of using candidate console, etc?</td>
                                    <td class="w-25">
                                        <fieldset id="group2">
                                            <label class="radio-inline mr-1"><input value="4" type="radio" name="group2" required>4</label>
                                            <label class="radio-inline mr-1"><input value="3" type="radio" name="group2">3</label>
                                            <label class="radio-inline mr-1"><input value="2" type="radio" name="group2">2</label>
                                            <label class="radio-inline mr-1"><input value="1" type="radio" name="group2">1</label>
                                        </fieldset>
                                </td>
                                </tr>
                                <tr>
                                    <td class="w-25">03.</td>
                                    <td class="w-50">How was your experience as the following aspects of the test-center.</td>
                                    <td class="w-25"></td>
                                </tr>

                                <tr>
                                    <td class="w-25"></td>
                                    <td class="w-50">3.1 Ease of Locating the test Center.</td>
                                    <td class="w-25">
                                        <fieldset id="group3">
                                            <label class="radio-inline mr-1"><input value="4" type="radio" name="group3" required>4</label>
                                            <label class="radio-inline mr-1"><input value="3" type="radio" name="group3">3</label>
                                            <label class="radio-inline mr-1"><input value="2" type="radio" name="group3">2</label>
                                            <label class="radio-inline mr-1"><input value="1" type="radio" name="group3">1</label>
                                        </fieldset>
                                </td>
                                </tr>

                                <tr>
                                    <td class="w-25"></td>
                                    <td class="w-50">3.2 Ease of finding your designated exam seat through clear notice board instructions, directional arrows, staff guidance, etc?</td>
                                    <td class="w-25">
                                        <fieldset id="group4">
                                            <label class="radio-inline mr-1"><input value="4" type="radio" name="group4" required>4</label>
                                            <label class="radio-inline mr-1"><input value="3" type="radio" name="group4">3</label>
                                            <label class="radio-inline mr-1"><input value="2" type="radio" name="group4">2</label>
                                            <label class="radio-inline mr-1"><input value="1" type="radio" name="group4">1</label>
                                        </fieldset>
                                </td>
                                </tr>

                                <tr>
                                    <td class="w-25"></td>
                                    <td class="w-50">3.3 Seating arrangement</td>
                                    <td class="w-25">
                                        <fieldset id="group5">
                                            <label class="radio-inline mr-1"><input value="4" type="radio" name="group5" required>4</label>
                                            <label class="radio-inline mr-1"><input value="3" type="radio" name="group5">3</label>
                                            <label class="radio-inline mr-1"><input value="2" type="radio" name="group5">2</label>
                                            <label class="radio-inline mr-1"><input value="1" type="radio" name="group5">1</label>
                                        </fieldset>
                                </td>
                                </tr>

                                <tr>
                                    <td class="w-25"></td>
                                    <td class="w-50">3.4 Availability of basic facilities like water dispenser, rest room, etc?</td>
                                    <td class="w-25">
                                        <fieldset id="group6">
                                            <label class="radio-inline mr-1"><input value="4" type="radio" name="group6" required>4</label>
                                            <label class="radio-inline mr-1"><input value="3" type="radio" name="group6">3</label>
                                            <label class="radio-inline mr-1"><input value="2" type="radio" name="group6">2</label>
                                            <label class="radio-inline mr-1"><input value="1" type="radio" name="group6">1</label>
                                        </fieldset>
                                </td>
                                </tr>

                                <tr>
                                    <td class="w-25"></td>
                                    <td class="w-50">3.5 Exam node/ desktop quality</td>
                                    <td class="w-25">
                                     <fieldset id="group7">
                                            <label class="radio-inline mr-1"><input value="4" type="radio" name="group7" required>4</label>
                                            <label class="radio-inline mr-1"><input value="3" type="radio" name="group7">3</label>
                                            <label class="radio-inline mr-1"><input value="2" type="radio" name="group7">2</label>
                                            <label class="radio-inline mr-1"><input value="1" type="radio" name="group7">1</label>
                                        </fieldset>
                                </td>
                                </tr>

                                <tr>
                                    <td class="w-25"></td>
                                    <td class="w-50">3.6 Behavior of staff, their knowledge and competency of conducting the exam.</td>
                                    <td class="w-25">
                                        <fieldset id="group8">
                                            <label class="radio-inline mr-1"><input value="4" type="radio" name="group8" required>4</label>
                                            <label class="radio-inline mr-1"><input value="3" type="radio" name="group8">3</label>
                                            <label class="radio-inline mr-1"><input value="2" type="radio" name="group8">2</label>
                                            <label class="radio-inline mr-1"><input value="1" type="radio" name="group8">1</label>
                                        </fieldset>
                                </td>
                                </tr>

                                <tr>
                                    <td class="w-25">4</td>
                                    <td class="w-50">How was the overall experience of taking up a digital exam?</td>
                                    <td class="w-25">
                                        {{--<fieldset id="group9">--}}
                                            {{--<label class="radio-inline mr-1"><input value="4" type="radio" name="group9" required>4</label>--}}
                                            {{--<label class="radio-inline mr-1"><input value="3" type="radio" name="group9">3</label>--}}
                                            {{--<label class="radio-inline mr-1"><input value="2" type="radio" name="group9">2</label>--}}
                                            {{--<label class="radio-inline mr-1"><input value="1" type="radio" name="group9">1</label>--}}
                                        {{--</fieldset>--}}
                                       <textarea name="group9" placeholder="Experience"></textarea>
                                </td>
                                </tr>

                                <tr>
                                    <td class="w-25"></td>
                                    <td class="w-50"><input style="width: 100%" type="submit" value="Submit" class="btn btn-success"></td>
                                    <td class="w-25">
                                        
                                </td>
                                </tr>

                        {{ Form::close() }}
                            
                        </tbody>
                    </table>
                </div>
            </div>
            

            
        </div>
        <div class="col-md-2 mt-lg-5 text-center">
            <img src="{{asset($student->photo_link)}}">
        </div>
    </div>
</section>
<footer>

</footer>
</body>
</html>
