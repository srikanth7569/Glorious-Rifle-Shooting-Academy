<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="panel">
			<div class="panel-body">
				<div class="">
					<table class=" table table-bordered table-hover">
						<thead>
						<tr>
							<th><?php echo "Sr." ?></th>
							<th><?php echo "Menu Title" ?></th>
							<th><?php echo "Page Url" ?></th>
							<th><?php echo "Module" ?></th>
							<th><?php echo "Parent Menu" ?></th>
							<th></th>
						</tr>
						</thead>
						<tbody>
						<?php $sl = 1; ?>
						<?php if (!empty($menu_item_list)) {
							foreach ($menu_item_list as $value) {
								$parent = $this->db->select('menu_title')->where('menu_id', $value->parent_menu)->get('sec_menu_item')->row();
								?>
								<tr>
									<td><?php echo $sl++; ?></td>
									<td><?php echo $value->menu_title; ?></td>
									<td><?php echo $value->page_url; ?></td>
									<td><?php echo $value->module; ?></td>
									<td><?php echo @$parent->menu_title; ?></td>
									<td>

										<div class="btn-group btn-group-sm">
											<a href="<?php echo base_url("permission/Permission_setup/edit_menu_item/$value->menu_id") ?>"
											   class="btn btn-outline-secondary " data-skin="dark"
											   data-toggle="kt-tooltip" data-placement="top" title=""
											   data-original-title="Edit">
												<i class="la la-pencil"
												   aria-hidden="true"></i></a>
											<a href="<?php echo base_url("permission/Permission_setup/delete_menu_item/$value->menu_id") ?>"
											   onclick="return confirm('Are you sure?')"
											   class="btn btn-outline-secondary " data-skin="dark"
											   data-toggle="kt-tooltip" data-placement="top" title=""
											   data-original-title="Delete">
												<i class="la la-trash"
												   aria-hidden="true"></i></a>

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
</div>

