<h1>Aanmaken temperatuur</h1>

<?php $attributes = array('id' => 'myform'); 
echo form_open('temperatures/create', $attributes); ?>
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger">
	<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
	<div class="form-group">
		<label for="dateandtime" class="col-sm-2 col-form-label">Datum en tijd</label>
		<div class="col-sm-10">
			<input class="form-control" type="timestamp" name="dateandtime" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly />
		</div>
	</div>
	<div class="form-group">
		<label for="temperature" class="col-sm-2 col-form-label">Temperatuur</label>
		<div class="col-sm-10">
			<input class="form-control" type="number" name="temperature" value="<?php echo set_value('temperature'); ?>" />
		</div>
	</div>
	<input type="submit" name="submit" value="Toevoegen" />
</form>
