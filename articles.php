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
    <title>Wanna View Our Best Articles??</title>

    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				Welcome <?php echo $_SESSION["username"]; ?> to our Articles Viewer!!</a>
			</p>
        </div>
		<div class="response">
		<form method="POST" autocomplete="off">
			<p style="color:white">
				Our Best Articles Files:  article1.txt article2.txt article3.txt
			</p>
			<p style="color:white">
				Just Type One Of The Articles Files:  <input type="text" id="file" name="file"><br />
			</p>
			<br />
			<p>
			<input type="submit" value="Submit"/> 
			<input type="reset" value="Reset"/>
			</p>
		</form>
		<?php
      if(isset($_POST["file"])) : ?>
      	<div class="jumbotron" style="background-color: black">
			<p class="lead" style="color:white;">
				<?php include("./articles/".$_POST["file"]); ?></a><br/><br/>
			</p>
        </div>
      } 
      <?php endif; ?>
	  <div class="footer">
		<p><h4><a href="logout.php">Logout</a><h4> </p>
      </div>
	  
	  
	  <div class="footer">
		<p>Made By AOUAJ Omar</p>
      </div>

	</div>
  
</body>
</html>
