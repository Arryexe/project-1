@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-5">
			<div class="card">
				<div class="card-header">
					{{ $employees->name }} Detail
					<a href="{{ url('employees/'. $employees->id .'/change') }}" class="float-right">Change this Profile</a>
				</div>

				<div class="card-body">
					<table class="table">
						<tbody>
							<tr>
								<th>Company</th>
								<td>{{ $employees->company->name }}</td>
							</tr>
							<tr>
								<th>First Name</th>
								<td>{{ $employees->first_name }}</td>
							</tr>

							<tr>
								<th>Last Name</th>
								<td>{{ $employees->last_name }}</td>
							</tr>

							<tr>
								<th>Full Name</th>
								<td>{{ $employees->name }}</td>
							</tr>

							<tr>
								<th>Email</th>
								<td>{{ $employees->email }}</td>
							</tr>

							<tr>
								<th>Phone</th>
								<td>{{ $employees->phone }}</td>
							</tr>
						</tbody>
					</table>
						<form action="{{ url('employees/'. $employees->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Are you sure to Delete this Employee?')">
{{ csrf_field() }} {{ method_field('DELETE') }}
						<button class="btn btn-danger float-right">Delete this Employee Profile</button>
						</form>
				</div>
			</div>		
		</div>

		<div class="col-7">
			<div class="float-right">
				<a href="{{ url('employees') }}" class="btn btn-dark text-right">Back to Employees List</a>
				<a href="{{ url('companies/'. $employees->company->id) }}" class="btn btn-dark text-right">Back to Company Detail</a>
			</div>
		</div>
		</div>
	</div>

@endsection