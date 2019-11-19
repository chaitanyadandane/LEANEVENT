		<div>
			<img src="<?php echo base_url(); ?>public\image\bannerregistro.jpg" style="width:100%; height:230px;">
		</div>	
		<div class="imagelink">
			<h3>REGISTRO DE EVENTO</h3>
			<a href="<?php echo site_url('listevent');?>" style="color: #FFC300;">EVENTOS</a> 
			<a href="<?php echo site_url('addevent');?>">REGISTRO</a>
		</div>
		<div style=" margin: 0% 15% 5% 15%;">
			<div style="margin-top: 3%;background: #F5F5F5; width: 100%; height: 675px; padding: 1% 2% 5% 1%;">
				<h2>Registro de Evento</h2><hr>
					<?php echo form_open('addevent'); ?>
					  	<table style="text-align: left; width: 100%; border-spacing: 5pt;">
					  	<col width="33.33%">
					  	<col width="33.33%">
					  	<col width="33.33%">
						<tr>
							<th colspan="2"><?php echo form_label('Nombres');?></th>
							<td rowspan="4" style="text-align: center;">
								<p>
									<img src="<?php echo base_url(); ?>public\image\imagensubir.png" style="width: 45%; height: 90%">
								</p>
								<p>
									<input type="button" name="" value="Seleccionar Imagen" style="background-color: #FFC300; color: white; border-radius: 14px; width: 75%;height: 35px;border: none;">
								</p>
							</td>	
						</tr> 
						<tr>
						  	<td>
						  		<?php echo form_input(array('name'=>"ename", 'placeholder'=>"Nombre del Evento", 'style'=>"width:188%; height: 30px; padding: 2%;border: none;"));?>
						  	</td>
						</tr>
						<tr>
						  	<td>
						  		<?php echo form_error('ename');?>
						  	</td>
						  </tr>
						<tr>
							<th><?php echo form_label('Responsable');?></th>
						</tr>  	
							<td>
								<?php echo form_input(array('name'=>"responsible", 'placeholder'=>"Nombre del Responsable",'style'=>"width:188%; height: 30px; padding: 2%;border: none;"));?>
							</td>
						</tr>
						<tr>
						  	<td>
						  		<?php echo form_error('responsible');?>
						  	</td>
						  </tr>
						<tr style="padding: 2%">
						  	<th><?php echo form_label('Lugar');?></th>
						</tr>
						<tr>
						  	<td col span="3">
						  		<?php echo form_input(array('name'=>"place", 'placeholder'=>"Direccion del Lugar del Eventos", 'style'=>"width:300%; height: 30px; padding: 2%;border: none;"));?>
						  	</td>
						</tr>
						<tr>
						  	<td>
						  		<?php echo form_error('place');?>
						  	</td>
						  </tr>
						<tr>
						  	<th><?php echo form_label('Fecha');?></th>
						  	<th><?php echo form_label('Hora');?></th>
						  	<th><?php echo form_label('Valor de Boleto');?></th>
						</tr>
						<tr>
						  	<td>
						  		<?php echo form_input(array('type'=>"date", 'name'=>"date", 'placeholder'=>"MM/DD/YYYY", 'style'=>"width:87%; height: 30px; padding: 2%;border: none;"));?>
						  	</td>
						  	<td>
						  		<?php echo form_input(array('name'=>"time", 'placeholder'=>"HH:MI", 'style'=>"width:87%; height: 30px; padding: 2%; border: none;"));?>
				              </td>
						  	<td>
						  		<?php echo form_input(array('name'=>"price", 'placeholder'=>"$000.00", 'style'=>"width:93%; height: 30px; padding: 2%;border: none;"));?>
						  	</td>
						</tr>
						<tr>
						  	<td>
						  		<?php echo form_error('date');?>
						  	</td>
						  	<td>
						  		<?php echo form_error('time');?>
						  	</td>
						  	<td>
						  		<?php echo form_error('price');?>
						  	</td>
						  </tr>
					</table> 
					<div style="text-align: center;">
						<input type="hidden" name="eventId" value="<?php echo $eventId ?>">
						<?php echo form_submit(array('name'=>'forupdate_btn','value'=>"Guardar", 'style'=>"background-color: #FFC300; color: white; border-radius: 14px; width: 13%; height: 35px; border: none; margin-top: 5%"));?>
					</div>	
				<?php echo form_close(); ?>
			</div>
		</div>	
	</div>	
</body>
<script type="text/javascript">
	var ename = document.forms['addevent_form']['ename'];
var responsible = document.forms['addevent_form']['responsible'];
var place = document.forms['addevent_form']['place'];
var date = document.forms['addevent_form']['date'];
var time = document.forms['addevent_form']['time'];
var price = document.forms['addevent_form']['price'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var ename_err_msg = document.getElementById('ename_err_msg');
var responsible_err_msg = document.getElementById('responsible_err_msg');
var place_err_msg = document.getElementById('place_err_msg');
var date_err_msg = document.getElementById('date_err_msg');
var time_err_msg = document.getElementById('time_err_msg');
var price_err_msg = document.getElementById('price_err_msg');

// SETTING ALL EVENT LISTENERS
ename.addEventListener('blur', enameVerify, true);
responsible.addEventListener('blur', responsibleVerify, true);
place.addEventListener('blur', placeVerify, true);
date.addEventListener('blur', dateVerify, true);
time.addEventListener('blur', timeVerify, true);
price.addEventListener('blur', priceVerify, true);
// validation function
function Validate() {
  // validate ename
  if (ename.value == "") {
    ename.style.border = "1px solid red";
    // document.getElementById('ename_in').style.color = "red";
    document.getElementById("ename_err_msg").innerHTML = "Enter First name";
  ename_err_msg.style.color="red";
  ename.focus();
  return false;
  }
  // validate responsible
  if (responsible.value == "") {
    responsible.style.border = "1px solid red";
    // document.getElementById('responsible_in').style.color = "red";
    document.getElementById("responsible_err_msg").innerHTML = "responsible is required";
    responsible.focus();
    return false;
  }
  // validate place
  if (place.value == "") {
    place.style.border = "1px solid red";
    // document.getElementById('place_in').style.color = "red";
    document.getElementById("place_err_msg").innerHTML = "place is required";
    place.focus();
    return false;
  }
  // validate date
  if (date.value == "") {
    date.style.border = "1px solid red";
    // document.getElementById('date_in').style.color = "red";
    document.getElementById("date_err_msg").innerHTML = "date is required";
    date.focus();
    return false;
  }

   if (time.value == "") {
    time.style.border = "1px solid red";
    // document.getElementById('time_in').style.color = "red";
    document.getElementById("time_err_msg").innerHTML = "Enter First name";
  time_err_msg.style.color="red";
  time.focus();
  return false;
  }

  if (price.value == "") {
   price.style.border = "1px solid red";
    // document.getElementById('price_in').style.color = "red";
    document.getElementById("price_err_msg").innerHTML = "Enter First name";
  price_err_msg.style.color="red";
  price.focus();
  return false;
  }
}
// event handler functions
function enameVerify() {
  if (ename.value != "") {
    var ename_chk = /^[a-zA-Z ]+$/;
  if(!ename_chk.test(ename.value)){
    document.getElementById("ename_err_msg").innerHTML = "Enter valid char First name";
    return false;
  } else {
    ename.style.border = "1px solid #5e6e66";
    ename_err_msg.innerHTML = "";
    return true;
  }
}
}
function responsibleVerify() {
  if (responsible.value != "") {
    var responsible_chk = /^[a-zA-Z ]+$/;
    if(!responsible_chk.test(responsible.value)){
    document.getElementById("responsible_err_msg").innerHTML = "Enter valid char Last name";
    return false;
  } else {
    responsible.style.border = "1px solid #5e6e66";
    responsible_err_msg.innerHTML = "";
    return true;
  }
}
}
function placeVerify() {
  if (place.value != "") {
    var place_chk = /^[#.0-9a-zA-Z\s,-]+$/;
    if(!place_chk.test(place.value)){
    document.getElementById("place_err_msg").innerHTML = "Enter valid place";
    return false;
  } else {
    place.style.border = "1px solid #5e6e66";
    place_err_msg.innerHTML = "";
    return true;
  }
}
}
function dateVerify() {
  if (date.value != "") {
    // var date_chk = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    if(!date_chk.test(date.value)){
    document.getElementById("date_err_msg").innerHTML = "Enter valid date";
    return false;
  } else {
    date.style.border = "1px solid #5e6e66";
    date_err_msg.innerHTML = "";
    return true;
  }
}
}

function timeVerify() {
  if (time.value != "") {
    var time_chk = /^[0-2][0-3]:[0-5][0-9]$/;
    if(!time_chk.test(time.value)){
    document.getElementById("time_err_msg").innerHTML = "Enter valid time";
    return false;
  } else {
    time.style.border = "1px solid #5e6e66";
    time_err_msg.innerHTML = "";
    return true;
  }
}
}

function priceVerify() {
  if (price.value != "") {
    var price_chk = /^((\d{1,3}|\s*){1})((\,\d{3}|\d)*)(\s*|\.(\d{2}))$/;
    if(!price_chk.test(price.value)){
    document.getElementById("price_err_msg").innerHTML = "Enter Price";
    return false;
  } else {
    price.style.border = "1px solid #5e6e66";
    price_err_msg.innerHTML = "";
    return true;
  }
}
}
</script>