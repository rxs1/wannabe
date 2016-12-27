<!DOCTYPE html>
<html lang="en">

<head>
<?php
	$title= "Your Course";
	include 'head.php';
?>

</head>

<body>

    <div id="wrapper">

	<?php
	include 'sidebar.php';
	?>        
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" id="course">
                     	<div class="col-md-12">
                        	<a href="#menu-toggle"  id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i> Toggle</a>
                      	</div>
                      	<div class="col-md-4">
	                        <h1>Your Course</h1>
	                    </div>
	                    <div class="col-md-8">
	                    	Your Current Progress:
	                          <div class="progress" style="height: 30px;">
	                          <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="80"
	                          aria-valuemin="0" aria-valuemax="100" style="width:80%">
	                            <p style="padding: 4px;font-size: 24px;">80%</p> 
	                          </div>
	                        </div>
                        </div>
                        <div class="col-md-12">
                        <hr>
                      	</div>
                      	<div class="col-md-12">
                       		<div class="pull-right" id="breadcumbs">
		                      	<ol class="breadcrumb">
								  <li><a href="#" class="active">Course</a></li>
								</ol>
                      		</div>
                      	</div>
                      
                      	<div class="row">
						  <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <img src="../assets/img/course/course1.jpg" alt="...">
						      <div class="caption">
						        <h3>Foundation Of Programming</h3>
						        <p>This is one of famous course around programmer</p>
						        <p><a href="view-detail.php" class="btn btn-primary" role="button">Learn Now</a> 
						      </div>
						    </div>
						  </div>
						   <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <img src="../assets/img/course/course2.png" alt="...">
						      <div class="caption">
						        <h3>Advance Programming</h3>
						        <p>This is one of famous course around programmer step 2 from <b>Foundation Of Programming</b></p>
						        <p><a href="view-detail.php" class="btn btn-primary" role="button">Learn Now</a> 
						      </div>
						    </div>
						  </div>
						   <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <img src="../assets/img/course/course2.jpg" alt="...">
						      <div class="caption">
						        <h3>Basic Web Peogramming</h3>
						        <p>code Website with(PHP, CSS, HTML, Javascript and etc)</p>
						        <p><a href="view-detail.php" class="btn btn-primary" role="button">Learn Now</a> 
						      </div>
						    </div>
						  </div>
						</div>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

 	<?php
	include 'footer.php';
	
	?>        
   

</body>

</html>
