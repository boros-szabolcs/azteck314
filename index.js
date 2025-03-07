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
				egy: {
					key: true,
					create: false,
					edit: false,
					list: false,
				},
				ketto: {
					title: 'Status',
				},
			},
		}
		);
		
		//Load users list from server
		$('#Statuses').jtable('load');
	}
);
