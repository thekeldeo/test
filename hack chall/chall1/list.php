<?php 
  session_start();
  include "config.php";
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
         $sql = "SELECT * FROM heroes";
         $result = $conn->query($sql);   
    ?>
  <div class="row">
    <div class="input-field col s12 center">
        <h4>Dota2 hero ...</h4><small>But for what ... ?? :D ??</small>
    </div>
  </div>
  <div class="row" border="1">
    <table class="striped col s8 offset-s2">
        <thead>
              <th>Name</th>
              <th>Image</th>
              <th>Description</th>
        </thead>
        <tbody id="data_list">
              <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td><a href='detail.php?id={$row['id']}'>{$row['name']}</a></td><td><img src='{$row['image']}'></td><td>{$row['description']}</td></tr>";
                }
              ?>
        </tbody>
      </table>    
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</body>
</html>
