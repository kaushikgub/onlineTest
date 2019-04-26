<!DOCTYPE html>
<html>

<head>
    <title>CG Sarkari Exam</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/question-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}">CG Sarkari Exam</a>
    </nav>

    <div class="row c-row mr-0 pb-0 pt-2">
        <div class="col-md-6 text-left pb-0">
            <p>CG Sarkari Exam Online Assessment new</p>
        </div>

        <div class="col-md-6 text-right pb-0">
            <i class="fa fa-hospital-symbol"> Question Paper</i>
            <i class="fa fa-info-circle"> Instruction</i>
        </div>
    </div>

</header>

<section class="container">
    <div class="row mt-2 ml-1 mr-1">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-info-circle btn btn-info"> group 1</i>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <p>section</p>
                </div>
                <div class="col-md-6 text-right">
                    {{--<p>{{session()->get('duration')}}</p><br>--}}
                    {{--<p>{{session()->get('end_time')}}</p><br>--}}
                    {{--<p>{{session()->get('start_time')}}</p><br>--}}
                    <p id="timer"></p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-info-circle btn btn-primary"> Questions</i>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 text-danger">
                    <p>Questions Type: Multiple Choice Questions</p>
                </div>
                <div class="col-md-6 text-right">
                    <p>Marked for correct ans: 2 ; Negative Marks: -2/3</p>
                </div>
            </div>
            <div class="row mt-2 navbar navbar-dark bg-primary">
                <div class="col-md-10 text-right">
                    <label class="text-white">View In:</label>
                    <select id="mySelect" class="">
                        <option value="english">English</option>
                        <option value="hindi">hindi</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button id="toggle">Hide/Show</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h6 id="q_number">Question number 1</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p id="hq"></p>
                </div>
            </div>
            <div class="row">
                {{--{{session()->get('studentId')}}--}}
                <div id="question" class="col-md-12">
                    <input id="option_1" type="radio" name="option" value="" >
                    <p class="d-inline" id="op1"></p><br>
                    <input id="option_2" type="radio" name="option" value="">
                    <p class="d-inline" id="op2"></p><br>
                    <input id="option_3" type="radio" name="option" value="">
                    <p class="d-inline" id="op3"></p><br>
                    <input id="option_4" type="radio" name="option" value="">
                    <p class="d-inline" id="op4"></p><br>

                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 text-right">

                </div>
            </div>

            <div class="row ml-1 mr-1 mt-4 text-center">
                <div class="col-md-3">
                    <button id="review" class="btn btn-warning mr-5" value="">Marked for review and next</button>
                </div>

                <div class="col-md-3">
                    <button class="btn btn-info" id="skip" type="button" value="a">skip & Next</button>
                </div>

                <div class="col-md-3">
                    <button class="btn btn-success" id="sub" type="button" value="a">Save & Next</button>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-info" href="{{url('student/submit-marks')}}">Submit</a>
                </div>
            </div>
        </div>
        <div id="target" class="col-md-3 c-row2">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('image/user.png')}}">
                </div>
                <div class="col-md-6">
                    <p>John Smith</p>
                </div>
            </div>
            <div class="row m-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <p id="answer" class="btn btn-success text-right">0</p>
                            </div>
                            <div class="col-md-7">
                                <p class=""> Answered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <p id="not_answer" class="btn btn-danger">0</p>
                            </div>
                            <div class="col-md-7">
                                <p class=""> Not Answered</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <p id="not_answer" class="btn btn-secondary text-right">1</p>
                            </div>
                            <div class="col-md-7">
                                <p class=""> Not Visited</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <p id="mark_review" class="btn btn-warning">5</p>
                            </div>
                            <div class="col-md-7">
                                <p class=""> Marked For Review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h6 class="navbar navbar-dark bg-primary">Questions</h6>
                    <p>Chose a Question</p>
                </div>
            </div>
            <div class="row m-1">
                <div id="button-nav" class="row">

                    @foreach($q_en as $en => $q)
                        <div class="col-md-3">
                            {{--<p class="btn btn-info">{{$q->test_id}}</p>--}}
                            {{--<p class="btn btn-info">{{$en+1}}</p>--}}
                            <button id="btn" class="btn btn-secondary mr-2" type="button" value="{{$en}}">{{$en+1}}</button>
                            <p></p>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
    </div>
    {{--<div class="row ml-1 mr-1 mt-4">--}}
        {{--<div class="col">--}}
            {{--<p class="btn btn-warning mr-5">Marked for review and next</p>--}}
        {{--</div>--}}

        {{--<div class="col">--}}
            {{--<button class="btn btn-info" id="skip" type="button" value="a">skip & Next</button>--}}
        {{--</div>--}}

        {{--<div class="col">--}}
            {{--<button class="btn btn-success" id="sub" type="button" value="a">Save & Next</button>--}}
        {{--</div>--}}
        {{--<div class="col text-right">--}}
            {{--<a class="btn btn-info w-100" href="{{url('student/submit-marks')}}">Submit</a>--}}
        {{--</div>--}}
    {{--</div>--}}
</section>
<script src="{{ asset('/js/jquery.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };

        button();
        datacred();
        $('#toggle').click(function() {
            $('#target').toggle();
        })

        var t = setInterval(timer, 1000);

        function timer() {
            $.get("/student/timer", function(data, status) {
                $("#timer").html(data);
                if (data == '00:00:00') {
                    //alert("stop");
                    //console.log('h');
                    window.location = "submit-marks";
                    clearInterval(t);
                }
            });
        };


        var selected = null;
        var number = 0;
        var lang = 'english';

        $.get('/student/questionById', {
            id: "{{$q_en[0]->test_id}}"
        }, function(data, status) {
            // alert("Data: " + data + "\nStatus: " + status);
            //    var d = $.parseJSON(data);

            console.log(data);
            //    console.log(data[0].question);
            $("#hq").html(data[0].question);
            $("#option_1").val('a');
            $("#op1").html(data[0].chose_1);
            $("#option_2").val('b');
            $("#op2").html(data[0].chose_2);
            $("#option_3").val('c');
            $("#op3").html(data[0].chose_3);
            $("#option_4").val('d');
            $("#op4").html(data[0].chose_4);
            $("#sub").val(data[0].id);
            $("#skip").val(data[0].id);
            $("#review").val(data[0].id);

            // $("#hq").append(data);

        });



        $('#button-nav').on('click', 'button', function(evt) {
            // alert($(this).val());
            number = $(this).val();
            myFunction(number);
            $('#q_number').html('Question number '+ (parseInt(number) + 1));
            // check(number);
        });



        function myFunction(number) {
             var t=$(this);
             var nu =number;
            $.get("/test123", {
                    la: lang,
                    q_id: number
                },
                function(data, status) {
                    var sd = data;
                    //console.log(sd);
                    if (sd == '') {
                        myFunction(nu - 1);
                        $('#q_number').html('Question number '+ (nu));
                        // var nu= t.number;
                        // alert(nu);



                        alert('This was the last question. Please click on Submit button')
                        //console.log(sd);
                    } else {
                        $("#option_1").prop("checked", false);
                        $("#option_2").prop("checked", false);
                        $("#option_3").prop("checked", false);
                        $("#option_4").prop("checked", false);
                        // if(parseInt(number)==2){
                        //     $("#option_3").prop("checked", true);
                        // }
                       // console.log(sd);
                        $("#hq").html(data.question);
                        $("#option_1").val('a');
                        $("#op1").html(data.chose_1);
                        $("#option_2").val('b');
                        $("#op2").html(data.chose_2);
                        $("#option_3").val('c');
                        $("#op3").html(data.chose_3);
                        $("#option_4").val('d');
                        $("#op4").html(data.chose_4);
                        $("#sub").val(data.id);
                        $("#skip").val(data.id);
                        $("#review").val(data.id);

                    }
                });
        }





        $('#question').on('click', 'input', function(evt) {

            selected = $(this).val();

            //alert(selected);
        });



        $('#sub').on('click', function(evt) {
            if (selected != null) {
               // alert('q_id' + $(this).val());
               // alert('index' + number);
                //alert('selected' + selected);

               // alert('index' + number);

                //    alert(selected);
                var next = parseInt($(this).val());
                   // alert(next+1);
                // console.log(selected + " ----- " + next);
                $.get("/student/submitQuestion", {
                        selected: selected,
                        student_id: "{{session()->get('studentId')}}",
                        q_id: next
                    },
                    function(data, status) {
                        console.log("Data: " + data + "\nStatus: " + status);
                    });
                button();

                myFunction(number = parseInt(number) + 1);
                $('#q_number').html('Question number '+ (parseInt(number) + 1));
                selected = null;
                datacred()

            } else {
                alert('please select an option')
            }

        });


        $('#mySelect').change(function() {
            lang = $(this).val();
            myFunction();
            //alert(lang);
            //alert(number);
        });

        $('#skip').on('click', function(evt) {
            // number = $(this).val();
            myFunction(number=parseInt(number) + 1);
            $('#q_number').html('Question number '+ (parseInt(number) + 1));
            // selected=null;
        });


        function button() {

            jQuery("[id=btn]").map(function() {
                //console.log( $( this ).val());
                var that = $(this);
                $.get("/button", {
                        q_id: $(this).val()
                    },
                    function(data, status) {
                        // console.log("Data: " + data + "\nStatus: " + status);
                        if (data == 'true') {
                            that.css("background-color", "green");

                        }

                    });

            })
        }
        function datacred() {

                //console.log( $( this ).val());
                var that = $(this);
                $.get("{{url('student/colorMark')}}",
                    function(data, status) {
                        console.log("Data: " + data.not_answer + "\nanswer: " + data.answer+ "\nmarkReview: " + data.mark_review);
                        $('#answer').html(data.answer);
                        $('#not_answer').html(data.not_answer);
                        $('#mark_review').html(data.mark_review);

                            // that.css("background-color", "green");



                    });


        }
        // function check(number) {
        //     if(parseInt(number)==3){
        //         $("#option_3").prop("checked", true);
        //     }
        // }

        $('#review').on('click', function(evt) {
            // $q_id = $(this).val();
            // myFunction(number=parseInt(number) + 1);
            // alert($(this).val());
            // alert(selected);
            $.get("/student/review", {
                    q_id: $(this).val(),
                    selected: selected,
                    student_id: "{{session()->get('studentId')}}",
                },
                function(data, status) {
                    // console.log("Data: " + data + "\nStatus: " + status);
                   // console.log(data);

                });
         datacred();
            myFunction(number=parseInt(number) + 1);
            $('#q_number').html('Question number '+ (parseInt(number) + 1));
        });



    })
</script>
</body>

</html>