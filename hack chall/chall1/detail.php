<?php 
  session_start();
  include "config.php";
  error_reporting(0);
  $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
  if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
  }
	if(!isset($_SESSION['logged']) || !$_SESSION['logged'] == 1){
      die('Not logged in!');
  }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Blahblah system</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <!-- link rel="stylesheet" href="css/style.css" -->
</head>

<body>
    <?php
      if(isset($_GET['id'])){
         $id = (string)$_GET['id'];
         $id = preg_replace("/\ /", "", $id);
	       $id = preg_replace("/\n/", "", $id);
         while(strpos($id, '/*')!==false){
            $id = preg_replace("/\/\*/", "", $id);
         }
         $sql = "SELECT name,image,description FROM heroes WHERE id=$id";
         $result = $conn->query($sql);
         $row = mysqli_fetch_assoc($result);
         if ($result === false){
           $row['name'] = '';
           $row['image'] = '';
           $row['description'] = '';
         }
    ?>
  <div class="row">
    <div class="col s6 offset-s3 z-depth-6 card-panel">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Hero's detail</h4>
          </div>
        </div>
        <div class="row">
        <?php
          if (isset($_GET['debug'])){
	          echo 'Debug query: '.$sql.'<br>';
          }
        ?>
            <ul class="collection with-header">
              <li class="collection-item"><b><?php echo $row['name'] ?></b></li>
              <li class="collection-item"><img src="<?php echo $row['image'] ?>"></li>
              <li class="collection-item"><?php echo $row['description'] ?></li>
            </ul>
        </div>
    </div>
  </div>
  <?php } ?>
  <!-- detail.php?debug=1&id=1 -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>
