<?php

	include('connection.php');

	$param_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
	$param_file    = isset($_FILES['image']) = $_FILES['image'] : '';

	$action = !empty($param_file) ? 'set_image' : $param_action;

	$names  = array('nico','juan','santiago','paula');

	$apellidos = array('gomez','garcia','perez','apellido');

	function showOutput($command){
		return "<b> Command: </b> {$command} <br /><pre>";
	}

?>