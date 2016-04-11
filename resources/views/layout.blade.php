<!DOCTYPE html>
<html>
<head>
	<title>Online CV Generator</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
			  <li><a href="#!">one</a></li>
			  <li><a href="#!">two</a></li>
			  <li class="divider"></li>
			  <li><a href="#!">three</a></li>
	</ul>
  <nav>
  <div class="container">
    <div class="row">
	    <div class="nav-wrapper">
	      <a href="#!" class="brand-logo"><b>RESUME</b>CREATOR</a>
	     <ul class="right hide-on-med-and-down">
      			<li><a class="dropdown-button userBar" href="#!" data-activates="dropdown1"><img src="images/resumes.png"> Vahab Valiyev<i class="material-icons right">arrow_drop_down</i></a></li>
   		 </ul>
	    </div>
	  </div>
	</div>
  </nav>

@yield('content')

<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>