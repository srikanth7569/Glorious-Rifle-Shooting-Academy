<div class="card">
	<div class="card-header">
		<div class="kt-portlet__head-label">
			<h4 class="card-title">
				<?php if (!empty($title)) {
					echo $title;
				} ?>
			</h4>
		</div>

	</div>
	<div class="card-body">

		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#role_list">Role List</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#add_role">Add Role</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="role_list" role="tabpanel">
				<?php $this->load->view('permission/role_list') ?>
			</div>
			<div class="tab-pane" id="add_role" role="tabpanel">
				<?php $this->load->view('permission/role_add') ?>
			</div>
		</div>
	</div>
</div>


