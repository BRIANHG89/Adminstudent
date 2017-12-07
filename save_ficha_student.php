<?php
//
 require_once 'connect.php';
 if(ISSET($_POST['save_ficha'])){
 	$ficha_id = $_POST['ficha_id'];
    $nro_ficha = $_POST['nro_ficha'];
    $studentid = $_POST['name_student'];
    $goal     = $_POST['goal_recuperation'];
    $description = $_POST['description'];
    $qstudent = $conn->query("SELECT * FROM `ficha_student`
    	                WHERE `ficha_id`='$ficha_id'")
                or die(mysqli_error());
     $vficha = $qstudent->num_rows;
         //validation ficha_id o nombre
        if($vficha['ficha_id']==1){
        echo  '<script type="text/javascript">
                   alert("Ficha ID already exist")
                   window.localtion="ficharecuperacion.php";
               </script>';
 }else{
 	 $conn->query("INSERT INTO `ficha_student`
 	 	          VALUES('','$ficha_id','$nro_ficha',
 	 	                     '$studentid', '$goal',
 	 	                     '$description')")
 	    or die(mysqli_error());
 	    echo '<script type="text/javascript">
 	           alert("Successfully saved data");
 	           window.location="ficharecuperacion.php";
 	           </script>';
 	       }
 }
?>