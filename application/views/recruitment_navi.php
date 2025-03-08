<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
				<div class="col-md-3">
					<?php

function navigate($page)
{
	return ''
	.form_open()
	.form_hidden('navigate', $page)
	.form_submit('submit', strtoupper($page), 'class="btn btn-default btn-block"')
	.form_close()
	.'';
}

$list = array(
	navigate("dashboard"),
	navigate("statuses"),
);

$attributes = array(
	'class' => 'nav nav-stacked',
	'role' => 'tablist',
);

echo ul($list, $attributes);

					?>
				</div>
				<div class="col-md-9">
					<div class="jumbotron">
