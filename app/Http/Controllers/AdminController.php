<?php

namespace App\Http\Controllers;

use App\cr;
use App\Model\Admin;
use App\Model\Package;
use App\Model\PackageRequest;
use App\Model\Payment;
use App\Model\QuestionEn;
use App\Model\QuestionHi;
use App\Model\Student;
use App\Model\StudentForgotPassword;
use App\Model\TestName;
use App\Model\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login(){

        return view('admin.login');
    }

    public function loginCheck(Request $request){
        $email = $request['email'];
        $password = $request['password'];

        $check = DB::table('moderator')
            ->where(['email'=>$email])
            ->first();


        if ($check){
            if (Hash::check($password,$check->password)){
                $id = $check->id;
                \Session::put('adminId',$id);
                return redirect('/admin/student-list');
            }

            else{
                return redirect('/admin/login');
            }
        }
        else{
            return redirect('/admin/login');
        }
    }

    public function studentList(){

        $student = Student::all();
        return view('admin.student-list')
            ->with('student',$student);
    }

    public function signOut(){
        \Session::forget('adminId');
        return redirect('/admin/login');
    }

    public function addQuestion(){
        $package = Package::all();
        $test_name = DB::table('test_name')
            ->groupBy('test_name')
            ->get();
    	return view('admin.add-questions')
            ->with('package',$package)
            ->with('test_name',$test_name);
    }

    public function storeQuestions(Request $request){
        $package = $request['package'];
        $test = $request['test-name'];
        $q_e = $request['question-en'];
        $c_e_1 = $request['choice-en-1'];
        $c_e_2 = $request['choice-en-2'];
        $c_e_3 = $request['choice-en-3'];
        $c_e_4 = $request['choice-en-4'];
        $r_e = $request['right-ans-en'];


        $q_h = $request['question-hi'];
        $c_h_1 = $request['choice-hi-1'];
        $c_h_2 = $request['choice-hi-2'];
        $c_h_3 = $request['choice-hi-3'];
        $c_h_4 = $request['choice-hi-4'];
        $r_h = $request['right-ans-hih'];

        $english_q = new QuestionEn();
        $hindi_q = new QuestionHi();

        if ($q_e){
            $english_q->test_id = $test;
            $english_q->question = $q_e;
            $english_q->descriptions = $request['e-d'];
        }
        if ($c_e_1){
            $english_q->chose_1 = $c_e_1;
        }
        if ($c_e_2){
            $english_q->chose_2 = $c_e_2;
        }
        if ($c_e_3){
            $english_q->chose_3 = $c_e_3;
        }
        if ($c_e_4){
            $english_q->chose_4 = $c_e_4;
        }

        if ($r_e){
            $english_q->right_ans = $r_e;
        }


        if ($q_h){
            $hindi_q->test_id = $test;
            $hindi_q->question = $q_h;
            $hindi_q->descriptions = $request['h-d'];
        }
        if ($c_h_1){
            $hindi_q->chose_1 = $c_h_1;
        }
        if ($c_h_2){
            $hindi_q->chose_2 = $c_h_2;
        }
        if ($c_h_3){
            $hindi_q->chose_3 = $c_h_3;
        }
        if ($c_h_4){
            $hindi_q->chose_4 = $c_h_4;
        }

        if ($r_h){
            $hindi_q->right_ans = $r_h;
        }
        $hindi_q->save();
        $english_q->save();
        return redirect('/admin/add-question');
    }

    public function addPremium(){
        $package = Package::all();
        $student = Student::all();
        return view('admin.add-premium')
            ->with('package',$package)
            ->with('student',$student);
    }

    public function premium(Request $request){
        $payment = new Payment();
        $payment->student_id = $request['student-id'];
        $payment->package_id = $request['package-id'];
        $payment->save();
        return redirect('/admin/student-list');
    }

    public function deleteStudent($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/admin/student-list');
    }
    public  function getItem(Request $request){
        $id =  $request['id'];
        $test_names = DB::table('test_name')
            ->where(['package_id'=>$id])
            ->get();

        $output = '<option value="">Select</option>';
        foreach($test_names as $row)
        {
            $output .= '<option value="'.$row->id.'">'.$row->test_name.'</option>';
        }
        return $output;
    }

    public function userQuestions(Request $request){
        $u_q = new UserQuestion();
        $u_q->course_name = $request['course-name'];
        $u_q->mobile_no = $request['mobile-no'];
        $u_q->question = $request['question'];
        $u_q->save();
        return redirect('/');
    }

    public function listChangePassword(){
        $r_all = StudentForgotPassword::all();
        return view('admin.password-changing-request')
            ->with('r_all',$r_all);
    }

    public function studentPasswordChange($id){
        return view('admin.student-password')
            ->with('id',$id);
    }

    public function studentPassword(Request $request){
        $r_i = $request['id'];
        $r_in = DB::table('student_forgot_password')
            ->where(['id'=>$r_i])
            ->first();

        if ($r_in){
            $student = DB::table('student')
                ->where(['email'=>$r_in->email])
                ->first();
            $id = $student->id;

            $s_info = Student::find($id);
            $s_info->password = bcrypt($request['password']);
            $s_info->save();

            $s_t_p = StudentForgotPassword::find($r_i)->delete();
            return redirect('admin/student-password-changing-request');
        }
        else{
            return redirect('admin/student-password-changing-request');
        }
    }

    public function RequestPackage(){
        $package = PackageRequest::all();
        return view('admin.request-package')
            ->with('package',$package);
    }

    public function RequestPackageDelete($id){
        PackageRequest::find($id)->delete();
        return redirect('/admin/request-package');
    }

    public function addDemoQuestion(){
        return view('admin.add-demo-questions');
    }

    public function storDemoQuestions(Request $request){
        $package = $request['package'];
        $test = $request['test-name'];
        $q_e = $request['question-en'];
        $c_e_1 = $request['choice-en-1'];
        $c_e_2 = $request['choice-en-2'];
        $c_e_3 = $request['choice-en-3'];
        $c_e_4 = $request['choice-en-4'];
        $r_e = $request['right-ans-en'];


        $q_h = $request['question-hi'];
        $c_h_1 = $request['choice-hi-1'];
        $c_h_2 = $request['choice-hi-2'];
        $c_h_3 = $request['choice-hi-3'];
        $c_h_4 = $request['choice-hi-4'];
        $r_h = $request['right-ans-hih'];

        $english_q = new QuestionEn();
        $hindi_q = new QuestionHi();

        if ($q_e){
            $english_q->test_id = 41;
            $english_q->question = $q_e;
            $english_q->descriptions = $request['e-d'];
        }
        if ($c_e_1){
            $english_q->chose_1 = $c_e_1;
        }
        if ($c_e_2){
            $english_q->chose_2 = $c_e_2;
        }
        if ($c_e_3){
            $english_q->chose_3 = $c_e_3;
        }
        if ($c_e_4){
            $english_q->chose_4 = $c_e_4;
        }

        if ($r_e){
            $english_q->right_ans = $r_e;
        }


        if ($q_h){
            $hindi_q->test_id = 41;
            $hindi_q->question = $q_h;
            $hindi_q->descriptions = $request['h-d'];
        }
        if ($c_h_1){
            $hindi_q->chose_1 = $c_h_1;
        }
        if ($c_h_2){
            $hindi_q->chose_2 = $c_h_2;
        }
        if ($c_h_3){
            $hindi_q->chose_3 = $c_h_3;
        }
        if ($c_h_4){
            $hindi_q->chose_4 = $c_h_4;
        }

        if ($r_h){
            $hindi_q->right_ans = $r_h;
        }
        $hindi_q->save();
        $english_q->save();
        return redirect('/admin/add-demo-question');
    }

    public function deleteDemoQuestions(){
        DB::table('questions_en')->where(['test_id'=>41])->delete();
        DB::table('questions_hi')->where(['test_id'=>41])->delete();
        return redirect('/admin/add-demo-question');
    }

    public function detailsStudent($id){
        $student = DB::table('student')
            ->where(['id'=>$id])
            ->first();
        $package = DB::table('payment')->where(['student_id'=>$id])->get();
        foreach ($package as $package){
            $p_n = DB::table('package')->where(['id'=>$package->package_id])->get();
        }
        $feedback = DB::table('student_feedback')->where(['student_name'=>$student->name])->get();
        if ($package && $feedback){
            return view('admin.student-details')
                ->with('package',$p_n)
                ->with('feedback',$feedback);
        }
        else{
            return view('admin.student-details')
                ->with('package',"None")
                ->with('feedback',"None");
        }
    }

    public function changePassword(){
        return view('admin.change-password');
    }

    public function passwordChanging(Request $request){
        $email = $request['email'];
        $pass = $request['password'];
        $id = \Session::get('adminId');

        if ($email){
            $admin = Admin::find($id);
            $admin->email = $email;
            $admin->password = bcrypt($pass);
            $admin->save();
            return redirect('admin/sign-out');
        }
        else{
            $admin = Admin::find($id);
            $admin->password = bcrypt($pass);
            $admin->save();
            return redirect('admin/sign-out');
        }

    }

    public function showUserQuestions(){
        $q = UserQuestion::all();
        return view('admin.user-questions')->with('questions',$q);
    }

    public function deleteUserQuestions(){
        DB::table('user_questions')->delete();
        return redirect('/admin/student-list');
    }

}
