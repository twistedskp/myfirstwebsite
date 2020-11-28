<?php 
    include 'home_process.php';
?>
<?php 
    include 'regis_login_process.php' ;
    if(empty($_SESSION['success'])){
        echo $_SESSION['success'];
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
                <a href="home.php" class="nav-item nav-link active">Home</a>
                <a href="upload.php" class="nav-item nav-link">Upload</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="index.php?logout=1" class="nav-item nav-link">Log Out</a>
            </div>
        </div>
    </nav>
  </div>
  <body>

  <section>
    <div class="container-fluid p-0">
        <div class="site-content">
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column">
                    <h1 class="content-quote">Anything worth doing well is worth doing poorly at first.</h1>
                    <h3 class="content-quote2">— Ray Congdon</h3>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section>
    <div class="container d-flex justify-content-center p-0">
        <div class="site-content-2">
            <div class="col text-center">
                <h2 class="header-site-black">Welcome to TKUnderflow</h2>
                <h6>Website Kumpulan Soal Teknik Komputer</h6>
                <p>TKUnderflow is a website to support computer engineering students durirng their study at Institut Teknologi Sepuluh Nopember.
                    Here, students can look for problem or questions regarding a topic on each course. Thus, we also encourage students to share and upload their 
                    own question from their lectures. 
                    Oh my semangat put!!
                </p>
            </div>
        </div>
    </div>
    </section>
        <div class="container-fluid justify-content-center p-0">
            <div class="site-pilih">
                <div class="col text-center">
                    <h2 class="header-site-white-2"></h2>
                </div>
                <form id = "form_home" name="form_home" action="listSoal.php" method= "POST" class="form-choice">
                    <div class="form-group choose-list">
                    <label class = "text-white" for="semester">Semester</label>
                        <select class="form-control" name="semester" id="semester" aria-labelledby="Pilih Semester" required>
                            <option value="">Choose Semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                            <option value="5">Semester 5</option>
                            <option value="6">Semester 6</option>
                            <option value="7">Semester 7</option>
                            <option value="8">Semester 8</option>
                        </select>
                    </div>
                    <div class="form-group choose-list">
                    <label class = "text-white" for="matakuliah">Course</label>
                        <select class="form-control" name="matakuliah" id="matakuliah" aria-labelledby="Pilih matakuliah" required>
                            <option value="">Choose course</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Rangkaian Digital">Rangkaian Digital</option>
                            <option value="Mobile Prgramming">Mobile Programming</option>
                            <option value="Sekuriti Sistem Komputer">Sekuriti Sistem Komputer</option>
                            <option value="Persamaan Differensial">Persamaan Differensial </option>
                            <option value="Struktur Data">Struktur Data</option>
                        </select>
                    </div>
                    <div class="btn-choose-list text-center" style="padding-bottom: 5px;">
                        <button type="submit" class="btn btn-light float-right" name="uploadsoal">Submit</button>
                    </div>
                </form>
                <div class="col text-center">
                    <h2 class="header-site-white-2"></h2>
                </div>
            </div>
        </div>


      
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
