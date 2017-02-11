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
                        <a class="active-menu"  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
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
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i> BlankPage</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2> Welcome to School Dashboard</h2>   
                       
                    </div>
                </div>              
                                
                 <!-- /. ROW  -->
                <hr />                

                 <!-- /. ROW  -->
				             <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="well well-lg">
                        <h4>Staff Picture</h4>
                       <img src="images/staff.jpg" style="width:100%;height:80%;margin:auto;align:center;margin-right:auto;"></img>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="well well-lg">
                        <h4>School Picture</h4>
                        <img src="images/Main.jpg" style="width:100%;height:80%;margin:auto;align:center;margin-right:auto;"></img>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="well well-lg">
                        <h4>Students Picture</h4>
                        <img src="images/students.jpg" style="width:100%;height:80%;margin:auto;align:center;margin-right:auto;"></img>
                    </div>
                </div>
            </div>
			<hr />
				 <div class="row">
				 <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Panel
                        </div>
                        <div class="panel-body">
                            <p>Students numbers: 124<br><br>
                               Visit the<a href="table.php"> student link</a> to grab all information about every student.</p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Staff Panel
                        </div>
                        <div class="panel-body">
                            <p>Staff Members : 13<br><br>
							   Visit the <a href="ui.php">staff link</a> to grab all information about every staff member. </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Result Panel
                        </div>
                        <div class="panel-body">
                            <p>Visit the <a href="chart.php">result link</a> to generate and checkout the result of every student on result link.</p>
                        </div>
                        <br>
                    </div>
                </div>
              
				
             <!-- /. PAGE INNER  -->
            </div><hr />
			<div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Class Panel
                        </div>
                        <div class="panel-body">
                            <p>Total Classes: 12<br><br> Visit the <a href="tab-panel.php">class link</a> to view the list of every class.</p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Registration Panel
                        </div>
                        <div class="panel-body">
                            <p> Visit the <a href="form.php">registration link</a> to register any student of staff</p>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Fee Detail Panel
                        </div>
                        <div class="panel-body">
                            <p> Visit the <a href="#">fee detail link</a> to check the current status about pays and dues of every student every teacher.</p>
                        </div>
                        <br>
                    </div>
                </div>
				
            </div><hr />
			
						
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
