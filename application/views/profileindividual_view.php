		<div>
			<img src="<?php echo base_url(); ?>public\image\bannercontacto.jpg" style="width:100%; height:230px;">
		</div>	
		<div class="imagelink">
			<h3>PERFIL</h3>
			<a href="<?php echo site_url('home');?>" style="color: #FFC300;">INICIO</a> 
			<a href="<?php echo site_url('profileindividual');?>">PERFIL</a>
		</div>
		<div style=" margin: 0% 15% 5% 15%;">
			<h2>Tu Informaci&oacuten del perfil</h2>
      <?php echo form_open('profileindividual'); ?>
      <?php foreach($profiles as $profile) { ?>
			<div style="display: flex;">
				<div style="width: 33.33%">	
					<p><i class="fa fa-book ifoiconpi"></i><?php echo $profile->FNAME; ?></p> 
					<p><i class="fa fa-book ifoiconpi"></i><?php echo $profile->LNAME; ?></p>
					<p><i class="fa fa-user ifoiconpi"></i><?php echo $profile->USERNAME; ?></p>
				</div>
				<div style="width: 33.33%">
					<p><i class="fa fa-map-marker ifoiconpi"></i><?php echo $profile->ADDRESS,", ",$profile->CITY,", ",$profile->STATE,", ",$profile->ZIP; ?></p>
					<p><i class="fa fa-phone ifoiconpi"></i><?php echo "+ ",$profile->PHONE; ?></p>
					<p><i class="fa fa-paper-plane-o ifoiconpi"></i><?php echo $profile->EMAIL; ?></p>
				</div>
				<div style="width: 33.33%">
					<img src="<?php echo base_url(); ?>public\image\user.png" style="width: 45%; height: 90%; float: right;">
				</div>
		</div>
    <?php } ?>
		<div style="margin-top: 3%;background: #F5F5F5; width: 100%; height: 715px; padding: 1% 2% 5% 1%;">
			<h2>Estar en contacto</h2><hr>
				  	<table style="text-align: left; width: 100%; border-spacing: 5pt;">
				  	<col width="33.33%">
				  	<col width="33.33%">
				  	<col width="33.33%">
					<tr>
						<th colspan="2"><?php echo form_label('Nombre');?></th>
						<td rowspan="4" style="text-align: center;"><p><img src="<?php echo base_url(); ?>public\image\user.png" style="width: 45%; height: 90%"></p>
							<p>
                <?php echo form_input(array('type'=>"button", 'value'=>"Seleccionar Foto", 'style'=>"background-color: #FFC300; color: white; border-radius: 14px; width: 60%;height: 35px;border: none;"));?>
              </p>
            </td>	
					</tr> 
					<tr>
					  	<td>
					  	<?php echo form_input(array('name'=>"fname", 'placeholder'=>"Tu Nombre", 'style'=>"width:188%; height: 30px; padding: 2%;border: none;"));?>
              </td>
					</tr>
          <tr>
              <td>
                <?php echo form_error('fname');?>
              </td>
          </tr>
					<tr>
						<th><?php echo form_label('Apellido');?></th>
					</tr>  	
						<td>
						    <?php echo form_input(array('name'=>"lname", 'placeholder'=>"Tu Apellido", 'style'=>"width:188%; height: 30px; padding: 2%;border: none;"));?>
            </td>
					</tr>
          <tr>
              <td>
                <?php echo form_error('lname');?>
              </td>
          </tr>
					<tr style="padding: 2%">
					  	<th><?php echo form_label('Correo');?></th>
					</tr>
					<tr>
					  	<td col span="3">
					  	  <?php echo form_input(array('name'=>"email", 'placeholder'=>"Tu correo electr&oacute;nico", 'style'=>"width:300%; height: 30px; padding: 2%;border: none;"));?>
              </td>
					</tr>
          <tr>
              <td>
                <?php echo form_error('email');?>
              </td>
          </tr>
					<tr>
					  	<th><?php echo form_label('Telefono');?></th>
					  	<th><?php echo form_label('Usuario');?></th>
					  	<th><?php echo form_label('Contrase&ntildea');?></th>
					</tr>
					<tr>
					  	<td>
					  	  <?php echo form_input(array('name'=>"phone", 'placeholder'=>"Telefono", 'style'=>"width:87%; height: 30px; padding: 2%;border: none;"));?>
              </td>
					  	<td>
					  	  <?php echo form_input(array('name'=>"username", 'placeholder'=>"Nombre de Usuario", 'style'=>"width:87%; height: 30px; padding: 2%; border: none;"));?>
              </td>
					  	<td>
					  	  <?php echo form_input(array('name'=>"password", 'placeholder'=>"Contrase&ntilde;a", 'style'=>"width:93%; height: 30px; padding: 2%;border: none;"));?>
              </td>
					</tr>
          <tr>
              <td>
                <?php echo form_error('phone');?>
              </td>
              <td>
                <?php echo form_error('username');?>
              </td>
              <td>
                <?php echo form_error('password');?>
              </td>
          </tr>
				</table> 
				<div>
					<p style="background-color: #FFC300; width: 6.5%; height: 20px;border-radius: 14px; text-align: center; color: white; font-size: 10pt">Nota:</p>
					<p style="font-weight: lighter; font-size: 10pt; margin-top: -1%">Solo puede cambiar los datos (Telefono, Contrase&ntildea u Foto)</p>	
					<p style="text-align: center;">
            <?php echo form_submit(array('value'=>"Guardar Cambios", 'style'=>"background-color: #FFC300; color: white; border-radius: 14px; width: 18%; height: 35px; border: none;"));?>
          </p>
				</div>	
			<?php } ?>
		</div>
	</div>	
</body>
<script type="text/javascript">
var fname = document.forms['profileindividual_form']['fname'];
var lname = document.forms['profileindividual_form']['lname'];
var email = document.forms['profileindividual_form']['email'];
var phone = document.forms['profileindividual_form']['phone'];
var username = document.forms['profileindividual_form']['username'];
var password = document.forms['profileindividual_form']['password'];


var fname_err_msg = document.getElementById('fname_err_msg');
var lname_err_msg = document.getElementById('lname_err_msg');
var email_err_msg = document.getElementById('email_err_msg');
var phone_err_msg = document.getElementById('phone_err_msg');
var username_err_msg = document.getElementById('username_err_msg');
var password_err_msg = document.getElementById('password_err_msg');

fname.addEventListener('blur', fnameVerify, true);
lname.addEventListener('blur', lnameVerify, true);
email.addEventListener('blur', emailVerify, true);
phone.addEventListener('blur', phoneVerify, true);
username.addEventListener('blur', usernameVerify, true);
password.addEventListener('blur', passwordVerify, true);

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

  if (phone.value == "") {
    phone.style.border = "1px solid red";
    // document.getElementById('username_in').style.color = "red";
    document.getElementById("phone_err_msg").innerHTML = "Phone is required";
    phone.focus();
    return false;
  }

  if (username.value == "") {
    username.style.border = "1px solid red";
    // document.getElementById('username_in').style.color = "red";
    document.getElementById("username_err_msg").innerHTML = "Enter Username";
  username_err_msg.style.color="red";
  username.focus();
  return false;
  }
 
  if (password.value == "") {
    password.style.border = "1px solid red";
    // document.getElementById('username_in').style.color = "red";
    document.getElementById("password_err_msg").innerHTML = "Password is required";
    password.focus();
    return false;
  }
}

function fnameVerify() {
  if (fname.value != "") {
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

function phoneVerify() {
  if (phone.value != "") {
  var phone_chk = /^\(?\s*\d{3}\s*[\)–\.]?\s*[2-9]\d{2}\s*[–\.]\s*\d{4}$/;
  if(!phone_chk.test(phone.value)){
    document.getElementById("phone_err_msg").innerHTML = "Enter valid phone number";
    return false;
  } else {
    phone.style.border = "1px solid #5e6e66";
    phone_err_msg.innerHTML = "";
    return true;
  }
}
}

function usernameVerify() {
  if (username.value != "") {
  var username_chk = /^[a-zA-Z ]+$/;
  if(!username_chk.test(username.value)){
    document.getElementById("username_err_msg").innerHTML = "Enter valid username";
    return false;
  } else {
    username.style.border = "1px solid #5e6e66";
    username_err_msg.innerHTML = "";
    return true;
  }
}
}
function passwordVerify() {
  if (password.value != "") {
    var password_chk = /^[a-zA-Z ]+$/;
    if(!password_chk.test(password.value)){
    document.getElementById("password_err_msg").innerHTML = "Enter valid password";
    return false;
  } else {
    password.style.border = "1px solid #5e6e66";
    password_err_msg.innerHTML = "";
    return true;
  }
}
}
</script>