@extends('student-master')
@section('body')

	<h2 class="text-center text-info font-italic">Change Password</h2>
	
	{{ Form::open(array('url' => 'student/change-password','onsubmit' => 'return validation()')) }}
    	<div style="margin-left: 30%;margin-right: 30%;margin-top: 5%">
    		<div class="form-group">
	    		<label>New Password:</label>
	    		<input id="new-pass" type="password" name="password" class="form-control" required>
	    		<span id="s-new-pass" class="text-danger"></span>
	    	</div>

	    	<div class="form-group">
	    		<label>Conform New Password:</label>
	    		<input id="con-new-pass" type="password" name="old-password" class="form-control" required>
	    		<span id="s-con-new-pass" class="text-danger"></span>
	    	</div>

	    	<div class="form-group">
	    		<input type="submit" value="Submit" class="form-control btn btn-success">
	    	</div>
    	</div>

	{{ Form::close() }}

	<script>
		function validation(){
			var pass1 = document.getElementById('new-pass').value;
			var pass2 = document.getElementById('con-new-pass').value;

			if (pass1=="") {
				document.getElementById('s-new-pass').innerHTML =" ** Please Enter The New Password";
                return false;
			}

			if (pass2=="") {
				document.getElementById('s-con-new-pass').innerHTML =" ** Please Enter The Conform New Password";
                return false;
			}
			if (pass1!=pass2) {
				document.getElementById('s-new-pass').innerHTML ="";
				document.getElementById('s-con-new-pass').innerHTML =" Password does not match, Please enter the same password";
                return false;
			}
		}
	</script>
	

@endsection