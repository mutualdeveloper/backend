<?php $sliders = $this->apiModel->get(null,'carousel'); ?>
<div class="row">
	<h2 class="text-center">Sliders</h2>
	

	<div  style="padding: 0 5%;">
	<div class="text-right">
		<a href="<?php echo base_url('panel/sliderAdd'); ?>" class="btn btn-default">Nuevo Slider</a>
	</div>
	<br>	
		<table >
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Descripción</th>
				<th>URL Imagen</th>
				<th>Texto Botón</th>
				<th>Link Botón</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($sliders as $slider) {?>
			<tr>
				<td><?php echo $slider->titulo ?></td>
				<td><?php echo $slider->descripcion ?></td>
				<td><?php echo $slider->imgRef ?></td>
				<td><?php echo $slider->buttonText ?></td>
				<td><?php echo $slider->buttonRef ?></td>
				<td><a class="btn btn-primary" href="<?php 	echo base_url('panel/sliderdetail/?id=' . $slider->id) ?>">Ver más</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
</div>


