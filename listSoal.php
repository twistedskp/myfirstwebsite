<?php include 'listSoal_process.php';
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
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a href="upload.php" class="nav-item nav-link">Upload</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="index.php?logout=1" class="nav-item nav-link">Log Out</a>
            </div>
        </div>
    </nav>
  </div>

  <body>
  <div class="container-fluid site-extra site-upload">
    <div class="row justify-content-center">
      <?php 
        if($result->num_rows === 0){ ?>
          <div class="alert alert-danger w-25" style="margin-top: 10%; text-align:center;" role="alert">
            No Record
          </div> 
      <?php }else{ ?>

      <div class="w-50">
        <form action="detailSoal.php" method="POST">
          <div class="table-responsive">
              <table class="table table-light table-hover">
                  <thead class="thead-dark">
                    <tr>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>

                      <tr>
                        <td>
                          <?php echo substr($row['deskripsi'],0,45); ?>
                        </td>
                        <td class="float-right">
                          <button type="submit" name="detailSoal" value=<?php echo $row['id'] ?> class="btn btn-outline-dark">
                              Detail
                          </button>
                        </td>
                      </tr>

                    <?php }} ?>
                  </tbody>
               </table>
            </div>
        </form>
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