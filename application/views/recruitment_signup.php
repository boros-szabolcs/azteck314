<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

						<h2>SIGN UP</h2>

<div class="container">
	<?php echo form_open('account/signup','role="form" class="form-horizontal"'); ?>

		<div class="form-group">
			<?php echo form_label('Alias', 'username', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="text" id="username" name="username" placeholder="Alias" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('E-mail', 'email', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="email" id="email" name="email" placeholder="E-mail" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('Password', 'password', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="password" id="password" name="password" placeholder="Password" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('Re-type password', 'repasswd', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="password" id="repasswd" name="repasswd" placeholder="Re-type password" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('Phone', 'phone', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('First name', 'firstname', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="text" id="firstname" name="firstname" placeholder="First name" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('Middle name', 'middlename', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="text" id="middlename" name="middlename" placeholder="Middle name" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('Last name', 'lastname', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="text" id="lastname" name="lastname" placeholder="Last name" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('City', 'city', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="text" id="city" name="city" placeholder="City" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<?php echo form_label('Country', 'country', 'class="control-label col-sm-2"'); ?>

			<div class="col-sm-10">
				<input type="text" id="country" name="country" placeholder="Country" class="form-control" />
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-2">
				<?php echo anchor('recruitment', 'BACK', 'class="btn btn-link"'); ?>
			</div>
			<div class="col-sm-10">
				<button type="submit" class="btn btn-default btn-block">SIGN UP</button>
			</div>
		</div>
		
	<?php echo form_close(); ?>

</div>

