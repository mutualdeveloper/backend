<div id="menu" class="col-md-2 col-lg-2">
      <div class="list-group table-of-contents">
              <a id="navbar" class="list-group-item text-center" href="<?php echo base_url('panel/menus'); ?>">Menu</a>
              <a id="slider" class="list-group-item text-center" href="<?php echo base_url('panel/sliders'); ?>">Sliders</a>
              <a id="servicio" class="list-group-item text-center" href="<?php echo base_url('panel/servicios'); ?>">Servicios</a>
              <a id="aereo" class="list-group-item text-center" href="<?php echo base_url('panel/aereos'); ?>">Aéreos</a>
              <a id="paquete" class="list-group-item text-center" href="<?php echo base_url('panel/paquetes'); ?>">Paquetes</a>
              <a id="footer" class="list-group-item text-center" href="<?php echo base_url('panel/footer'); ?>">Footer</a>
              <a id="publicacion" class="list-group-item text-center" href="<?php echo base_url('panel/publicaciones'); ?>">Publicaciones</a>
            </div>
    </div>

    <script>
      jQuery(document).ready(function($) {
        var pathname = window.location.pathname; 
        selected = pathname.substring(pathname.lastIndexOf("/") + 1);
        console.log('seleccionado', selected);
        switch (selected) {
            case 'menus':
                $('#navbar').addClass('item-seleccionado');
                $('#navbar').attr('href', '#');
                break;
            case 'sliders':
                $('#slider').addClass('item-seleccionado');
                $('#slider').attr('href', '#');
                break;
            case 'servicios':
                $('#servicio').addClass('item-seleccionado');
                $('#servicio').attr('href', '#');
                break;
            case 'aereos':
                $('#aereo').addClass('item-seleccionado');
                $('#aereo').attr('href', '#');
                break;
            case 'paquetes':
                $('#paquete').addClass('item-seleccionado');
                $('#paquete').attr('href', '#');
                break;
            case 'footer':
                $('#footer').addClass('item-seleccionado');
                $('#footer').attr('href', '#');
                break;
            case 'publicaciones':
                $('#publicacion').addClass('item-seleccionado');
                $('#publicacion').attr('href', '#');
        }
      });
    </script>