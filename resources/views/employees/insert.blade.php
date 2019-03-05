@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-header">Insert New Employees</div>
					<form action="{{ url('employees') }}" method="post">
{{ csrf_field() }}
						<div class="card-body">
							<div class="form-grup">
								<label for="first_name" class="form-label">First Name</label>
								<input type="text" name="first_name" class="form-control" required>
							</div>

							<div class="form-grup">
								<label for="last_name" class="form-label">Last Name</label>
								<input type="text" name="last_name" class="form-control" required>
							</div>

							<div class="form-grup">
								<label for="email" class="form-label">Email</label>
								<input type="email" name="email" class="form-control" required>
							</div>

							<div class="form-group">
								<label for="company_id" class="form-label">Company</label>
								<select name="company_id" id="company_id" class="form-control">
									<option>-- Select Option --</option>
									@foreach ($companies as $company)
										<option value="{{ $company->id }}">{{ $company->name }}</option>
									@endforeach
								</select>
							</div>

							<div class="form-grup">
								<div class="container" style="margin-top: 20px;">
									<label for="phone1" class="form-label" style="display: inline;">Phone Number</label>
									<input type="text" name="phone1" class="form-control col-2" required style="display: inline; margin-left: 20px;" maxlength="4"> -
									<input type="text" name="phone2" class="form-control col-2" required style="display: inline;" formtarget="4" maxlength="4"> -
									<input type="text" name="phone3" class="form-control col-2" required style="display: inline;" maxlength="4">
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
				Fill this Form to Insert new Employee
			</div>
		</div>
	</div>

@endsection