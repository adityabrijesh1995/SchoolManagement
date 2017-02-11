<?php

	
	error_reporting( ~E_NOTICE );
	
	require_once 'dbconfig.php';
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT firstName, lastName, fatherName, userGender, userCast, DOB, qualification, education, userAddress, userMobile, userEmail, userAadhar, userPic FROM school_teachers WHERE userID =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: ui.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$Qualification = $_POST['qualification_name'];
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$fathername = $_POST['father_name'];
		//$mothername = $_POST['mother_name'];
		$gendername = $_POST['gender_name'];
		$castname = $_POST['cast_name'];
		$dobname = $_POST['dob_name'];
		$educationname = $_POST['education_name'];// user name
		$addressname = $_POST['address_name'];// user email
		$mobilename = $_POST['mobile_name'];
		$emailname = $_POST['email_name'];
		$aadharname = $_POST['aadhar_name'];
			
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
					
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
					unlink($upload_dir.$edit_row['userPic']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$userpic = $edit_row['userPic']; // old image from database
		}	
						
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare("UPDATE school_teachers 
									     SET qualification=:qname,
										     firstName=:fname,
											 lastName=:lname,
											 fatherName=:ufaname,											 
											 education=:ucls,
											 userCast=:ucst,											 
											 userGender=:ugen,
											 DOB=:udob,
											 userEmail=:ueid,
											 userMobile=:umo,
											 userAadhar=:uadr,
											 userAddress=:uadrs,										      
										     userPic=:pic 
								       WHERE userID=:uid");
			$stmt->bindParam(':qname',$Qualification);
			$stmt->bindParam(':fname',$firstname);
			$stmt->bindParam(':lname',$lastname);
			$stmt->bindParam(':ufaname',$fathername);
			//$stmt->bindParam(':umoname',$mothername);
			$stmt->bindParam(':ugen',$gendername);
			$stmt->bindParam(':ucls',$educationname);
			$stmt->bindParam(':ucst',$castname);
			$stmt->bindParam(':udob',$dobname);
			$stmt->bindParam(':uadrs',$addressname);			
			$stmt->bindParam(':ueid',$emailname);
			$stmt->bindParam(':umo',$mobilename);
			$stmt->bindParam(':uadr',$aadharname);			
			$stmt->bindParam(':pic',$userpic);
			$stmt->bindParam(':uid',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Record Successfully Updated ...');
				window.location.href='ui.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
			}
		
		}
		
						
	}
	
	
?>

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
                        <a   href="form.php"><i class="fa fa-edit fa-3x"></i> Registration panel </a>
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
                     <h2>Teacher Profile</h2>                      
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                     <div class="col-md-12">
                          <!-- Form Elements -->

					
                         
						 
						 
						 <div class="panel panel-default">
                             <div class="panel-heading" style="text-align:center;weight:bold;">
                                 Update the Teacher's Profile
                             </div>
							 <div class="panel-body">
                                             <div class="row">
                                                

<div class="container" style="width:800px;">

<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>
   
    
	<table class="table table-bordered table-responsive">
	
	<tr>
    	<td><label class="control-label" style="text-align:center;margin-left:10px;">Profile Img.</label></td>
        <td>
        	<p><img src="user_images/<?php echo $userPic; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="user_image" accept="image/*" />
        </td>
    </tr>
	
   	<tr>
    	<td><label class="control-label" style="text-align:center;">First name.</label></td>
        <td><input class="form-control" type="text" name="first_name" value="<?php echo $firstName; ?>" required /></td>
    </tr>
    
	<tr>
    	<td><label class="control-label" style="text-align:center;">Last name</label></td>
        <td><input class="form-control" type="text" name="last_name" value="<?php echo $lastName; ?>" required /></td>
    </tr>
	<tr>
    	<td><label class="control-label" style="text-align:center;">Father's name</label></td>
        <td><input class="form-control" type="text" name="father_name" value="<?php echo $fatherName; ?>" required /></td>
    </tr>	
	<tr>
    	<td><label class="control-label" style="text-align:center;">Gender</label></td>
        <td><input class="form-control" type="text" name="gender_name" value="<?php echo $userGender; ?>" required /></td>
    </tr>
	<tr>
    	<td><label class="control-label" style="text-align:center;">Cast</label></td>
        <td><input class="form-control" type="text" name="cast_name" value="<?php echo $userCast; ?>" required /></td>
    </tr>
	<tr>
    	<td><label class="control-label" style="text-align:center;">Date of Birth</label></td>
        <td><input class="form-control" type="text" name="dob_name" value="<?php echo $DOB; ?>" required /></td>
    </tr>
		<tr>
    	<td><label class="control-label" style="text-align:center;">Qualification</label></td>
        <td><input class="form-control" type="text" name="qualification_name" value="<?php echo $qualification; ?>" required /></td>
    </tr>
    <tr>
    	<td><label class="control-label" style="text-align:center;">Education</label></td>
        <td><input class="form-control" type="text" name="education_name" value="<?php echo $education; ?>" required /></td>
    </tr>
	<tr>
    	<td><label class="control-label" style="text-align:center;">Address</label></td>
        <td><input class="form-control" type="text" name="address_name" value="<?php echo $userAddress; ?>" required /></td>
    </tr>
	<tr>
    	<td><label class="control-label" style="text-align:center;">Mobile no</label></td>
        <td><input class="form-control" type="text" name="mobile_name" value="<?php echo $userMobile; ?>" required /></td>
    </tr>
	
    <tr>
    	<td><label class="control-label" style="text-align:center;">Email ID</label></td>
        <td><input class="form-control" type="text" name="email_name" value="<?php echo $userEmail; ?>" required /></td>
    </tr>
    <tr>
    	<td><label class="control-label" style="text-align:center;">Aadhar no</label></td>
        <td><input class="form-control" type="text" name="aadhar_name" value="<?php echo $userAadhar; ?>" required /></td>
    </tr>
    
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-default" style="margin-left:300px;">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
        
        <a class="btn btn-default" href="ui.php"> <span class="glyphicon glyphicon-backward"></span> cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
</div>




							
                         </div>                  
                     </div>
                     <!-- End Form Elements -->
                 </div>
             </div>
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



			
			      