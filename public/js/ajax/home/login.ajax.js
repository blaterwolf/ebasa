/**
 * ====================================================================
 * * LOGIN METHOD
 * --------------------------------------------------------------------
 * This file contains the methods and functions for user login
 * ====================================================================
 */

$(() => {
	// alert('page loaded');
	$("#loginForm").on("submit", (e) => {
		e.preventDefault();
		if ($("#loginForm").parsley().validate()) {
			// no error
			loginAJAX();
		}
	});
});

var loginAJAX = () => {
	// Get data from the form to rawData
	const rawData = new FormData($("#loginForm")[0]);
	const LOGIN_ENDPOINT = `${BASE_URL_API}login`;

	const data = {
		email_address: rawData.get("email"),
		password: rawData.get("password"),
	};

	// Login AJAX Request
	$.ajax({
		url: LOGIN_ENDPOINT,
		type: "POST",
		data: data,
		dataType: "json",
		timeout: AJAX_REQUEST_TIMEOUT,
		success: (response) => {
			// check if there is response
			if (response) {
				// check if there is response.data
				if (response.data == null) {
					// Show the error message
					notification("error", "", response.message);
				} else {
					// Get result data
					const data = response.data;
					// Store important data to local storage for session
					localStorage.setItem("token", data.token);
					localStorage.setItem("user_id", data.user_id);

					// Set the session data
					const sessionData =
						"token=" +
						data.token +
						"&user_id=" +
						data.user_id +
						"&user_type=" +
						data.user_type;

					//Redirect to oAuth
					// alert(`${BASE_URL_MAIN}oAuth?${sessionData}`);
					window.location.replace(`${BASE_URL_MAIN}oAuth?${sessionData}`);
				}
			} else {
				console.log("some error happened.");
			}
		},
		error: (error) => {
			console.log(error);
		},
	}).fail(() => {
		// Show the error message
		notification("error", "", "Can't connect to the server");
	});
};
