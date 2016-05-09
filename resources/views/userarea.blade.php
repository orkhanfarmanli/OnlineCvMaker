@extends('layout')

@section('content')
	<div class="container">
	<hr>
		<div class="row">
			<div class="col m3">
				    <ul class="collection">
				      <li class="collection-item">Created resumes</li>
				      <li class="collection-item">Personal information</li>
				      <li class="collection-item">New Resume</li>
				      <li class="collection-item">Log out</li>
   					</ul>
			</div>
			<div class="col m6">
					@foreach($userCvs as $userCv)
						<a href="/cv/{{$userCv->cv_id}}"><p>{{$userCv->cv_name}} - {{$userCv->cv_id}}</p></a>
					@endforeach
			</div>
		</div>
	</div>
@endsection