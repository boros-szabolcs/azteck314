<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
			<div class="row page-header">
				<div class="col-md-9">
					<h1>RECRUITMENT</h1>
				</div>
				<div class="col-md-3 text-right">
					<?php
					if ($this->session->userdata('user'))
					{
						$user = $this->session->userdata('user');
						if (is_array($user)) { $user = (object)$user; }
						echo '<span>Welcome <strong>'.$user->firstname.' ('.$user->username.')</strong></span>';
						$options = array('1'=>"egy", '2'=>"ketto", '3'=>"harom", '4'=>"negy", );
						$attrbts = array(
							'id' => 'status_dropdown',
							'class' => 'form-control',
							'onChange' => 'alert(this.options[this.selectedIndex].text);',
						);
						echo form_dropdown('status_dropdown', $options, '3', $attrbts);
					}
					?>

				</div>
			</div>
			<div class="row">
