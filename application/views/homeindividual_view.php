		<div>
			<h2 class="textcenter">Lista de Eventos</h2>
			<div class="displayheader" style="margin-top: 8%;">
				<table style="width: 100%; border-collapse: collapse;">
					<col width="56%">
					<col width="11%">
					<col width="11%">
					<col width="11%">
					<col width="11%">
					<tr class="textcenter" style="background: #F5F5F5; height: 40px; font-size: 10pt;">
						<td>DETALLES DEL EVENTOS</td>
						<td>LUGAR</td>
						<td>FECHA</td>
						<td>HORA</td>
						<td>ASISTENCIA</td>
					</tr>
					<?php foreach($events as $event) {?>
					<tr style="border-bottom: solid 2pt #F5F5F5; font-size: 9pt;">
						<td style="display: flex;"><img src="<?php echo base_url(); ?>public\image\minibaner1.jpg" style="width: 13%; height: 85px; padding: 2% 0% 2% 0%;">
						<p style="padding: 5%; font-weight: bold;"><?php echo $event->E_NAME;?></p></td>
						<td class="textcenter"><?php echo $event->PLACE;?></td>
						<td class="textcenter"><?php echo $event->DATE;?></td>
						<td class="textcenter"><?php echo $event->TIME;?></td>
						<td class="textcenter"><a href="<?php echo site_url('individualeventconfirm');?>?event_id=<?php echo $event->E_ID; ?>"><button name= 'confirmbtn' type="submit" value="Confirmar" style="border-radius: 14px; width: 65%; height: 32px; background-color: #FFC300; border: none; color: white;" onclick="setColor('confirmbtn','green')">Confirmar</button></a></td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>
	</div>	
</body>