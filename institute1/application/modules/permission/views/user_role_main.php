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
				<a class="nav-link active" data-toggle="tab" href="#user_list">User List</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#asign_role">Assign Role</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="user_list" role="tabpanel">
				<?php $this->load->view('permission/user_list') ?>
			</div>
			<div class="tab-pane" id="asign_role" role="tabpanel">
				<?php $this->load->view('permission/user_role_assign') ?>
			</div>
		</div>
	</div>
</div>


