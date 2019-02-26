@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-header">Edit your Company</div>
				<form action="{{ url('companies/'.$company->id) }}" method="post">
{{ csrf_field() }} {{ method_field('PATCH') }}
					<div class="card-body">
						<div class="form-grup">
							<label for="name" class="form-label">Company Name</label>
							<input type="text" name="name" class="form-control" required value="{{ $company->name }}">
						</div>
						<div class="form-grup">
							<label for="email" class="form-label">Company Email</label>
							<input type="email" name="email" class="form-control" required value="{{ $company->email}}">
						</div>
						<div class="form-grup">
							<label for="website" class="form-label">Company Website</label>
							<input type="text" name="website" class="form-control" required value=" {{ $company->website }}">
						</div>
						<div class="form-grup">
							<label for="address" class="form-label">Company Address</label>
							<textarea name="address" id="address" class="form-control" required>{{ $company->address }}</textarea>
						</div>
					</div>
					<div class="card-footer">
						<input type="Submit" value="submit" class="btn btn-info">
						<a href="{{ url('companies') }}" class="btn btn-warning float-right">Cancel</a>
					</div>
				</form>
			</div>
		</div>

		<div class="col-6">
			<div class="alert alert-info">
				Fill this Form to Edit your Company
			</div>
		</div>
	</div>

@endsection