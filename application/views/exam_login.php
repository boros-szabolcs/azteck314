<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>LOG IN</title>
	</head>
	<body>
		<center>
			<?php echo form_open('exam/login_validation'); ?>
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
						<a href="<?php
							echo base_url()."index.php/exam/welcome";
						?>">BACK</a>
					</td>
					<td align="right">
						<?php echo form_submit('login','LOG IN'); ?>
					</td>
				</tr>
			</table>
			<?php echo form_close(); ?>
		</center>
	</body>
</html>
