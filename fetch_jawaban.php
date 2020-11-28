<?php
    if(isset($_POST['id_soal'])){

    $id = $_POST['id_soal'];
  
    $conn = mysqli_connect('localhost','root','','b401project');
    $sql_get = 'SELECT * FROM kumpulan_jawaban WHERE idSoal = '.$id.'';
    $result = mysqli_query($conn,$sql_get);
    
    if($result->num_rows == 0){
        
        $output = '
        
            <div class="alert alert-info w-25" style="margin-top: 10%; margin:auto; text-align:center;" role="alert">
                No Answer
            </div> 
        
        ';

        
        echo $output;
    }else{
        while($row = mysqli_fetch_assoc($result)){

             $output= '
                    <div class="">
                        <div class="row" style="margin-top:5%;">
                            <div class="col-2 d-flex justify-content-center">
                            <div class="img-circle3">
                                <img src="resources/profile.png" alt="">
                            </div>
                            </div>
                            <div class="col-8">
                                <p class="site-header-black"><strong>'. $row['nama'] .'</strong></p>
                                <p>'. $row['jawaban'] .'</p>
                            </div>

                            </div>
                        </div>
                    </div>

            ';

            echo $output;
            
        }
    }
}
        
?>