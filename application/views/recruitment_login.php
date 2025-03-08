<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

						<h2>LOG IN</h2>

<div class="container">
	<?php echo form_open('account/login','role="form" class="form-horizontal"'); ?>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			<?php
				$ve = validation_errors();
				$fd = $this->session->flashdata('error');
				if (!empty($ve) || !is_null($fd))
				{
					echo '<div class="alert alert-warning alert-dismissible">';
					echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					echo '<strong>'.$ve.$fd.'</strong>';
					echo '</div>';
				}
			?>

			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('E-mail','email','class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="email" id="email" name="email" placeholder="E-mail" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('Password','password','class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="password" id="password" name="password" placeholder="Password" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default btn-block">LOG IN</button>
			</div>
		</div>
		
	<?php echo form_close(); ?>

</div>

<div class="container">
	<?php
		echo form_open();
		echo form_hidden('navigate', 'signup');
		echo 'Already have an account?';
		echo form_submit('submit', 'SIGN UP', 'class="btn btn-link"');
		echo form_close();
	?>

</div>

