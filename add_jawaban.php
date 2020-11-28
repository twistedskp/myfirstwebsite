<?php
if(isset($_POST['nama'])){

    $nama = $_POST['nama'];
    $jwb = $_POST['jawaban'];
    $id = $_POST['id_soal'];
  
    $conn = mysqli_connect('localhost','root','','b401project');
    $sql_input = "INSERT INTO kumpulan_jawaban(idSoal, nama, jawaban) VALUES ('$id','$nama','$jwb')";
    if(mysqli_query($conn, $sql_input)){
            $msg = "Oh yeh bisaa";
        }else{
            $msg = "Gabisaa :(";
        }
    echo $msg;
}
?>