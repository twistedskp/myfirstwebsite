<?php
$msg = "";
$css_class = "";

$conn = mysqli_connect('localhost','root','','b401project');

if(isset($_POST['uploadsoal'])){
    $smt = $_POST['semester'];
    $mk = $_POST['matakuliah'];
    $thn = $_POST['tahun'];
    $dsn = $_POST['dosen'];
    $ktg = $_POST['kategori'];
    $des = $_POST['deskripsi'];
    $soal = time() . '_' . $_FILES['gambarSoal']['name'];

    $target = 'images/' . $soal;

    if(move_uploaded_file($_FILES['gambarSoal']['tmp_name'], $target)){
        $sql_upload = "INSERT INTO kumpulan_soal(semester, matakuliah, tahun, dosen, kategori,deskripsi, soal) VALUES ('$smt', '$mk', '$thn', '$dsn', '$ktg','$des', '$soal')";
        if(mysqli_query($conn, $sql_upload)){
            $msg = "Question uploaded";
            $css_class = "alert-success";
        }else{
            $msg = "Question Failed to be uploaded";
            $css_class = "alert-danger";
        }
    }else{
        $msg = "Question Failed to be uploaded";
        $css_class = "alert-danger";
    }
}

?>