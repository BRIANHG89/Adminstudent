<?php
 require_once('connect.php');

 $usuario = 'SELECT * FROM ficha_student
             ORDER BY id DESC';
 $usuario=$mysqli->query($usuario);

 if(isset($_POST['created_pdf'])){

 }

?>