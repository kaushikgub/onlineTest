@extends('admin-master')
@section('body')
	<div class="container text-dark">
		{{ Form::open(array('url' => 'admin/add-question')) }}
    		<div class="row">
				<div class="col">
					<div class="row form-group border p-2 rounded bg-info">
						<div class="col-sm-2">
							<label class="col-form-label">Package</label>
						</div>
						<div class="col-sm-10">
							<select id="package" name="package" class="form-control" required>
								<option value="">Plaease Select Package</option>
								@foreach($package as $package)
									<option value="{{$package->id}}">{{$package->name}}</option>
									@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row form-group border p-2 rounded bg-info">
						<div class="col-sm-2">
							<label class="col-form-label">Test</label>
						</div>
						<div class="col-sm-10">
							<select id="test-name" name="test-name" class="form-control" required>
								<option value="">Plaease Select Test</option>

							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 mx-auto">
					<h4 class="text-center text-warning">Enter The Same Question</h4>
				</div>
			</div>

			<div class="row border rounded p-3 border-info border-right">
				<div class="col container border-right border-info">
					<p class="text-center">English Questions</p>
					<div class="form-group">
						<input class="form-control" type="text" name="question-en" autocomplete="off" placeholder="Question" required>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<input class="form-control" type="text" name="choice-en-1" autocomplete="off" placeholder="Choice 1" required>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="text" name="choice-en-2" autocomplete="off" placeholder="Choice 2" required>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="text" name="choice-en-3" autocomplete="off" placeholder="Choice 3" required>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="text" name="choice-en-4" autocomplete="off" placeholder="Choice 4" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<input class="form-control " type="text" name="e-d" autocomplete="off" placeholder="Description">
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<dib class="col-md-4 mx-auto">
								<select class="form-control" name="right-ans-en" required>
									<option value="">Right Answer</option>
									<option value="a">Choice 1</option>
									<option value="b">Choice 2</option>
									<option value="c">Choice 3</option>
									<option value="d">Choice 4</option>
								</select>
							</dib>
						</div>
					</div>
				</div>
				<div class="col container">
					<p class="text-center">Hindi Questions</p>
					<div class="form-group">
						<input class="form-control" type="text" name="question-hi" autocomplete="off" placeholder="Question" required>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<input class="form-control" type="text" name="choice-hi-1" autocomplete="off" placeholder="Choice 1" required>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="text" name="choice-hi-2" autocomplete="off" placeholder="Choice 2" required>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="text" name="choice-hi-3" autocomplete="off" placeholder="Choice 3" required>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="text" name="choice-hi-4" autocomplete="off" placeholder="Choice 4" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<input class="form-control " type="text" name="h-d" autocomplete="off" placeholder="Description">
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<dib class="col-md-4 mx-auto">
								<select class="form-control" name="right-ans-hi" required>
									<option value="">Right Answer</option>
									<option value="a">Choice 1</option>
									<option value="b">Choice 2</option>
									<option value="c">Choice 3</option>
									<option value="d">Choice 4</option>
								</select>
							</dib>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-md-6 mx-auto">
					<input class="btn btn-success w-100" type="submit" value="Add Question">
				</div>
			</div>

		{{ Form::close() }}
	</div>
	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#package').on('change',function(){
				var packageId = $(this).val();
				//alert(packageId);
				if(packageId){
					$.get("/admin/ajax",{
						id:packageId
					},function (data,status) {
						$('#test-name').html(data);
					})
				}
			})
		}
		)

	</script>
		
@endsection