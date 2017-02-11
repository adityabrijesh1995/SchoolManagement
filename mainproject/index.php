
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>SWAMI VIVEKANAND BAL NIKETAN SENIOR SECONDARY SCHOOL,DALELPURA</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="lgn.css" />
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
		});
	});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h4><a>SWAMI  VIVEKANAND  BAL  NIKETAN  SENIOR  SECONDARY  SCHOOL, DALELPURA</a></h4>
		</div>
		
	</div>
	
	<div id="slider">
		<div class="viewer">
			<div class="reel">
				<div class="slide">
					<img src="images/slide01.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/slide02.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/slide03.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/slide04.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="images/slide05.jpg" alt="" />
				</div>
			</div>
		</div>
		<div class="indicator">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>5</span>
		</div>
	</div>
	<div id="page">
	<?php 
 require_once('connectvars.php');

  // Start the session
  session_start();

  // Clear the error message
  $error_msg = "";
  
  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
      // Connect to the database
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
      // Grab the user-entered log-in data
      $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

      if (!empty($user_username) && !empty($user_password)) {
        // Look up the username and password in the database
        $query = "SELECT id, username FROM school_user WHERE username = '$user_username' AND password = SHA1('$user_password')";
        $data = mysqli_query($dbc, $query);
		//if( $data == true ){
             $result = mysqli_num_rows($data);			 
             if ( $result == 1 ) {
             // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
             $row = mysqli_fetch_array($data);
             $_SESSION['user_id'] = $row['id'];
             $_SESSION['username'] = $row['username'];
             setcookie('user_id', $row['id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
             setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
             $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/dashboard.php';
             header('Location: ' . $home_url);
            }		
            else {
				
             // The username/password are incorrect so set an error message
             $error_msg = 'Sorry, you must enter a valid username and password to log in.';
            }
		}
        else {
        // The username/password weren't entered so set an error message
        $error_msg = 'Sorry, you must enter your username and password to log in.';
      }
    }
  }

  

  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if (empty($_SESSION['user_id'])) {
    echo '<p class="error" style="color:white;">' . $error_msg . '</p>';
	
?>
	<section class="container">
    <div class="login">
      <h1>School Administration Login Panel</h1>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p><input type="text" name="username" value="<?php if (!empty($username)) echo $username; ?>" placeholder="Username "></p>
        <p><input type="password" name="password" value="<?php if (!empty($password)) echo $password; ?>" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="index.php">Click here to reset it</a>.</p>
    </div>
  </section>
	<?php
  }
  else {
    // Confirm the successful log-in
    
	$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/dashboard.php';
             header('Location: ' . $home_url);
			/* echo '<script language= "javascript">';
			 echo 'alert("Congratulation!! You are logged in ")';
			 echo '</script>';*/
  }
?>	
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
		<div id="page-bottom-content">
			<h3>SCHOOL&nbsp; OFFICE &nbsp;ADDRESS:-</h3>
			<p>
			    Surendra Prakash Aditya (Principal)<br>
				Mob-9460620415<br>
				Vpo-Dalelpura<br>
				Teh-Khetri<br>
				Dist-Jhunjhunu<br>
				Rajasthan(332716)
			</p>
			
		</div>
		
		<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Design by <a >BRIJESH ADITYA</a>.
</div>
</body>
</html>

