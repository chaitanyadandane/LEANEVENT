<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public\CSS\leanevent.css" />
<title>Profile Agent</title>
</head>
<body>
	<div id="wrapper">
		<div class="displayheader">
			<img src= "<?php echo base_url(); ?>public\image\logo-blanco.png" style="width:5.8%; height:70px;"> 
			<h1>LEANEVENTOS</h1>
			<nav class="navheader nav">
				<a href="<?php echo site_url('home');?>" target="_self">Inicio</a>
				<a href="<?php echo site_url('listindividual');?>" target="_self">Lista de Voluntarios</a>
				<a href="<?php echo site_url('listbusiness');?>" target="_self">Lista de Fundaciones</a>
				<a href="<?php echo site_url('listevent');?>" target="_self">Eventos</a>
				<a href="<?php echo site_url('profileagent');?>" target="_self" style="color: #FFC300;">Agente</a>
			</nav>
		</div>