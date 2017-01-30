<?php $username = $this->session->userdata('username'); ?>
<div class="row" id="toolbar">
			<nav class="navbar navbar-default" style="margin-bottom: 0px;">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand text-center" href="#">Panel Web</a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hola <?php echo ucwords($username); ?> <span class="caret"></span></a>
			                  <ul class="dropdown-menu" role="menu">
			                  	<li id="avatar" ><img class="img-circle" src="<?php echo base_url('assets/images/avatar/' . $username .'.jpg'); ?>" alt=""></li>
			                    <li class="text-center"><strong ><?php echo ucwords($username); ?></strong></li>
			                    <li class="divider"></li>
			                    <li><a href="<?php echo base_url('panel/cuenta'); ?>">Mi Cuenta</a></li>
			                    <li><a href="<?php echo base_url('log/out'); ?>">Salir</a></li>
			                  </ul>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
	</div>