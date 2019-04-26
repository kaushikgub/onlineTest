@extends('student-master')
@section('body')

	<h2 class="text-center text-info font-italic">My Profile</h2>

	<div class="container">
		<div class="row mt-4">
			<div class="col border rounded p-2 border-info mr-4 bg-light">
				<div class="row">
					<div class="col-md-4">
						<label>Name</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->name}}</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>Father`s Name</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->father_name}}</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>Email</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->email}}</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>Mobile No</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->mobile_no}}</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>Date of Birth</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->birth}}</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>Address</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->address}}</label>
					</div>
				</div>
			</div>
			<div class="col border rounded p-2 border-info ml-4">
				<div class="row">
					<div class="col-md-4">
						<label>Exam</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->exam}}</label>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>Qualification</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->qualification}}</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>College Name</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->college_name}}</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>Passing Year</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->passing_year}}</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>% of Marks</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->marks}} %</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label>Strem</label>
					</div>
					<div class="col-md-1">
						<label>: </label>
					</div>
					<div class="col-md-7">
						<label>{{$student->strem}}</label>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-5 text-center">
			<div class="col mr-4">
				<a class=" btn btn-warning w-100" href="{{ url('/student/update-info') }}">Update Info</a>
			</div>
			<div class="col ml-4">
				<a class=" btn btn-danger w-100" href="{{ url('/student/change-password') }}">Change Password</a>
			</div>
		</div>
	</div>
	
	

@endsection