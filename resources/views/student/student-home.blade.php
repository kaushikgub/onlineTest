@extends('student-master')
@section('body')

	<h2 class="text-center text-info font-italic">My Test</h2>
	@if(Session::has('message'))
		<p class="alert alert-danger">{{ Session::get('message') }}</p>
	@endif
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <button id="1" type="button" class="btn btn-secondary mr-3" value="1">CG CIVIL JUDGE</button>
	      </li>
	      <li class="nav-item">
	        <button id="2" type="button" class="btn btn-secondary mr-3" value="2">CG CMO</button>
	      </li>
	      <li  class="nav-item">
	        <button id="3" type="button" class="btn btn-secondary mr-3" value="3">CG ASSISTANT PROF</button>
	      </li>
	      <li class="nav-item">
	        <button id="4" type="button" class="btn btn-secondary mr-3" value="4">CG PSC</button>
	      </li>
	    </ul>
	  </div>
	</nav>

	<table class="table table-bordered">
	  <thead>
	    <tr style="">
	      <th scope="col">SL.No.</th>
	      <th scope="col">NAME</th>
	      <th scope="col">STATUS</th>
	      <th scope="col">SCORE</th>
	      <th scope="col">EXPIRES ON</th>
	      <th scope="col">ATTEMPT TEST</th>
	    </tr>
	  </thead>
	  <tbody id="test-name">

	  </tbody>
	</table>


	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
					$('#1').click(function(){
						var packageId = $(this).val();
						var s_id ="{{session()->get('studentId')}}";
						//alert(s_id);
						if(packageId){
							$.get("/student/my-test",{
								id:packageId,
								s_id:s_id
							},function (data) {
								if (data==0){
									alert('Please Buy This Package');
								}
								$('#test-name').html(data);
							})
						}
					});
					$('#2').click(function(){
						var packageId = $(this).val();
						var s_id ="{{session()->get('studentId')}}";
						//alert(packageId);
						if(packageId){
							$.get("/student/my-test",{
								id:packageId,
								s_id:s_id
							},function (data) {
								if (data==0){
									alert('Please Buy This Package');
								}
								$('#test-name').html(data);
							})
						}
						});
					$('#3').click(function(){
							var packageId = $(this).val();
							var s_id ="{{session()->get('studentId')}}";
							//alert(packageId);
							if(packageId){
								$.get("/student/my-test",{
									id:packageId,
									s_id:s_id
								},function (data) {
									if (data==0){
										alert('Please Buy This Package');
									}
									$('#test-name').html(data);
								})
							}
						});
					$('#4').click(function(){
							var packageId = $(this).val();
							var s_id ="{{session()->get('studentId')}}";
							//alert(packageId);
							if(packageId){
								$.get("/student/my-test",{
									id:packageId,
									s_id:s_id
								},function (data) {
									if (data==0){
										alert('Please Buy This Package');
									}
									$('#test-name').html(data);
								})
							}
						});
				}


		)

	</script>

@endsection