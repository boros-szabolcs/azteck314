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
						$statuses = $this->Statuses_Model->getStatuses();
						$user = $this->session->userdata('user');
						
						$options = array('' => "");
						foreach ($statuses as $status)
						{
							$options[$status->statusid] = $status->statustext;
						}
						$selected = (!is_null($user->statusid) && is_numeric($user->statusid)) ? $user->statusid : null;
						$attrbts = array(
							'id' => 'status_dropdown',
							'class' => 'form-control',
							'onChange' => 'changeStatus('.$user->userid.',this.value);',
						);
						
						echo '<span>Welcome <strong>'.$user->firstname.' ('.$user->username.')</strong></span>';
						echo br();
						echo form_dropdown('status_dropdown', $options, $selected, $attrbts);
						echo br();
						echo '<div id="statusChangeResult"></div>';
					}
					?>

				</div>
			</div>
			<div class="row">
