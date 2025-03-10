$(document).ready(
	function()
	{
		//Prepare jTable
		$('#UsersStatus').jtable(
		{
			title: "Users' Status",
			actions: {
				listAction:   'users/select',
				createAction: 'users/insert',
				updateAction: 'users/update',
				deleteAction: 'users/delete',
			},
			fields: {
				userid: {
					key: true,
					create: false,
					edit: false,
					list: false,
				},
				username: {
					title: 'Alias',
				},
				email: {
					title: 'E-mail',
				},
				password: {
					title: 'Password',
				},
				phone: {
					title: 'Phone',
				},
				firstname: {
					title: 'First Name',
				},
				middlename: {
					title: 'Middle Name',
				},
				lastname: {
					title: 'Last Name',
				},
				city: {
					title: 'City',
				},
				country: {
					title: 'Country',
				},
			},
		}
		);
		
		//Load users list from server
		$('#UsersStatus').jtable('load');
		
		//Prepare jTable
		$('#Statuses').jtable(
		{
			title: "Statuses",
			actions: {
				listAction:   'statuses/select',
				createAction: 'statuses/insert',
				updateAction: 'statuses/update',
				deleteAction: 'statuses/delete',
			},
			fields: {
				statusid: {
					key: true,
					create: false,
					edit: false,
					list: false,
				},
				statustext: {
					title: 'Status',
				},
			},
		}
		);
		
		//Load users list from server
		$('#Statuses').jtable('load');
		
		//Initialize Select2 Status-Dropdown
		$('#status_dropdown').select2(
		{
			placeholder: 'Select Status',
		}
		);
	}
);

function changeStatus(userid, statusid)
{
	jQuery.ajax(
	{
		url: 'users/changeStatus',
		type: 'POST',
		data: {
			userid: userid,
			statusid: statusid,
		},
		success: function(response)
		{
			showStatusChangeResult('success',2);
		},
		error: function(response)
		{
			showStatusChangeResult('error',5);
		},
	}
	);
}

function showStatusChangeResult(result,seconds)
{
	$('#statusChangeResult').css("visibility", "visible");
	if (result == 'success')
	{
		$('#statusChangeResult').attr("class", "alert-success");
		$('#statusChangeResult').html('<strong>saved</strong>');
	}
	if (result == 'error')
	{
		$('#statusChangeResult').attr("class", "alert-danger");
		$('#statusChangeResult').html('<strong>failed to save</strong>');
	}
	setTimeout(hideStatusChangeResult, seconds*1000);
}

function hideStatusChangeResult()
{
	$('#statusChangeResult').css("visibility", "hidden");
	$('#statusChangeResult').html('');
}

