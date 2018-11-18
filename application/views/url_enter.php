<?php echo form_open("phish/url"); ?>
		<p>
			<label for="url">Url:</label>
			<input type="text"  name="url" value="<?php echo set_value('url'); ?>" />
		</p>
<p>
			<input type="submit" class="greenButton" value="Submit" />
		</p>
	<?php echo form_close(); ?>

	<?php echo validation_errors('<p class="error">'); ?>

 <?php //echo $x ; ?>
