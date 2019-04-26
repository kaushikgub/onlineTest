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
    <div class="row mt-3">
        <div class="col-md-8">
            <h6 class="text-primary">Test Name:</h6>
            <h2 class="text-info">{{$test->test_name}}</h2>
            <p class="text-danger"></p>
        </div>
        <div class="col-md-2">
            <h6 class="text-success">Candidate Name:</h6>
            <h5 class="text-info font-italic">{{$student->name}}</h5>
            {{--<h6 class="text-dark">Subject: Mock Exam</h6>--}}
        </div>
        <div class="col-md-2">
            <img style="height: 100px;width: 100px; border-radius: 50%;" src=" {{asset($student->photo_link)}}">
        </div>
    </div>
</section>
<section class="container">
    <h5 class="text-center text-dark mt-2">Exam Summary</h5>
    <table class="table table-bordered">
      <thead style="background-color: #B9CDE5">
        <tr>
          <th scope="col">Section Name</th>
          <th scope="col">Total Ques.</th>
          <th scope="col">Answered</th>
          <th scope="col">Not Answered</th>
          <th scope="col">Marked For Review</th>
          <th scope="col">Answered and Marked For Review</th>
          <th scope="col">Not Visited</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>A</th>
          <td>{{$result->t_q}}</td>
          <td>{{$result->answered}}</td>
          <td>{{$result->t_q-$result->answered}}</td>
          <td>{{$result->m_r}}</td>
          <td>{{$result->a_m_r}}</td>
          <td>{{$result->n_v}}</td>
        </tr>
      </tbody>
    </table>

    <div class="row  mt-3 border rounded p-1 border-info">
        <div class="col-md-5">
            <table class="table">
              <tbody class="border rounded p-1">
                <tr>
                  <th style="background-color: #C4BD97">1</th>
                  <td style="background-color: #C4BD97">Correct Ans</td>
                  <td style="background-color: #D99694">{{$result->c_a}}</td>
                </tr>
                <tr>
                  <th style="background-color: #C4BD97">2</th>
                  <td style="background-color: #C4BD97">Wrong Ans</td>
                  <td style="background-color: #D99694">{{$result->w_a}}</td>
                </tr>
                <tr>
                    <th style="background-color: #C4BD97">3</th>
                    <td style="background-color: #C4BD97">Positive marks</td>
                    <td style="background-color: #D99694">{{$result->p_m}}</td>
                </tr>
                <tr>
                  <th style="background-color: #C4BD97">4</th>
                  <td style="background-color: #C4BD97">Negative marks</td>
                  <td style="background-color: #D99694">-{{$result->n_m}}</td>
                </tr>
                <tr>
                  <th style="background-color: #C4BD97">5</th>
                  <td style="background-color: #C4BD97">Total marks</td>
                  <td style="background-color: #D99694">{{$result->mark}}</td>
                </tr>
                <tr>
                  <th style="background-color: #C4BD97">6</th>
                  <td style="background-color: #C4BD97">Rank</td>
                  <td style="background-color: #D99694">{{$rank}}/{{$total-1}}</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-6 mx-auto text-center border rounded p-3" style="background-color: #EACB92">
                    <p>For detailed explanation<br> & solution</p>
                    <a class="btn"style="background-color: #D99694" href="#">CLICK ME</a>
                </div>
            </div>    
            <div class="row mt-5">
                <div class="col-md-6 mx-auto text-center" style="background-color: #948A54">
                    <p class="">SHARE YOUR SCORE ON</p>
                    <a class="btn">Facebook</a><a class="btn">INSTRAGRAM</a><a class="btn">TWITTER</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row">
                <div class="col mx-auto text-center">
                    <a class="btn btn-success w-100" href="{{url('student/feedback')}}">Next</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>

</footer>

<script src="{{ asset('/js/jquery.js') }}"></script>
<script>
    $(document).ready(function() {
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    })
</script>
</body>
</html>