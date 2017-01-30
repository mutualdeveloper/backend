
<div id="panel" class="container-fluid">
	<?php $this->load->view('panel-template/toolbar') ?>
	<div id="panel-container" class="row">
		<?php $this->load->view('panel-template/menu'); ?>
		<div id="content" class="col-md-10 col-lg-10">
			<?php $this->load->view('panel/' . $page); ?>
		</div>
	</div>
</div>