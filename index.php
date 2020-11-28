<!doctype html>
<html lang="en">
  <head>
    <title>TKUnderflow</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <style>
      body{
        margin: 0;
        padding: 0;
        height: 100vh;
        background:#262626;
      }
      #particles-js{
        height: 100%;
        background:#262626;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
      }

      .particles-js-canvas-el{
        position: absolute;
      }

      a{
        z-index: 9999;
        position: relative;
        margin-top:7%;
      }

      container{
        z-index: 10000;
      }

    </style>

  <body>  
    <div id="particles-js">
      <div class="container">
        <h2 class="index-content text-white" style="text-align: center;">Welcome Puti</h2>
        <h5 class="index-content text-white" style="text-align: center;">Are you Ready?</h5>
        <div class="row justify-content-center">
          <div class="panel" style="display: block;">
            <a href="registration.php">
              <button class="btn btn-outline-light" name="indexRegis" style="margin-top:7%;">
                Registration
              </button>
            </a>
            <a href="login.php">
              <button class="btn btn-outline-light" name="indexLogin" style="margin-left:3px; margin-top:7%;">
                Login
              </button>
            </a>
        </div>    
      </div>
    </div>

    <script type="text/javascript" src="particles.js-master/particles.js"></script>
    <script type="text/javascript" src="particles.js-master/demo/app.js"></script>






      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>