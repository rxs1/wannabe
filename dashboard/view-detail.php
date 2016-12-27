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
                    <div class="col-lg-12" id="detail-course">
                     	<div class="col-md-12">
                        	<a href="#menu-toggle"  id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i> Toggle</a>
                      	</div>
                      	<div class="col-md-4">
	                        <h1>Foundation Of Programming</h1>
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
								  <li><a href="#">Course</a></li>
								  <li><a href="#" class="active">Foundation of Programming</a></li>
								</ol>
                      		</div>
                      		<div class="pull-left" id="breadcumbs">
		                      <p>Timeline</p>
                      		</div>
                      	</div>
                      <div class="row">
							<div class="col-md-12">
								
								<div style="display:inline-block;width:100%;overflow-y:auto;">
									<ul class="timeline timeline-horizontal">
										<li class="timeline-item">
											<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h4 class="timeline-title"><a href="detail-materi.php">Hello World</a></h4>
													<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 week ago </small></p>
												</div>
												<div class="timeline-body">
													<p>Firts Step Closer</p>
												</div>
											</div>
										</li>
										<li class="timeline-item">
											<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h4 class="timeline-title"><a href="detail-materi.php">Array</a></h4>
													<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 Week ago </small></p>
												</div>
												<div class="timeline-body">
													<p>An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array, list (vector).</p>
												</div>
											</div>
										</li>
										<li class="timeline-item">
											<div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h4 class="timeline-title"><a href="detail-materi.php">ArrayList</a></h4>
													<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago </small></p>
												</div>
												<div class="timeline-body">
													<p>Resizable-array implementation of the List interface. Implements all optional list operations.</p>
												</div>
											</div>
										</li>
										<li class="timeline-item">
											<div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
											<div class="timeline-panel">
												<div class="timeline-heading">
													<h4 class="timeline-title">Looping</h4>
													<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> ---- </small></p>
												</div>
												<div class="timeline-body">
													<p>Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<p id="description-color">Color Description:
								<i style="
								  background-color: #59ba1f;color: #fff;  border-top-right-radius: 50%;
								  border-top-left-radius: 50%;
								  border-bottom-right-radius: 50%;
								  border-bottom-left-radius: 50%;
								  border: 3px solid #ffffff;
								  padding:10px;
								" class="glyphicon glyphicon-check"></i> Done 

								<i style="
								  background-color: #1f9eba;color: #fff;  border-top-right-radius: 50%;
								  border-top-left-radius: 50%;
								  border-bottom-right-radius: 50%;
								  border-bottom-left-radius: 50%;
								  border: 3px solid #ffffff;
								  padding:10px;
								" class="glyphicon glyphicon-check"></i> In Progress

								<i style="
								  background-color: #ba1f1f;color: #fff;  border-top-right-radius: 50%;
								  border-top-left-radius: 50%;
								  border-bottom-right-radius: 50%;
								  border-bottom-left-radius: 50%;
								  border: 3px solid #ffffff;
								  padding:10px;
								" class="glyphicon glyphicon-check"></i> Did'nt Learn yet 
								</p>
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
