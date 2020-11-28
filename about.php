<?php 
    include 'regis_login_process.php' ;
    if(empty($_SESSION['success'])){
        header('location: index.php');
    } 
?>
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
  <div class="header">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="home.php" class="navbar-brand">
                <img src="resources/logo.png" width="40" height="40" alt="">
                TKUnderflow <span> </span>
            </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a href="upload.php" class="nav-item nav-link">Upload</a>
                <a href="about.php" class="nav-item nav-link active">About</a>
                <a href="index.php?logout=1" class="nav-item nav-link">Log Out</a>
            </div>
        </div>
    </nav>
  </div>
  <body>
    <section>
        <div class="container-fluid ">
            <div class="">
                <div class="row site-content d-flex justify-content-center">
                    <div class="about-content">
                        <div class="row">
                            <div class="img-circle">
                                <img src="resources/owl2.jpg" alt="">
                            </div>
                            <div class="img-circle2">
                                <img src="resources/owl4.jpg" alt="">
                            </div>
                        </div>
                        <div class="text-white about-profile">
                            <h2>
                                The Owl
                            </h2>
                            <p class="">
                                The creator of this page. Sleep most of the time.
                                Don't talk much.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
      <div class="container d-flex justify-content-center site-content-about">
        <div class="">
            <div class="col text-center">
                <h2 class="header-site-black">About</h2>
                <h6>TKUnderflow</h6>
                <p>
                    Aduh gatau apa ini buat biar lucu aja kali yaa !!
                </p>
            </div>
        </div>
    </div>  
    </section>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <footer class="page-footer font-small cyan bg-dark">
    <div class="text-white footer-copyright text-center py-3">© 2020 Copyright:
        <a class="text-white"> TKUnderflow</a>
    </div>
  </footer>
</html>