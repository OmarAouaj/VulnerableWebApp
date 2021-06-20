<?php
ob_start();
session_start();
include("db_config.php");
if (!$_SESSION["username"]){
header('Location:login.php?msg=1');
}
ini_set('display_errors', 1);
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>IP Pingger</title>

    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				Welcome <?php echo $_SESSION["username"]; ?> to our IP pingger!!</a>
			</p>
        </div>
		<div class="response">
		<form method="POST" autocomplete="off">
			<p style="color:white">
				Enter IP:  <input type="text" id="ip" name="ip"><br />
			</p>
			<br />
			<p>
			<input type="submit" value="Submit"/> 
			<input type="reset" value="Reset"/>
			</p>
		</form>
        </div>
      <?php
      if(isset($_POST["ip"])){
      	$ip = $_POST["ip"];
      	system("ping -c 2".$ip);
      } 
      ?>
	  <div class="footer">
		<p><h4><a href="logout.php">Logout</a><h4> </p>
      </div>
	  
	  
	  <div class="footer">
		<p>Made By AOUAJ Omar, EL FILALI Abdellah, EL JOUHARI Chaymae & RAHALI Oussama</p>
      </div>

	</div>
  
</body>
</html>