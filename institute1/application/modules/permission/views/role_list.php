<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="panel">

			<div class="panel-body">

				<table class="table table-bordered table-hover" id="RoleTbl">
					<thead>
					<tr>
						<th><?php echo "Sr." ?></th>
						<th><?php echo "Role Name" ?></th>
						<th><?php echo "Description" ?></th>
						<th></th>
					</tr>
					</thead>
					<tbody>
					<?php $sl = 1; ?>
					<?php if (!empty($role_list)) {
						foreach ($role_list as $value) { ?>
							<tr>
								<td><?php echo $sl++; ?></td>
								<td><?php echo $value->role_name; ?></td>
								<td><?php echo $value->role_description; ?></td>
								<td class="text-center">
									<div class="btn-group btn-group-sm">
										<a href="<?php echo base_url("permission/role/edit_role/$value->role_id") ?>"
										   class="btn btn-outline-secondary" data-skin="dark" data-toggle="kt-tooltip"
										   data-placement="top" title="" data-original-title="Update">
											<i class="fa fa-edit" aria-hidden="true"></i></a>
										<a href="<?php echo base_url("permission/role/delete_role/$value->role_id") ?>"
										   onclick="return confirm('<?php echo("Are you sure?") ?>')"
										   class="btn btn-outline-secondary" data-skin="dark" data-toggle="kt-tooltip"
										   data-placement="top" title="" data-original-title="Delete">
											<i class="fa fa-trash" aria-hidden="true"></i></a>
									</div>
								</td>
							</tr>
						<?php }
					} ?>

					</tbody>
				</table>


			</div>
		</div>
	</div>
</div>
