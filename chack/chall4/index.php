<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
</head>

<body>
  <div id="login-page" class="row">
    <div class="col s6 offset-s3 z-depth-6 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Magic key</h4>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <input type="text" onkeypress="checkout(event.which)" placeholder="Type something ...">
            </div>
        </div>
        <div class"row" id="console">
        </div>
      </form>
    </div>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  <script>
    function checkout(c){
      if (c==124){
        location.href=String.fromCharCode(124);
      } else {
        $("#console").html('Invalid keyCode: '+c);
      }
    }
    
  </script>
</body>
</html>
