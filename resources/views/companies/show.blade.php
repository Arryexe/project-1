@extends('layouts.app')

@section('content')


	<div class="content">

		<div class="row">
			<div class="col-5">
				<div class="card">
					<div class="card-header">
						{{ $company->name }} Detail
						<a href="{{ url('companies/'. $company->id .'/edit') }}" class="float-right">Edit this Company</a>
					</div>

					<div class="card-body">
						<table class="table">
							<tbody>
								<tr>
									<th>Name</th>
									<td>{{ $company->name }}</td>
								</tr>
								<tr>
									<th>Email</th>
									<td>{{ $company->email }}</td>
								</tr>
								<tr>
									<th>Website</th>
									<td>{{ $company->website }}</td>
								</tr>
								<tr>
									<th>Address</th>
									<td>{{ $company->address }}</td>
								</tr>
							</tbody>
						</table>

						<form action="{{ url('companies/'. $company->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Are you sure to delete this company?')">
{{ csrf_field() }} {{ method_field('DELETE') }}
							<button class="btn btn-danger float-right">Delete this Company</button>
						</form>
					</div>
				</div>

				<div style="margin-top: 10px;">
					<a href="{{ url('companies') }}" class="btn btn-secondary">Go Back to Company List</a>
				</div>

			</div>
			<div class="col-7">
				<div class="card">
            		<div class="card-header">Employe List</div>
						<table class="table">
							<thead>
								<tr class="text-center">
									<th>No.</th>
									<th>Name</th>
									<th>Company</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>

								@php
									$no = 1;
								@endphp
								@forelse ($company->employes as $employee)
									<tr class="text-center">
										<td>{{ $no++ }}</td>
										<td>{{ $employee->name }}</td>
										<td>{{ $employee->email }}</td>
										<td>
											<a href="{{ url('employees/'. $employee->id) }}">View Detail</a>
										</td>
									</tr>
								@empty
									<tr>
										<td colspan="4" class="text-center">There's Still no Employee Here...</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	

@endsection