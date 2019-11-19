		<div>
			<h2 class="textcenter">Lista de Voluntarios</h2>
			<div class="displayheader" style="margin-top: 8%;">
				<table style="width: 100%; border-collapse: collapse;">
					<col width="56%">
					<col width="11%">
					<col width="11%">
					<col width="11%">
					<col width="11%">
					<tr class="textcenter" style="background: #F5F5F5; height: 40px; font-size: 10pt;">
						<td>NOMBRE DE VOLUNTARIO</td>
						<td>CORREO</td>
						<td>TELEFONO</td>
						<td>EVENTO</td>
						<td>RESPONSABLE</td>
					</tr>
					<tbody>
						<?php foreach($lstindividuals as $lstindividual) {?>
					<tr style="border-bottom: solid 2pt #F5F5F5; font-size: 9pt;">
						<td style="display: flex;"><img src="<?php echo base_url(); ?>public\image\user.png" style="width: 13%; height: 85px; padding: 2% 0% 2% 0%;">
						<p class="col1hb"><?php echo $lstindividual->name;?></p></td>
						<td class="textcenter"><?php echo $lstindividual->email;?></td>
						<td class="textcenter"><?php echo $lstindividual->phone;?></td>
						<td class="textcenter"><?php echo $lstindividual->e_name;?></td>
						<td class="textcenter"><?php echo $lstindividual->responsible;?></td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
			</div>
			<div style="text-align: center; margin-top: 3%;">
				<button class="listindividualbox"><i class="fa fa-angle-double-left" style="color: #595959;"></i></button></a>
				<button class="listindividualbox" style="background-color: #FFC300; color: #595959;">1</button>
				<button class="listindividualbox" style="color: #595959;">2</button>
				<button class="listindividualbox" style="color: #595959;">3</button>
				<button class="listindividualbox" style="color: #595959;">4</button>
				<button class="listindividualbox"><i class="fa fa-angle-double-right" style="color: #595959;"></i></button>
			</div>
		</div>
	</div>	
</body>