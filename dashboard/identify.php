<!DOCTYPE html>
<html>
<head>
	<?php
	$title= "Identification Talent";
	include 'head.php';
	?>
</head>
<body>
	<nav class="navbar navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a id="logo" class="navbar-brand" href="#"><span><img id="logo-img" height="45" width="45" src="../assets/img/logo.png"></span>WannaBe</a>
	    </div>
	    <ul id="menu" class="nav navbar-nav">
	      <li class="active"><a href="../index.php">Home</a></li>
	      <li><a href="../aboutus.php">About</a></li>  
	    </ul>
	      <a  href="index.php" id="login" class="btn btn-primary btn-lg pull-right" ><span><i class="glyphicon glyphicon-user"></i></span>  Mr. John Go to Dashboard</a>
	  </div>
	</nav>

	<div id="identify-content">
		<div class="container">
			<div class="row">
			<div class="col-md-12"><hr></div>
				<div class="col-md-12" id="decision">
					<div class="col-md-5">
						<p id="text-left"><b>Identify Using Personality Test <a href="identify-test.php"> <i class="fa fa-search" aria-hidden="false"></i> Now!</a></b> .</p>
					</div>

					<div class="col-md-1">
						<p id="or">OR</p>
					</div>

					<div class="col-md-5">
						<p id="text-left"><b>Choose your Desire Profesional Job Below.</p>
					</div>
				</div>	
				<div class="col-md-12"><hr></div>

				<div class="col-md-12" id="list-profesional">
					<?php
					$checked="";
						session_start();
						if(isset($_SESSION['result'])){
							?>
							<p style="font-size: 34px" class="text-success">
							Your Result is <strong>Programmer</strong> 100% you can choose this result or choose your desire Profesional.
							</p>

							<?php

							unset($_SESSION['result']);
							$checked="checked='checked'";
						}
					?>
					<br>
					<br>
					<div class="radio">
						<form action="choose-profesional.php">
							<label><input type="radio" name="optradio" <?=$checked?>	> <i class="fa fa-desktop" aria-hidden="true" ></i> Programmer</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="optradio"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Teacher</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="optradio"><i class="fa fa-cogs" aria-hidden="true"></i> Mechanic</label>
							</div>
							<br>
							<br>
							<br>
							<div class="form-input">
								<input type="submit" value="Confirm" class="btn btn-primary btn-lg">
							</div>
							<br>
							<br>
							<br>
						</form>

				</div>
			</div>
		</div>
	</div>

	<div id="footer-identify" class="container-fluid">
		<div class="row">
			<div class="col-md-12" id="credit">
			<p>Copyright &copy; Wannabe Profesional Course 2016 All Right reserved</p>
			</div>
		</div>
	</div>

</body>
</html>