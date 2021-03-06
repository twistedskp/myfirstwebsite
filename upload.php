<?php 
    include 'upload_process.php';
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
            <img src="resources/logo.png" width="40" height="40" alt="TKUnderflow">
            TKUnderflow <span> </span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a href="upload.php" class="nav-item nav-link active">Upload</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="index.php?logout=1" class="nav-item nav-link">Log Out</a>
            </div>
        </div>
    </nav>
  </div>

  <body>
      <div class="container-fluid">
          <div class="row site-upload justify-content-center">
            <div class= "w-50">
                <div class="card bg-light mb-3 card-upload border-dark">
                    <div class="card-header text-white bg-dark">
                        <h2 class="header-site-white">Upload Questions</h2>
                    </div>
                    <div class="card-body">
                        <form class="form-group" action="upload.php" method="POST" enctype="multipart/form-data">
                            <?php if(!empty($msg)): ?>
                                <div class="alert <?php echo $css_class; ?>">
                                    <?php echo $msg; ?>
                                </div>
                            <?php endif; ?>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" name="semester" id="semester" required>
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
                        <div class="form-group">
                            <label for="matakuliah">Course</label>
                            <select class="form-control" name="matakuliah" id="matakuliah" required>
                                <option value="">Choose Course</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Rangkaian Digital">Rangkaian Digital</option>
                                <option value="Mobile Prgramming">Mobile Programming</option>
                                <option value="Sekuriti Sistem Komputer">Sekuriti Sistem Komputer</option>
                                <option value="Persamaan Differensial">Persamaan Differensial </option>
                                <option value="Struktur Data">Struktur Data</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Year</label>
                            <select class="form-control" name="tahun" id="tahun" required>
                            <option value="">Choose Year</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value=">2018">>2018</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dosen">Lecturer</label>
                            <select class="form-control" name="dosen" id="dosen" required>
                            <option value="">Choose Lecturer</option>
                            <option value="Arief Kurniawan">Pak Arief Kurniawan</option>
                            <option value="Hany Boedinugroho">Pak Hany Boedinugroho</option>
                            <option value="Muhtadin">Pak Muhtadin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Category</label>
                            <select class="form-control" name="kategori" id="kategori" required>
                            <option value="">Choose Category</option>
                            <option value="Tugas">Tugas</option>
                            <option value="ETS">ETS</option>
                            <option value="EAS">EAS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Decription" for="deskripsi">Short Description</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" rows = 2>
                        </div>
                        <div class="form-group">
                            <label>Problem Question</label>
                            <input type="file" name="gambarSoal" id="gambarSoal" class="form-control-file" required>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-outline-dark" name="uploadsoal">
                            Submit
                            </button>
                        </div>
                        </form>
                    </div>
                    <div class="card-footer bg-dark">
                    </div>
                </div>
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