<?php

$questions = array(
	array(
		"Q" => "¿Qué es una entrevista?",
		"A1" => "Es una forma de evaluar al docente",
		"A2" => "Consiste en un dialogo entre dos o más personas para obtener una conclusión o información",
		"A3" => "Es una evaluación del estudiante hacia el docente",
		"A4" => "Es una notificación de un docente a un padre de familia",
		"A" => 1
	),
	array(
		"Q" => "¿Qué es contexto?",
		"A1" => "Es una acción que permite plantear todo aquello que lo rodea para utilizarlo en un fin",
		"A2" => "Es una instrucción a seguir",
		"A3" => "Método para obetener un resultado",
		"A4" => "Ninguno de los anteriores",
		"A" => 0
	),
	array(
		"Q" => "¿Seleccione los tipos de entrevista que puedan existir?",
		"A1" => "Portada, cabecera, cuerpo y pie",
		"A2" => "inicio proceso y fin",
		"A3" => "entrevista individual o colectiva",
		"A4" => "Ninguno de los anteriores",
		"A" => 3
	),
	array(
		"Q" => "¿Dato se define cómo?",
		"A1" => "El proceso entre el usuario y la maquina",
		"A2" => "información tradicional",
		"A3" => "Conjunto de símbolos y señales para procesar información",
		"A4" => "Ninguno de los anteriores",
		"A" => 2
	),
	array(
		"Q" => "¿La comunicación se define cómo?",
		"A1" => "Implementación de canales comunicacionales para establecer el dialogo",
		"A2" => "Conjunto de componentes para establecer un dialogo",
		"A3" => "Interacción entre emisor y receptor",
		"A4" => "Intercambio de información entre dos o más participantes para obtener una información",
		"A" => 2
	)
);


function error($msg) {
	http_response_code (501);
	die ('Error: no action');
}

function get_question($number) {
	global $questions;
	$question = $questions[$number];
	extract($question);
	printf ("
		<div class='card question'><span class='question'>%s</span>
	      <ul class='options'>
	        <li>
	          <input type='radio' value='0' id='do1'>
	          <label for='do1'>%s</label>
	        </li>
	        <li>
	          <input type='radio' value='1' id='do2'>
	          <label for='do2'>%s</label>
	        </li>
	        <li>
	          <input type='radio' value='2' id='do3'>
	          <label for='do3'>%s</label>
	        </li>
	        <li>
	          <input type='radio' value='3' id='do4'>
	          <label for='do4'>%s</label>
	        </li>
	      </ul>
	    </div>", $Q, $A1, $A2, $A3, $A4);
	die ();
}

function check_answer($number, $answer) {
	global $questions;
	$question = $questions[$number];
	$result = $question["A"] == (int)$answer;
	die ($result);
}


if ($_GET['action'] == 'get_question') {
	if (!isset($_GET['number'])) 
		return error('Arguments missing');
	
	$number = ((int) $_GET['number']) - 1;
	get_question($number);
}

if ($_GET['action'] == 'check_answer') {
	if (!isset($_GET['number']) || !isset($_GET['answer'])) 
		return error('Arguments missing');
	
	$number = ((int) $_GET['number']) - 1;
	$answer = $_GET['answer'];
	check_answer($number, $answer);
}


?>