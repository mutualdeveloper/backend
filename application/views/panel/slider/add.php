<h2 class="text-center">CREAR SLIDER </h2>
<br>
	<br>	
	<form class="form-horizontal" method="post" action="<?php echo base_url('Slider/save'); ?>">
	  <fieldset>
	    <div class="form-group">
	      <label for="titulo" class="col-lg-2 control-label">Titulo</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="titulo" placeholder="Titulo del slider" required>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="imgRef" class="col-lg-2 control-label">Referencia imagen</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="imgRef" placeholder="URL de la imagen" required>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
	      <div class="col-lg-10">
	        <textarea class="form-control" rows="3" maxlength="200" name="descripcion"></textarea>
	        <span class="help-block">Texto de descripción para el slider</span>
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="buttonText" class="col-lg-2 control-label">Texto Botón</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="buttonText" placeholder="Texto del botón" >
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="buttonRef" class="col-lg-2 control-label">Referencia Botón</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="buttonRef" placeholder="Url del boton">
	      </div>
	    </div>
	    
	    <div id="button-group" class="form-group text-center">
	        <button id="guardar" type="submit" class="btn btn-primary">Guardar cambios</button> 
	    </div>
	  </fieldset>
	</form>