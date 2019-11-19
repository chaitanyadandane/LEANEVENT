		<div>
			<img src="<?php echo base_url(); ?>public\image\bannercboleto.jpg" style="width:100%; height:230px;">
		</div>	
		<div class="imagelink">
			<h3>COMPRAR BOLETOS</h3>
			<a href="<?php echo site_url('home');?>" style="color: #FFC300;">INICIO</a> 
			<a href="<?php echo site_url('buyfromus');?>">COMPRAR BOLETOS</a>
		</div>
		<div style="display: flex;">
			<div style="width: 50%;">
				<div style="margin-left: 50%;">
					<img src="<?php echo base_url(); ?>public\image\minibaner4.jpg" style="width:250px; height:300px;">
					<p class="salebox">Sale</p>
				</div>
			</div>	
			<?php foreach($events as $event){?>
			<div style="width: 30%;">
				<p style="font-size: 10pt;"><?php echo $event->E_NAME;?></p>
				<p style="font-size: 10pt"><?php echo '$'.$event->VALUE_OF_TICKET;?><span style="color:#FFC300; margin-left:55%; margin-top: 5%;">&#9733;&#9733;&#9733;&#9733;&#9733;</span><sub style="font-size: 8pt; font-weight:lighter;">  (74 Rating)</sub></p>
				<p style="font-size: 9pt;">iLa fe no se puede perder JAMAS! Es imprescindible para todo en nuestras vidas, poco a poco las cosas ir&aacuten mejorando.No cambiaran de la noche  a la  ma&ntildeana, pero van a cambiar y solo cambiar&aacuten si te lo propones. Si hoy tuvimos un mal d&iacutea, nuestra meta ser&aacute tener uno mejor ma&ntildeana. Es b&aacutesicamente hacer nuestra la frase "Hoy no me dar&eacute por vencido",repitela todos los d&iacuteas, hazla parte de tu filosofia de vida.</p>
				<p style="font-size: 9pt;">Numero de Entradas</p>
				<form method="" action="buyfromus1_form.php">
					<button class="sub" style="border: none;">-</button>
					<input type="text" name="Quantity" value="1" class="qtybox">
					<button class="add" style="border: none;">+</button><br>
					<button style="background-color: #FFC300; color: white; margin-top: 5%; width: 34%; height: 30px;border: none;"><i style="margin-right:10%;" class="fa fa-shopping-cart"></i>Comprar</button>
				</form>
			</div>
			<?php }?>
		</div>
		<div class="buyblock">
			<a href="" class="bottombox1">DESCRIPCION</a>
			<a href="" class="bottombox2">ENCARGADOS</a>
			<a href="" class="bottombox2">PATROCINANTES</a>
		</div>
		<div style="margin: 1% 20% 0% 25%; font-size: 9pt; border: 1px lightgrey solid;"><p style="padding: 4% 2% 8% 4%">Recien he comenzado a leer un libro cuyo mensaje principal es aprender a buscar ese  algo mejor todos los dias.El libro est&aacute escrito por una persona que vive con diabetes tipo 1 y nos presenta como los adelantos en tratamientos technologi&acutea, aunque no han curado su condici&oacuten, d&iacutea tras d&iacutea mejoran su calidad de vida.<br><br>
		Busqemos siempre mejorar algo en nuestras vidas, mantengamos el deseo de progresar, de educarnos m&aacutes acerca de la condici&oacuten de nuestros hijos y ver&aacutes como poco a poco comenzaromos a entenderla mejor.</p></div>	
		<d<div class="subscribe">
			<?php echo form_open('buyfromus1'); ?>
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