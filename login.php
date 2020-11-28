<?php include 'regis_login_process.php' ?>
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
  <body class="site-content">
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 5%; margin-bottom:5%;">
            <div class="card bg-light border-dark w-50">
                <div class="card-header text-white bg-dark">
                    <h2 class="header-site-white">Login</h2>
                </div>
                <div class="card-body">
                    <?php if(!empty($msg)): ?>
                        <div class="alert <?php echo $css_class; ?>">
                            <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>
                    <form action="login.php" method="POST">
                       <div class="form-group">
                            <label for="nrpmhs">Student ID</label>
                            <input type="text" class="form-control" id="nrpmhs" name="nrpmhs" placeholder="Enter Student ID" onkeypress="return onlyNumberKey(event)"  required>
                            <small id="detailnrpmhs" class="form-text text-muted font-italic">(Only accept digits)</small>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-dark" name="loginmhs" id="loginmhs">
                            Submit
                            </button>
                        </div>
                    </form>
                    <div>
                        <p>Not registered yet?
                            <a href="registration.php">
                                Click Here!
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card-footer bg-dark">
                    <div class ="text-white" style="text-align:center;">
                    © 2020 Copyright: <a class ="text-white" href="">TKUnderflow</a>
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
</html>
