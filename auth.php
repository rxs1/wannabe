<?php
session_start();
if(isset($_SESSION['username'])){

}else{
	$_SESSION['username'] = "demo@gmail.com";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authenticate</title>
	<!-- Custom -->
<link rel="stylesheet" href="assets/css/custom.css" >
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>
<body class="wow flipInX">
<div class="loader"></div>
<br>
<center><p style="font-family: 'Roboto Condensed', sans-serif;">Please Wait. Your Data in Process...</p></center>
<?php
header('refresh: 3; url=dashbord/index.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.

?>
<script> new WOW().init(); </script> 
</body>
</html>