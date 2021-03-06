﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Admin Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
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
					 <td>  <b> NAME:- </b>BRIJESH ADITYA<br>
                           <b>AGE:- </b>21 yrs<br>
                           <b>STATUS:- </b>Currently pursing B.Tech with CSE stream from NIT Srinagar.<br>
						   <b>EXPERIENCE:- </b>Worked on PHP,MySql,Data Structures,Algorithms.</td></tr>
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
                        <a class="active-menu"  href="ui.php"><i class="fa fa-desktop fa-3x"></i> staff</a>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Classes</a>
                    </li>
						   <li  >
                        <a   href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Result</a>
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
                     <h2>Staff</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
					<div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style="text-align:center;heightt:10px;">
                           <h4>  School Staff </h4>
                        </div>
                        <div class="panel-body">
						<?php
						        require_once('connectvars.php');
								 $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			 if(isset($_GET['delete_id'])){
		
		// select image from db to delete
		$id = $_GET['delete_id'];
		$query = "SELECT userPic FROM school_teachers WHERE userID = $id ";
		$data = mysqli_query($con, $query);
		$row = mysqli_fetch_array($data);
		unlink("user_images/".$row['userPic']);
		
		// it will delete an actual record from db
		$query2 = "DELETE FROM school_teachers WHERE userID = $id ";		
		$data = mysqli_query($con, $query2);
		if(mysqli_query($con, $query2)){
		?>	
		<script>
				alert('Record Successfully Deleted ...');
				window.location.href='ui.php';
				</script>
		<?php
		}
		else{
			$errMSG = "Sorry Data Could Not Deleted !";
			echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		}
		
		
	}
	                $query = "SELECT * FROM school_teachers ORDER BY firstName ASC";									  
					$data = mysqli_query($con, $query);
					$count = mysqli_num_rows($data);
						$name = "Father's Name";
                            echo'<div class="table-responsive">';
                                echo'<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
								echo'<h4 style="text-align:center;">Total Staff :'.$count.'</h4>';
                                    echo'<thead>';
                                        echo'<tr>';                                            
                                            echo'<th>Name</th>';
                                            echo'<th>'.$name. '</th>';
											echo'<th>Date of Birth</th>';
											echo'<th>Joining Date</th>';
							                echo'<th>Education</th>';
                                            echo'<th>Mobile No</th>';
                                            echo'<th>Action</th>';
                                        echo'</tr>';
                                    echo'</thead>';
                                    echo'<tbody>';
									 
                              
										
										  
									 if($count == 0){
										echo '<tr><td  colspan = 7><h4 style="text-align:center;color:red;">No Record found.</h4></td></tr>';
									  }
									   else{
									     while($row = mysqli_fetch_array($data)){
											
                                          echo'<tr class="odd gradeX">';                                           
                                            echo'<td>' . $row['firstName'] . '</td>';
                                            echo'<td>' . $row['fatherName'] . '</td>';
											echo'<td>' . $row['DOB'] . '</td>';
											echo'<td>' . $row['userJoiningdate'] . '</td>';
											echo'<td>' . $row['education'] . '</td>';
											echo'<td>' . $row['userMobile'] . '</td>'; 
                                            $onclick = "return confirm('sure to delete ?')";											
                                             echo'<td class="center"><a href="update1.php?edit_id=' .$row['userID'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';											
											echo'<a class="btn btn-danger" href="?delete_id='. $row['userID']. '" style="margin-left:5px;" onclick="'.$onclick.'">
											                             <span class="glyphicon glyphicon-remove-circle"></span> Delete</a></td>';
										  echo'</tr>';
										   }										   
									  
									   }
									  
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
					
					
					
		
                   
                  
             
                <!-- /. ROW  -->
               
                       
                 
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
