@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-header">Change Profile this Employee</div>
					<form action="{{ url('employees/'. $employees->id) }}" method="post">
{{ csrf_field() }} {{ method_field('PATCH') }}
						<div class="card-body">
							<div class="form-grup">
								<label for="first_name" class="form-label">First Name</label>
								<input type="text" name="first_name" class="form-control" required value="{{ $employees->first_name }}">
							</div>

							<div class="form-grup">
								<label for="last_name" class="form-label">Last Name</label>
								<input type="text" name="last_name" class="form-control" required value="{{ $employees->last_name }}">
							</div>

							<div class="form-grup">
								<label for="email" class="form-label">Email</label>
								<input type="email" name="email" class="form-control" required value="{{ $employees->email }}">
							</div>

							<div class="form-grup">
								<div class="container" style="margin-top: 20px;">
									<label for="phone1" class="form-label" style="display: inline;">Phone Number</label>
									<input type="text" name="phone1" class="form-control col-2" required style="display: inline; margin-left: 20px;" maxlength="4" value="{{ $employees->phone1 }}"> -
									<input type="text" name="phone2" class="form-control col-2" required style="display: inline;" formtarget="4" maxlength="4" value="{{ $employees->phone2 }}"> -
									<input type="text" name="phone3" class="form-control col-2" required style="display: inline;" maxlength="4" value="{{ $employees->phone3 }}">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" value="submit" class="btn btn-info text-light">Submit</button>
							<a href="{{ url('employees') }}" class="float-right">Back</a>
						</div>
					</form>
				</div>			
			</div>
		<div class="col-6">
			<div class="alert alert-info">
				Fill this Form to Change Profile this Employee
			</div>
		</div>
	</div>

@endsection