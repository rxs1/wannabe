<!DOCTYPE html>
<html lang="en">

<head>
<?php
	$title= "Hello World";
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
								  <li><a href="course.php">Course</a></li>
								  <li><a href="view-detail.php" >Foundation of Programming</a></li>
								  <li><a href="detail-materi.php" class="active">Hello World</a></li>
								</ol>
                      		</div>
                      		<div class="pull-left" style="font-size: 24px;">
		                      <p>Hello World</p>
		                      <hr>
                      		</div>
                      	</div>
                      <div class="row">
							<div class="col-md-12" id="accordions">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								          What is Java?
								        </a> 
								        <a>
								        	<i style="
								  background-color: #59ba1f;color: #fff;  border-top-right-radius: 50%;
								  border-top-left-radius: 50%;
								  border-bottom-right-radius: 50%;
								  border-bottom-left-radius: 50%;
								  border: 4px solid #ffffff;
								  padding:7px;
								" class="glyphicon glyphicon-check"></i>
								        </a>
								      </h4>
								    </div>
								    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								      <div class="panel-body">
								        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingTwo">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								          Installation
								        </a>
								           <a>
								        	<i style="
								  background-color: #59ba1f;color: #fff;  border-top-right-radius: 50%;
								  border-top-left-radius: 50%;
								  border-bottom-right-radius: 50%;
								  border-bottom-left-radius: 50%;
								  border: 4px solid #ffffff;
								  padding:7px;
								" class="glyphicon glyphicon-check"></i>
								        </a>
								      </h4>
								    </div>
								    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								      <div class="panel-body">
								        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								      </div>
								    </div>
								  </div>
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingThree">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								          Example Code
								        </a>
								           <a>
								        	<i style="
								  background-color: #59ba1f;color: #fff;  border-top-right-radius: 50%;
								  border-top-left-radius: 50%;
								  border-bottom-right-radius: 50%;
								  border-bottom-left-radius: 50%;
								  border: 4px solid #ffffff;
								  padding:7px;
								" class="glyphicon glyphicon-check"></i>
								        </a>
								      </h4>
								    </div>
								    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								      <div class="panel-body">
								        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								      </div>
								    </div>
								  </div>
								  	<div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingFour">
								      <h4 class="panel-title">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								          Short Test
								        </a>
								           <a>
								        	<i style="
								  background-color: #59ba1f;color: #fff;  border-top-right-radius: 50%;
								  border-top-left-radius: 50%;
								  border-bottom-right-radius: 50%;
								  border-bottom-left-radius: 50%;
								  border: 4px solid #ffffff;
								  padding:7px;
								" class="glyphicon glyphicon-check"></i>
								        </a>
								      </h4>
								    </div>
								    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								      <div class="panel-body" >
								         <a id="login" class="btn btn-primary btn-lg " href="#" data-toggle="modal" data-target="#myModal"><span><i class="glyphicon glyphicon-user"></i></span>  Do Test Now !</a>
								         <!-- Modal -->
										<div id="myModal" class="modal fade" role="dialog">
										  <div class="modal-dialog">

										    <!-- Modal content-->
										    <div class="modal-content">
										    
										      
										      <div class="modal-body">
										        
										        <div class="container">
										          <div class="row">

										                
										                <form >
										                	<label for="basic-url">1. Write java code to get output "I Love PBK" with class name is PBK</label>
															<p class="text-success">your answer is correct.</p>
															<div class="input-group"  contenteditable="true">
																
																<p>
																	<code>
																		public class PBK{
																			<br>
																		    &nbsp;&nbsp;&nbsp;public static void main(String[] args) {
																		    <br>
																		        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Prints Hello, World to the terminal window.
																		    <br>
																		       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println('Hello, World');
																		    <br>
																		    &nbsp;&nbsp;&nbsp;}
																		    <br>
																		}
																	</code>
																</p>	
															</div>
															
										                </form> 
										              
										          </div>
										        </div>

										      </div>
										    
										    </div>

										  </div>
										</div>
   
								      </div>
								    </div>
								  </div>
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
