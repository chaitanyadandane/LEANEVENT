<?php
require ('config\dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="CSS/leanevent.css"/>
<title>List Business</title>	
</head>
<body>
	<div id="wrapper">
		<div class="displayheader">
			<img src= "image\logo-blanco.png" style="width:5.8%; height:70px;"> 
			<h1>LEANEVENTOS</h1>
			<nav class="navheader nav">
				<a href="home.php"  target="_self">Inicio</a>
				<a href="listindividual.php" target="_self">Lista de Voluntarios</a>
				<a href="listbusiness.php" target="_self" style="color: #FFC300;">Lista de Fundaciones</a>
				<a href="listevent.php" target="_self">Eventos</a>
				<a href="profileagent.php" target="_self">Agente</a>
			</nav>
		</div>
		<div>
			<h2 class="textcenter">Lista de Fundaciones</h2>
			<div class="displayheader" style="margin-top: 8%;">
				<table style="width: 100%; border-collapse: collapse;">
					<col width="56%">
					<col width="11%">
					<col width="11%">
					<col width="11%">
					<col width="11%">
					<tr class="textcenter" style="background: #F5F5F5; height: 40px; font-size: 10pt;">
						<td>NOMBRE DE LA FUNDACION</td>
						<td>EVENTO</td>
						<td>RESPONSABLE</td>
						<td>COMISION</td>
						<td>CONFIRMAR</td>
					</tr>
					<tr style="border-bottom: solid 2pt #F5F5F5; font-size: 9pt;">
						<td style="display: flex;"><img src="image\nologo.png" style="width: 13%; height: 85px; padding: 2% 0% 2% 0%;">
						<p class="col1hb">Nombre de la Fundacion</p></td>
						<td class="textcenter">Nombre del Evento</td>
						<td class="textcenter">Nombre del Responsable</td>
						<td class="textcenter">1</td>
						<td class="textcenter"><input type="submit" value="Asignar" style="border-radius: 14px; width: 65%; height: 32px; background-color: #FFC300; border: none;color: white;"></td>
					</tr>
					<tr style="border-bottom: solid 2pt #F5F5F5; font-size: 9pt;">
						<td style="display: flex;"><img src="image\nologo.png" style="width: 13%; height: 85px; padding: 2% 0% 2% 0%;">
						<p class="col1hb">Nombre de la Fundacion</p></td>
						<td class="textcenter">Nombre del Evento</td>
						<td class="textcenter">Nombre del Responsable</td>
						<td class="textcenter">1</td>
						<td class="textcenter"><input type="submit" value="Asignar" style="border-radius: 14px; width: 65%; height: 32px; background-color: #FFC300; border: none;color: white;"></td>
					</tr>
					<tr style="border-bottom: solid 2pt #F5F5F5; font-size: 9pt;">
						<td style="display: flex;"><img src="image\nologo.png" style="width: 13%; height: 85px; padding: 2% 0% 2% 0%;">
						<p class="col1hb">Nombre de la Fundacion</p></td>
						<td class="textcenter">Nombre del Evento</td>
						<td class="textcenter">Nombre del Responsable</td>
						<td class="textcenter">1</td>
						<td class="textcenter"><input type="submit" value="Asignar" style="border-radius: 14px; width: 65%; height: 32px; background-color: #FFC300; border: none;color: white;"></td>
					</tr>
				</table>
			</div>
			<div style="text-align: center; margin-top: 3%">
				<button class="listindividualbox"><i class="fa fa-angle-double-left" style="color: #595959;"></i></button></a>
				<button class="listindividualbox" style="background-color: #FFC300; color: #595959;">1</button>
				<button class="listindividualbox" style="color: #595959;">2</button>
				<button class="listindividualbox" style="color: #595959;">3</button>
				<button class="listindividualbox" style="color: #595959;">4</button>
				<button class="listindividualbox" ><i class="fa fa-angle-double-right" style="color: #595959;"></i></button>
			</div>
		</div>
	</div>	
</body>
<footer>
	<div id="wrapper" style="margin-top: 10%">
		<div class="textcenter">
			<p class="footer">Copyright &copy 2019 All rights reserved | This website is made with &#x2661 by <a href="http://diazapps.com/" target="_blank"; style="color:#FFC300;" >DiazApps</a>
			<button class="buttonfooter"><a href="#top"><i class="fa fa-arrow-up" style="color: white;"></i></a></button>
			</p>
		</div>
	</div>	
</footer>
</html>