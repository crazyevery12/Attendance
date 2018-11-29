@extends('layouts.app')

@section('content')
	<div class="container">
		@if (session('message'))
			<div class="alert alert-{{ session('level') }}" role="alert">
				<strong>{{session('message')}}</strong>
			</div>
		@endif
		<div class="d-flex justify-content-center">
			<div class="col-md-10">
				<div class="card" style="border-radius: 20px">
					<div class="card-header"><h1 style="color: #35c2de">List student</h1></div>
					<div class="card-body table-responsive-md">
						<table class="table table-sm table-Light" >
							<thead class="thead-light">
								<tr>								
									<th scope="col">FullName</th>
									<th scope="col">Birthday</th>
									<th scope="col">Status</th>
									<th scope="col">Recently</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
									
								<tr>
									<td>{{ $user->first_name }} {{ $user->last_name }}</td>
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