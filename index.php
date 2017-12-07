<!DOCTYPE html>
<?php 
	session_start();
	if(ISSET($_SESSION['admin_id'])){
		header('location:home.php');
	}
?>
<html lang = "eng">
	<head>
	<title>Sistema de Recuperación Pedagógica</title>
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
					<img src = "images/logo.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">Versión 1.0 de Sistema De Recuperación Pedagógica</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<div class = "col-lg-3 well">
				<br />
				<br />
				<h4>Login Here..</h4>
				<hr style = "border:1px solid #d3d3d3; width:100%;" />
				<form enctype = "multipart/form-data">	
					<div id = "username_warning" class = "form-group">
						<label class = "control-label">Username:</label>
						<input type = "text" class = "form-control" id = "username"/>
					</div>
					<div id = "password_warning" class = "form-group">
						<label class = "control-label">Password:</label>
						<input type = "password" class = "form-control" id = "password"/>
					</div>
					<br />
					<div class = "form-group">
						<button type = "button" id = "login" class = "btn btn-primary btn-block"><span class = "glyphicon glyphicon-save"></span> Login</button>
					</div>
				</form>	
				<div id = "result"></div>
				<br />
				
				<br />
				<br />
				<br />
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-8 well"><br>
			<div class = "alert alert-info"><h4 align="center">UNIDAD EDUCATIVA REPÚBLICA DE FRANCIA</h4></div>
				<img src = "images/clases.jpg" height = "449px" width = "100%" />
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
</html>