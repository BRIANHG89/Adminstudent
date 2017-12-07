<?php

 //**require_once 'connect.db';

 require_once 'connect.php';
 $conn->query("DELETE FROM `ficha_student`
 	          WHERE `ficha_id` = '$_REQUEST[ficha_id]'")
   or die(mysqli_error());

   header('location: ficharecuperacion.php');

?>