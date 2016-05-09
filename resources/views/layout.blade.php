<!DOCTYPE html>
<html>
<head>
	<title>Online CV Generator</title>
	<!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
  	<link rel="stylesheet" href="/css/jquery.rateyo.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
    <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  </script>
</head>
<body>
	<ul id="dropdown1" class="dropdown-content">
			  <li><a href="/">Home</a></li>
			  <li><a href="/userarea/{{Auth::user()->id}}">Profile</a></li>
			  <li><a href="/cv/create/{{Auth::user()->id}}">New resume</a></li>
			  <li class="divider"></li>
			  <li><a href="{{ url('/logout') }}">Log out</a></li>
	</ul>
  <nav>
  <div class="container">
    <div class="row">
	    <div class="nav-wrapper">
	      <a href="#!" class="brand-logo"><b>RESUME</b>CREATOR</a>
	     <ul class="right hide-on-med-and-down">
      			<li><a class="dropdown-button userBar" href="#!" data-activates="dropdown1"><img src="/images/resumes.png">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
   		 </ul>
	    </div>
	  </div>
	</div>
  </nav>

@yield('content')
<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>