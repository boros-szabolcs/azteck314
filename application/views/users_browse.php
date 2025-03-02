<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Browse CodeIgniter Users</title>
		<style type="text/css">
		</style>
	</head>
	<body>
		<table border="1">
			<thead>
				<th>username</th>
				<th>email</th>
				<th>phone</th>
				<th>firstname</th>
				<th>middlename</th>
				<th>lastname</th>
				<th>city</th>
				<th>country</th>
			</thead>
			<tbody>
				<?php
					foreach($this->users->fetchtable() as $user)
					{
						echo '
							<tr>
								<td>'.$user->username.'</td>
								<td>'.$user->email.'</td>
								<td>'.$user->phone.'</td>
								<td>'.$user->firstname.'</td>
								<td>'.$user->middlename.'</td>
								<td>'.$user->lastname.'</td>
								<td>'.$user->city.'</td>
								<td>'.$user->country.'</td>
							</tr>
						';
					}
				?>
			</tbody>
		</table>
	</body>
</html>
