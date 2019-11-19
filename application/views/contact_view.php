		<div>
			<img src="<?php echo base_url(); ?>public\image\bannercontacto.jpg" style="width:100%; height:230px;">
		</div>	
		<div class="imagelink">
			<h3>CONTACTO</h3>
			<a href="<?php echo site_url('home');?>" style="color: #FFC300;">INICIO</a> 
			<a href="<?php echo site_url('contact');?>">CONTACTO</a>
		</div>
		<div style=" margin: 0% 15% 5% 15%;">
			<div>
				<h2>Informac&iacuteon del contacto</h2>
				<div style="display: flex; text-align: center;">
					<p style="width: 26%;"><i class="fa fa-map-marker infoicon"></i>
					198 West 21st Street, Suite 721 New York NY 10016</p>
					<p style="width: 25%;"><i class="fa fa-phone  infoicon"></i>+ 1235 2355 98</p>
					<p style="width: 25%;"><i class="fa fa-paper-plane-o  infoicon"></i>info@diazapps.com</p>
					<p style="width: 25%;"><i class="fa fa-globe  infoicon"></i>diazapps.com</p>
				</div>	
			</div>
			<div>
				<h2>LEAN en las redes sociales</h2>
				<div class="textcenter" style="color: #FFC300; display: flex;">
					<div style="width: 25%;">
						<a href="https://www.facebook.com/LeanAyudaHumanitaria/">
						<img src="<?php echo base_url(); ?>public\image1\facebook.png" class="socialmediaicon"><br>
						<p style="color: #FFC300;">LEAN Ayuda Humanitaria</p>
						</a>
					</div>
					<div style="width: 25%">
						<a href="https://twitter.com/leanemergente">	
						<img src="<?php echo base_url(); ?>public\image1\twitter.png" class="socialmediaicon"><br>
						<p style="color: #FFC300;">@LeanEmergente</p>
						</a>
					</div>
					<div style="width: 25%">
						<a href="https://www.instagram.com/leanayudahumanitaria/">
						<img src="<?php echo base_url(); ?>public\image1\instagram.png" class="socialmediaicon"><br>
						<p style="color: #FFC300;">@LeanAyudaHumanitaria</p>
						</a>
					</div>
					<div style="width: 25%">
						<a href="mailto:lean.emergente@gmail.com">
						<img src="<?php echo base_url(); ?>public\image1\correo.png" class="socialmediaicon"><br>
						<p style="color: #FFC300;">lean.emergente@gmail.com</p>
						</a>
					</div>
				</div>
				<div style="margin-top: 3%;background: #F5F5F5; width: 100%; height: 655px; padding: 1% 2% 5% 1%;">
					<h2>Estar en contacto</h2>
					<?php echo form_open('contact'); ?>
					  	<table style="text-align: left; width: 100%; border-spacing: 5pt;">
					  	<col width="50%">
					  	<col width="50%">
						  <tr>
						  	<th><?php echo form_label('Nombre');?></th>
						  	<th><?php echo form_label('Apellido');?></th>	
						  </tr> 
						  <tr>
						  	<td><?php echo form_input(array('id'=>"fname_in",'name'=>"fname", 'placeholder'=>"Tu Nombre", 'style'=>"width:95%; height: 30px; padding: 2%;border: none;"));?>
						  	</td>
							<td><?php echo form_input(array('id'=>"lname_in", 'name'=>"lname",'placeholder'=>"Tu Apellido",'style'=>"width:98%; height: 30px; padding: 2%;border: none"));?>
							</td>
						  </tr>
						  <tr>
						  	<td>
						  		<?php echo form_error('fname');?>
						  	</td>
						  	<td>
						  		<?php echo form_error('lname');?>
						  	</td>
						  </tr>
						  <tr style="padding: 2%">
						  	<th><?php echo form_label('Correo');?></th>
						  </tr>
						  <tr>
						  	<td col span="2">
						  		<?php echo form_input(array('id'=>"email_in", 'name'=>"email", 'placeholder'=>"Tu correo electronico", 'class'=>"biginputbox"));?>
						  	</td>
						  </tr>
						  <tr>
						  	<td>
						  		<?php echo form_error('email');?>
						  	</td>
						  </tr>
						  <tr>
						  	<th><?php echo form_label('Tema');?></th>
						  </tr>
						  <tr>
						  	<td col span="2">
						  		<?php echo form_input(array('id'=>"topic_in", 'name'=>"topic", 'placeholder'=>"Su asunto de este mensaje.", 'class'=>"biginputbox"));?>
						  	</td>
						  </tr>
						  <tr>
						  	<td>
						  		<?php echo form_error('topic');?>
						  	</td>
						  </tr>
						  <tr>
						  	<th><?php echo form_label('Mensaje');?></th>
						  </tr>
						  <tr>
						  	<td col span="2">
						  		<textarea type="text" name="message" placeholder="Di algo sobre nosotros" style="width:200%; height: 130px; padding: 2%;border: none;">
						  		</textarea>
						  	</td>
						  </tr>
						  <tr>
						  	<td><?php echo form_submit(array('name' => 'submit', 'value'=>"Enviar mensaje", 'style'=>"background-color: #FFC300; color: white; border-radius: 14px; margin: 6% 0% 0% 86%; width: 35%;height: 35px;border: none;"));?>
						  	</td>
						  </tr>
						</table>  
					<?php echo form_close(); ?>
				</div>
			</div>	
		</div>
		<div class="textcenter" style="margin-top: 15%">
			LEAN EN LAS REDES SOCIALES<br>
			<a href="https://twitter.com/leanemergente"><i class="fa fa-twitter" style="color: #FFC300"></i></a>
			<a href="https://www.facebook.com/LeanAyudaHumanitaria/"><i class="fa fa-facebook-f" style="color: #FFC300"></i></a>
			<a href="https://www.instagram.com/leanayudahumanitaria/"><i class="fa fa-instagram" style="color: #FFC300"></i></a><br>
		</div>
	</div>
</body>
<script type="text/javascript">
	var fname = document.forms['con_form']['fname'];
var lname = document.forms['con_form']['lname'];
var email = document.forms['con_form']['email'];
var topic = document.forms['con_form']['topic'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var fname_err_msg = document.getElementById('fname_err_msg');
var lname_err_msg = document.getElementById('lname_err_msg');
var email_err_msg = document.getElementById('email_err_msg');
var topic_err_msg = document.getElementById('topic_err_msg');
// SETTING ALL EVENT LISTENERS
fname.addEventListener('blur', fnameVerify, true);
lname.addEventListener('blur', lnameVerify, true);
email.addEventListener('blur', emailVerify, true);
topic.addEventListener('blur', topicVerify, true);
// validation function
function Validate() {
  // validate fname
  if (fname.value == "") {
    fname.style.border = "1px solid red";
    // document.getElementById('fname_in').style.color = "red";
    document.getElementById("fname_err_msg").innerHTML = "Enter First name";
  fname_err_msg.style.color="red";
  fname.focus();
  return false;
  }
  // validate lname
  if (lname.value == "") {
    lname.style.border = "1px solid red";
    // document.getElementById('lname_in').style.color = "red";
    document.getElementById("lname_err_msg").innerHTML = "lname is required";
    lname.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    // document.getElementById('email_in').style.color = "red";
    document.getElementById("email_err_msg").innerHTML = "Email is required";
    email.focus();
    return false;
  }
  // validate topic
  if (topic.value == "") {
    topic.style.border = "1px solid red";
    // document.getElementById('topic_in').style.color = "red";
    document.getElementById("topic_err_msg").innerHTML = "topic is required";
    topic.focus();
    return false;
  }
}
// event handler functions
function fnameVerify() {
  if (fname.value != "") {
  //  fname.style.border = "1px solid #5e6e66";
  //  // document.getElementById('fname_in').style.color = "#5e6e66";
  //  fname_err_msg.innerHTML = "";
  //  return true;
  // }
  var fname_chk = /^[a-zA-Z ]+$/;
  if(!fname_chk.test(fname.value)){
    document.getElementById("fname_err_msg").innerHTML = "Enter valid char First name";
    return false;
  } else {
    fname.style.border = "1px solid #5e6e66";
    fname_err_msg.innerHTML = "";
    return true;
  }
}
}
function lnameVerify() {
  if (lname.value != "") {
    var lname_chk = /^[a-zA-Z ]+$/;
    if(!lname_chk.test(lname.value)){
    document.getElementById("lname_err_msg").innerHTML = "Enter valid char Last name";
    return false;
  } else {
    lname.style.border = "1px solid #5e6e66";
    lname_err_msg.innerHTML = "";
    return true;
  }
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
function topicVerify() {
  if (topic.value != "") {
    var topic_chk = /^[a-zA-Z ]+$/;
    if(!topic_chk.test(topic.value)){
    document.getElementById("topic_err_msg").innerHTML = "Enter valid Topic";
    return false;
  } else {
    topic.style.border = "1px solid #5e6e66";
    topic_err_msg.innerHTML = "";
    return true;
  }
}
}
</script>