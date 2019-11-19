		<div>
			<!-- <img src="image\bannerlean1.jpg" style="width:1520px; height:400px;"> -->
			<img src="<?php echo base_url(); ?>public\image\bannerlean2.jpg" style="width:100%; height: 400px">
			<img class="logo" src= "<?php echo base_url(); ?>public\image\logo-blanco.png" style="width:20%; height:20%;">
		</div>
		<div class="homepagepara">
		    <h2 class="line"><span>¿QUÉ HACEMOS?</span></h2>
			<p class="text">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros conciudadanos en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de los Derechos Humanos.
			</p>
			<div class="back">
				<img src= "<?php echo base_url(); ?>public\image\bannerabout.jpg" style="width:100%; height: 300px">
				<div class="front">
					<p style="margin-left:15%;"><h3>478 <br>VOLUNTARIOS</h3></p>
					<p style="margin-left:15%;"><h3>60.000 <br> PERSONAS BENEFICIADAS</h3></p>
					<p style="margin-left:17%;"><h3>45 <br> ALIADOS</h3></p>
				</div>
			</div>
			<div class="quote" style="color: #595959;"><strong>"La injusticia, en cualquier parte, es una amenaza a la justicia en todas partes."</strong><br>
				<cite style="margin-left: 70%">Martin Luthur King</cite>
			</div>
		</div>
		<div class="margin">	
			<h4 class="footerline"><span>ALIADOS</span></h4>
			<img src="<?php echo base_url(); ?>public\image1\logo1.png" align="middle"> 
			<img src="<?php echo base_url(); ?>public\image1\logo2.png" align="middle"> 
			<img src="<?php echo base_url(); ?>public\image1\logo3.png" align="middle"> 
			<img src="<?php echo base_url(); ?>public\image1\logo4.png" align="middle">
			<a href="" class="buttonslider" style="margin-left: 46%">&#8249;</a>
			<a href="" class="buttonslider">&#8250;</a>
		</div>
		<div class="subscribe">
			<?php echo form_open('home'); ?>
			<!-- <form action="home.php" method="POST" onsubmit="return Validate()" name="home_form"> -->
				<fieldset class="field">	
				<label class="label"><i class="fa fa-paper-plane-o" style="margin-right: 3%;"></i><strong>Registrese para recibir un boletin</strong></label>
				<?php echo form_input(array('id'=>"email_in", 'name'=>"email", 'placeholder'=>"  Introduce tu correo electronico",'class'=>"borderleft"));?>
				<?php echo form_submit(array('name'=>"submit", 'value'=>"Suscribir", 'class'=>"borderright"));?>
				<?php echo form_error('email');?>
				<!-- <div class="errormsg" id="email_err_msg">
					<?php
						echo $emailError;
				    ?>
				</div> -->
				</fieldset>
			<?php echo form_close(); ?>
		</div>
		<div class="textcenter">
			LEAN EN LAS REDES SOCIALES<br>
			<a href="https://twitter.com/leanemergente"><i class="fa fa-twitter" style="color: #FFC300"></i></a>
			<a href="https://www.facebook.com/LeanAyudaHumanitaria/"><i class="fa fa-facebook-f" style="color: #FFC300"></i></a>
			<a href="https://www.instagram.com/leanayudahumanitaria/"><i class="fa fa-instagram" style="color: #FFC300"></i></a><br>
		</div>	
	</div>
</body>
<script type="text/javascript">
	var email = document.forms['home_form']['email'];

	var email_err_msg = document.getElementById('email_err_msg');

	email.addEventListener('blur', emailVerify, true);

	function Validate() {
		if (email.value == "") {
    email.style.border = "1px solid red";
    // document.getElementById('email_in').style.color = "red";
    document.getElementById("email_err_msg").innerHTML = "Email is required";
    email.focus();
    return false;
  }
}

  function emailVerify() {
  if (email.value != "") {
    var email_chk = /(.+)@([^\.].*)\.([a-z]{2,})/;
  	if(!email_chk.test(email.value)){
    document.getElementById("email_err_msg").innerHTML = "Enter valid Email";
    return false;
  } else {
  	email.style.border = "1px solid #5e6e66";
    email_err_msg.innerHTML = "";
    return true;
  }
}
}
</script>