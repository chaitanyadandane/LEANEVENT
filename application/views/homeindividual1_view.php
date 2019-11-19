		<div>
			<h2 class="textcenter">Lista de Eventos</h2>
			<div class="displayheader" style="margin-top: 4%;">
				<table style="width: 100%; border-collapse: collapse;">
					<col width="56%">
					<col width="11%">
					<col width="11%">
					<col width="11%">
					<col width="11%">
					<thead>
					<tr class="textcenter" style="background: #F5F5F5; height: 40px; font-size: 10pt;">
						<td>DETALLES DEL EVENTOS</td>
						<td>LUGAR</td>
						<td>FECHA</td>
						<td>MODIFICAR</td>
						<td>ELIMINAR</td>
					</tr>
					</thead>
					<tbody>
						<?php foreach($events as $event) {?>
					<tr style="border-bottom: solid 2pt #F5F5F5; font-size: 9pt;">
						<td style="display: flex;"><img src="<?php echo base_url(); ?>public\image\minibaner1.jpg" style="width: 13%; height: 85px; padding: 2% 0% 2% 0%;">
						<p class="col1hb"><?php echo $event->E_NAME;?></p></td>
						<td class="textcenter"><?php echo $event->PLACE;?></td>
						<td class="textcenter"><?php echo $event->DATE;?></td>
						<td class="textcenter"><button style="border-radius: 14px; width: 35%; height: 32px; background-color: yellow; border: none;color: white;"><a href="<?php echo site_url('addevent');?>?event_id=<?php echo $event->E_ID; ?>" target="_self"><i class="fa fa-edit"></i></a></button></td>
						<td class="textcenter"><a href="<?php echo site_url('listevent');?>?event_id=<?php echo $event->E_ID; ?>"><button type="submit" name="del_button1" style="border-radius: 14px; width: 35%; height: 32px; background-color: red; border: none;color: white;"><i class="fa fa-trash"></i></button></a>
						</td>
					</tr>
					<?php } ?>
					 </tbody>
					<!-- <tr style="border-bottom: solid 2pt #F5F5F5; font-size: 9pt;">
						<td style="display: flex;"><img src="image\minibaner2.jpg" style="width: 13%; height: 85px; padding: 2% 0% 2% 0%;">
						<p class="col1hb">Nombre del Evento y sus detalle</p></td>
						<td class="textcenter">Direccion del lugar</td>
						<td class="textcenter">14/01/2019</td>
						<td class="textcenter"><button style="border-radius: 14px; width: 35%; height: 32px; background-color: yellow; border: none;color: white;"><i class="fa fa-edit"></i></button></td>
						<td class="textcenter"><button style="border-radius: 14px; width: 35%; height: 32px; background-color: red; border: none;color: white;"><i class="fa fa-trash"></i></button></td> 
					</tr>
					<tr style="border-bottom: solid 2pt #F5F5F5; font-size: 9pt;">
						<td style="display: flex;"><img src="image\minibaner3.jpg" style="width: 13%; height: 85px; padding: 2% 0% 2% 0%;">
						<p class="col1hb">Nombre del Evento y sus detalle</p></td>
						<td class="textcenter">Direccion del lugar</td>
						<td class="textcenter">14/01/2019</td>
						<td class="textcenter"><button style="border-radius: 14px; width: 35%; height: 32px; background-color: yellow; border: none;color: white;"><i class="fa fa-edit"></i></button></td>
						<td class="textcenter"><button style="border-radius: 14px; width: 35%; height: 32px; background-color: red; border: none;color: white;"><i class="fa fa-trash"></i></button></td>
					</tr> -->
				</table>
			</div>
			<div style="text-align: center; margin-top: 3%">
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