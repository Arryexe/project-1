@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-header">
			<h3>Employee Listing</h3>

			<form action="" method="get">
				<div class="row">
					<div class="col-5">
						<input type="text" name="search" class="form-control float-left" placeholder="Search ..." style="margin-top: 25px;" value="{{ request('search') }}">
					</div>

						<input type="submit" value="Search" class="btn btn-info text-light" style="margin-top: 25px;">
						<a href="{{ url('employees') }}" style="margin-top: 25px; margin-left: 20px; text-decoration: none;" class="btn btn-secondary">Reset</a>
				</div>
			</form>
	
			<a href="{{ url('employees/insert') }}" class="float-right" style="margin-top: -30px;">Insert new Employees</a>

		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No. </th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php
					$no = 1;
				@endphp
				
				@foreach ($employees as $employe)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $employe->first_name }}</td>
						<td>{{ $employe->last_name }}</td>
						<td>{{ $employe->first_name }} {{ $employe->last_name }}</td>
						<td>{{ $employe->email }}</td>
						<td>{{ $employe->phone1 }}-{{ $employe->phone2 }}-{{ $employe->phone3 }}</td>
						<td>
							<a href="{{ url('employees/'. $employe->id) }}">View Detail</a>
						</td>
					</tr>
				@endforeach
			</tbody>
			
		</table>
	</div>

@endsection