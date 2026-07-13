<div class="row">
	<div class="col-sm-12 col-md-12 card kt-portlet p-5">
		<div class="panel panel-bd ">
			<div class="panel-heading">
				<div class="panel-title">
					<h4><?php echo(!empty($title) ? $title : null) ?></h4>
				</div>
			</div>
			<?php echo form_open("permission/role/update_role") ?>


			<div class="panel-body">

				<div class="form-group row">
					<label for="role_name" class="col-lg-3 col-form-label"><?php echo "Role Name" ?> <i
							class="text-danger">*</i></label>
					<div class="col-lg-9">
						<input required name="role_name" type="text" class="form-control" id="role_name"
							   placeholder="<?php echo "Role Name" ?>" value="<?php if (!empty($roleData)) {
							echo $roleData->role_name;
						} ?>">
					</div>
				</div>

				<div class="form-group row">
					<label for="role_description" class="col-lg-3 col-form-label"><?php echo "Description" ?> <i
							class="text-danger">*</i></label>
					<div class="col-lg-9">
						<textarea required class="form-control" placeholder="Description" rows="2"
								  name="role_description"
								  id="role_description"><?php echo $roleData->role_description ?></textarea>
					</div>
				</div>

				<input type="hidden" name="role_id" value="<?php echo $roleData->role_id ?>">
				<?php $m = 0; ?>
				<?php if (!empty($modules)) {
					foreach ($modules as $value) {

						$menu_item = $this->db->select('*')->from('sec_menu_item')->where('module', $value->module)->get()->result();
						?>
						<input type="hidden" name="module[]" value="<?php echo $value->module; ?>">
						<table class="table table-bordered table-hover" id="RoleTbl">
							<h2><?php echo($value->module) ?></h2>
							<thead>
							<tr>
								<th><?php echo "Sr." ?></th>
								<th>Menue Title</th>
								<th>Can Create</th>
								<th>Can read</th>
								<th>Can Edit</th>
								<th>Can Delete</th>
							</tr>
							</thead>

							<tbody>
							<?php if (!empty($menu_item)) ?>
							<?php $sl = 0; ?>
							<?php foreach ($menu_item as $item) {
								$ck_data = $this->db->select('*')
									->where('menu_id', $item->menu_id)
									->where('role_id', $roleData->role_id)->get('sec_role_permission')->row();
								?>


								<tr>
									<td><?php echo $sl + 1; ?></td>
									<td class="text-<?php echo($item->parent_menu ? 'right' : '') ?>"><?php echo($item->menu_title); ?></td>
									<td class="text-center">
										<div class="kt-switch kt-switch--sm">
											<label>
												<input type="checkbox"
													   name="create[<?php echo $m ?>][<?php echo $sl ?>][]"
													   value="1" <?php echo((@$ck_data->can_create == 1) ? "checked" : null) ?>
													   id="create[<?php echo $m ?>]<?php echo $sl ?>">
												<span></span>
												<label for="create[<?php echo $m ?>]<?php echo $sl ?>"></label>
											</label>
										</div>
									</td>

									<td class="text-center">
										<div class="kt-switch kt-switch--sm">
											<label>
												<input type="checkbox"
													   name="read[<?php echo $m ?>][<?php echo $sl ?>][]"
													   value="1" <?php echo((@$ck_data->can_access == 1) ? "checked" : null) ?>
													   id="read[<?php echo $m ?>]<?php echo $sl ?>">
												<span></span>
												<label for="read[<?php echo $m ?>]<?php echo $sl ?>"></label>

											</label></div>
									</td>
									<td class="text-center">
										<div class="kt-switch kt-switch--sm">
											<label>
												<input type="checkbox"
													   name="edit[<?php echo $m ?>][<?php echo $sl ?>][]"
													   value="1" <?php echo((@$ck_data->can_edit == 1) ? "checked" : null) ?>
													   id="edit[<?php echo $m ?>]<?php echo $sl ?>">
												<span></span>
												<label for="edit[<?php echo $m ?>]<?php echo $sl ?>"></label>

											</label></div>
									</td>
									<td class="text-center">
										<span class="kt-switch kt-switch--sm">
																	<label>
																		<input type="checkbox"
																			   name="delete[<?php echo $m ?>][<?php echo $sl ?>][]"
																			   value="1"
																			   <?php echo((@$ck_data->can_delete == 1) ? "checked" : null) ?>
																			   id="delete[<?php echo $m ?>]<?php echo $sl ?>">
																		<span></span>
																		<label
																			for="delete[<?php echo $m ?>]<?php echo $sl ?>"></label>
																	</label>
										</span>
									</td>

									<input type="hidden" name="menu_id[<?php echo $m ?>][<?php echo $sl ?>][]"
										   value="<?php echo $item->menu_id ?>">

								</tr>

								<?php $sl++ ?>
							<?php } ?>

							</tbody>
						</table>
						<?php $m++ ?>
					<?php }
				} ?>

				<div class="form-group text-right">
					<button type="submit" class="btn btn-outline-brand w-md m-b-5"><?php echo "Update" ?></button>
				</div>


			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
