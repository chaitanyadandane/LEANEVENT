<?php 
if( isset( $_POST['submit'])){
  $email = $_POST["email"];
  function setAlert($msg){
      echo "<script>alert('".$msg."')</script>";
  }

  if (!preg_match("/(.+)@([^\.].*)\.([a-z]{2,})/",$email)) {
      $emailError = "Enter valid Email PHP";
  }
  else{
      $msg = "Hi, \n\n Thanks for subscribing!";
      // send email
      $res = mail($email,"LEANEVENTO",$msg);
      if($res == 1){
          setAlert($email." Email Sent!");      }
      else{
          setAlert("Error in sending email!");
      }
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/CSS/leanevent.css">
<title>Home</title>	
</head>
<body>
	<div id="wrapper">
		<div class="displayheader">
			<img src= "<?php echo base_url(); ?>public\image\logo-blanco.png" style="width:5.8%; height:70%;"> 
			<h1>LEANEVENTOS</h1>
			<nav class="navheader nav">
				<a href="<?php echo site_url('home');?>"  target="_self" style="color: #FFC300;">Inicio</a>
				<a href="<?php echo site_url('aboutus');?>" target="_self">Quienes Somos</a>
				<a href="http://chaitanyadandane.uta.cloud/blog/" target="_self">Blog</a>
				<a href="<?php echo site_url('signup');?>" target="_self">Registrate</a>
				<a href="<?php echo site_url('contact');?>" target="_self">Contacto</a>
				<a href="<?php echo site_url('login');?>" target="_self">Iniciar Sesi&oacuten</a>
				<a href="<?php echo site_url('buyfromus');?>" target="_self">Comprar Boletos</a>
			</nav>
		</div>