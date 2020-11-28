<?php

$msg = "";
$css_class = "";

$conn = mysqli_connect('localhost','root','','b401project');

if(isset($_POST['detailSoal'])){
    $idSoal = $_POST['detailSoal'];

    $sql_get = 'SELECT * FROM kumpulan_soal WHERE id = '.$idSoal.'';
    $result = mysqli_query($conn,$sql_get);
    if($result->num_rows > 0){ 
        while($row = mysqli_fetch_assoc($result)){
            $msg = "success";
            $smt = $row['semester'];
            $mk = $row['matakuliah'];
            $thn = $row['tahun'];
            $dsn = $row['dosen'];
            $cat = $row['kategori'];
            $des = $row['deskripsi'];
            $soal = $row['soal'];
        }
    }else{
        $msg = "failed2";
    }
}else{
    $msg = "failed";
}

if(isset($_POST['submitAnswer'])){
    $jwb = $_POST['jawaban'];
    $nama = $_POST['nama'];

    echo $jwb." ".$nama;
}
?>