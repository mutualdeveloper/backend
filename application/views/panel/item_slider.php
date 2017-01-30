<?php $item = $this->apiModel->get($id, 'carousel'); ?>
<h2 class="text-center">ITEM SLIDER <?php echo $id; ?></h2>
<br>
	<div class="text-right">
		<a id="editar" href="#" class="btn btn-primary btn-sm">Editar Slider</a>
	</div>
	<br>	
	<form class="form-horizontal">
	  <fieldset>
	    <div class="form-group">
	      <label for="titulo" class="col-lg-2 control-label">Titulo</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="titulo" placeholder="Titulo del slider" value="<?php echo $item->titulo; ?>">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="ulrImagen" class="col-lg-2 control-label">Referencia imagen</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="ulrImagen" placeholder="URL de la imagen" value="<?php echo $item->imgRef; ?>">
	      </div>
	    </div>
	    <div class="descripcion">
	      <label for="textArea" class="col-lg-2 control-label">Descripción</label>
	      <div class="col-lg-10">
	        <textarea class="form-control" rows="3" maxlength="200" id="descripcion"><?php echo $item->descripcion; ?></textarea>
	        <span class="help-block">Texto de descripción para el slider</span>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="textoBoton" class="col-lg-2 control-label">Texto Botón</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="textoBoton" placeholder="Texto del botón" value="<?php echo $item->buttonText; ?>">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="referenciaBoton" class="col-lg-2 control-label">Referencia Botón</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="referenciaBoton" placeholder="Url del boton" value="<?php echo $item->buttonRef; ?>">
	      </div>
	    </div>
	    
	    <div id="button-group" class="form-group hide text-center">
	   
	        <a type="reset" class="btn btn-default">Cancelar</a>
	        <a type="submit" class="btn btn-primary">Guardar</a>

	    </div>
	  </fieldset>
	</form>
<div>
	
</div>

<script>
	$(document).ready(function() {
		$('form input,form textarea').attr('readonly', true);

		$('#editar').unbind().click(function(event) {
			$(this).addClass('hide');
			$('form input,form textarea').attr('readonly', false);
			$('#titulo').focus();
			$('#button-group').removeClass('hide');
		});


	});
</script>