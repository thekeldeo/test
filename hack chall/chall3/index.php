<?php 
  session_start();
	if(isset($_POST["pwd"]) && isset($_POST["usn"])){
		if ($_POST["usn"]==="player" && $_POST["pwd"]==="r4mp4g3"){
			$_SESSION['logged_200'] = 1;
      header("Location: list.php");
		} else {
      die('Incorrect username/password');
    }
	}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>0xc0ff33 system</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <!-- link rel="stylesheet" href="css/style.css" -->
</head>

<body>
  <div id="login-page" class="row">
    <div class="col s6 offset-s3 z-depth-6 card-panel">
      <form class="login-form" method="POST" action="index.php">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>0xc0ff33 system</h4>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <input type="text" name="usn" placeholder="Username"/>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <input type="password" name="pwd" placeholder="Password"/>
            </div>
        </div>
        <div class="row">
            <input type="submit" class="btn waves-effect waves-light col s12" value="Login"/>
        </div>
      </form>
      <!-- player/r4mp4g3 -->
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>
