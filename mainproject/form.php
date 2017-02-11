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
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="photo.css" rel="stylesheet">
   <script src="jquery-3.1.1.min.js"></script>
  
   
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
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> staff</a>
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
                        <a class="active-menu"  href="form.php"><i class="fa fa-edit fa-3x"></i> Registration panel </a>
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
                        <a   href="blank.php"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Registration Panel</h2>                      
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
				 				 
                 <div class="row">
                     <div class="col-md-12">
                          <!-- Form Elements -->
					
<?php
  require_once('appvars.php');
  require_once('connectvars.php');
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$error = true;
	
	
    if (isset($_POST['tcrsubmit'])) {
    // Grab the score data from the POST
  /*  $first_name = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	$last_name = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	$father_name = mysqli_real_escape_string($dbc, trim($_POST['father_name']));	
	$Day = $_POST['Day'];
	$Month = $_POST['Month'];
	$Year = $_POST['Year'];
	$Gender = $_POST['Gender'];
	$Cast = $_POST['Cast'];
	$Address = mysqli_real_escape_string($dbc, trim($_POST['Address']));
	$emailid = mysqli_real_escape_string($dbc, trim($_POST['emailid']));
	$mobileno = mysqli_real_escape_string($dbc, trim($_POST['mobileno']));
	$aadharno = mysqli_real_escape_string($dbc, trim($_POST['aadharno']));	
    $qualification = $_POST['qualification'];	
    $education = $_POST['education'];	
	$dob = $Day.'-'.$Month.'-'.$Year;
    $Screenshot = mysqli_real_escape_string($dbc, trim($_FILES['Screenshot']['name']));
    $Screenshot_type = $_FILES['Screenshot']['type'];
    $Screenshot_size = $_FILES['Screenshot']['size']; */
      $qualification = $_POST['qualification'];	
      $education = $_POST['education'];
	  $firstname = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
	$lastname = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
	$fathername = mysqli_real_escape_string($dbc, trim($_POST['fathername']));
	
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$gender = $_POST['gender'];
	$cast = $_POST['cast'];	
	$DOB = $day.'-'.$month.'-'.$year;
	$address = mysqli_real_escape_string($dbc, trim($_POST['address']));
	$email_id = mysqli_real_escape_string($dbc, trim($_POST['email_id']));
	$mobile_no = mysqli_real_escape_string($dbc, trim($_POST['mobile_no']));
	$aadhar_no = mysqli_real_escape_string($dbc, trim($_POST['aadhar_no']));
	
	$imgFile = $_FILES['Screenshot']['name'];
	$tmp_dir = $_FILES['Screenshot']['tmp_name'];
	$imgSize = $_FILES['Screenshot']['size'];
	
     if($imgFile)
		{
			$upload_dir = 'user_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					//unlink($upload_dir.$edit_row['userPic']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
					if (!empty($firstname) && !empty($lastname) && !empty($fathername) &&
	    !empty($qualification) && !empty($day) && !empty($month) && !empty($year) && !empty($gender)
		&& !empty($cast) &&	!empty($address) && !empty($email_id) && is_numeric($mobile_no) && 
		is_numeric($aadhar_no) &&  !empty($education)){
            
			$query2 = "INSERT INTO school_teachers (userJoiningdate, firstName, lastName, fatherName,
			           userGender, userCast, DOB, qualification, education, userAddress, userEmail, userMobile, 
					  userAadhar, userPic) VALUES (NOW(), '$firstname',
					  '$lastname', '$fathername', '$gender', '$cast', 
					  '$DOB', '$qualification', '$education', '$address', '$email_id', '$mobile_no', '$aadhar_no', 
					  '$userpic')";
            mysqli_query($dbc, $query2);
            $error = true;
            // Confirm success with the user            
            echo '<script type="text/javascript">alert("Congratulation data saved Successfuly as teacher.");</script>';          
             $first_name="";$last_name="";$father_name="";$mobile_no="";$aadhar_no="";$email_id=""; $Screenshot = "";
            // Clear the score data to clear the form
            

            mysqli_close($dbc);
			 @unlink($_FILES['Screenshot']['tmp_name']);
    }
    else {
     // echo '<p class="error" style="color:red;text-align:center;">Please enter all of the information for registration.</p>';
	  $errMSG = "Please enter all of the information for registration in teacher form form.";
	  echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = false;
    }
					
				}// yha
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
					echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = false;
				}
			}
			else
			{
				 $errMSG = "The teacher pic must be a GIF, JPEG, or PNG image file no greater than " . (SD_MAXFILESIZE / 1024) . " KB in size.";
	 echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = false;				
			}	
		}
     else {
            //echo '<p class="error" style="color:red;text-align:center;">Sorry, there was a problem uploading your screen shot image.</p>';
			$errMSG = "Sorry, there was a problem uploading teacher's picture!";
			echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = false;
          }

        /*  }
          else {
            //echo '<p class="error" style="color:red;text-align:center;">Sorry, there was a problem uploading your screen shot image.</p>';
			$errMSG = "Sorry, there was a problem uploading teacher's picture!";
			echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = false;
          }
        }
      }
      else {
      //  echo '<p class="error" style="color:red;text-align:center;">The screen shot must be a GIF, JPEG, or PNG image file no greater than ' . (SD_MAXFILESIZE / 1024) . ' KB in size.</p>';
     $errMSG = "The teacher pic must be a GIF, JPEG, or PNG image file no greater than " . (SD_MAXFILESIZE / 1024) . " KB in size.";
	 echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = false;
	 }

      // Try to delete the temporary screen shot image file
      @unlink($_FILES['Screenshot']['tmp_name']);
    }
    else {
      //echo '<p class="error" style="color:red;text-align:center;">Please enter all of the information for registration in Teachers form.</p>';
	  $errMSG = "Please enter all of the information for registration in Teachers form.";
	  echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = false;
    }*/
  }
    
  else if (isset($_POST['stdsubmit'])) {
    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Grab the score data from the POST
    $rollno = mysqli_real_escape_string($dbc, trim($_POST['rollno']));
	$srno = mysqli_real_escape_string($dbc, trim($_POST['srno']));
    $class = $_POST['class'];
    $firstname = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
	$lastname = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
	$fathername = mysqli_real_escape_string($dbc, trim($_POST['fathername']));
	$mothername = mysqli_real_escape_string($dbc, trim($_POST['mothername']));
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$gender = $_POST['gender'];
	$cast = $_POST['cast'];	
	$DOB = $day.'-'.$month.'-'.$year;
	$address = mysqli_real_escape_string($dbc, trim($_POST['address']));
	$email_id = mysqli_real_escape_string($dbc, trim($_POST['email_id']));
	$mobile_no = mysqli_real_escape_string($dbc, trim($_POST['mobile_no']));
	$aadhar_no = mysqli_real_escape_string($dbc, trim($_POST['aadhar_no']));
/*	$screenshot = mysqli_real_escape_string($dbc, trim($_FILES['screenshot']['name']));
    $screenshot_type = $_FILES['screenshot']['type'];
    $screenshot_size = $_FILES['screenshot']['size'];	*/
	$imgFile = $_FILES['screenshot']['name'];
	$tmp_dir = $_FILES['screenshot']['tmp_name'];
	$imgSize = $_FILES['screenshot']['size'];
	
     if($imgFile)
		{
			$upload_dir = 'user_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					//unlink($upload_dir.$edit_row['userPic']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
					
					if (!empty($firstname) && !empty($lastname) && !empty($fathername) &&
	    !empty($mothername) && !empty($day) && !empty($month) && !empty($year) && !empty($gender)
		&& !empty($cast) &&	!empty($address) && !empty($email_id) && is_numeric($mobile_no) && 
		is_numeric($aadhar_no) && is_numeric($srno) && !empty($class) && !empty($rollno)){
			
    			  
            $query1 = "INSERT INTO school_students (userAdmissiondate, firstName, lastName, fatherName,
			          motherName, userGender, userCast, DOB, userAddress, userEmail, userMobile, rollNo 
					  userAadhar, srNo, userClass, userPic) VALUES (NOW(), '$firstname', 
					  '$lastname', '$fathername', '$mothername', '$gender', '$cast', 
					  '$DOB','$address', '$email_id', '$mobile_no', '$rollno', '$aadhar_no', 
					  '$srno', '$class', '$userpic')";
            mysqli_query($dbc, $query1);
            $error = true;
            // Confirm success with the user            
            echo '<script type="text/javascript">alert("Congratulation data saved Successfuly as student.");</script>';          
             $firstname="";$lastname="";$fathername="";$mothername="";$mobile_no="";$aadhar_no="";$email_id="";$srno="";
			 $screenshot = "";$rollno="";
            // Clear the score data to clear the form
            

            mysqli_close($dbc);
         /* }
          else {
            //echo '<p class="error" style="color:red;text-align:center;">Sorry, there was a problem uploading your screen shot image.</p>';
			$errMSG = "Sorry, there was a problem uploading your screen shot image!";
			echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = true;
          }
        }
		  
      }
      else {
       // echo '<p class="error" style="color:red;text-align:center;">The screen shot must be a GIF, JPEG, or PNG image file no greater than ' . (SD_MAXFILESIZE / 1024) . ' KB in size.</p>';
	    $errMSG = "The screen shot must be a GIF, JPEG, or PNG image file no greater than " . (SD_MAXFILESIZE / 1024) . " KB in size.";
		echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = true;
      }

      // Try to delete the temporary screen shot image file*/
      @unlink($_FILES['screenshot']['tmp_name']);
    }
    else {
     // echo '<p class="error" style="color:red;text-align:center;">Please enter all of the information for registration.</p>';
	  $errMSG = "Please enter all of the information for registration in student form.";
	  echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = true;
    }
					
				}// yha
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
					echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = true;
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = true;				
			}	
		}
     else {
            //echo '<p class="error" style="color:red;text-align:center;">Sorry, there was a problem uploading your screen shot image.</p>';
			$errMSG = "Sorry, there was a problem uploading teacher's picture!";
			echo'<div class="alert alert-danger">';
          echo'<span class="glyphicon glyphicon-info-sign"></span> &nbsp;'.$errMSG;
        echo'</div>';
		$error = true;
          }
   
  }
  
  
  if(isset($_POST['resetbtn'])){
	   $firstname="";$lastname="";$fathername="";$mothername="";$mobile_no="";$aadhar_no="";$email_id="";$srno="";
  }
   
?>
					
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 Registration Form
                             </div>
						
						     <div class="panel-body">
						         <h4>Register As:</h4>
                            <!--     <ul class="nav nav-pills">
                                 <li class="active"><a href="#home-pills" data-toggle="tab">Student</a>
                                 </li>
                                 <li class=""><a href="#profile-pills" data-toggle="tab">Teacher</a>
                                 </li>                                
                                 </ul>-->
								 
                       
                                 <div class="tab-content">
                         <form enctype="multipart/form-data" method="post" name="form" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" >  
                        
                          <input type="submit" name="stu" style="margin-left:20px;" class="btn btn-danger square-btn-adjust" value="student" />
                          <input type="submit" name="tec" style="margin-left:60px;" class="btn btn-danger square-btn-adjust" value="Teacher" />
                        
						
									<div class="tab-pane fade active in" id="home-pills">
								         <div class="panel-body">
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <h3>Personal Details</h3> 
                                                
                                                 <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo SD_MAXFILESIZE; ?>" />
										         <div class="form-group">
                                                     <label>First Name</label>
                                                     <input type="text" id="name" name="firstname" value="<?php if (!empty($firstname)) echo $firstname; ?>" class="form-control" />                                           
                                                 </div>
										         <div class="form-group">
                                                     <label>Last Name</label>
                                                     <input type="text" id="name" name="lastname" value="<?php if (!empty($lastname)) echo $lastname; ?>" class="form-control" />                                            
                                                 </div>
										         <div class="form-group">
                                                     <label>Father's Name</label>
                                                     <input type="text" id="name" name="fathername" value="<?php if (!empty($fathername)) echo $fathername; ?>" class="form-control" />                                            
                                                 </div>
												 <?php
											if(!isset($_POST['tec']) && ($error == true)){	 
										     echo'<div class="form-group">';
											 $mo = "Mother's Name";
                                             echo'<label>'.$mo.'</label>';
                                             echo'<input type="text" id="name" name="mothername" class="form-control" />';                                            
                                             echo'</div>';
											}
												 ?>
                                                     <div class="form-group" >
                                                         <label>Date of Birth&nbsp;&nbsp;&nbsp;  Format(dd-mm-yyyy)</label><br>
											             <div class="" style="float:left;">
                                                             <select name="day" class="form-control" style="width:80px;">                                                             
												             <option value="1">1</option>
                                                             <option value="2">2</option>
                                                             <option value="4">4</option>
                                                             <option value="3">3</option>
												             <option value="5">5</option>
                                                             <option value="6">6</option>
                                                             <option value="7">7</option>
                                                             <option value="8">8</option>
												             <option value="9">9</option>
                                                             <option value="10">10</option>
                                                             <option value="11">11</option>
                                                             <option value="12">12</option>
												             <option value="13">13</option>
                                                             <option value="14">14</option>
												             <option value="15">15</option>
												             <option value="16">16</option>
												             <option value="17">17</option>
												             <option value="18">18</option>
												             <option value="19">19</option>
                                                             <option value="20">20</option>
												             <option value="21">21</option>
												             <option value="22">22</option>
												             <option value="23">23</option>
												             <option value="24">24</option>
												             <option value="25">25</option>
												             <option value="26">26</option>
												             <option value="27">27</option>
												             <option value="28">28</option>
												             <option value="29">29</option>
												             <option value="30">30</option>
												             <option value="31">31</option>
                                                             </select>
														 </div>
											             <div class="" style="float:left;margin-left:15px;">
											                 <select name="month" class="form-control" style="width:120px;">                                                             
												             <option value="January">January</option>
                                                             <option value="February">February</option>
                                                             <option value="March">March</option>
                                                             <option value="April">April</option>
												             <option value="May">May</option>
                                                             <option value="June">June</option>
                                                             <option value="July">July</option>
                                                             <option value="August">August</option>
												             <option value="September">September</option>
                                                             <option value="October">October</option>
                                                             <option value="November">November</option>
                                                             <option value="December">December</option>
                                                             </select>
														 </div>
											             <div class="" style="float:left;margin-left:15px;">
											                 <select name="year" class="form-control" style="width:100px;">                                                             
												             <option value="2000">2000</option>
                                                             <option value="2001">2001</option>
                                                             <option value="2002">2002</option>
                                                             <option value="2003">2003</option>
                                                             </select>
											             </div>
                                                     </div><br><br>
									
										             <div class="form-group" style="float:left;">
                                                         <label>Gender</label>
                                                         <select name="gender" class="form-control" style="width:120px;">
                                                         <option value="Male">Male</option>
                                                         <option value="Female">Female</option>
											             </select>	
                                                     </div>
                                                     <div class="form-group" style="margin-left:200px;">
                                                         <label>Cast</label>
                                                         <select name="cast" class="form-control" style="width:120px;">
                                                         <option value="OBC">OBC</option>
                                                         <option value="GEN">GEN</option>
												         <option value="SBC">SBC</option>
                                                         <option value="ST">ST</option>
												         <option value="SC">SC</option>
                                                         <option value="MIN">MIN</option>
											             </select>	 
                                                     </div>
										
                                                     <div class="form-group">
                                                         <label>Address</label>
                                                         <textarea name="address" class="form-control" rows="3"></textarea>
                                                     </div>
										             <div class="form-group">
                                                         <label>Email ID</label>
                                                         <input type="text" id="name" name="email_id" value="<?php if (!empty($email_id)) echo $email_id; ?>"class="form-control"/>                                            
                                                     </div>
										             <div class="form-group">
                                                         <label>Mobile No</label>
                                                         <input type="text" id="name" name="mobile_no" value="<?php if (!empty($mobile_no)) echo $mobile_no; ?>"class="form-control"style="width:200px;" />                                            
                                                     </div>
										             <div class="form-group">
                                                         <label>Aadhar No</label>
                                                         <input type="text" id="name" name="aadhar_no" value="<?php if (!empty($aadhar_no)) echo $aadhar_no; ?>"class="form-control"style="width:200px;" />                                            
                                                     </div>
										             

                                                 </div>                                
                                                 <div class="col-md-6">
                                                     <h3>Accadmic Details</h3>
                                                     <br>
                                    <?php
												if(!isset($_POST['tec']) && ($error == true)){	 									            
												 echo'<div class="form-group">';
									                     echo'<table>';
										                 echo'<tr><th>';
                                                         echo'<label>Upload Picture</label>';                                        
										                 echo'</th><th>';										 
										                 echo'<input type="file" id="screenshot" name="screenshot" style="margin-left:50px;"/>';
										                 echo'</th></tr>';										             
										                 echo'</table>';
                                                     echo'</div>';
													 
									             echo'<div class="form-group" style="margin-top:13px;float:left;">';
                                                 echo'<label>SR No</label>';
                                                 echo'<input type="text" id="name" name="srno" placeholder="Srno" class="form-control"style="width:100px;" />';
                                                 echo'</div>';
												 echo'<div class="form-group" style="margin-top:30px;margin-left:200px;">';
                                                         echo'<label>Class</label>';
                                                         echo'<select name="class" class="form-control" style="width:80px;">';
												             echo'<option value="1">1</option>';
                                                            echo' <option value="2">2</option>';
                                                             echo'<option value="3">3</option>';
                                                             echo'<option value="4">4</option>';
												             echo'<option value="5">5</option>';
                                                             echo'<option value="6">6</option>';
                                                             echo'<option value="7">7</option>';
                                                             echo'<option value="8">8</option>';
												             echo'<option value="9">9</option>';
                                                             echo'<option value="10">10</option>';
                                                             echo'<option value="11">11</option>';
                                                             echo'<option value="12">12</option>';
														 echo'</select>';
                                                     echo'</div>';
												 echo'<div class="form-group" style="margin-top:-3px;float:left;">';
                                                 echo'<label>Roll No</label>';
                                                 echo'<input type="text" id="name" name="rollno" placeholder="rollno" class="form-control"style="width:100px;" />';
                                                 echo'</div>';	 
													 
												 
												}
                                                 else{
													 echo'<div class="form-group">';
									                     echo'<table>';
										                 echo'<tr><th>';
                                                         echo'<label>Upload Picture</label>';                                        
										                 echo'</th><th>';										 
										                 echo'<input type="file" id="Screenshot" name="Screenshot" style="margin-left:50px;"/>';
										                 echo'</th></tr>';										             
										                 echo'</table>';
                                                     echo'</div><br>'; 
													  echo'<div class="form-group" style="margin-top:28px;">';
                                                      echo'<label>Qualification</label>';
                                                      echo'<select name="qualification" class="form-control" >';
                                                      echo'<option value="graduate">Graduate</option>';
												      echo'<option value="postgraduate">Post Graduate</option>';
											          echo'</select>';
                                                      echo'</div>';
												
												echo'<div class="form-group" style="margin-top:0px;">';
                                                      echo'<label>Education</label>';
                                                      echo'<select name="education" class="form-control" style="width:100px;">';
                                                      echo'<option value="10">10</option>';
                                                      echo'<option value="bed">B.Ed.</option>';
												      echo'<option value="ba">B.A.</option>';
                                                      echo'<option value="12">10+2</option>';												        
											          echo'</select>';	 
                                                     echo'</div>';	  
													  
												 }												
													 ?>
													
													 <div style="margin-top:200px;margin-left:100px;">
													 <?php 
													 if(!isset($_POST['tec']) && ($error == true)){	
                                                         echo'<input type="submit" value="Register" name="stdsubmit" style="width:100px;" class="btn btn-primary"/>';
													 }
                                                      else{													 
														 echo'<input type="submit" value="Register" name="tcrsubmit" style="width:100px;" class="btn btn-primary"/>';
													  }
														 ?>
														 <input type="submit" class="btn btn-primary" name="resetbtn" value="Reset" style="margin-left:20px;background-color:gray;width:100px;"  />
                                                                                                           
													 </div>												  
												 </div>
												 
                                             
											 
                                             </div>
                                         </div>
                                     </div> 							 
                                    <!-- <div class="tab-pane fade active in" id="profile-pills">
                                        <div class="tab-pane fade active in" id="profile-pills">                                    								
								         <div class="panel-body">
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <h3>Personal Details</h3> 
                                                 <form enctype="multipart/form-data" method="post" name="form" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                                                 <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo SD_MAXFILESIZE; ?>" />
                                                 <div class="form-group">
                                                     <label>First Name</label>
                                                     <input type="text" id="name" name="first_name" value="<?php if (!empty($first_name)) echo $first_name; ?>" class="form-control" />                                           
                                                 </div>
										         <div class="form-group">
                                                     <label>Last Name</label>
                                                     <input type="text" id="name" name="last_name" value="<?php if (!empty($last_name)) echo $last_name; ?>" class="form-control" />                                            
                                                 </div>
										         <div class="form-group">
                                                     <label>Father's Name</label>
                                                     <input type="text" id="name" name="father_name" value="<?php if (!empty($father_name)) echo $father_name; ?>" class="form-control" />                                            
                                                 </div>
										         
                                                 <div class="form-group" >
                                                         <label>Date of Birth&nbsp;&nbsp;&nbsp;  Format(dd-mm-yyyy)</label><br>
											             <div class="" style="float:left;">
                                                             <select name="Day" class="form-control" style="width:80px;">
                                                             <option>Day</option>
												             <option value="1">1</option>
                                                             <option value="2">2</option>
                                                             <option value="3">3</option>
                                                             <option value="4">4</option>
												             <option value="5">5</option>
                                                             <option value="6">6</option>
                                                             <option value="7">7</option>
                                                             <option value="8">8</option>
												             <option value="9">9</option>
                                                             <option value="10">10</option>
                                                             <option value="11">11</option>
                                                             <option value="12">12</option>
												             <option value="13">13</option>
                                                             <option value="14">14</option>
												             <option value="15">15</option>
												             <option value="16">16</option>
												             <option value="17">17</option>
												             <option value="18">18</option>
												             <option value="19">19</option>
                                                             <option value="20">20</option>
												             <option value="21">21</option>
												             <option value="22">22</option>
												             <option value="23">23</option>
												             <option value="24">24</option>
												             <option value="25">25</option>
												             <option value="26">26</option>
												             <option value="27">27</option>
												             <option value="28">28</option>
												             <option value="29">29</option>
												             <option value="30">30</option>
												             <option value="31">31</option>
                                                             </select>
														 </div>
											             <div class="" style="float:left;margin-left:15px;">
											                 <select name="Month" class="form-control" style="width:120px;">
                                                             <option>Month</option>
												             <option value="January">January</option>
                                                             <option value="February">February</option>
                                                             <option value="March">March</option>
                                                             <option value="April">April</option>
												             <option value="May">May</option>
                                                             <option value="June">June</option>
                                                             <option value="July">July</option>
                                                             <option value="August">August</option>
												             <option value="September">September</option>
                                                             <option value="October">October</option>
                                                             <option value="November">November</option>
                                                             <option value="December">December</option>
                                                             </select>
														 </div>
											             <div class="" style="float:left;margin-left:15px;">
											                 <select name="Year" class="form-control" style="width:100px;">
                                                             <option>Year</option>
												             <option value="2000">1970</option>
                                                             <option value="2001">1971</option>
                                                             <option value="2002">1972</option>
                                                             <option value="2003">1973</option>
															 <option value="2000">1974</option>
                                                             <option value="2001">1975</option>
                                                             <option value="2002">1976</option>
                                                             <option value="2003">1977</option>
															 <option value="2000">1978</option>
                                                             <option value="2001">2001</option>
                                                             <option value="2002">2002</option>
                                                             <option value="2003">2003</option>
                                                             </select>
											             </div>
                                                     </div><br><br>
									
										             <div class="form-group" style="float:left;">
                                                         <label>Gender</label>
                                                         <select name="Gender" class="form-control" style="width:120px;">
                                                         <option value="Male">Male</option>
                                                         <option value="Female">Female</option>
											             </select>	
                                                     </div>
                                                     <div class="form-group" style="margin-left:200px;">
                                                         <label>Cast</label>
                                                         <select name="Cast" class="form-control" style="width:120px;">
                                                         <option value="OBC">OBC</option>
                                                         <option value="GEN">GEN</option>
												         <option value="SBC">SBC</option>
                                                         <option value="ST">ST</option>
												         <option value="SC">SC</option>
                                                         <option value="MIN">MIN</option>
											             </select>	 
                                                     </div>
										
                                                     <div class="form-group">
                                                         <label>Address</label>
                                                         <textarea name="Address" class="form-control" rows="3"></textarea>
                                                     </div>
										             <div class="form-group">
                                                         <label>Email ID</label>
                                                         <input type="text" id="name" name="emailid" value="<?php if (!empty($emailid)) echo $emailid; ?>"class="form-control"/>                                            
                                                     </div>
										             <div class="form-group">
                                                         <label>Mobile No</label>
                                                         <input type="text" id="name" name="mobileno" value="<?php if (!empty($mobileno)) echo $mobileno; ?>"class="form-control"style="width:200px;" />                                            
                                                     </div>
										             <div class="form-group">
                                                         <label>Aadhar No</label>
                                                         <input type="text" id="name" name="aadharno" value="<?php if (!empty($aadharno)) echo $aadharno; ?>"class="form-control"style="width:200px;" />                                            
                                                     </div>
										             

                                                 </div>                                
                                                 <div class="col-md-6">
                                                     <h3>Accadmic Details</h3>
                                                     <br>
									                 <div class="form-group">
									                     <table>
										                 <tr><th>
                                                         <label>Upload Picture</label>                                        
										                 </th><th>										 
										                 <input type="file" id="Screenshot" name="Screenshot" style="margin-left:30px;"/>
										                 </th></tr>
										             <!--<input name="file" type="file">									
										                 <div id="preview">
                                                         <img id="previewimg" src=""><img id="deleteimg" src="wrong.png">                                             
                                                         </div>
										                 </td></tr>
										                 </table>	
                                                     </div>
													 <div class="form-group" style="margin-top:28px;">
                                                         <label>Qualification</label>
                                                         <select name="qualification" class="form-control" >                                                         
                                                         <option value="graduate">Graduate</option>
												         <option value="postgraduate">Post Graduate</option>                                                         												        
											             </select>	 
                                                     </div>
													 <div class="form-group" style="margin-top:0px;">
                                                         <label>Education</label>
                                                         <select name="education" class="form-control" style="width:100px;">
                                                         <option value="10">10</option>
                                                         <option value="bed">B.Ed.</option>
												         <option value="ba">B.A.</option>
                                                         <option value="12">10+2</option>												        
											             </select>	 
                                                     </div><br>
									                 <div style="margin-top:60px;margin-left:100px;">
                                                         <input type="submit" value="Register" name="tcrsubmit" style="width:100px;" class="btn btn-primary"/>
                                                         <input type="submit" class="btn btn-primary" name="resetbtn" value="Reset" style="margin-left:20px;background-color:gray;width:100px;"  />
                                                     </div>	-->
                                                 
												 
                                             </form>
                                             </div>
                                    <!--     </div> tab-content above -->
                                     </div>
									 </div> 
                                 
								 </div>	

								 
                             </div>
                         </div>
						 
                     </div>
                     <!-- End page-wrapper above -->
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
