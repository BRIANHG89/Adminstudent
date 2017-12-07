<?php
//***
  require_once 'connect.php';

  $q_ficha = $conn->query("SELECT * FROM `ficha_student`
  	                   WHERE `nro_ficha`")
             or die(mysqli_error());
  $f_ficha = $q_ficha->fetch_array();
?>
  <div class="col-lg-3"></div>
  <div class="col-lg-6">
  	<form method="POST" action="edit_ficharecuperacion_query.php?ficha_id=<?php echo $f_ficha['ficha_id']?>"
  		enctype = "multipart/form-data">
  		<div class="form-group">
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
				<label class = "navbar-text pull-right">Library System &copy; All rights reserved 2016</label>
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
				$student_id = $(this).attr('value');
			$(this).parents('td').empty().append($result);
			$('.delstudent_id').attr('disabled', 'disabled');
			$('.estudent_id').attr('disabled', 'disabled');
			setTimeout(function(){
			window.location = 'delete_ficharecuperacion.php?ficha_id=' + $ficha_id;
				}, 1000);
			});
			$('.estudent_id').click(function(){
				$student_id = $(this).attr('value');
				$('#show_student').show();
				$('#show_student').click(function(){
				$(this).hide();
				$('#edit_form').empty();
				$('#student_table').show();
				$('#add_student').show();
				});
				$('#student_table').fadeOut();
				$('#add_student').hide();
			$('#edit_form').load('load_ficharecuperacion.php?ficha_id=' + $student_id);
			});
		});
	</script>
</html>