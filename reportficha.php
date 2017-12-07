<?php


 require_once 'connect.php';

 $query = 'SELECT * FROM `ficha_student`
           ORDER BY ficha_id DESC';
 //
 $exec = $conn->query($query);
 //
  if(isset($_POST['create_pdf'])){
     require_once('tcpdf/tcpdf.php');

     $pdf = new TCPDF('P', 'mn', 'A4', true, 'UTF-8', false);

     $pdf->SetCreator(PDF_CREATOR);
     $pdf->SetAuthor('Unidad Educativa');
     $pdf->SetTitle($_POST['reporte_name']);

     $pdf->setPrintHeader(false);
     $pdf->setPrintFooter(false);
     $pdf->SetMargins(20, 20, 20, false);
     $pdf->SetAutoPageBreak(true, 20);
     $pdf->SetFont('Helvetica','',10);
     $pdf->addPage();

     $content .= '<div class="row">
                    <div class="col-md-12">
                      <h1 style="text-align:center;">'
                      .$_POST['reporte_name'].'</h1>

                  <table border="1" cellpadding="5">
                    <thead>
                     <tr>
                       <tr>
                       <th>ficha_id</th>
                       <th>nro_ficha</th>
                       <th>student_id</th>
                       <th>Name</th>
                       <th>Objective</th>
                       <th>Description</th>
                       <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>
                      ';

        while($query=$exec->fetch_assoc()){

        	$content .= '<tr>
        	             <td>'.$query['ficha_id'].'</td>
                         <td>'.$query['nro_ficha'].'</td>
                         <td>'.$query['student_id'].'</td>
                         <td>'.$query['name_student'].'</td>
                       <td>'.$query['goal_recuperation'].'</td>
                         <th>'.$query['description'].'</td>
                      
        	             </tr>
        	             </thead>
        	             </tbody>
        	             ';

        $pdf->writeHTML($content, true, 0, true, 0);

        $pdf->lastPage();
        $pdf->output('Reporte.pdf','I');

        }              
        ?>
        <!DOCTYPE html>
<?php
	require_once 'valid.php';
?>	
<html lang = "eng">
	<head>
		<title>Library System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
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
					<h4 class = "navbar-text navbar-right">Library System</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			
			<div class = "col-lg-1"></div>
			<?php 
			  $h1 = "Reporte de Ficha Estudiantil";
			  echo '<h1>'.$h1.'</h1>';
			?>
			<table>
				<thead>
					<tr>
					<th>Ficha_id</th>
                    <th>Nro_Ficha</th>
                    <th>Student_id</th>
                    <th>name_student</th>
                    <th>goal_description</th>
                    <th>description</th>
                </tr>
            </thead>
            <tbody>
            	<?php
            	//print_result

                while($user=$usuarios->fetch_assoc()){
                	?>
                <tr>
                <td><?php echo $query['ficha_id']; ?></td>
                <td><?php echo $query['nro_ficha']; ?></td>
                <td><?php echo $query['student_id']; ?></td>
                <td><?php echo $query['name_student']; ?></td>
           <td><?php echo $query['goal_description']; ?></td>
             <td><?php echo $query['description']; ?></td>   
                </tr>
                <?php } ?>
            </tbody>
			</table>
		<br />
		<input type="hidden" name="reporte_name" 
		 value="<?php echo $h1; ?>">
		<input type="submit" name="create_pdf" value="Generar PDF">
		<br />
		<br />
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right">All rights reserved 2017</label>
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
	
	
</html>
        
 