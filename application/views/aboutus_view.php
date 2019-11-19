		<div>
			<img src="<?php echo base_url();?>public\image\bannerabout.jpg" style="width:100%; height:230px;">
		</div>	
		<div class="imagelink">
			<h3>QUIENES SOMOS</h3>
			<a href="<?php echo site_url('home');?>" style="color: #FFC300;">HOME</a> 
			<a href="<?php echo site_url('aboutus');?>">QUIENES SOMOS</a>
		</div>
		<div class="aboutusfontsize">
			<div style="width: 53%;">
				<div>
					<h2>¿Qué es LEAN?</h2>
					<p>LEAN es una asociación civil sin fines de lucro conformada por gente con gran sensibilidad social, dedicada a la defensa de los derechos humanos y la consecución de ayuda humanitaria, favoreciendo directamente o a través de otras asociaciones o agrupaciones provinciales a venezolanos residentes en España y a quienes viven en Venezuela.
					</p>
				</div>	
				<div>
					<h2>¿Cuáles son los fines de LEAN?</h2>
			   		<p>LEAN está dedicada a fomentar valores e instaurarlos como principios, trabajar en formación cívica, promover y defender las libertades individuales y los derechos humanos en Venezuela, sensibilizar a la gente sobre la importancia de conocer, respetar y practicar los principios contenidos en la Declaración Universal de Derechos Humanos, asistir a víctimas de actos violentos y persecución, favorecer la adquisición de conocimiento a través de la lectura y trabajar incansablemente en la ayuda humanitaria como gesto de solidaridad y buena voluntad.</p>
				</div>
				<div>
					<h2>¿Cuáles son las actividades de LEAN?</h2>
					<p>LEAN trabaja en el desarrollo y publicación de estudios de investigación sobre temas de interés social, cultural, político y económico, preparación de ponencias para foros y conferencias, presentación en eventos especializados y mesas de trabajo, petición de colaboración a personalidades de reconocida trayectoria, estudio de casos de violación de derechos humanos a través de letrados voluntarios, asistencia y representación para la defensa de las víctimas de actos violentos y persecución, lanzamiento de campañas sobre valores cívicos y derechos humanos, planificación y ejecución de programas de voluntariado para brindar ayuda humanitaria y organización de charlas sobre la situación económica, política y social de Venezuela y demás temas de interés mundial.</p>
				</div>
				<div>
					<h2>¿Qu hacemos?</h2>
					<p>La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros conciudadanos en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de los Derechos Humanos.</p>
				</div>
			</div>
			<div style="width: 47%; margin-left: 13%">
				<div>
					<h2>¿Como puedes ayudar?</h2>
					<h4>Puedes ayudar de tres formas:</h4>
					<ul><li>Dona material médico e insumos para Venezuela.</li>
					   <li>A través de donaciones económicas</li>
					   <li>Hazte voluntario.</li>
					</ul>
				</div>
				<div>
					<h2>¿Donde estamos?</h2>
					<h4>Somos 17 Coordinacines en ESPAÑA:</h4>
					<p>Alicante - Almería - Cataluña - Granada - Islas Canarias - Islas Baleares - León - Madrid -Málaga - Salamanca - Sevilla - Valencia - Valladolid - Zaragoza - LEAN EEUU.</p>
				</div>
				<div>
					<h4>Instituciones y Organizaciones Beneficiadas en<br>VENEZUELA:</h4>
					<p>Ayudamos a 11 Estados a través de 35 puntos de destino:<br>
						<div class="displayheader">
							<div style="width: 50%">
								<ul><li>LEAN Anzoátegui</li>
									<li>Funsaluz Barcelona, Valencia y Maracaibo</li>
									<li>Fundación La Pastillita</li>
									<li>LEAN Aragua 1</li>
									<li>Parroquia Michelena</li>
									<li>LEAN Caracas 1, 2, 3, 4, 5, 6, 7, 8 y 9.</li>
									<li>Seno Salud</li>
									<li>Somos Ayuda</li>
									<li>FDIV</li>
									<li>Parroq. San Fco. de Asis</li>
									<li>ONG Pan y Vino</li>
									<li>LEAN Nueva Esparta</li>
									<li>Parroquia San Félix</li>
									<li>Fundación Esperanza de Vida</li>
									<li>Caritas de Venezuela</li>
								</ul>
							</div>
							<div style="width: 50%;">
								<ul><li>Fund. Denzel El Guerrero</li>
									<li>Mensajeras de la Alegría</li>
									<li>Caritas Valle de la Pascua</li>
									<li>Caritas Diocesana Barquisimeto</li>
									<li>Hogar de Niños Impedidos Don Orione</li>
									<li>AVEPEII</li>
									<li>Casa Hogar Madre Teresa de Calcuta</li>
									<li>Seminario Santa Rosa de Lima</li>
									<li>Casa Aragón</li>
									<li>Caritas Parroquial de Mérida</li>
									<li>Asociación Dr. Paúl Moreno Camacho</li>
									<li>FUNDAYÚDANOS</li>
								</ul>
							</div>
						</div>		
					</p>
				</div>
			</div>	
		</div>
		<div class="subscribe">
			<?php echo form_open('aboutus'); ?>
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
	var email = document.forms['aboutus_form']['email'];

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