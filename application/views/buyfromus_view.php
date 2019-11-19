		<div>
			<img src="<?php echo base_url(); ?>public\image\bannercboleto.jpg" style="width:100%; height:230px;">
		</div>	
		<div class="imagelink">
			<h3>COMPRAR BOLETOS</h3>
			<a href="<?php echo site_url('home');?>" style="color: #FFC300;">INICIO</a> 
			<a href="<?php echo site_url('buyfromus');?>">COMPRAR BOLETOS</a>
		</div>
		<div class="textcenter">
			<h2 class="line"><span>NUESTROS EVENTOS</span></h2>
			<p>Tu asistencia es importante para nosotros visitanos en los eventos qu estamos realizando.</p>
		</div>
		<div class="displayheader imagediv" >
			<?php foreach($events as $event){?>
			<div style="margin-left: 10%;">
				<a href="<?php echo site_url('buyfromus1');?>?event_id=<?php echo $event->E_ID; ?>">
				<img src="<?php echo base_url(); ?>public\image\minibaner4.jpg" class="imagesforevent">
				<p class="newbox">New</p>
				<p style="font-size: 10pt;"><?php echo $event->E_NAME;?></p>
				<p style="color:#FFC300; font-size: 9pt"><?php echo '$'.$event->VALUE_OF_TICKET;?></p>
				</a>
			</div>
			<?php }?>
			<!-- <div style="margin-left: 10%;">
				<a href="buyfromus1.php">
				<img src="image\minibaner1.jpg" class="imagesforevent">
				<p class="newbox">New</p>
				<p style="font-size: 10pt;">LA IMPORTANCIA DE LOS ALIMENTOS</p>
				<p style="color:#FFC300;font-size: 9pt">$300.00</p>
				</a>
			</div>
			<div style="margin-left: 10%;">
				<a href="buyfromus1.php">
				<img src="image\minibaner2.jpg" class="imagesforevent">
				<p class="newbox">New</p>
				<p style="font-size: 10pt;">EDUCANDO PARA EL FUTURO</p>
				<p style="color:#FFC300; font-size: 9pt">Entrada Gratis</p>
				</a>
			</div>
			<div style="margin-left: 10%;">
				<a href="buyfromus1.php">
				<img src="image\minibaner3.jpg" class="imagesforevent">
				<p class="newbox">New</p>
				<p style="font-size: 10pt;">POR UNA SONRISA DE VIDA</p>
				<p style="color:#FFC300; font-size: 9pt">$300.00</p>
				</a>
			</div> -->
		</div>
		<div class="subscribe">
			<?php echo form_open('buyfromus'); ?>
				<fieldset class="field">	
				<label class="label"><i class="fa fa-paper-plane-o" style="margin-right: 3%;"></i><strong>Registrese para recibir un boletin</strong></label>
				<?php echo form_input(array('id'=>"email_in", 'name'=>"email", 'placeholder'=>"  Introduce tu correo electronico",'class'=>"borderleft"));?>
				<?php echo form_submit(array('name'=>"submit", 'value'=>"Suscribir", 'class'=>"borderright"));?>
				<?php echo form_error('email');?>
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
	var email = document.forms['buyfromus_form']['email'];

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