@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-header">
			<h3>Employee List</h3>

			<form action="" method="get">
				<div class="row">
					<div class="col-5">
						<input type="text" name="search" class="form-control float-left" placeholder="Search ..." style="margin-top: 25px;" value="{{ request('search') }}">
					</div>

						<input type="submit" value="Search" class="btn btn-info" style="margin-top: 25px;">
						<a href="{{ url('employees') }}" style="margin-top: 25px; margin-left: 20px; text-decoration: none;" class="btn btn-secondary">Reset</a>
				</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No. </th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Phone</th>
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
						<td>{{ $employe->phone }}</td>
					</tr>
				@endforeach
			</tbody>
			
		</table>
	</div>

@endsection