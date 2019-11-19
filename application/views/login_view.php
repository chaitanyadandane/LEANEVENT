		<div>
			<img src="<?php echo base_url(); ?>public\image\bannerlogin.jpg" style="width:100%; height:230px;">
		</div>	
		<div class="imagelink">
			<h3>INICIAR SESI&OacuteN</h3>
			<a href="<?php echo site_url('home');?>" style="color: #FFC300;">INICIO</a> 
			<a href="<?php echo site_url('login');?>">INICIAR SESI&OacuteN</a>
		</div>
		<div style="margin-top: 3%;background: #F5F5F5; width: 60%; height: 300px; padding: 1% 2% 5% 1%; margin: 0% 0% 5% 20%;">
			<h2>Iniciar Sesi&oacuten</h2>
			<?php echo form_open('login');?>
				<table style="text-align: left; width: 100%; border-spacing: 5pt;">
					<col width="50%">
					<col width="50%">
					 <tr>
					  	<th><?php echo form_label('Nombre de Usuario');?></th>
					  	<th><?php echo form_label('Contrase&ntildea');?></th>	
					</tr> 
					<tr>
					  	<td><?php echo form_input(array('name' => 'username', 'placeholder'=>"Nombre de Usuario o Correo", 'style' => "width:95%; height: 30px; padding: 2%;border: none;")); ?>
					  	</td>
						<td><?php echo form_input(array('type' => 'password', 'name' => 'password', 'placeholder'=>"Contrase&ntilde;a", 'style' => "width:99%; height: 30px; padding: 2%;border: none;")); ?>
						<!-- <div class="errormsg" id="password_err_msg">
							<?php
								echo $passwordError;
						    ?>
						</div --></td>
					</tr>
					<tr>
						<td>
							<?php echo form_error('username');?>
						</td>
						<td>
							<?php echo form_error('password'); ?>
						</td>
					</tr>
				</table>
				<div style="text-align: center; margin-top: 3%;">	
					<a href="recoverpassword.php" target="_self" style="color: #FFC300;">Olvido su contrase&ntildea?</a><br>	
					<?php echo form_submit(array('name'=>"submit_button", 'value'=>"Entra", 'style'=>"background-color: #FFC300; color: white; border-radius: 14px; margin-top: 3%; width: 10%;height: 35px;border: none;"));?>
				</div>		  
			<?php echo form_close(); ?>
		</div>
		<div class="textcenter" style="margin-top: 20%">
			LEAN EN LAS REDES SOCIALES<br>
			<a href="https://twitter.com/leanemergente"><i class="fa fa-twitter" style="color: #FFC300"></i></a>
			<a href="https://www.facebook.com/LeanAyudaHumanitaria/"><i class="fa fa-facebook-f" style="color: #FFC300"></i></a>
			<a href="https://www.instagram.com/leanayudahumanitaria/"><i class="fa fa-instagram" style="color: #FFC300"></i></a><br>
		</div>
	</div>	
</body>
<script type="text/javascript">
	var username = document.forms['login_form']['username'];
var password = document.forms['login_form']['password'];

var username_err_msg = document.getElementById('username_err_msg');
var password_err_msg = document.getElementById('password_err_msg');

username.addEventListener('blur', usernameVerify, true);
password.addEventListener('blur', passwordVerify, true);

function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    // document.getElementById('username_in').style.color = "red";
    document.getElementById("username_err_msg").innerHTML = "Enter Username";
  username_err_msg.style.color="red";
  username.focus();
  return false;
  }
  // validate username
  if (password.value == "") {
    password.style.border = "1px solid red";
    // document.getElementById('username_in').style.color = "red";
    document.getElementById("password_err_msg").innerHTML = "Password is required";
    password.focus();
    return false;
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