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
    <title>The Ultimate Printer</title>

    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				Welcome <?php echo $_SESSION["username"]; ?> to our Ultimate Printer!!</a>
			</p>
        </div>
		<div class="response">
		<form method="POST" autocomplete="off">
			<p style="color:white">
				Enter Whatever You Wanna Print:  <input type="text" id="text" name="text"><br />
			</p>
			<br />
			<p>
			<input type="submit" value="Submit"/> 
			<input type="reset" value="Reset"/>
			</p>
		</form>
		<?php
      if(isset($_POST["text"])) : ?>
      	<div class="jumbotron" style="background-color: black">
			<p class="lead" style="color:white;">
				<?php echo $_POST["text"]; ?></a><br/><br/>
			</p>
        </div>
      } 
      <?php endif; ?>
	  <div class="footer">
		<p><h4><a href="logout.php">Logout</a><h4> </p>
      </div>
	  
	  
	  <div class="footer">
		<p>Made By AOUAJ Omar, EL FILALI Abdellah, EL JOUHARI Chaymae & RAHALI Oussama</p>
      </div>

	</div>
  
</body>
</html>