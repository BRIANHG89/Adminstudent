<!DOCTYPE html>
<?php
	require_once 'valid.php';
?>	
<html lang = "eng">
	<head>
		<title>Recuperación Pedagógica</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />

     <script>
      <!--
        var ScrollMsg= "Recuperación Pedagógica - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
      // -->
    </script>

	</head>
	<body style = "background-color:#d3d3d3;">
	<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					
					<h4 class = "navbar-text navbar-right"> Versión 1.0 Sistema De Recuperación Pedagógica</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<div class = "col-lg-2 well" style = "margin-top:60px;">
				<div class = "container-fluid">
				
				    <br />
					<br />
					<label class = "text-muted"><?php require'account.php'; echo $name;?></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
				<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "home.php">
					<i class = "glyphicon glyphicon-home"></i> Home</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-tasks"></i>Administration</a>
						<ul style = "list-style-type:none;">
							<li><a href = "admin.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Admin</a></li>
							<li><a href = "student.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Student</a></li>
						</ul>
					</li>
			
			
		<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "ficharecuperacion.php"><i class = "glyphicon glyphicon-book"></i> Ficha De Recuperación</a></li>
			<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "book.php"><i class = "glyphicon glyphicon-book"></i>
			  Resource</a></li>
			<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "books.php"><i class = "glyphicon glyphicon-th"></i> Transaction Resources</a>
			<ul style = "list-style-type:none;">
			<li><a href = "borrowing.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-random"></i> Borrowing</a></li>
			<li><a href = "returning.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-random"></i> Returning</a></li>
		    
				</ul>
			</li>
			<li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-cog"></i> Settings</a>
				<a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href="backup.php"><i class = "glyphicon glyphicon-cog"></i> Backups</a>
			
			</li>
			</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<!--Dashboard -->
    <h1><p><br></h1>
    <h1><p>Objetivo de la recuperación pedagógica<br></h1>
	  </p>
	  <h4><p>Este aplicativo le permite al educando reforzar conocimientos y que pueda emplear los recursos digitales que se permitan ajustar a su necesidad educativa.</p><br></h4>
	  
	  
	  
    <a href="Lib/taller1/quizzer.html"><img src="./images/retos.jpg" alt="Lista De actividads">
    Taller</a>
    <a href="Lib/PuzzleJS/demo.html"><img src="./images/taller.jpg" alt="Lista De actividads">Actividades</a>
    <a href="book.php"><img src="./images/quiz.jpg" alt="Lista De actividads">Recursos</a><br>
    <a href="refuerzoacademico.php"><img src="./images/refuerzo.png" width="200" height="200" alt="Lista De actividads">Refuerzo</a><br><br>
    <a href="reportficha.php">Reportficha</a>
    </div>
	</div>
	<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right"> All rights reserved 2017</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
</html>