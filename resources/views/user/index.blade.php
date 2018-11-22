@extends('layouts.app')

@section('content')
	<div class="container">
		@if (session('message'))
			<div class="alert alert-{{ session('level') }}" role="alert">
				<strong>{{session('message')}}</strong>
			</div>
		@endif
		<div class="d-flex justify-content-center">
			<div class="col-md-12">
				<h1>List user</h1>
				<div class="card">
					<div class="card-header">List user</div>
					<div class="card-body">
						<table class="table">
							<thead class="thead-dark">
								<tr>		
									<th>#</th>							
									<th>FullName</th>
									<th>Email</th>
									<th>Birthday</th>
									<th>Status</th>
									<th>Created at</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
									
								<tr>
									<td>{{ $user->id}}</td>
									<td>{{ $user->first_name }} {{ $user->last_name }}</td>
									<td>{{ $user->email}}</td>
									<td>{{ $user->birthday}}</td>
									<td><span class="{{ $user->status == 1 ? 'dot-onl' : 'dot-off'}}"></span></td>
									<td>{{ $user->created_at}}</td>
								</tr>
									
								@endforeach
							</tbody>
						</table>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection