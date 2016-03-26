<?php 
include "app/model.php";
$newDb= new Database('localhost','root','','usercv');
if(isset($_POST['submit'])){
$cvName=$_POST['fullName'];
$jobName=$_POST['jobName'];
$birthDate=$_POST['birthDate'];
$cvAbout=$_POST['cvAbout'];
$cvPhone=$_POST['cvPhone'];
$cvEmail=$_POST['cvEmail'];
$cvSocial=$_POST['cvSocial'];
$cvWeb=$_POST['cvWeb'];
$cvAdress=$_POST['cvAdress'];
$cvImg=$_FILES['cvImg'];
$cvAwards=$_POST['cvAwards'];
$cvEdu1=$_POST['cvEdu1'];
$cvEduDate1=$_POST['cvEduDate1'];
$cvEduStatus1=$_POST['cvEduStatus1'];
$cvEduAbout1=$_POST['cvEduAbout1'];
$cvEdu2=$_POST['cvEdu2'];
$cvEduDate2=$_POST['cvEduDate2'];
$cvEduStatus2=$_POST['cvEduStatus2'];
$cvEduAbout2=$_POST['cvEduAbout2'];
$cvEdu3=$_POST['cvEdu3'];
$cvEduDate3=$_POST['cvEduDate3'];
$cvEduStatus3=$_POST['cvEduStatus3'];
$cvEduAbout3=$_POST['cvEduAbout3'];
$cvWork1=$_POST['cvWork1'];
$cvWorkDate1=$_POST['cvWorkDate1'];
$cvWorkStatus1=$_POST['cvWorkStatus1'];
$cvWorkAbout1=$_POST['cvWorkAbout1'];
$cvWork2=$_POST['cvWork2'];
$cvWorkDate2=$_POST['cvWorkDate2'];
$cvWorkStatus2=$_POST['cvWorkStatus2'];
$cvWorkAbout2=$_POST['cvWorkAbout2'];
$cvWork3=$_POST['cvWork3'];
$cvWorkDate3=$_POST['cvWorkDate3'];
$cvWorkStatus3=$_POST['cvWorkStatus3'];
$cvWorkAbout3=$_POST['cvWorkAbout3'];
$cvWork4=$_POST['cvWork4'];
$cvWorkDate4=$_POST['cvWorkDate4'];
$cvWorkStatus4=$_POST['cvWorkStatus4'];
$cvWorkAbout4=$_POST['cvWorkAbout4'];

$createCv = new CreateCv($newDb->connection, $cvName, $jobName, $birthDate, $cvAbout, $cvPhone, $cvEmail, $cvSocial, $cvWeb, $cvAdress, $cvImg, $cvAwards, $cvEdu1, $cvEduDate1, $cvEduStatus1, $cvEduAbout1, $cvEdu2, $cvEduDate2, $cvEduStatus2, $cvEduAbout2, $cvEdu3, $cvEduDate3, $cvEduStatus3, $cvEduAbout3, $cvWork1, $cvWorkDate1, $cvWorkStatus1, $cvWorkAbout1, $cvWork2, $cvWorkDate2, $cvWorkStatus2, $cvWorkAbout2, $cvWork3, $cvWorkDate3, $cvWorkStatus3, $cvWorkAbout3, $cvWork4, $cvWorkDate4, $cvWorkStatus4, $cvWorkAbout4);
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online CV Generator</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="row">
    <form class="col s12" id="form" action="" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Name and Surname" type="text" class="validate" name="fullName">
          <label for="full_name">Full name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="jobName">
          <label for="job_name">Job name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="datepicker" name="birthDate">
          <label for="birth_date">Birth Date</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvAbout">
          <label for="cvAbout">About</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvPhone">
          <label for="job_name">Phone number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="cvEmail">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvSocial">
          <label for="job_name">Social network adress</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWeb">
          <label for="job_name">Web Site</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvAdress">
          <label for="job_name">Adress</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="file" class="validate" name="cvImg">
          <label for="job_name">Your image</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvAwards">
          <label for="job_name">Awards</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEdu1">
          <label for="job_name">Education (School, University, Collage)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="validate" name="cvEduDate1">
          <label for="job_name">When you finished?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEduStatus1">
          <label for="job_name">Degree</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEduAbout1">
          <label for="job_name">More info</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEdu2">
          <label for="job_name">Education (School, University, Collage)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="validate" name="cvEduDate2">
          <label for="job_name">When you finished?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEduStatus2">
          <label for="job_name">Degree</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEduAbout2">
          <label for="job_name">More info</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEdu3">
          <label for="job_name">Education (School, University, Collage)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="validate" name="cvEduDate3">
          <label for="job_name">When you finished?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEduStatus3">
          <label for="job_name">Degree</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvEduAbout3">
          <label for="job_name">More info</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWork1">
          <label for="job_name">Job experience (Company Name)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="validate" name="cvWorkDate1">
          <label for="job_name">When you finished?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWorkStatus1">
          <label for="job_name">Status in work</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWorkAbout1">
          <label for="job_name">More info</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWork2">
          <label for="job_name">Job experience (Company Name)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="validate" name="cvWorkDate2">
          <label for="job_name">When you finished?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWorkStatus2">
          <label for="job_name">Status in work</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWorkAbout2">
          <label for="job_name">More info</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWork3">
          <label for="job_name">Job experience (Company Name)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="validate" name="cvWorkDate3">
          <label for="job_name">When you finished?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWorkStatus3">
          <label for="job_name">Status in work</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWorkAbout3">
          <label for="job_name">More info</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWork4">
          <label for="job_name">Job experience (Company Name)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="date" class="validate" name="cvWorkDate4">
          <label for="job_name">When you finished?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWorkStatus4">
          <label for="job_name">Status in work</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="cvWorkAbout4">
          <label for="job_name">More info</label>
        </div>
      </div>
      <input type="submit" name="submit"></input>
    </form>
  </div>
  <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>