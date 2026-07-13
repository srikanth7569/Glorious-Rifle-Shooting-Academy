<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class=" ">

			<?php echo form_open("permission/role/save_role_access") ?>
			<div class="">

				<div class="form-group row">
					<label for="user_id" class="col-lg-3 text-right col-form-label"><?php echo "User" ?> *</label>
					<div class="col-lg-9">
						<select class="form-control select2" style="width: 100%" name="user_id" id="user_id" required=""
								data-placeholder="Select User">
							<option value=""></option>
							<?php
							if (!empty($user_dropdown)) {
								foreach ($user_dropdown as $val) {
									echo '<option value="' . $val->id . '">' . $val->firstname . ' ' . $val->lastname . '.</option>';
								}
							}
							?>
						</select>
					</div>
				</div>


				<div class="form-group row">
					<label for="role_id" class="col-lg-3 text-right col-form-label mr-3"><?php echo "Role" ?> *</label>
					<div class=" kt-checkbox-list">
						<?php if (!empty($role)) {
							foreach ($role as $val) { ?>

								<label class="kt-checkbox kt-checkbox--bold kt-checkbox--success">
									<input type="checkbox" name="role[]"
										   value="<?php echo $val->role_id; ?>"> <?php echo " " . $val->role_name; ?>
									<span></span>
								</label>


							<?php }
						} ?>
					</div>
				</div>

				<div class="form-group text-right">
					<button type="submit" class="btn btn-success w-md m-b-5"><?php echo "Assign Role" ?></button>
				</div>


			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
