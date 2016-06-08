@extends('layout')

@section('content')
	<div class="container">
	<hr>
		<div class="row">
			<div class="col m3">
				    <ul class="collection">
				      <li class="collection-item pointer" id="resumes">Created resumes</li>
				      <li class="collection-item pointer" id="infos">Personal information</li>
				      <li class="collection-item pointer"><a class="blackColor" href="/select">New Resume</a></li>
				      <li class="collection-item pointer"><a class="blackColor" href="{{ url('/logout') }}">Log out</a></li>
   					</ul>
			</div>
			<div class="col m6 resumes">
					@foreach($userCvs as $userCv)
						<a href="/cv/{{$userCv->cv_id}}"><p>{{$userCv->cv_name}} - {{$userCv->cv_id}}</p></a>
					@endforeach
			</div>
			<div class="col m6 infos">
					asdsda
			</div>
		</div>
	</div>
	  <script type="text/javascript">
    $("#infos").click(function(){
    	$(".resumes").hide('fast');
    	$(".infos").show('fast');
    });
    $("#resumes").click(function(){
    	$(".infos").hide('fast');
    	$(".resumes").show('fast');
    });
  </script>
@endsection