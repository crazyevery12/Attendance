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
				<h1>List student</h1>
				<div class="card">
					<div class="card-header">List student</div>
<<<<<<< HEAD
					<div class="card-body table-responsive-md">
						<table class="table table-sm table-Light">
=======
					<div class="card-body">
						<table class="table">
>>>>>>> update user information
							<thead class="thead-dark">
								<tr>		
									<th scope="col">#</th>							
									<th scope="col">FullName</th>
									<th scope="col">Email</th>
									<th scope="col">Birthday</th>
									<th scope="col">Status</th>
									<th scope="col">Created at</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
									
								<tr>
									<td>{{ $user->id}}</td>
									<td>{{ $user->first_name }} {{ $user->last_name }}</td>
									<td>{{ $user->email}}</td>
									<td>{{ $user->birthday}}</td>
									@if ($user->status == 1)
										<td><span class="dot-onl"></span></td>
									@else
										<td><span class="dot-off"></span></td>
									@endif
									<td>{{ $user->updated_at}}</td>
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