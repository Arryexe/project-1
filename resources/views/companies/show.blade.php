@extends('layouts.app')

@section('content')


	<div class="content">

		<div class="row">
			<div class="col-5">
				<div class="card">
					<div class="card-header">{{ $company->name }} Detail</div>

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
					</div>
				</div>			
			</div>
		</div>
	</div>	

@endsection