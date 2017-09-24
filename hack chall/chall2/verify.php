<?php 
  session_start();
  error_reporting(0);
	if(!isset($_SESSION['logged_100']) || $_SESSION['logged_100'] != 1){
      die('You have to login!');
	}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin 2nd authentication</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <!-- link rel="stylesheet" href="css/style.css" -->
</head>

<body>
  <div id="login-page" class="row">
    <div class="col s6 offset-s3 z-depth-6 card-panel">

      <form class="login-form" method="POST" action="verify.php">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Admin 2nd authentication</h4>
          </div>
              <?php
                if(isset($_POST['otp'])){
                  if(strcmp($_POST['otp'],'b3d66c9f1$9d') == 0){
                    echo 'Good job! Flag is: PTITCTF{strcmp_1s_s0_d4ng3r}';
                  } else {
                    echo 'Wrong OTP!';
                  }
                }
              ?>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <input type="text" name="otp" placeholder="Mã OTP (12 ký tự) đã được gửi đến điện thoại của bạn"/>
            </div>
        </div>
        <div class="row">
            <input type="submit" class="btn waves-effect waves-light col s12" value="Submit"/>
        </div>
      </form>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>
<!-- [] -->
