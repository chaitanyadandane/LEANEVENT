<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/CSS/leanevent.css"/>
	<title>Register Agent LEAN</title>
</head>
<body>
	<div class="regform">
		<p style="font-weight: bold; margin-left: 1.5%">Registro Negocio o Fundacion</p><hr>
		<?php echo form_open('registeragent');?>
			<table style="text-align: left; width: 100%; border-spacing: 5pt;">
					  	<col width="50%">
					  	<col width="50%">
						  <tr>
						  	<th >
                  <div style="margin-left: 5%">
                    <?php echo form_label('Correo');?>
                  </div>
                </th>
						  	<th>
                  <div style="margin-left: 7%">
                    <?php echo form_label('Contrase&ntildea');?>
                  </div>
                </th>	
						  </tr> 
						  <tr>
						  	<td>
                  <?php echo form_input(array('placeholder'=>"Correo", 'name'=>"email", 'style'=>"width:89%; height: 30px; padding: 2%;margin-left: 5%; border: none;"));?>
						  	</td>
							<td>
                <?php echo form_input(array('name'=>"password", 'placeholder'=>"Contrase&ntilde;a", 'style'=>"width:89%; height: 30px; padding: 2%; margin-left: 7%; border: none"));?>
							</td>
						  </tr>
              <tr>
                <td>
                  <?php echo form_error('email');?>
                </td>
                <td>
                  <?php echo form_error('password');?>
                </td>
              </tr>
						  <tr>
						  	<th>
                  <div style="margin-left: 5%">
                    <?php echo form_label('Nombre');?>
                  </div>
                </th>
						  	<th>
                  <div style="margin-left: 7%">
                    <?php echo form_label('Apellido');?>
                  </div>
                </th>
						  </tr>
						  <tr>
						  	<td>
                  <?php echo form_input(array('name'=>"fname", 'placeholder'=>"Nombre", 'style'=>"width: 89%; height: 30px; padding: 2%; margin-left: 5%; border: none;"));?>
						  	</td>
						  	<td>
                  <?php echo form_input(array('name'=>"lname", 'placeholder'=>"Apellido", 'style'=>"width: 89%; height: 30px; padding: 2%; margin-left: 7%; border: none;"));?>
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
						  	<th><?php echo form_label('Direcci&oacuten');?></th>
						  </tr>
						  <tr>
						  	<td col span="2">
                  <?php echo form_input(array('name'=>"address", 'placeholder'=>"Direcci&oacute;n", 'style'=>"width:202%; height: 30px; padding: 2%; border: none;"));?>
						  	</td>
						  </tr>
              <tr>
                <td>
                  <?php echo form_error('address');?>
                </td>
              </tr>
						  <tr style="padding: 2%">
						  	<th><?php echo form_label('Ciudad');?></th>
						  </tr>
						  <tr>
						  	<td col span="2">
                  <?php echo form_input(array('name'=>"town", 'placeholder'=>"Ciudad", 'style'=>"width:202%; height: 30px; padding: 2%; border: none;"));?>
								</td>
						  </tr>
               <tr>
                <td>
                  <?php echo form_error('town');?>
                </td>
              </tr>
						   <tr style="padding: 2%">
						  	<th>
                  <div style="margin-left: 5%">
                    <?php echo form_label('Estado');?>
                  </div>
                </th>
						  	<th>
                  <div style="margin-left: 41%">
                    <?php echo form_label('C&oacutedigo Postal');?>
                  </div>
                </th>
						  </tr>
						  <tr>
						  	<td col span="2">
                  <?php echo form_dropdown(array('name'=>"state", 'style'=>"width:130%; height: 45px; padding: 2%; margin-left: 5%; border: none; color: #595959;", 'options'=>array('1'=>'Escoger...','2'=>'TX'),'selected'=>'1'));?>
								<!-- <option>Escoger...</option> -->
							</td>
							<td>
                <?php echo form_input(array('name'=>"zip", 'style'=>"width:55%; height: 30px; padding: 2%;margin-left: 41%;border: none;"));?>
							</td>
						  </tr>
              <tr>
                <td>
                  <?php echo form_error('state');?>
                </td>
                <td>
                  <?php echo form_error('zip');?>
                </td>
              </tr>
			</table>
            <?php echo form_submit(array('value'=>"Registrarse", 'style'=>"background-color:#FFC300; border: none; color:white;border-radius: 14px;  width: 19%; height: 35px; margin-top: 5%"));?><hr>
						<div style="text-align: right;">
              <?php echo form_submit(array('value'=>"Cerrar", 'style'=>"border-radius: 14px; background-color:#D0D0D0; border: none; width: 14%; height: 35px; color: #595959;"));?>
						</div>
		<?php echo form_close(); ?>
	</div>	
</body>
</html>
<script type="text/javascript">
	var email = document.forms['regagent_form']['email'];
	var password = document.forms['regagent_form']['password'];
	var fname = document.forms['regagent_form']['fname'];
	var lname = document.forms['regagent_form']['lname'];
	var address = document.forms['regagent_form']['address'];
	var town = document.forms['regagent_form']['town'];
	var zip = document.forms['regagent_form']['zip'];

	var email_err_msg = document.getElementById('email_err_msg');
	var password_err_msg = document.getElementById('password_err_msg');
	var fname_err_msg = document.getElementById('fname_err_msg');
	var lname_err_msg = document.getElementById('lname_err_msg');
	var address_err_msg = document.getElementById('address_err_msg');
	var town_err_msg = document.getElementById('town_err_msg');
	var zip_err_msg = document.getElementById('zip_err_msg');

	email.addEventListener('blur', emailVerify, true);
	password.addEventListener('blur', passwordVerify, true);
	fname.addEventListener('blur', fnameVerify, true);
	lname.addEventListener('blur', lnameVerify, true);
	address.addEventListener('blur', addressVerify, true);
	town.addEventListener('blur', townVerify, true);
	zip.addEventListener('blur', zipVerify, true);

	function Validate() {
		if (email.value == "") {
    email.style.border = "1px solid red";
    // document.getElementById('email_in').style.color = "red";
    document.getElementById("email_err_msg").innerHTML = "Email is required";
    email.focus();
    return false;

    if (password.value == "") {
    password.style.border = "1px solid red";
    // document.getElementById('fname_in').style.color = "red";
    document.getElementById("password_err_msg").innerHTML = "Enter password";
  password_err_msg.style.color="red";
  password.focus();
  return false;
  }

    if (fname.value == "") {
    fname.style.border = "1px solid red";
    // document.getElementById('fname_in').style.color = "red";
    document.getElementById("fname_err_msg").innerHTML = "Enter First name";
  fname_err_msg.style.color="red";
  fname.focus();
  return false;
  }
  
  if (lname.value == "") {
    lname.style.border = "1px solid red";
    // document.getElementById('lname_in').style.color = "red";
    document.getElementById("lname_err_msg").innerHTML = "Enter Last name";
    lname.focus();
    return false;
  }

  if (address.value == "") {
    address.style.border = "1px solid red";
    // document.getElementById('lname_in').style.color = "red";
    document.getElementById("address_err_msg").innerHTML = "Enter address";
    address.focus();
    return false;
  }

  if (town.value == "") {
    town.style.border = "1px solid red";
    // document.getElementById('lname_in').style.color = "red";
    document.getElementById("town_err_msg").innerHTML = "Enter town";
    town.focus();
    return false;
  }

  if (zip.value == "") {
    zip.style.border = "1px solid red";
    // document.getElementById('lname_in').style.color = "red";
    document.getElementById("zip_err_msg").innerHTML = "Enter zip code";
    zip.focus();
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

function passwordVerify() {
  if (password.value != "") {
  var password_chk = /^[a-zA-Z0-9 ]+$/;
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

function addressVerify() {
  if (address.value != "") {
    var address_chk = /^[a-zA-Z0-9 ]+$/;
    if(!address_chk.test(address.value)){
    document.getElementById("address_err_msg").innerHTML = "Enter valid address";
    return false;
  } else {
    address.style.border = "1px solid #5e6e66";
    address_err_msg.innerHTML = "";
    return true;
  }
}
}

function townVerify() {
  if (town.value != "") {
    var town_chk = /^[a-zA-Z ]+$/;
    if(!town_chk.test(town.value)){
    document.getElementById("town_err_msg").innerHTML = "Enter valid char town";
    return false;
  } else {
    town.style.border = "1px solid #5e6e66";
    town_err_msg.innerHTML = "";
    return true;
  }
}
}

function zipVerify() {
  if (zip.value != "") {
    var zip_chk = /^[0-9]\w{5}$/;
    if(!zip_chk.test(zip.value)){
    document.getElementById("zip_err_msg").innerHTML = "Enter valid zip code";
    return false;
  } else {
    zip.style.border = "1px solid #5e6e66";
    zip_err_msg.innerHTML = "";
    return true;
  }
}
}
</script>