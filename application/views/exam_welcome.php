<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>WELCOME</title>
	</head>
	<body>
		<center>
			<table cellspacing="200" cellpadding="0" border="0">
				<tr>
					<td>
						<a href="<?php
							echo base_url()."index.php/exam/signup";
						?>">SIGN UP</a>
					</td>
					<td align="center">|<br />|<br />|<br />|<br /><br />OR<br /><br />|<br />|<br />|<br />|</td>
					<td>
						<a href="<?php
							echo base_url()."index.php/exam/login";
						?>">LOG IN</a>
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>
