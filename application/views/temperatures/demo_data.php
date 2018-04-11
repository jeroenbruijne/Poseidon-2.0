<h1>Aanmaken demo data</h1>


<?php echo form_open('temperatures/demo_data'); ?>
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger">
	<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
	<div class="form-group">
		<label for="sensor" class="col-sm-2 col-form-label">Naam sensor</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="sensor" value="<?php echo set_value('sensor'); ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="sensor" class="col-sm-2 col-form-label">Naam sensor</label>
		<div class="col-sm-10">
			<select class="form-control">
				<option></option>
				<?php foreach($sensors as $sensor): ?>
			  <option><?php echo $sensor['name_sensor']; ?></option>
			<?php endforeach; ?>
			</select>
		</div>
	</div>
	<input type="submit" name="submit" value="Toevoegen" />
</form>