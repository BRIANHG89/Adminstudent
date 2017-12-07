<?php

$questions = array(
	array(
		"Q" => "¿Que se utiliza para estilizar un sitio web?",
		"A1" => "Javascript",
		"A2" => "CSS",
		"A3" => "PHP",
		"A4" => "AngularJS",
		"A" => 1
	),
	array(
		"Q" => "¿Qué tipo de lenguaje es PHP?",
		"A1" => "Interpretado",
		"A2" => "Compilado",
		"A3" => "Los 2 anteriores",
		"A4" => "Ninguno de los anteriores",
		"A" => 0
	),
	array(
		"Q" => "¿jQuery es una biblioteca para qué lenguaje?",
		"A1" => "Python",
		"A2" => "PHP",
		"A3" => "Java",
		"A4" => "Ninguno de los anteriores",
		"A" => 3
	),
	array(
		"Q" => "¿Cómo se marca el inicio de código PHP?",
		"A1" => "&lt;?php",
		"A2" => "&lt;?",
		"A3" => "Los 2 anteriores",
		"A4" => "Ninguno de los anteriores",
		"A" => 2
	),
	array(
		"Q" => "¿Quién diseño Javascript?",
		"A1" => "Mark Zuckerberg",
		"A2" => "Bill Gates",
		"A3" => "Brendan Eich",
		"A4" => "Rasmus Lerdorf",
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