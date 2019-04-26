@extends('student-master')
@section('body')

	<h2 class="text-center text-info font-italic">Buy Package</h2>
	@if(Session::has('message'))
		<p class="alert alert-success">{{ Session::get('message') }}</p>
	@endif
	<div class="container">
		<table class="table">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Package Name</th>
		      <th scope="col">Price</th>
		      <th scope="col">Buy Now</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">01</th>
		      <td>CG Civil Judge</td>
		      <td>$200</td>
		      <td><a class="btn btn-success" href="{{url('student/buy/1')}}">Buy</a></td>
		    </tr><tr>
		      <th scope="row">02</th>
		      <td>CG CMO</td>
		      <td>$200</td>
				<td><a class="btn btn-success" href="{{url('student/buy/2')}}">Buy</a></td>
		    </tr><tr>
		      <th scope="row">03</th>
		      <td>CG Assistant Prof</td>
		      <td>$200</td>
				<td><a class="btn btn-success" href="{{url('student/buy/3')}}">Buy</a></td>
		    </tr><tr>
		      <th scope="row">04</th>
		      <td>CG PSC</td>
		      <td>$200</td>
				<td><a class="btn btn-success" href="{{url('student/buy/4')}}">Buy</a></td>
		    </tr>
		  </tbody>
		</table>
	</div>
		
@endsection