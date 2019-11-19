		<div>
			<img src="<?php echo base_url(); ?>public\image\bannerregistro.jpg" style="width:100%; height:230px;">
		</div>	
		<div class="imagelink">
			<h3>REG&IacuteSTRATE</h3>
			<a href="<?php echo site_url('home');?>" style="color: #FFC300;">INICIO</a> 
			<a href="<?php echo site_url('buyfromus');?>">REG&IacuteSTRATE</a>
		</div>
		<div style="margin-top: 3%;background: #F5F5F5; width: 60%; height: 110px; padding: 1% 1% 5% 1%; margin: 0% 0% 5% 20%; " id="myForm">
			<p style="font-size: 14pt">Elija el tipo de usuario para registrarse</p><hr>
			<?php echo form_open('signup');?>
			<div style="text-align: center;display: flex; margin-top: 4% ">
				  <div style="width: 33.33%">
				  <a href="<?php echo site_url('registerindividual');?>">
				  	<input type="button" value="Como Individual" style="border-radius: 14px; background-color: #FFC300; color: white; width: 55%; height: 35px; border: none;">
				  </a>
				  </div>
				  <div style="width: 33.33%">
				  	<a href="<?php echo site_url('registerbusiness');?>">
				  		<input type="button" value="Como Negocio o Fundacion" style="border-radius: 14px; background-color: #FFC300;color: white; width: 85%; height: 35px; border: none;">
				  	</a>	
				  </div>
				  <div style="width: 33.33%">
				  	<a href="<?php echo site_url('registeragent');?>">
				  		<input type="button" value="Como agente LEAN" style="border-radius: 14px; background-color: #FFC300; color: white; width: 65%; height: 35px; border: none;">
				  	</a>	
				  </div>
			</div>	  
			<?php echo form_close(); ?>
		</div>
		<div class="textcenter" style="margin-top: 15%">
			LEAN EN LAS REDES SOCIALES<br>
			<a href="https://twitter.com/leanemergente"><i class="fa fa-twitter" style="color: #FFC300"></i></a>
			<a href="https://www.facebook.com/LeanAyudaHumanitaria/"><i class="fa fa-facebook-f" style="color: #FFC300"></i></a>
			<a href="https://www.instagram.com/leanayudahumanitaria/"><i class="fa fa-instagram" style="color: #FFC300"></i></a><br>
		</div>
	</div>	
</body>