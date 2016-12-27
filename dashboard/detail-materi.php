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
								    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
								      <div class="panel-body">
								        <p>What is Java?</p>
										<p>Java is a 3rd Generation Object Oriented programming Language, developed by James Gosling in the year 1995. It was initially codenamed as Green and hypothetically called Oak named after the Oak tree outside Gosling’s house.
										It is case sensitive and has a unique two step translation process that includes both Compilation and Interpretation which makes Java Platform independent.
										</p>
										<p>
										What is Procedure Oriented Programming Language?
										Pop is a Procedural Oriented Programming Language. In this, the stress is laid on function rather than data. Data may be kept floating throughout the Programming. Hence by scanning the whole program from beginning to the end and we can rectify any error caused. E.g. of POP based language are GW-BASIC, C, etc…
										Characteristics of POP
										</p>
										<p>
										1) Emphasis is laid on functions (Logical steps).
										</p>
										<p>
										2) Functions share global data.
										</p>
										<p>
										3) Data values can keep floating from one function to another.
										</p>
										<p>
										4) Uses top down approach of programming.
										</p>

											<br>
											<a href="https://nilabja.wordpress.com/computers/theory-of-java/"><strong>source</strong></a>
											<br>
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
								       <h3> Follow the Instruction in This Video</h3>
								       <iframe width="560" height="315" src="https://www.youtube.com/embed/ue3bhCZ60Jk" frameborder="0" allowfullscreen></iframe>
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
											<p>In this section, our plan is to lead you into the world of Java programming by taking you through the three basic steps required to get a simple program running. As with any application, you need to be sure that Java is properly installed on your computer. You also need an editor and a terminal application. Here are system specific instructions for three popular home operating systems. [ Mac OS X · Windows · Linux ]</p>

											<p>Programming in Java. We break the process of programming in Java into three steps:
											<ol>
											<li><b>Create</b> the program by typing it into a text editor and saving it to a file named, say, MyProgram.java.
											</li>
											<li><b>Compile</b> it by typing "javac MyProgram.java" in the terminal window.</li>
											
											<li><b>Execute</b> (or run) it by typing "java MyProgram" in the terminal window.</lo>
											</ol>
											</p>
											<p>

											The first step creates the program; the second translates it into a language more suitable for machine execution (and puts the result in a file named MyProgram.class); the third actually runs the program.
											</p>
											<code>
												
																		public class Hello World{
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
											<br>
											<a href="http://introcs.cs.princeton.edu/java/11hello/"><strong>source</strong></a>
											<br>
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
								         <a style="color: white" id="login" class="btn btn-primary btn-lg " href="#" data-toggle="modal" data-target="#myModal"><span><i class="glyphicon glyphicon-user"></i></span>  Do Test Now !</a> 
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
																		       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println('I Love PBK');
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
