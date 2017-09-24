<?php
  if ($_SERVER['HTTP_USER_AGENT'] !== "Pokemon Browser"){
    die('Only Pokemon Browser is allowed!');
  }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pokémon 4u v3.0</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <!-- link rel="stylesheet" href="css/style.css" -->
</head>

<body>
  <div id="login-page" class="row">
    <div class="col s6 offset-s3 z-depth-6 card-panel">
      <form class="login-form" id="pokemon">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Pokémon 4u <b>v3.0</b></h4>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <input type="text" name="pokemon" placeholder="123"/>
            </div>
        </div>
        <div class="row" id="get">
            <input type="button" class="btn waves-effect waves-light col s12" value="Get"/>
        </div>
      </form>
    </div>
  </div>
  <div class="row" border="1">
    <table class="striped col s8 offset-s2">
        <thead>
          <tr>
              <th>Name</th>
              <th>Image</th>
              <th>Ability</th>
          </tr>
        </thead>
        <tbody id="data_list">
        </tbody>
      </table>    
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  <script>
    $("#get").click(function(){
       $.ajax({
           type: "POST",
           url: 'get_data.php',
           data: $("#pokemon").serialize(), // serializes the form's elements.
           success: function(data)
           {
                var pokes = $.parseJSON(data);
                if(pokes.error){
                    alert(pokes.error);
                } else {
                    $( "#data_list" ).html('');
                    $.each(pokes, function( index, poke ) {
                        $( "#data_list" ).append("<tr><td>"+poke.name+"</td><td><img src='"+poke.ThumbnailImage+"'/></td><td>"+poke.abilities[0]+"</td></tr>");
                    });
                    
                }
           }
         });
    });
  </script>
</body>
</html>
