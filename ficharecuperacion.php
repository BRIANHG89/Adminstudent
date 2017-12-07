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
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<!--  ##-->
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
			<h4 class = "navbar-text navbar-right">System</h4>
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
				<div class = "alert alert-info">Accounts / Student</div>
			<button id = "add_student" type = "button" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add new Observation</button>
		    <button id = "show_student" type = "button" style = "display:none;" class = "btn btn-success"><span class = "glyphicon glyphicon-circle-arrow-left"></span>
		     Back</button>
			<br />
			<br />
			<div id = "student_table">
				<table id = "table" class = "table table-bordered">
				<thead class = "alert-success">
				<tr>
						<th>Ficha ID</th>
						<th>Nro Ficha</th>
						<th>Student ID</th>
						<th>Name</th>
						<th>Objective</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
		    <?php
		   
		$qstudent = $conn->query("SELECT *                  FROM `ficha_student`") 
			        or die(mysqli_error());
		while($fstudent = $qstudent->fetch_array()){
								?>
		<tr>
		<td><?php echo $fstudent['ficha_id']?></td>
		<td><?php echo $fstudent['nro_ficha']?></td>
		<td><?php echo $fstudent['student_id']?></td>
		<td><?php echo $fstudent['name_student']?></td>
		<td><?php echo $fstudent['description']?></td>
		<td><?php echo $fstudent['goal_recuperation']?></td>
		<td><a  value = "<?php echo $fstudent['ficha_id']?>" class = "btn btn-danger delstudent_id"><span class = "glyphicon glyphicon-remove"></span> Delete</a> <a class = "btn btn-warning estudent_id" value = "<?php echo $fstudent['ficha_id']?>"><span class = "glyphicon glyphicon-edit"></span> Edit</a></td>
					</tr>
			 <?php
				}
			?>
				</tbody>
			</table>
			</div>
			<div id = "edit_form"></div>
			<div id = "student_form" style = "display:none;">
			<div class = "col-lg-3"></div>
			<div class = "col-lg-6">
			<form method = "POST" action = "save_ficha_student.php" enctype = "multipart/form-data">	
			<div class = "form-group">	
			<label>Ficha ID:</label>
			<input type = "text" name = "ficha_id" required = "required" class = "form-control" />
				</div>	
			<div class = "form-group">	
			<label>Nro. Ficha:</label>
			<input type = "text" name = "nro_ficha" required = "required" class = "form-control" />
				</div>
			<div class = "form-group">	
			<label>Student ID:</label>
			<input type = "text" name = "student_id" placeholder = "(Optional)" class = "form-control" />
			</div>	
			<div class = "form-group">	
			<label>Name Student:</label>
			<input type = "text" required = "required" name = "name_student" class = "form-control" />
			</div>
				
			<div class = "form-group">	
			<label>Goal:</label>
			<input type = "text" maxlength = "12" name = "description" required = "required" class = "form-control" />
					</div>
			<div class = "form-group">
			<label>Description:</label>
			<input type = "text" required = "required" name = "goal_recuperation" class = "form-control" />
			</div>
			<div class = "form-group">	
			<button class = "btn btn-primary" name = "save_ficha"><span class = "glyphicon glyphicon-save"></span> Submit</button>
								</div>
						</form>		
					</div>	
					</div>
			</div>
		</div>
		<br />
		<br />
		<br />
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right"> &copy; All rights reserved 2017</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#add_student').click(function(){
				$(this).hide();
				$('#show_student').show();
				$('#student_table').slideUp();
				$('#student_form').slideDown();
				$('#show_student').click(function(){
				$(this).hide();
				$('#add_student').show();
				$('#student_table').slideDown();
				$('#student_form').slideUp();
				});
			});
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$result = $('<center><label>Deleting...</label></center>');
			$('.delstudent_id').click(function(){
				$ficha_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delstudent_id').attr('disabled', 'disabled');
				$('.estudent_id').attr('disabled', 'disabled');
				setTimeout(function(){
				window.location = 'delete_ficharecuperacion.php?ficha_id=' + $ficha_id;
				}, 1000);
			});
			$('.estudent_id').click(function(){
			$ficha_id = $(this).attr('value');
			$('#show_student').show();
			$('#show_student').click(function(){
			$(this).hide();
			$('#edit_form').empty();
			$('#student_table').show();
			$('#add_student').show();
			});
			$('#student_table').fadeOut();
			$('#add_student').hide();
			$('#edit_form').load('load_ficharecuperacion.php?ficha_id=' + $ficha_id);
			});
		});
	</script>
</html>