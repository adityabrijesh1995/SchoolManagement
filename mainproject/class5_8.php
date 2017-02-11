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
					    <tr><th>NAME:-</th><td> BRIJESH ADITYA</td></tr>
						<tr><th> AGE:-</th><td>21 yrs</td></tr>
                        <tr><th>STATUS:-</th><td>Currently pursing B.Tech with CSE stream from NIT Srinagar.</td></tr>						  
						<tr><th>EXPERIENCE:-</th><td>Worked on PHP,MySql,Data Structures,Algorithms.</td></tr>
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
                        <a class="active-menu"  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Classes</a>
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
                     <h2>Classes </h2>                       
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                                 
            
                  
             
                   <!-- /. ROW  -->
            
			 <?php
                  require_once('connectvars.php');								 									   
				  $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
					?>					
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pill Tabs
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Class 1</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Class 2</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Class 3</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Class 4</a>
                                </li>
								<li class=""><a href="#home-pills" data-toggle="tab">Class 5</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Class 6</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Class 7</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Class 8</a>
                                </li>
								<li class=""><a href="#home-pills" data-toggle="tab">class 9</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Class 10</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Class 11</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Class 12</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="home-pills">
                                    <h4 style="text-align:center;">Class First</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php                                 
										 require_once('connectvars.php');								 									   
				                         $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
									   $query = "SELECT * FROM school_class WHERE class = 5 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									 if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">No Record found.</h4></td></tr>';
										}
										else{
									     while($row = mysqli_fetch_array($data)){
											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4 style="text-align:center;">Class Second</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
									 require_once('connectvars.php');								 									   
				                         $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                                 $query = "SELECT * FROM school_class WHERE class = 6 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									  if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
						</div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4 style="text-align:center;">Class Third</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                $query = "SELECT * FROM school_class WHERE class = 7 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									  if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										}
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4 style="text-align:center;">Class Fourth</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                $query = "SELECT * FROM school_class WHERE class = 8 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									 if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
						</div>
								<div class="tab-pane fade active in" id="home-pills">
                          <h4 style="text-align:center;">Class Fifth</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
									 require_once('connectvars.php');								 									   
				                         $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                                 $query = "SELECT * FROM school_class WHERE class = 5 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);
                                        if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 									   
									     while($row = mysqli_fetch_array($data)){
											echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
						</div>
                                <div class="tab-pane fade" id="profile-pills">
                                     <h4 style="text-align:center;">Class Sixth</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                       $query = "SELECT * FROM school_class WHERE class = 6 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									  if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
						</div>
                                <div class="tab-pane fade" id="messages-pills">
                                   <h4 style="text-align:center;">Class Seventh</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                       $query = "SELECT * FROM school_class WHERE class = 7 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									 if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
						</div>
                                <div class="tab-pane fade" id="settings-pills">
                                   <h4 style="text-align:center;">Class Eighth</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                $query = "SELECT * FROM school_class WHERE class = 8 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									 if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
						</div>
								<div class="tab-pane fade" id="home-pills">
                                     <h4 style="text-align:center;">Class Ninth</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                 $query = "SELECT * FROM school_class WHERE class = 9 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									  if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
						</div>
                                <div class="tab-pane fade" id="profile-pills">
                                     <h4 style="text-align:center;">Class Tenth</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                       require_once('connectvars.php');								 									   
				                       $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);									 
									   $query = "SELECT * FROM school_class WHERE class = 10 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
                                        if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div> 
						</div>
                                <div class="tab-pane fade" id="messages-pills">
                              <h4 style="text-align:center;">Class Eleventh</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php
                                 $query = "SELECT * FROM school_class WHERE class = 11 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);									  
									  if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
						</div>
                                <div class="tab-pane fade" id="settings-pills">
                                     <h4 style="text-align:center;">Class Twelfth</h4>
									 <div class="col-md-12">
                                     <!-- Advanced Tables -->                      
                               <div class="panel-body">
                               <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php  
                                         require_once('connectvars.php');								 									   
				                         $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);									 
									   $query = "SELECT * FROM school_class WHERE class = 10 ORDER BY name ASC";									  
									   $data = mysqli_query($con, $query);										  
									  if(mysqli_num_rows($data) == 0){
											echo '<tr><td  colspan = 5><h4 style="text-align:center;color:red;">Sorry No Record found.</h4></td></tr>';
										}
										else{									 
									     while($row = mysqli_fetch_array($data)){											
                                          echo'<tr class="odd gradeX">';
                                            echo'<td>' . $row['sr_no'] . '</td>';
                                            echo'<td>' . $row['name'] . '</td>';
                                            echo'<td>' . $row['father_name'] . '</td>';
                                            echo'<td class="center">' . $row['dob'] . '</td>';
                                           
                                            echo'<td class="center"><a href="update.php?name=' . $row['name'] . '">
											                             <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>';
											echo' <button class="btn btn-danger"><i class="fa fa-pencil" onclick="return confirm(Are you sure ?)">
																	   </i> Delete</button></td>';
										  echo'</tr>';
										   }
										}
										   ?>
                                                                    
                                    </tbody>
                                </table>
                            </div>                            
                        </div>
						</div>                            
                        </div>
                    </div>
					</div>
            <!--</div>
            
                     /. ROW  -->
               </div>
               </div>
               </div>
			   </div>
             <!-- /. PAGE INNER  -->
            
         <!-- /. PAGE WRAPPER  -->
        
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