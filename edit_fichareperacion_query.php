<?php

//***

  require_once 'connect.php';

  if(ISSET($_POST['edit_ficharecuperacion'])){

  	$ficha_id= $_POST['ficha_id'];
  	$nro_ficha = $_POST['nro_ficha'];
  	$student_id = $_POST['student_id'];
  	$name_student = $_POST['name_student'];
  	$goal_recuperation = $_POST['goal_recuperation'];
  	$description = $_POST['description'];

  	//
  	$conn->query("UPDATE `ficha_student` 
  		          SET  `nro_ficha` = '$nro_ficha',
  		              `student_id` = '$student_id',
  		              `name_student` = '$name_student',
  		             'goal_recuperation' = '$goal_recuperation',

                     'description' = '$description';
                   WHERE `ficha_id` = '$_REQUEST[ficha_id]'")
  	            or die(mysqli_error());

  		     echo '<script type="text/javascript">
  		               alert("Sve Changes");
  		           window.location="ficharecuperacion.php";
  		           </script>';
  }

