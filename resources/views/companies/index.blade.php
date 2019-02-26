@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-header">
			Company Listing
			<a href="{{ url('companies/create') }}" class="float-right">Create a new Company</a>
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