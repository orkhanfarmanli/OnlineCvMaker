<!DOCTYPE html>
<html>
<head>
	<title>Online CV Generator</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
<script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key: 778qjo8w5h2zvl
    authorize: true
    onLoad: onLinkedInLoad
</script>
</head>
<body>
<div class="mainWrapper">
<div class="container">
  <nav class="transparent">
    <div class="row">
	    <div class="nav-wrapper">
	      <a href="#!" class="brand-logo"><b>RESUME</b>CREATOR</a>
	      <ul class="right">
	        <li><a class="waves-effect waves-light btn transparent">Login</a></li>
	      </ul>
	    </div>
	  </div>
  </nav>
	<div class="mainMiddle">
		 <div class="container">
		 <div class="verticalAlign"></div>
		 <div class="verticalAlign"></div>
		  	<h5>Create Beautiful Professional Resumes Free</h5>
		  	<div class="row">
		  	<div class="verticalAlign"></div>
		  	<div class="verticalAlign"></div>
		  		<div class="createStart col m6 offset-m3 col s12">Let's create Resume</div>
		  	<div class="verticalAlign"></div>
		  	</div>
		  </div>
	</div>
<div class="row col m10 s12 imgResume">
	<img src="images/resumes.png" class="col s12">
</div>
</div>
</div>
<div class="footerWrapper">
<footer class="page-footer white">
	<div class="container">
	<div class="row">
		<div class="col m2 counter s6">
		<span><b>200467</b><br><span>Resumes Created</span></span>
		</div>
		<div class="col m2 s6 counter">
		<span><b>320467</b><br><span>Downloads</span></span>
		</div>
		<div class="col m5 s12">
			<ul>
				<li>Azerbaycanca</li>
				<li>English</li>
				<li>Deutshc</li>
				<li>Espanol</li>
				<li>Italiano</li>
				<li>Turkce</li>
				<li>Portugales</li>
			</ul>
		</div>
		<div class="col m3 s12 copyright">
		<span>Resume Creator © 2016. All rights reserved</span>
		</div>
	</div>
	</div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="black-text right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</div>
<script type="in/Login"></script>
<script type="text/javascript">

    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
        var userName = data['firstName'];
        var userSurname = data['lastName'];
        var userEmail = data['emailAdress'];
        var userImg = data['pictureUrl'];
        console.log(userName)
        
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
    	
    	
        IN.API.Raw("/people/~:(firstName,lastName,emailAddress,pictureUrl)").result(onSuccess).error(onError);
        
    }

</script>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>