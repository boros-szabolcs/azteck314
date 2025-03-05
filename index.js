$(document).ready(
	function()
	{
		//Prepare jTable
		$('#UsersStatus').jtable(
		{
			title: "Users' Status",
			actions: {
				listAction:   'URL',
				createAction: 'URL',
				updateAction: 'URL',
				deleteAction: 'URL',
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
	}
);
