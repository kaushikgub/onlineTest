<?php

namespace App\Http\Controllers;

use App\Model\FeedbackStudent;
use App\Model\Mark;
use App\Model\PackageRequest;
use App\Model\QuestionEn;
use App\Model\Student;
use App\Model\StudentForgotPassword;
use App\Model\TestName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Session;
use App\Model\Result;

class StudentController extends Controller
{
    
    public function master(){
        return view('admin-master');
    }

    public function exam(){
        $s_id = \Session::get('studentId');
        if ($s_id){
            return redirect('/student/test');
        }
        else{
            return view('student.login');
        }
    }

    public function completeExamSummary($id){
        \Session::put('testId',$id);
        return redirect('/student/summary');
    }

    public function examSummary(){
        $s_id = \Session::get('studentId');
        $t_id = \Session::get('testId');
        $result = DB::table('mark')
            ->where(['student_id'=>$s_id,'test_id'=>$t_id])
            ->first();
        if ($result){
            $test_name = DB::table('test_name')
                ->where(['id'=>$t_id])
                ->first();

            $student = DB::table('student')
                ->where(['id'=>$s_id])
                ->first();

            $rank = Mark::orderBy('mark', 'desc')->get();
            $r = 1;
            foreach ($rank as $rank){
                if ($rank->student_id == $s_id){
                    $student_rank = $r;
                }
                $r = $r+1;
            }

            return view('student.exam-summary')
                ->with('result',$result)
                ->with('test',$test_name)
                ->with('student',$student)
                ->with('rank',$student_rank)
                ->with('total',$r);
        }

        else{
            return redirect('/student/test');
        }


    }
    public function questions(){
        return view('student.questions');
    }
    public function instruction1(){
        return view('student.instruction1');
    }
    public function instruction2(){
        return view('student.instruction2');
    }
    public function instruction3(){
        return view('student.instruction3');
    }
    public function feedback(){
        $id = \Session::get('studentId');
        $student = DB::table('student')
            ->where(['id'=>$id])
            ->first();
        return view('student.feedback')
            ->with('student',$student);
    }

    public function home(){
        $id = \Session::get('studentId');
        $student = DB::table('student')
            ->where(['id'=>$id])
            ->first();
        return view('student.student-home')
            ->with('student',$student);
    }
    public function changePassword(){
        $id = \Session::get('studentId');
        $student = DB::table('student')
            ->where(['id'=>$id])
            ->first();
        return view ('student.change-password')
            ->with('student',$student);
    }

    public function registration(){
        return view ('student.registration');
    }

    public function myProfile(){
        $id = \Session::get('studentId');
        $student = DB::table('student')
            ->where(['id'=>$id])
            ->first();
        return view('student.my-profile')
            ->with('student',$student);
    }

    public function updateInfo(){
        return view('student.update-info');
    }
    public function buyPackage(){
        $id = \Session::get('studentId');
        $student = DB::table('student')
            ->where(['id'=>$id])
            ->first();
        return view('student.buy-package')
            ->with('student',$student);
    }

    public function conformLogin($id){
        $s_id = \Session::get('studentId');
        $p_id = DB::table('test_name')
            ->where(['id'=>$id])
            ->first();
        $package_id = $p_id->package_id;
        $package_name = $p_id->test_name;

        if ($id==41){
            \Session::put('testId',$id);
            \Session::put('testName',$package_name);
            $s_info = DB::table('student')->where(['id'=>$s_id])->first();
            return view ('student.conform-login')->with('student',$s_info);
        }
        else{
            $package = DB::table('payment')
                ->where(['package_id'=>$package_id,'student_id'=>$s_id])
                ->first();
            if ($package){
                \Session::put('testId',$id);
                \Session::put('testName',$package_name);
                $s_info = DB::table('student')->where(['id'=>$s_id])->first();
                return view ('student.conform-login')->with('student',$s_info);
            }
            else{
                \Session::flash('message', 'Please Buy This Package From Here');
                return redirect('/student/buy-package');
            }
        }
    }

    public function studentStore(Request $request){

        $pic = $request->input('name') . rand() . '.' . $request->file('photo')->getClientOriginalExtension();
        $folder = "image/Student photo/";
        $request->file('photo')->move($folder, $pic);
        $des = $folder . $pic;

        $student = new Student();
        $student->name = $request['name'];
        $student->father_name = $request['father-name'];
        $student->email = $request['email'];
        $student->birth = $request['day']."/".$request['month']."/".$request['year'];
        $student->password = bcrypt($request['pass']);
        $student->premium = 0;
        $student->mobile_no = $request['mobile'];
        $student->alternate_no = $request['alternate-no'];
        $student->address = $request['a-line']." ".$request['state']." ".$request['city'];
        $student->qualification = $request['qualification'];
        $student->college_name = $request['college-name']." ".$request['c-city'];
        $student->pin_code = $request['pin-code'];
        $student->passing_year = $request['passing-year'];
        $student->marks = $request['mark'];
        $student->photo_link = $des;
        $student->exam = $request['exam'];
        $student->strem = $request['strem'];
        $student->stream = $request['stream'];

        $student->save();

        return redirect('/');
    }

    public function login(Request $request){
        $email = $request['email'];
        $password = $request['password'];
        $check = DB::table('student')
            ->where(['email'=>$email])
            ->first();

        if ($check){
            if (Hash::check($password,$check->password)){
                $id = $check->id;
                \Session::put('studentId',$id);
                return redirect('/student/test');
            }

            else{
                \Session::flash('message', 'Email or Password Incorrect');
                return redirect('/student/exam');
            }
        }
        else{
            \Session::flash('message', 'Email or Password Incorrect');
            return redirect('/student/exam');
        }


    }

    public function signOut(){
        \Session::forget('studentId');
        return redirect('/student/exam');
    }

    public function changePass(Request $request){
        $pass = $request['password'];
        $id = \Session::get('studentId');
        $student = Student::find($id);
        $student->password = bcrypt($pass);
        $student->save();
        \Session::forget('studentId');
        return redirect('/student/exam');
    }

    public function getItem(Request $request){
        $id = $request->id;
        $s_id = $request->s_id;

        $payment = DB::table('payment')
            ->where(['student_id'=>$s_id,'package_id'=>$id])
            ->first();

        if ($payment){
            $test_name = DB::table('test_name')
                ->where(['package_id'=>$id])
                ->get();

            foreach ($test_name as $row){
//                $result = DB::table('result')
//                    ->where(['student_id'=>$s_id,'questions_en_id'=>$row->id])
//                    ->first();

                $mark = DB::table('mark')
                    ->where(['student_id'=>$s_id,'test_id'=>$row->id])
                    ->first();

                if ($mark){
                    $output []= '<tr>'.'<td>'.$row->id.'</td>'.'<td>'.$row->test_name.'</td>'.'<td>'."<p class=\"text-danger\">COMPLETED</p>".'</td>'.'<td>'.$mark->mark."/100".'</td>'.'<td>'."7 th May".'</td>'.'<td>'."<a href=\"/student/summary/$row->id\">Summery
</a>".'</td>'.'</tr>';
                }
                else{
                    $output []= '<tr>'.'<td>'.$row->id.'</td>'.'<td>'.$row->test_name.'</td>'.'<td>'."<p class=\"text-success\">ACTIVE</p>".'</td>'.'<td>'."N/A".'</td>'.'<td>'."7 th May".'</td>'.'<td>'."<a href=\"/student/conform-login/$row->id\">CLICK HERE
</a>".'</td>'.'</tr>';
                }
            }
            return $output;
        }
        else{
            return $output="";
        }
    }

    public function allQuestions($id){
        $s_id = \Session::get('studentId');

        $payment = DB::table('payment')
            ->where(['student_id'=>$s_id,'package_id'=>$id])
            ->first();

        $q_e = DB::table('questions_en')
            ->where(['test_id'=>$id])
            ->get();
        $q_h = DB::table('questions_hi')
            ->where(['test_id'=>$id])
            ->get();
        //return $q_e;
    }

    public function updateProfileInfo(Request $request){
        $s_id = \Session::get('studentId');
        $student = Student::find($s_id);
        $pic = $request->input('name') . rand() . '.' . $request->file('photo')->getClientOriginalExtension();
        $folder = "image/Student photo/";
        $request->file('photo')->move($folder, $pic);
        $des = $folder . $pic;
        $student->name = $request['name'];
        $student->father_name = $request['father-name'];
        $student->email = $request['email'];
        $student->birth = $request['day']."/".$request['month']."/".$request['year'];
        //$student->password = bcrypt($request['pass']);
        $student->premium = 0;
        $student->mobile_no = $request['mobile'];
        $student->alternate_no = $request['alternate-no'];
        $student->address = $request['a-line']." ".$request['state']." ".$request['city'];
        $student->qualification = $request['qualification'];
        $student->college_name = $request['college-name']." ".$request['c-city'];
        $student->pin_code = $request['pin-code'];
        $student->passing_year = $request['passing-year'];
        $student->marks = $request['mark'];
        $student->photo_link = $des;
        $student->exam = $request['exam'];
        $student->strem = $request['strem'];
        $student->stream = $request['stream'];
        $student->save();
        return redirect('student/my-profile');
    }

    public function conform(){
        return view('student.conform');
    }

    public function forgotPassword(){
        $s_id = \Session::get('studentId');
        if ($s_id){
            return redirect('/student/test');
        }
        else{
            return view('student.forgot-password');
        }
    }
    public function forgetPass(Request $request){
        $student = DB::table('student')
            ->where(['email'=>$request->email])
            ->first();
        if ($student){

            $r_d = DB::table('student_forgot_password')
                ->where(['email'=>$request->email])
                ->first();
            if ($r_d){
                \Session::flash('message', 'Request Already Done');
                return redirect('/student/forgot-password');
            }
            else{
                $f_p = new StudentForgotPassword();
                $f_p->email = $request['email'];
                $f_p->name = $request['name'];
                $f_p->save();
                return redirect('/');
            }
        }
        else{
            \Session::flash('message', 'You did not use this email during registration');
            return redirect('/student/forgot-password');
        }
    }

    public function packageBuyRequest($id){
        $s_id = \Session::get('studentId');
        $check = DB::table('request_package')->where(['student_id'=>$s_id,'package_id'=>$id])->first();
        if ($check){
            \Session::flash('message', 'Congratulation!! You will have a call  soon..');
            return redirect('/student/buy-package');
        }
        else{
            $s_info = DB::table('student')->where(['id'=>$s_id])->first();
            $p_info = DB::table('package')->where(['id'=>$id])->first();
            $p = new PackageRequest();
            $p->name = $s_info->name;
            $p->email = $s_info->email;
            $p->mobile_no = $s_info->mobile_no;
            $p->alternative_no = $s_info->alternate_no;
            $p->student_id = $s_id;
            $p->package_name = $p_info->name;
            $p->package_id = $p_info->id;
            $p->save();
            \Session::flash('message', 'Congratulation!! You will have a call  soon..');
            return redirect('/student/buy-package');
        }
    }

    public function submitConformLogin(Request $request){
        $email = $request['email'];
        $password = $request['password'];
        $check = DB::table('student')
            ->where(['email'=>$email])
            ->first();

        if ($check){
            if (Hash::check($password,$check->password)){
                return redirect('/student/instruction1');
            }

            else{
                \Session::flash('message', 'Email or Password Incorrect');
                return redirect('/student/test');
            }
        }
        else{
            \Session::flash('message', 'Email or Password Incorrect');
            return redirect('/student/test');
        }
    }

    public function studentFeedback(Request $request){
        $r1 = $request['group1'];
        $r2 = $request['group2'];
        $r3 = $request['group3'];
        $r4 = $request['group4'];
        $r5 = $request['group5'];
        $r6 = $request['group6'];
        $r7 = $request['group7'];
        $r8 = $request['group8'];

        $total = $r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8;
        if($total>=28){
            $rating = "Totaly Setisfited";
        }
        elseif ($total>=24){
            $rating = "Best";
        }
        elseif ($total>=20){
            $rating = "Good";
        }
        elseif ($total>=16){
            $rating = "Average";
        }
        else{
            $rating = "Bellow Average";
        }

        $s_id = \Session::get('studentId');
        $t_id = \Session::get('testId');

        $s_info = Student::find($s_id);
        $t_info = TestName::find($t_id);

        $check = DB::table('student_feedback')
            ->where(['student_name'=>$s_info->name,'test_name'=>$t_info->test_name])
            ->first();

        if ($check){
            \Session::flash('message', 'You have already given you feedback for this test');
            return redirect('/student/test');
        }
        else{
            $feedback = new FeedbackStudent();
            $feedback->student_name = $s_info->name;
            $feedback->test_name = $t_info->test_name;
            $feedback->rating = $rating;
            $feedback->experience = $request['group9'];
            $feedback->save();
            return redirect('student/thank-you');
        }
    }

    public function thankYou(){
        return view('student.thank-you');
    }

    //////////////////////////
    public function subjects()
    {
        $subjects = TestName::all();

        return view('student.subjects')->with('subjects', $subjects);
        //	return $subjects;
    }

    public function data(Request $request)
    {
        if ($request->la == 'english') {
            $q_en = DB::table('questions_en')
                ->where('test_id', session()->get('test_id'))
                ->get();
            foreach ($q_en as $q => $en) {
                if ($q == $request->q_id) {
                    return response()->json($en);
                }
            }
        }
        if ($request->la == 'hindi') {
            $q_en = DB::table('questions_hi')
                ->where('test_id', session()->get('test_id'))
                ->get();
            foreach ($q_en as $q => $en) {
                if ($q == $request->q_id) {
                    return response()->json($en);
                }
            }
        }

        // return $q_en;
    }

    public function button(Request $request)
    {
        $q_en = DB::table('questions_en')
            ->where('test_id', session()->get('test_id'))
            ->get();
        foreach ($q_en as $q => $en) {
            if ($q == $request->q_id) {
                // return response()->json($en->id);
                $result = DB::table('result')
                    ->where('questions_en_id', $en->id)
                    ->get();
                if ($result->isEmpty()) {
                    return 'false';
                } else {
                    return 'true';
                }
            }
        }
    }

    public function TimerQuestions()
    {


        $seession = \Session::get('testId');
        \Session::put('duration', 60);
        \Session::put('test_id', $seession);
        \Session::put('start_time', date('Y-m-d H:i:s'));
        $end_time = date('Y-m-d H:i:s', strtotime('+'.session()->get('duration').'minutes', strtotime(session()->get('start_time'))));
        \Session::put('end_time', $end_time);

//        $_SESSION['start_time'] = date("Y-m-d H:i:s");
        //        echo $q_en[0];

//        return response()->json($q_en);
        return redirect('/student/question-set');
        //			return view('student.questions')->with(compact('q_en','q_hi'));
    }

    //..................timer..............................

    public function questionSet()
    {
        $seession = \Session::get('testId');
        $s_id = \Session::get('studentId');
        $check = DB::table('mark')
            ->where(['student_id'=>$s_id,'test_id'=>$seession])->first();
        if ($check){
            \Session::flash('message', 'Sorry!! You have already attended to this exam');
            return redirect('student/test');
        }
        else{
            $q_en = DB::table('questions_en')
                ->where('test_id', session()->get('test_id'))
                ->get();

            $q_hi = DB::table('questions_hi')
                ->where('test_id', session()->get('test_id'))
                ->get();

            if (empty($q_en)){
                \Session::flash('message', 'Sorry!! Not Available Question.Try Another Test');
                return redirect('student/test');
            }
            else{
                return view('student.questions')->with(compact('q_en', 'q_hi'));
            }
        }
    }

    public function timer(Result $result)
    {

        $fm = date('Y-m-d H:i:s');
        $tm = session()->get('end_time');
//        return $fm;
        $first_time = strtotime($fm);
        $snd_time = strtotime($tm);
        $dm = $snd_time - $first_time;

        echo gmdate('H:i:s', $dm);
    }

    //.............................................

    // question by test id
    public function questionById(Request $request)
    {
        // if ($request->q_id) {
        // 	$q_en = DB::table('questions_en')
        // 		->where('id', $request->q_id)
        // 		->get();

        // 	$q_hi = DB::table('questions_hi')
        // 		->where('id', $request->q_id)
        // 		->get();
        // 	if (empty($q_en)) {
        // 		return false;
        // 	} else {
        // 		return $q_en;
        // 	}
        // } else {

        $q_en = DB::table('questions_en')
            ->where('test_id', $request->id)
            ->get();

        $q_hi = DB::table('questions_hi')
            ->where('test_id', $request->id)
            ->get();

        return $q_en;

        // }
        //return $request['id'];

//			return response()->json($q_en);
    }

    public function submitQuestion(Request $request)
    {
//        $update = Post::find($request->selected);
        //        $update->title=$request['title'];
//           return $request;
        $selected = $request->selected;
        $student_id = $request->student_id;
        $q_id = $request->q_id;

        $ans_already = DB::table('result')
            ->where(['student_id'=>$student_id,'questions_en_id'=>$q_id])->first();
        $question = QuestionEn::where('id', '=', $q_id)->first();
        if ($question->right_ans == $selected) {
            $ans = 1;
        }
        else {
            $ans = 0;
        }

        if ($ans_already){
            $result = Result::find($ans_already->id);
            $result->student_id = $student_id;
            $result->questions_en_id = $q_id;
            $result->ans = $ans;
            if ($result->save()) {
                return 'answer inserted';
            }
        }
        else{
            $result = new Result();
            $result->student_id = $student_id;
            $result->questions_en_id = $q_id;
            $result->ans = $ans;
            if ($result->save()) {
                return 'answer inserted';
            }
        }

    }

    public function submitMark(){
        $s_id = \Session::get('studentId');
        $t_id = \Session::get('testId');

        $total_q = count(DB::table('questions_en')
            ->where(['test_id'=>$t_id])
            ->get());

        $data_all = DB::table('result')
            ->where(['student_id'=>$s_id])
            ->get();
        $t_a = 0;
        $c_a = 0;
        $w_a = 0;
        $t_p_m = 1;
        $p_m = 0;
        $n_m = 0;
        $a_m_r = 0;
        $m_r = 0;
        foreach ($data_all as $d){
            $t_a = $t_a+1;
            if ($d->ans == 1){
                $c_a = $c_a+1;
                $p_m =$p_m + 2;
            }
            if ($d->ans == 0){
                $w_a = $w_a+1;
                $n_m = $n_m+.66;
            }

            if ($d->ans == 3){
                $m_r = $m_r+1;
                $n_m = $n_m+.66;
            }

            if ($d->ans == 4){
                $c_a = $c_a+1;
                $p_m =$p_m + 2;
                $a_m_r = $a_m_r+1;
            }
            if ($d->ans == 5){
                $w_a = $w_a+1;
                $n_m = $n_m+.66;
                $a_m_r = $a_m_r+1;
            }

        }
        $final_mark = $p_m-$n_m;
        $n_v = $total_q-$t_a;
        $m_t = DB::table('mark')->where(['student_id'=>$s_id,'test_id'=>$t_id])->first();
        if ($m_t){
            $mark = Mark::find($m_t->id);
            $mark->student_id = $s_id;
            $mark->test_id = $t_id;
            $mark->mark = $final_mark;
            $mark->t_q = $total_q;
            $mark->answered = $t_a;
            $mark->m_r = $m_r;
            $mark->a_m_r = $a_m_r;
            $mark->n_v = $n_v;
            $mark->c_a = $c_a;
            $mark->w_a = $w_a;
            $mark->p_m = $p_m;
            $mark->n_m = $n_m;
            $mark->save();
            DB::table('result')
                ->where(['student_id'=>$s_id])
                ->delete();
            return redirect('/student/summary');
        }
        else{
            $mark = new Mark();
            $mark->student_id = $s_id;
            $mark->test_id = $t_id;
            $mark->mark = $final_mark;
            $mark->t_q = $total_q;
            $mark->answered = $t_a;
            $mark->m_r = $m_r;
            $mark->a_m_r = $a_m_r;
            $mark->n_v = $n_v;
            $mark->c_a = $c_a;
            $mark->w_a = $w_a;
            $mark->p_m = $p_m;
            $mark->n_m = $n_m;
            $mark->save();
            DB::table('result')
                ->where(['student_id'=>$s_id])
                ->delete();
            return redirect('/student/summary');
        }
    }

    public function review(Request $request)
    {
        $selected = $request->selected;
        $student_id = $request->student_id;
        $q_id = $request->q_id;

        if ($request->q_id){
            if ($request->selected){

                $ans_already = DB::table('result')
                    ->where(['student_id'=>$student_id,'questions_en_id'=>$q_id])
                    ->first();
                $question = QuestionEn::where('id', '=', $q_id)->first();
                if ($question->right_ans == $selected) {
                    $ans = 4;
                }
                else {
                    $ans = 5;
                }

                if ($ans_already){
                    $result = Result::find($ans_already->id);
                    $result->student_id = $student_id;
                    $result->questions_en_id = $q_id;
                    $result->ans = $ans;
                    if ($result->save()) {
                        return 'answer inserted';
                    }
                }
                else{
                    $result = new Result();
                    $result->student_id = $student_id;
                    $result->questions_en_id = $q_id;
                    $result->ans = $ans;
                    if ($result->save()) {
                        return 'answer inserted';
                    }
                }


            }

            if (!$request->selected){
                $ans_already = DB::table('result')
                    ->where(['student_id'=>$student_id,'questions_en_id'=>$q_id])
                    ->first();
                if ($ans_already){
                    $result = Result::find($ans_already->id);
                    $result->student_id = $student_id;
                    $result->questions_en_id = $q_id;
                    $result->ans = 3;
                    if ($result->save()) {
                        return 'answer inserted';
                    }
                }
                else{
                    $result = new Result();
                    $result->student_id = $student_id;
                    $result->questions_en_id = $q_id;
                    $result->ans = 3;
                    if ($result->save()) {
                        return 'answer inserted';
                    }
                }
            }
        }

    }

    public function colorMark(){
        $s_id = \Session::get('studentId');
        $m_r = count(DB::table('result')
            ->where('ans','>',2)
            ->where('student_id',$s_id)
            ->get());

        $a = count(DB::table('result')
            ->where('ans','<',2)
            ->where('student_id',$s_id)
            ->get());

        $n_a = count(DB::table('result')
            ->where('ans','=',3)
            ->where('student_id',$s_id)
            ->get());

         return  ['mark_review'=>$m_r,'answer'=> $a,'not_answer'=>$n_a];

    }


}
