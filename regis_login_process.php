<?php

session_start();

$msg1 = "";
$conn = mysqli_connect('localhost','root','','b401project');

if (ISSET($_POST['registrasimhs'])){
    $nama = $_POST['namamhs'];
    $nrp = $_POST['nrpmhs'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if($pass1 != $pass2){
        $msg1 = "Password doesn't match";
        $css_class = "alert-danger";
    }else{
        // $pass1 = md5($pass1); buat enkripsi
        $sql_regis = "INSERT INTO user(nrp,nama,pswd) VALUES ('$nrp','$nama','$pass1')";

        if(mysqli_query($conn, $sql_regis)){
            $_SESSION['success'] = "success";
            header('location: home.php');
        }else{
            $msg1 = "Student account already existed";
            $css_class = "alert-danger";
        }
    }
}

if(ISSET($_GET['logout'])){
    session_destroy();
    session_unset();
    unset($_SESSION['success']); //ini buat apa ya wkwk
    header('location : index.php');
}

if (isset($_POST['loginmhs'])){
    $nrp = $_POST['nrpmhs'];
    $pass = $_POST['password1'];

    $sql_login = "SELECT * FROM user WHERE nrp = '$nrp' AND pswd = '$pass'";
    $result = mysqli_query($conn,$sql_login);

    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            $nama = $row['nama'];
        }

        $_SESSION['success'] = "success";
        header('location: home.php');
    }else{
        $msg1 = "Wrong password or student ID combination";
        $css_class = "alert-danger";
    }

}

?>