<?php $item = $this->apiModel->get($id, 'carousel'); ?>
<h2 class="text-center">DETALLE SLIDER</h2>
<br>
	<div class="text-right">
		<a id="editar" href="#" class="btn btn-primary btn-sm">Editar Slider</a>
		<a id="borrar"  class="btn btn-danger btn-sm">Borrar Slider</a> 
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
	        <a id="guardar" type="submit" class="btn btn-primary">Guardar cambios</a> 
	    </div>
	  </fieldset>
	</form>


<script>
	$(document).ready(function() {
		var id = '<?php echo $id; ?>'
		$('form input,form textarea').attr('readonly', true);

		$('#editar').unbind().click(function(event) {
			editable(true);
		});

		$('#guardar').unbind().click(function(event) {
			editable(false);
			save();
		});

		$('#borrar').unbind().click(function(event) {
			deleteSlider();
		});

		function editable(value){
			if(value){
				$('#editar , #borrar').addClass('hide');
				$('form input,form textarea').attr('readonly', false);
				$('#titulo').focus();
				$('#button-group').removeClass('hide');
			}else{
				$('#editar , #borrar').removeClass('hide');
				$('form input,form textarea').attr('readonly', true);
				$('#button-group').addClass('hide');
			}
		}

		function save(){
			$.ajax({
				type: "post",
				url: "<?php echo base_url('slider/save'); ?>",
				cache: false,
				data: { 
			        'id': id, 
			        'titulo': getVal('titulo'),
			        'imgRef': getVal('ulrImagen'),
			        'descripcion': getVal('descripcion'),
			        'buttonText': getVal('textoBoton'),
			        'buttonRef': getVal('referenciaBoton') 
			    },
			    beforeSend: function() {
			       	$('#modalCircle').modal('show');
			       }
			}).done(function(resp) {
				$('#modalCircle').modal('hide');
		})
		.fail(function() {
			console.log("error");
		});
		
		}

		function getVal(selector){
			return $('#' + selector).val();
		}




		function deleteSlider(){
			console.log('entró al slider');
			swal({
			  title: "Está seguro que desea borrar?",
			  text: "Una vez borrado no se podrá recuperar el Slider",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Si borrar!",
			  cancelButtonText: "Cancelar",
			  closeOnConfirm: false
			},
			function(){
				ajaxDelete();
			});
		}

		function ajaxDelete(){
			$.ajax({
				type: "post",
				url: "<?php echo base_url('slider/delete'); ?>",
				cache: false,
				data: { 
			        'id': id
			    }
				}).done(function(resp) {
					window.location.replace("<?php echo base_url('panel/sliders') ?>");
			})
			.fail(function() {
				console.log("error");
			});		
		}

	


	});
</script>