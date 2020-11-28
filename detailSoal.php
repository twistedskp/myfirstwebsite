<?php include "detailSoal_process.php";
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
    <div class="container-fluid site-extra site-upload">
        <div class="row d-flex justify-content-center">
            <?php if($msg === 'failed2' or $msg === 'failed'): ?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
            <div class="">
            <div class="card border-0" style="margin-bottom: 5%; padding-bottom: 3%; width:35rem;" >
                <img class="card-img-top" src="images/<?php echo $soal;?>" alt="Soal <?php echo $mk; ?>">   
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Semester</th>
                        <th scope="col">Course</th>
                        <th scope="col">Year</th>
                        <th scope="col">Lecturer</th>
                        <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td style="text-align:center"><?php echo $smt;?></td>
                        <td><?php echo $mk; ?></td>
                        <td><?php echo $thn; ?></td>
                        <td><?php echo $dsn; ?></td>
                        <td><?php echo $cat; ?></td>
                        </tr>
                    </tbody>
                    </table>

                    </div>
                    <button class="btn btn-dark float-right">
                        <a href="images/<?php echo $soal;?>" style="color: white; margin:auto;" download>Download</a>
                    </button>
                </div>
            </div> 
            </div>
            <div class="card margin-extra w-50 border-0">
                <div class="card-body">
                <table class="table table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Description</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <td>
                            <?php echo $des; ?>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Discussion</th>
                        </tr>
                    </thead> 
                </table>
                    <div>
                      <div class="">
                        <form id = "form_jawaban" method="POST">
                        <h5>Your Answer</h5>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Name">
                            </div>
                            </div>
                            <div class="form-group padding-extra">
                                <input type="submit" name="submit" id="submit" value="submit" class="btn btn-dark">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="jawaban" id="jawaban" placeholder="Your Answer" class="form-control" rows="3"></textarea>
                        </div>
                        </form>
                        <h2 class="header-site-black" style="padding-top: 5px;"></h2>
                      </div>
                        <h5>Previous Answer</h5>
                        <div id="display_semua_jawaban"> Harusnya ada semua jawabannya disini</div> 
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>

  <footer class="page-footer font-small cyan bg-dark">
    <div class="text-white footer-copyright text-center py-3">© 2020 Copyright:
        <a class="text-white"> TKUnderflow</a>
    </div>
  </footer>
</html>

<script>
    $(document).ready(function(){
        
        $('#form_jawaban').on('submit', function(event){
            event.preventDefault();
            var id_soal = <?php echo $idSoal; ?>;
            var nama = $('#nama').val();
            var jawaban = $('#jawaban').val()
            //alert(id_soal + " "+nama + " " +jawaban);

            $.ajax({
                url:'add_jawaban.php',
                method:'POST',
                data: {id_soal: id_soal, nama: nama, jawaban: jawaban},
                success:function(data){
                    $('#form_jawaban')[0].reset();
                    $('#display_jawaban').html(data);
                    load_jawaban();
                }
            })
        })
    });

    load_jawaban();

    function load_jawaban(){
      var id_soal = <?php echo $idSoal; ?>;
      $.ajax({
        url: "fetch_jawaban.php",
        method: "POST",
        data: "id_soal="+ id_soal,
        success:function(data){
          $('#display_semua_jawaban').html(data);
        }
      })
    };
</script>