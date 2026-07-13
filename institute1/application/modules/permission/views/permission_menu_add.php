<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="panel">

			<div class="panel-body">
				<?php echo form_open_multipart("permission/permission_setup/save_menu") ?>
				<div class="form-group row">
					<label for="menu_title" class="col-sm-3 col-form-label"><?php echo "Menu Title" ?></label>
					<div class="col-sm-9">
						<input name="menu_title" autocomplete="off" placeholder="Menu Title" class="form-control"
							   required type="text">
					</div>
				</div>

				<div class="form-group row">
					<label for="page_url" class="col-sm-3  col-form-label"><?php echo "Page Url" ?></label>
					<div class="col-sm-9">
						<input name="page_url" autocomplete="off" placeholder="Page Url" class="form-control"
							   type="text">
					</div>
				</div>


				<div class="form-group row">
					<label for="module" class="col-sm-3 col-form-label"><?php echo "Module" ?></label>
					<div class="col-sm-9">
						<input name="module" autocomplete="off" placeholder="Module" class="form-control" required
							   type="text">
					</div>
				</div>

				<div class="form-group row">
					<label for="parent_menu" class="col-sm-3 col-form-label"><?php echo "Parent Menu" ?></label>
					<div class="col-sm-9">
						<select style="width: 100%" class="form-control" name="parent_menu" id="parent_menu"
								data-placeholder="Select Parent Menu">
							<option value=""></option>
							<?php
							if (!empty($p_menu)) {
								foreach ($p_menu as $val) {
									echo '<option value="' . $val->menu_id . '">' . $val->menu_title . '</option>';
								}
							}
							?>
						</select>
					</div>
				</div>

				<div class="form-group text-right">
					<button type="reset" class="btn btn-outline-secondary w-md m-b-5"><?php echo "Reset" ?></button>
					<button type="submit" class="btn btn-outline-secondary w-md m-b-5"><?php echo "Save" ?></button>
				</div>
				<?php echo form_close() ?>

			</div>
		</div>
	</div>
</div>

