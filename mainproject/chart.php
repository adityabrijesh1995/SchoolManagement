<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Admin Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Admin Panel</a> 
            </div>
			
			<button class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top:13px;margin-right:30px;height:35px;width:100px;float: right;padding: 5px 10px 5px 10px;font-size: 14px;">
            Developer
        </button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">About Developer & Designer</h4>
                    </div>
                    <div class="modal-body">
					<table>
					  <tr rowspan="4"><td><img src="user_images/admin.jpg" width="100px" height="150px" /></td>
					 <td>  <b>&nbsp;&nbsp;NAME:- </b>BRIJESH ADITYA<br>
                           <b>&nbsp;&nbsp;AGE:- </b>21 yrs<br>
                           <b>&nbsp;&nbsp;STATUS:- </b>Currently pursing B.Tech with CSE stream from NIT Srinagar.<br>
						   <b>&nbsp;&nbsp;EXPERIENCE:- </b>Worked on PHP,MySql,Data Structures,Algorithms.</td></tr>
					</table>	
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>                    
        </div>
			
  <div style="color: white;
padding: 15px 50px 5px 50px;
margin-right:-40px;
float: right;
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> staff</a>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Classes</a>
                    </li>
						   <li  >
                        <a class="active-menu"   href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Result</a>
                    </li>	
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Student Record</a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Registration panel </a>
                    </li>		
					
					                   
                    <li>
                                                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Fee Detail<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Staff Salary</a>
                            </li>
                            <li>
                                <a href="#">Student Dues</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Generate and View Students Result</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
				
                           
             
	         <div style="margin-left:200px;" class="btn-toolbar">
			 <h4 style="float:left;color:red;padding-top:15px;">Select any action</h4></br> 
										<div class="btn-group" style="margin-left:60px;">
										  <button class="btn btn-default" style="width:170px;">Select Action</button>
										  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="?clswiseid=1">Class Wise OverAll Result</a></li>
											<li class="divider"></li>
											<li><a href="?generateid=2">Generate Result</a></li>
											<li class="divider"></li>
											<li><a href="?viewid=3">View Result</a></li>											
										  </ul>
										</div>
									  </div><br><hr>
					
					
				<?php 
				require_once('connectvars.php');
               $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			   
				 if(isset($_GET['generateid']) || isset($_GET['cls']) || isset($_POST['update'])){
				 
                          						  
                  ?>
				  
				  <div style="margin-left:220px;" class="btn-toolbar">
			         <h4 style="float:left;color:red;padding-top:15px;">Select Class</h4></br> 
										<div class="btn-group" style="margin-left:78px;">
										  <button class="btn btn-default" style="width:135px;">Select class</button>
										  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="?cls=1">Class 1</a></li>
											<li class="divider"></li>
											<li><a href="?cls=2">Class 2</a></li>
											<li class="divider"></li>
											<li><a href="?cls=3">Class 3</a></li>
											<li class="divider"></li>
                                            <li><a href="?cls=4">Class 4</a></li>
											<li class="divider"></li>
											<li><a href="?cls=5">Class 5</a></li>
											<li class="divider"></li>
											<li><a href="?cls=6">Class 6</a></li>
											<li class="divider"></li>
                                            <li><a href="?cls=7">Class 7</a></li>
											<li class="divider"></li>
											<li><a href="?cls=8">Class 8</a></li>
											<li class="divider"></li>
											<li><a href="?cls=9">Class 9</a></li>
											<li class="divider"></li>
                                            <li><a href="?cls=10">Class 10</a></li>
											<li class="divider"></li>
											<li><a href="?cls=11">Class 11</a></li>
											<li class="divider"></li>
											<li><a href="?cls=12">Class 12</a></li>											
										  </ul>
										</div>
									  </div><br><br><hr>
									  
                     <form method="post" name="form" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" >  
			<?php
					
				if(isset($_POST['update'])){
										
				//	$srno = $_POST['srno'];
                    $clas = $_POST['class'];						
					$exam = $_POST['exam'];		
					$rollno = $_POST['rollno'];
					$hindi = $_POST['hindi'] ;
					$english = $_POST['english'] ;
					$sanskrit = $_POST['sanskrit'] ;
					$maths = $_POST['maths'] ;
					$science = $_POST['science'] ;
					$social = $_POST['social'] ;
					$environment = $_POST['environment'] ;
					$health = $_POST['health'] ;
					$rajasthan = $_POST['rajasthan'] ;
					$attendence = $_POST['attendence'] ;
					
					if($exam == "FirstTerm"){
						$code = 1;						
					}
					else if($exam == "SecondTerm"){
						$code = 2;
					}
					else if($exam == "ThirdTerm"){
						$code = 3;
					}
					else if($exam == "HalfYearly"){
						$code = 4;
					}
					else if($exam == "Annual"){
						$code = 5;
					}
					else if($exam == "VivaVoice"){
						$code = 6;
					}
					
					if( !empty($rollno) && !empty($hindi) && !empty($english) && !empty($maths) && !empty($sanskrit) && !empty($social) && !empty($science) &&
					    !empty($rajasthan) && !empty($health) && !empty($attendence) && !empty($environment) && !empty($exam) && !empty($code)){
                          
							 $query = "SELECT * FROM student_result WHERE rollNo = $rollno and userClass = $clas ";
							 $data = mysqli_query($con, $query);							
							 $count = mysqli_num_rows($data);
							 if($count == 0){
								  		$query2 = "INSERT INTO student_result (rollNo, userClass, hindi, examcode,
			                            english, math, science, social, environment, sanskrit, exam, 
					                    health, rajasthan, attendence) VALUES ('$rollno', '$clas', '$hindi', '$code', '$english', '$maths', '$science', 
					                    '$social','$environment', '$sanskrit', '$exam', '$health', '$rajasthan', '$attendence')";
                                     
									 mysqli_query($con, $query2);
								     echo '<script type="text/javascript">alert("Marks saved Successfully ");</script>'; 						  
							  }
							 else{
								 $query2 = "SELECT * FROM student_result WHERE rollNo = $rollno and exam = '$exam' ";
								 $data2 = mysqli_query($con, $query2);
								 $count2 = mysqli_num_rows($data2);
								 if($count2 == 0){
									 
									 $query3 = "INSERT INTO student_result (rollNo, userClass, hindi, examcode,
			                            english, math, science, social, environment, sanskrit, exam, 
					                    health, rajasthan, attendence) VALUES ('$rollno', '$clas', '$hindi', '$code', '$english', '$maths', '$science', 
					                    '$social','$environment', '$sanskrit', '$exam', '$health', '$rajasthan', '$attendence')";
                                     
									if(mysqli_query($con, $query3)){
								     echo '<script type="text/javascript">alert("Marks saved Successfully ");</script>';
									}else{
											$errMSG = "Oops there is an error while querying !";
			                                echo'<div class="alert alert-danger">';
                                            echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
                                            echo'</div>';
									}
								 }
								 else{									 
									echo' <script>';
				                    echo'confirm("Oops this result already exist.Are you sure you want to overload this data?")';
				                    echo'</script>';							
										$query3 = "UPDATE student_result
										            SET  rollNo='$rollno', userClass='$clas', hindi='$hindi', english='$english', math='$maths',
													     science='$science', social='$social', environment='$environment', sanskrit='$sanskrit',
														 exam = '$exam', health='$health', rajasthan='$rajasthan', attendence='$attendence', examcode='$code'";
									    mysqli_query($con, $query3);
									echo' <script>';
				                    echo'alert("Marks Successfully Updated !")';
				                    echo'</script>';
								 }
							 }
							         
							 
					}
					else{
						           
						$errMSG = "You didn't fill all fields in Selected class !";
			        echo'<div class="alert alert-danger">';
                    echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
                    echo'</div>';
					}
					
					
				}				
					
					if(isset($_GET['cls'])){
						
					$cls = $_GET['cls'];
						
					echo'<h4 style="margin-left:450px;">Class : '.$cls.'</h4></br><hr>';                    
					
					echo'<h4 style="text-align:center;color:red;padding-top:15px;"> */  Fill all fields of marks.  */</h4>';
					echo'<h4 style="text-align:center;color:red;padding-top:15px;"> */  If two or more students have same name then please fill correct sr no.  */</h4><br>';										
					
					
					echo'<form  method="post" name="form" id="form" action="chart.php" >'; 
					echo'<table><tr>';
			        echo'<td><h4 style="margin-top:15px;">Roll No : </h4><hr></td>';
					echo'<td><select name="rollno" class="form-control" style="width:100px;margin-left:200px;margin-top:10px;">';
					$query = "SELECT rollNo FROM school_students WHERE userClass = $cls ";
					$data = mysqli_query($con, $query);				
					
					while($row = mysqli_fetch_array($data)){						
                         echo'<option value="'.$row['rollNo'].'">'.$row['rollNo'].'</option>';                   
					}									
					echo'</select><hr></td></tr>';																		 
					echo'<tr><td><h4 style="margin-top:15px;">Class : </h4><hr></td>';
					echo'<td><select name="class" class="form-control" style="width:100px;margin-left:200px;margin-top:10px;">';
					 echo'<option value= "'.$cls.'" >'.$cls.'</option>';                   
										
					echo'</select><hr></td>';
					?>
					<td><h4 style="margin-left:50px;margin-top:15px;">Examination : </h4><hr></td>
                     
                                               <td>      <select name="exam" class="form-control" style="width:110px;margin-left:190px;margin-top:10px;">
                                                         <option value="FirstTerm">First Term</option>
                                                         <option value="SecondTerm">Second Term</option>
												         <option value="ThirdTerm">Third Term</option>
                                                         <option value="HalfYearly">Half Yearly</option>
												         <option value="Annual">Annual</option>
                                                         <option value="VivaVoice">Viva Voice</option>
											             </select><hr></td></tr>						
					<tr><td><h4 style="margin-top:15px;">Hindi : </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="hindi" value="<?php if (!empty($hindi)) echo $hindi; ?>" class="form-control" /><hr></td> 
					<td><h4 style="margin-left:50px;margin-top:15px;">English : </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="english" value="<?php if (!empty($english)) echo $english; ?>" class="form-control" /><hr></td></tr> 
			        <tr><td><h4 style="margin-top:15px;">Maths : </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="maths" value="<?php if (!empty($maths)) echo $maths; ?>" class="form-control" /><hr></td>    
					<td><h4 style="margin-left:50px;margin-top:13px;">Science : </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="science" value="<?php if (!empty($science)) echo $science; ?>" class="form-control" /><hr></td></tr> 
			        <tr><td><h4 style="margin-top:15px;">Social Science : </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="social" value="<?php if (!empty($social)) echo $social; ?>" class="form-control" /><hr></td>
					<td><h4 style="margin-left:50px;margin-top:13px;">Sanskrit : </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="sanskrit" value="<?php if (!empty($sanskrit)) echo $sanskrit; ?>" class="form-control" /><hr></td></tr>
					<tr><td><h4 style="margin-top:15px;">Environmental Studies   </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="environment" value="<?php if (!empty($environment)) echo $environment; ?>" class="form-control" /><hr></td>
					<td><h4 style="margin-left:50px;margin-top:15px;">Health & Phy. Edu.  </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="health" value="<?php if (!empty($health)) echo $health; ?>" class="form-control" /><hr></td></tr>
					<tr><td><h4 style="margin-top:15px;">Rajasthan Studies : </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="rajasthan" value="<?php if (!empty($rajasthan)) echo $rajasthan; ?>" class="form-control" /><hr></td>
					<td><h4 style="margin-left:50px;margin-top:15px;">Attendence : </h4><hr></td>
					<td><input type="text" id="name" style="width:100px;margin-left:200px;margin-top:10px;"name="attendence" value="<?php if (!empty($attendence)) echo $attendence; ?>" class="form-control" /><hr></td></tr>
					<tr>
					<?php
                    echo'<td colspan="4"><br><button type="submit" name="update" class="btn btn-default" style="margin-left:450px;">';
                    echo'<span class="glyphicon glyphicon-save"></span> Update </button>';
                    echo'</td></tr></table>';					  
					echo'</form>';
                    					  
				 }
			   
				 }
				 else if(isset($_GET['clswiseid']) || isset($_POST['submit1']) || isset($_POST['submit2']) || isset($_POST['submit3']) || 
				isset($_POST['submit4']) ||	 isset($_POST['submit5']) || isset($_POST['submit6']) || isset($_POST['submit7']) || isset($_POST['submit8']) ||
 				  isset($_POST['submit9']) || isset($_POST['submit10']) || isset($_POST['submit11']) || isset($_POST['submit12'])){
						  
			    if(isset($_POST['submit2'])){
					$class = "Second";
					$Class = "2";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
                else if(isset($_POST['submit3'])){
					$class = "Third";
					$Class = "3";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
                else if(isset($_POST['submit4'])){
					$class = "Fourth";
					$Class = "4";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
                else if(isset($_POST['submit5'])){
					$class = "Fifth";
					$Class = "5";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
                else if(isset($_POST['submit6'])){
					$class = "Sixth";
					$Class = "6";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
                else if(isset($_POST['submit7'])){
					$class = "Seventh";
					$Class = "7";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
                else if(isset($_POST['submit8'])){
					$class = "Eighth";
					$Class = "8";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
                else if(isset($_POST['submit9'])){
					$class = "Ninth";
					$Class = "9";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
                else if(isset($_POST['submit10'])){
					$class = "Tenth";
					$Class = "10";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
				else if(isset($_POST['submit11'])){
					$class = "Eleventh";
					$Class = "11";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
				else if(isset($_POST['submit12'])){
					$class = "Twelfth";
					$Class = "12";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				}
				 else{
					$class = "First";
					$Class = "1";
					$query = "SELECT * FROM school_students WHERE userClass = $Class  ORDER BY firstName ASC";									  
				$data = mysqli_query($con, $query);	
				$count = mysqli_num_rows($data);
				
				}
                 echo'<form  method="post" name="form" id="form" action="chart.php" >';
				 echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit1" class="btn btn-default" value="Class 1" style="background-color:skyblue;color:white;"/>';
                             echo' <input type="submit" name="submit2" class="btn btn-primary" value ="Class 2" />';
                             echo' <input type="submit" name="submit3" class="btn btn-danger" value ="Class 3" />';
                             echo' <input type="submit" name="submit4" class="btn btn-success" value ="Class 4" />';
                             echo' <input type="submit" name="submit5" class="btn btn-info" value ="Class 5" />';
                             echo' <input type="submit" name="submit6" class="btn btn-warning" value ="Class 6" />';
							 echo' <input type="submit" name="submit7" class="btn btn-default" value ="Class 7" style="background-color:skyblue;color:white;"/>';
                             echo' <input type="submit" name="submit8" class="btn btn-primary" value ="Class 8" />';
                             echo' <input type="submit" name="submit9" class="btn btn-danger" value ="Class 9" />';
                             echo' <input type="submit" name="submit10" class="btn btn-success" value ="Class 10" />';
                             echo' <input type="submit" name="submit11" class="btn btn-info" value ="Class 11" />';
                             echo' <input type="submit" name="submit12" class="btn btn-warning" value ="Class 12" />';							
							echo'</form><br><br>';	
							
					echo'<div class="row">'; 
                     echo'<div class="col-md-6" style="width:800px;margin-left:120px;">';
                        echo'<div class="panel panel-default">';
                        echo'<div class="panel-heading" style="text-align:center;">';
                            echo'Class Wise Result ';
                        echo'</div>';
						echo'<h4 style="margin-left:320px;"> Class : '.$class. '</h4>';
						echo'<h4 style="float:left;margin-left:20px;"> Total Students : '.$count. '</h4>';
                        echo'<h4 style="float:left;margin-left:140px;"> Total Pass : </h4>';
						echo'<h4 style="margin-left:500px;"> Total Fail : </h4>';
                        echo'<div class="panel-body">';
                       echo'<div class="progress progress-striped active">';
                       echo'<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">';
                       echo'<span class="sr-only">60% Complete (success)</span>';
                       echo'</div>';
                       echo'</div>';
                            echo'</div>';
							echo'<h4 style="text-align:center;">Overall result: </h4>';
                            echo'</div>';
                    echo'</div>';                
                  			   
                    echo'</div>';			  
				  }
				  
				  else if(isset($_GET['viewid']) || isset($_POST['search'])){
					echo'<form  method="post" name="form" id="form" action="chart.php" >'; 
					echo'<h4 style="color:red;text-align:center;"> */ Fill the details */ </h4><hr>';
				    echo'<h4 style="float:left;margin-left:25px;">Class : </h4>';
					echo'<select name="class" class="form-control" style="width:100px;margin-top:10px;margin-left:150px;margin-top:35px;">';
					for($i=1;$i<=12;$i++){						
                    echo'<option value="'.$i.'">'.$i.'</option>';                   
					}
                    echo'</select>';					
					echo'<td><h4 style="margin-left:330px;margin-top:-35px;">Roll No : </h4></td></tr>';
					echo'<td><input type="text" id="name" style="width:100px;margin-left:450px;margin-top:-37px;"name="rollno"  class="form-control" />'; 				  
					 echo'<input type="submit" value="View Result" name="search" style="width:120px;margin-left:630px;margin-top:-60px;" class="btn btn-primary"/>';
				    echo'</form>';
				      if(isset($_POST['search'])){
						  $class = $_POST['class'];
						  $rollno = $_POST['rollno'];
						  if(!empty($class) && !empty($rollno)){
							  $query = "SELECT * FROM school_students WHERE userClass = $class and rollNo = $rollno ";
							  $data = mysqli_query($con, $query);
							  while($row = mysqli_fetch_array($data)){
						      $userPic = $row['userPic'];$email=$row['userEmail'];
							  $firstname = $row['firstName'];$DOB = $row['DOB'];
							  $lastname = $row['lastName'];$cast = $row['userCast'];
							  $fathername = $row['fatherName'];$mothername=$row['motherName'];
							  $srno=$row['srNo'];$rollno=$row['rollNo'];$email=$row['userEmail'];
							  $aadhar=$row['userAadhar'];$rollno=$row['rollNo'];
							  $address=$row['userAddress'];$mobile=$row['userMobile'];
							  }
							  
                              $query1 = "SELECT * FROM student_result WHERE userClass = $class and rollNo = $rollno and examcode = 1 ";
							  $data1 = mysqli_query($con, $query1);
							  $count1 = mysqli_num_rows($data1);
							  if($count1==0){
								 $hfirstterm=0;$efirstterm=0;$mfirstterm=0;$sfirstterm=0;$ssfirstterm=0;
                                $rfirstterm=0;$enfirstterm=0;$safirstterm=0;$hefirstterm=0;$afirstterm=0;								 
							  }else{
							  while($row = mysqli_fetch_array($data1)){
								$hfirstterm=$row['hindi'];$efirstterm=$row['english'];$mfirstterm=$row['math'];$sfirstterm=$row['science'];$ssfirstterm=$row['social'];
                                $rfirstterm=$row['rajasthan'];$enfirstterm=$row['environment'];$safirstterm=$row['sanskrit'];$hefirstterm=$row['health'];$afirstterm=$row['attendence'];								
							  }
							  }							  
							  $tfirstterm=$hfirstterm+$efirstterm+$mfirstterm+$sfirstterm+$ssfirstterm+$rfirstterm+$enfirstterm+$safirstterm+$hefirstterm+$afirstterm;
							  
							  $query2 = "SELECT * FROM student_result WHERE userClass = $class and rollNo = $rollno and examcode = 2 ";
							  $data2 = mysqli_query($con, $query2);
							   $count2 = mysqli_num_rows($data2);
							  if($count2==0){
								$hsecondterm=0;$esecondterm=0;$msecondterm=0;$ssecondterm=0;$sssecondterm=0;
								$rsecondterm=0;$ensecondterm=0;$sasecondterm=0;$hesecondterm=0;$asecondterm=0;  
							  }else{
							  while($row = mysqli_fetch_array($data2)){
								$hsecondterm=$row['hindi'];$esecondterm=$row['english'];$msecondterm=$row['math'];$ssecondterm=$row['science'];$sssecondterm=$row['social'];
								$rsecondterm=$row['rajasthan'];$ensecondterm=$row['environment'];$sasecondterm=$row['sanskrit'];$hesecondterm=$row['health'];$asecondterm=$row['attendence'];
							  }
						      }
							  $tsecondterm=$hsecondterm+$esecondterm+$msecondterm+$ssecondterm+$sssecondterm+$rsecondterm+$ensecondterm+$sasecondterm+$hesecondterm+$asecondterm;
							  $query3 = "SELECT * FROM student_result WHERE userClass = $class and rollNo = $rollno and examcode = 3 ";
							  $data3 = mysqli_query($con, $query3);
							   $count3 = mysqli_num_rows($data3);
							  if($count3==0){
								 $hthirdterm=0;$ethirdterm=0;$mthirdterm=0;$sthirdterm=0;$ssthirdterm=0;
								$rthirdterm=0;$enthirdterm=0;$sathirdterm=0;$hethirdterm=0;$athirdterm=0; 
							  }else{
							  while($row = mysqli_fetch_array($data3)){
								$hthirdterm=$row['hindi'];$ethirdterm=$row['english'];$mthirdterm=$row['math'];$sthirdterm=$row['science'];$ssthirdterm=$row['social'];
								$rthirdterm=$row['rajasthan'];$enthirdterm=$row['environment'];$sathirdterm=$row['sanskrit'];$hethirdterm=$row['health'];$athirdterm=$row['attendence'];
							  }
					          }
							  $tthirdterm=$hthirdterm+$ethirdterm+$mthirdterm+$sthirdterm+$ssthirdterm+$rthirdterm+$enthirdterm+$sathirdterm+$hethirdterm+$athirdterm;
							  $query4 = "SELECT * FROM student_result WHERE userClass = $class and rollNo = $rollno and examcode = 4 ";
							  $data4 = mysqli_query($con, $query4);
							   $count4 = mysqli_num_rows($data4);
							  if($count4==0){
								$hhalfterm=0;$ehalfterm=0;$mhalfterm=0;$shalfterm=0;$sshalfterm=0;
								$rhalfterm=0;$enhalfterm=0;$sahalfterm=0;$hehalfterm=0;$ahalfterm=0;  
							  }else{
							  while($row = mysqli_fetch_array($data4)){
								$hhalfterm=$row['hindi'];$ehalfterm=$row['english'];$mhalfterm=$row['math'];$shalfterm=$row['science'];$sshalfterm=$row['social'];
								$rhalfterm=$row['rajasthan'];$enhalfterm=$row['environment'];$sahalfterm=$row['sanskrit'];$hehalfterm=$row['health'];$ahalfterm=$row['attendence'];
							  }
							  }
							  $thalfterm=$hhalfterm+$ehalfterm+$mhalfterm+$shalfterm+$sshalfterm+$rhalfterm+$enhalfterm+$sahalfterm+$hehalfterm+$ahalfterm;
							  $query5 = "SELECT * FROM student_result WHERE userClass = $class and rollNo = $rollno and examcode = 5 ";
							  $data5 = mysqli_query($con, $query5);
							   $count5 = mysqli_num_rows($data5);
							  if($count5==0){
								 $hannualterm=0;$eannualterm=0;$mannualterm=0;$sannualterm=0;$ssannualterm=0;
								$rannualterm=0;$enannualterm=0;$saannualterm=0;$heannualterm=0;$aannualterm=0; 
							  }else{
							  while($row = mysqli_fetch_array($data5)){
								$hannualterm=$row['hindi'];$eannualterm=$row['english'];$mannualterm=$row['math'];$sannualterm=$row['science'];$ssannualterm=$row['social'];
								$rannualterm=$row['rajasthan'];$enannualterm=$row['environment'];$saannualterm=$row['sanskrit'];$heannualterm=$row['health'];$aannualterm=$row['attendence'];
							  }
							  }
							  $tannualterm=$hannualterm+$eannualterm+$mannualterm+$sannualterm+$ssannualterm+$rannualterm+$enannualterm+$saannualterm+$heannualterm+$aannualterm;
							  $query6 = "SELECT * FROM student_result WHERE userClass = $class and rollNo = $rollno and examcode = 6 ";
							  $data6 = mysqli_query($con, $query6);
							   $count6 = mysqli_num_rows($data6);
							  if($count6==0){
								$hvivaterm=0;$evivaterm=0;$mvivaterm=0;$svivaterm=0;$ssvivaterm=0;
								$rvivaterm=0;$envivaterm=0;$savivaterm=0;$hevivaterm=0;$avivaterm=0;  
							  }else{
							  while($row = mysqli_fetch_array($data6)){
								$hvivaterm=$row['hindi'];$evivaterm=$row['english'];$mvivaterm=$row['math'];$svivaterm=$row['science'];$ssvivaterm=$row['social'];
								$rvivaterm=$row['rajasthan'];$envivaterm=$row['environment'];$savivaterm=$row['sanskrit'];$hevivaterm=$row['health'];$avivaterm=$row['attendence'];
							  }
							  }
						     $tvivaterm=$hvivaterm+$evivaterm+$mvivaterm+$svivaterm+$ssvivaterm+$rvivaterm+$envivaterm+$savivaterm+$hevivaterm+$avivaterm;
							 $ttotalterm=$tfirstterm+$tsecondterm+$tthirdterm+$thalfterm+$tannualterm+$tvivaterm;
							 $htotalterm=$hfirstterm+$hsecondterm+$hthirdterm+$hhalfterm+$hannualterm+$hvivaterm;
							 $etotalterm=$efirstterm+$esecondterm+$ethirdterm+$ehalfterm+$eannualterm+$evivaterm;
							 $mtotalterm=$mfirstterm+$msecondterm+$mthirdterm+$mhalfterm+$mannualterm+$mvivaterm;
							 $stotalterm=$sfirstterm+$ssecondterm+$sthirdterm+$shalfterm+$sannualterm+$svivaterm;
							 $sstotalterm=$ssfirstterm+$sssecondterm+$ssthirdterm+$sshalfterm+$ssannualterm+$ssvivaterm;
							 $rtotalterm=$rfirstterm+$rsecondterm+$rthirdterm+$rhalfterm+$rannualterm+$rvivaterm;
							 $entotalterm=$enfirstterm+$ensecondterm+$enthirdterm+$enhalfterm+$enannualterm+$envivaterm;
							 $satotalterm=$safirstterm+$sasecondterm+$sathirdterm+$sahalfterm+$saannualterm+$savivaterm;
							 $hetotalterm=$hefirstterm+$hesecondterm+$hethirdterm+$hehalfterm+$heannualterm+$hevivaterm;
							 $atotalterm=$afirstterm+$asecondterm+$athirdterm+$ahalfterm+$aannualterm+$avivaterm;
						  $fname= "Father's Name :";$mname= "Mother's Name :";$name= "Student Name :";
						 
						  echo'<form  method="post" name="form" id="form" action="chart.php" >';
                          						  
						  echo'<table class="table table-bordered table-responsive">';
                          echo'<tr><td><h2 style="text-align:center;color:blue;"><i>SWAMI VIVEKANAND BAL NIKETAN SENIOR SECONDARY SCHOOL,DALELPURA</i></h2><br><br><br>';						  
						  echo'<h3 style="margin-left:400px;color:red;"><u>Report Card</u>';
						  echo'<input type="button" onclick="window.print()" value="Print Result" style="margin-left:350px;" class="btn btn-danger square-btn-adjust" /></h3><br><hr><br><br>';
						  echo'<h4 style="margin-left:90px;"><b>SR No&nbsp;:</b> &nbsp;&nbsp;'.$srno.'<b style="margin-left:235px;">';
						  echo'Roll No :</b>&nbsp;&nbsp;'.$rollno.'</h4>';
						  echo'<h4>&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$name.'</b> &nbsp;&nbsp;'.$firstname.'&nbsp;'.$lastname.'<b style="margin-left:160px;">';
						  echo'Class :</b>&nbsp;&nbsp;'.$class.'</h4>';
						  echo'<h4>&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$fname.'</b> &nbsp;&nbsp;'.$fathername.'<b style="margin-left:195px;">';
						  echo'DOB :</b>&nbsp;&nbsp;'.$DOB.'</h4>';
						  echo'<h4>&nbsp;&nbsp;&nbsp;<b>'.$mname.'</b> &nbsp;&nbsp;'.$mothername.'<b style="margin-left:228px;">';
						  echo'Cast :</b>&nbsp;&nbsp;'.$cast.'</h4>';
        	              echo'<p style="margin-left:830px;margin-top:-170px;"><img src="user_images/'.$userPic.'" height="150" width="150"  /></p><hr>';						  
                          echo'<h4 style="margin-left:50px;"><b>Aadhar No&nbsp;:</b> &nbsp;&nbsp;'.$aadhar.'&nbsp;<b style="margin-left:115px;">';
						  echo'Email ID&nbsp;:</b>&nbsp;&nbsp;'.$email.'</h4>';
						  echo'<h4 style="margin-left:68px;"><b>Address&nbsp;:</b> &nbsp;&nbsp;'.$address.'<b style="margin-left:185px;">';
						  echo'Mobile No&nbsp;:</b>&nbsp;&nbsp;'.$mobile.'</h4><hr>';						  
						  echo'<h4 style="margin-left:60px;"><b><u>Subjects&nbsp;:</u></b> &nbsp;&nbsp;<u style="margin-left:350px;">Marks</u></h4><hr>';
						  echo'<h5 style="margin-left:260px;">First Term&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Second Term&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
						  echo'Third Term&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Half Yearly&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
						  echo'Annual Exam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Viva Voice&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="margin-left:10px;">Total</b></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Hindi:</b></big>';
						  
						  echo'<lable style="margin-left:155px;">'.$hfirstterm.'</lable><lable style="margin-left:100px;">'.$hsecondterm.'</lable><lable style="margin-left:100px;">'.$hthirdterm.'</lable><lable style="margin-left:90px;">'.$hhalfterm.'</lable><lable style="margin-left:100px;">'.$hannualterm.'</lable><lable style="margin-left:95px;">'.$hvivaterm.'</lable><lable style="margin-left:70px;"><b>'.$htotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>English:</b></big>';
						  
						  echo'<lable style="margin-left:135px;">'.$efirstterm.'</lable><lable style="margin-left:100px;">'.$esecondterm.'</lable><lable style="margin-left:100px;">'.$ethirdterm.'</lable><lable style="margin-left:90px;">'.$ehalfterm.'</lable><lable style="margin-left:100px;">'.$eannualterm.'</lable><lable style="margin-left:95px;">'.$evivaterm.'</lable><lable style="margin-left:70px;"><b>'.$etotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Maths:</b></big>';
						  
						  echo'<lable style="margin-left:148px;">'.$mfirstterm.'</lable><lable style="margin-left:100px;">'.$msecondterm.'</lable><lable style="margin-left:100px;">'.$mthirdterm.'</lable><lable style="margin-left:90px;">'.$mhalfterm.'</lable><lable style="margin-left:100px;">'.$mannualterm.'</lable><lable style="margin-left:95px;">'.$mvivaterm.'</lable><lable style="margin-left:70px;"><b>'.$mtotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Social Science:</b></big>';
						  
						  echo'<lable style="margin-left:80px;">'.$ssfirstterm.'</lable><lable style="margin-left:100px;">'.$sssecondterm.'</lable><lable style="margin-left:100px;">'.$ssthirdterm.'</lable><lable style="margin-left:90px;">'.$sshalfterm.'</lable><lable style="margin-left:100px;">'.$ssannualterm.'</lable><lable style="margin-left:95px;">'.$ssvivaterm.'</lable><lable style="margin-left:70px;"><b>'.$sstotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Science:</b></big>';
						  
						  echo'<lable style="margin-left:130px;">'.$sfirstterm.'</lable><lable style="margin-left:100px;">'.$ssecondterm.'</lable><lable style="margin-left:100px;">'.$sthirdterm.'</lable><lable style="margin-left:90px;">'.$shalfterm.'</lable><lable style="margin-left:100px;">'.$sannualterm.'</lable><lable style="margin-left:95px;">'.$svivaterm.'</lable><lable style="margin-left:70px;"><b>'.$stotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Sanskrit:</b></big>';
						  
						  echo'<lable style="margin-left:126px;">'.$safirstterm.'</lable><lable style="margin-left:100px;">'.$sasecondterm.'</lable><lable style="margin-left:100px;">'.$sathirdterm.'</lable><lable style="margin-left:90px;">'.$sahalfterm.'</lable><lable style="margin-left:100px;">'.$saannualterm.'</lable><lable style="margin-left:95px;">'.$savivaterm.'</lable><lable style="margin-left:70px;"><b>'.$satotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Environmental Studies:</b></big>';
						  
						  echo'<lable style="margin-left:12px;">'.$enfirstterm.'</lable><lable style="margin-left:100px;">'.$ensecondterm.'</lable><lable style="margin-left:100px;">'.$enthirdterm.'</lable><lable style="margin-left:90px;">'.$enhalfterm.'</lable><lable style="margin-left:100px;">'.$enannualterm.'</lable><lable style="margin-left:95px;">'.$envivaterm.'</lable><lable style="margin-left:70px;"><b>'.$entotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Health & phy. Edu.:</b></big>';
						  
						  echo'<lable style="margin-left:45px;">'.$hefirstterm.'</lable><lable style="margin-left:100px;">'.$hesecondterm.'</lable><lable style="margin-left:100px;">'.$hethirdterm.'</lable><lable style="margin-left:90px;">'.$hehalfterm.'</lable><lable style="margin-left:100px;">'.$heannualterm.'</lable><lable style="margin-left:95px;">'.$hevivaterm.'</lable><lable style="margin-left:70px;"><b>'.$hetotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Rajasthan:</b></big>';
						  
						  echo'<lable style="margin-left:111px;">'.$rfirstterm.'</lable><lable style="margin-left:100px;">'.$rsecondterm.'</lable><lable style="margin-left:100px;">'.$rthirdterm.'</lable><lable style="margin-left:90px;">'.$rhalfterm.'</lable><lable style="margin-left:100px;">'.$rannualterm.'</lable><lable style="margin-left:95px;">'.$rvivaterm.'</lable><lable style="margin-left:70px;"><b>'.$rtotalterm.'</b></lable></h5><hr>';
						  echo'<h5 style="margin-left:70px;"><big><b>Attendence:</b></big>';
						  
						  echo'<lable style="margin-left:100px;">'.$afirstterm.'</lable><lable style="margin-left:100px;">'.$asecondterm.'</lable><lable style="margin-left:100px;">'.$athirdterm.'</lable><lable style="margin-left:90px;">'.$ahalfterm.'</lable><lable style="margin-left:110px;">'.$aannualterm.'</lable><lable style="margin-left:95px;">'.$avivaterm.'</lable><lable style="margin-left:80px;"><b>'.$atotalterm.'</b></lable></h5><hr>';
						   echo'<h5 style="margin-left:70px;color:red;"><big><b>Total:</b></big>';
						   
						  echo'<lable style="margin-left:150px;">'.$tfirstterm.'</lable><lable style="margin-left:95px;">'.$tsecondterm.'</lable><lable style="margin-left:90px;">'.$tthirdterm.'</lable><lable style="margin-left:90px;">'.$thalfterm.'</lable><lable style="margin-left:90px;">'.$tannualterm.'</lable><lable style="margin-left:85px;">'.$tvivaterm.'</lable><lable style="margin-left:70px;"><b>'.$ttotalterm.'</b></lable></h5><hr>';
						   $per = $ttotalterm/9;
						   if($per<40){
						        $divsion="Fail";
						   }
						   else{
							   $division="Pass";
							   }
						   echo'<h4 style="margin-left:20px;">Percentages :&nbsp;'.$per.' % </h4>';
						  echo'<h4 style="margin-left:20px;">Division :&nbsp;'.$division.'</h4>';
						  $querytotal="INSERT INTO final_result (userClass, rollNo, total, division, percentage) VALUES ('$class', '$rollno', '$ttotalterm' '$division', '$per') ";
						  mysqli_query($con, $querytotal);
						 
						 
						  echo'</td></tr>';						  
						  echo'</table>';
				          echo'</form>';
						 
              		       } 
	                  else{
						  $errMSG = "You didn't fill all fields in Selected class !";
			        echo'<div class="alert alert-danger">';
                    echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
                    echo'</div>';
					  }     	
	 				  }  
				  }
					 ?>
	
	
	</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
		</div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>