@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-header">
			<h3>Company Listing</h3>
			<form action="" method="get">
				<div class="row">
					<div class="col-5">
						<input type="text" name="search" class="form-control float-left" placeholder="Search ..." style="margin-top: 25px;" value="{{ request('search') }}">
					</div>

						<input type="submit" value="Search" class="btn btn-info" style="margin-top: 25px;">
						<a href="{{ url('companies') }}" style="margin-top: 25px; margin-left: 20px; text-decoration: none;" class="btn btn-secondary">Reset</a>
				</div>
			</form>
			<a href="{{ url('companies/create') }}" class="float-right" style="margin-top: -30px">Create a new Company</a>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Company Name</th>
					<th>Email</th>
					<th>Website</th>
					<th>Address</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

				<?php 
					$no = 1;
				?>
				<?php foreach ($companies as $company): ?>
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $company->name }}</td>
						<td>{{ $company->email }}</td>
						<td>{{ $company->website }}</td>
						<td>{{ $company->address }}</td>
						<td>
							<a href="{{ url('companies/'.$company->id) }}">View Detail</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

@endsection