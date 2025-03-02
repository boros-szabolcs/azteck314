<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>DASHBOARD</title>
	</head>
	<body>
		<center>
			<?php
				$user = $this->session->userdata('user');
				if (is_array($user)) { $user = (object)$user; }
				echo ''
					.'<br />Hello'
					.'<br /><b>('.$user->username.')'
					.'<br />'.$user->firstname.' '.$user->middlename.' '.$user->lastname
					.'<br />('.$user->email.')</b>'
					.'<br />from'
					.'<br /><b>'.$user->city.', '.$user->country.'</b>';
			?>
			<br /><br />
			<a href="<?php echo base_url()."index.php/exam/logout"; ?>">LOG OUT</a>
		</center>
	</body>
</html>
