<?php
    $conn = mysqli_connect('localhost','root','','b401project');

    if(isset($_POST['uploadsoal'])){
        $smt = $_POST['semester'];
        $mk = $_POST['matakuliah'];

        $msg = 'success';

        $sql_get = 'SELECT * FROM kumpulan_soal WHERE semester = '.$smt.' AND matakuliah = "'.$mk.'" ';
    }else{
        $msg = 'failed';
    }

?>