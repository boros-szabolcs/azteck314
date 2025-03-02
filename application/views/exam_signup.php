<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>SIGN UP</title>
	</head>
	<body>
		<center>
			<?php echo form_open('exam/signup_validation'); ?>
			<table cellspacing="20" cellpadding="0" border="0">
				<tr>
					<td colspan="2" align="center" style="font-weight:bold;color:red;">
						<?php echo validation_errors(); ?>
						<?php
							if ($this->session->flashdata('error'))
							{
								echo $this->session->flashdata('error');
							}
						?>
					</td>
				</tr>
				<tr>
					<td align="right">
						User name:
					</td>
					<td align="left">
						<?php echo form_input('username'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						E-mail:
					</td>
					<td align="left">
						<?php echo form_input('email'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						Password:
					</td>
					<td align="left">
						<?php echo form_password('password'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						Re-type password:
					</td>
					<td align="left">
						<?php echo form_password('repasswd'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						Phone:
					</td>
					<td align="left">
						<?php echo form_input('phone'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						First name:
					</td>
					<td align="left">
						<?php echo form_input('firstname'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						Middle name:
					</td>
					<td align="left">
						<?php echo form_input('middlename'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						Last name:
					</td>
					<td align="left">
						<?php echo form_input('lastname'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						City:
					</td>
					<td align="left">
						<?php echo form_input('city'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						Country:
					</td>
					<td align="left">
						<?php echo form_input('country'); ?>
					</td>
				</tr>
				<tr>
					<td align="right">
						<a href="<?php
							echo base_url()."index.php/exam/welcome";
						?>">BACK</a>
					</td>
					<td align="right">
						<?php echo form_submit('signup','SIGN UP'); ?>
					</td>
				</tr>
			</table>
			<?php echo form_close(); ?>
		</center>
	</body>
</html>
