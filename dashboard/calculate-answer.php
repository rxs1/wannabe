
<!DOCTYPE html>
<html>
<head>
	<title>Calculating Answer</title>
	<!-- Custom -->
<link rel="stylesheet" href="../assets/css/custom.css" >

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
</head>
<body class="wow flipInX">
<div class="loader"></div>
<br>
<center><p style="font-family: 'Roboto Condensed', sans-serif;">Calculating your Answer....</p></center>
<?php
session_start();
$_SESSION['result']= '1';
header('refresh: 5; url=identify.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.


?>
<script> new WOW().init(); </script> 
</body>
</html>