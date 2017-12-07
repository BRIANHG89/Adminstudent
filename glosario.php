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
					
					<h4 class = "navbar-text navbar-right">Sistema De Recuperación Pedagógica</h4>
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
			<ul style = "list-style-type:none;">
			<li><a style = "font-size:15px;" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>
			</li>
			</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<!--Dashboard -->
	 <h1><p>Glosario 1<br></h1>
	  </p>
	  <h4><p>Esta sección es una demostración de como puede recuperar los conocimientos el alumno.</p><br></h4>
	  <h4><p>La entrevista: Consiste en el dialogo entre dos o más personas para obtener una misma conclusión</p></h4><br>
       <h4><p>contexto: Es una acción que permite plantear todo aquello que lo rodea</p></h4><br>
       <h4><p>lenguaje corporal: estudia el significado expresivo, apelativo o comunicativo de los movimientos corporales y de los gestos aprendidos o somatogénicos</p></h4><br>
       <h4><p>comunicación: intercambiar información entre dos o más participantes con el fin de transmitir o recibir significados a través de un sistema compartido de signos y normas semánticas.</p></h4><br>
       <h4><p>dato: Es una representación simbólica de un atributo o variable cualitativa o cuantitativa</p></h4><br>
   <h4><p>Estructura de una entrevista</p></h4>    
    <h4>Titulo de la entrevista</h4><br>
    <h4>Cuerpo o contexto de la entrevista<br>
    Es la transcripción del diálogo entre el entrevistador y entrevistado, ya sea de forma literal, intercalando comentarios.<br></h4>
    <br>
    <h4 bgcolor="green"><p bgcolor="ffffff">Entrada y conclusión.</p></h4>
   
    </div>
	</div>
	<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right"> All rights reserved 2016</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
</html>