/**
 * ====================================================================
 * * INFORMATION METHOD
 * --------------------------------------------------------------------
 * This file contains the methods and functions for managing
 * user information
 * ====================================================================
 */

/**
 * ====================================================================
 * Declare functions here that are required to call on page load
 * ====================================================================
 */

$(() => {
	getInfoAJAX();
});

getInfoAJAX = () => {
	$.ajax({
		url: `${ADMIN_API_ROUTE}info`,
		type: "GET",
		headers: AJAX_HEADERS,
		success: (res) => {
			if (res) {
				// Get data from response
				var data = res.data;

				// Get user full name
				var userFullName = data.full_name;
				var userProfilePicture = data.profile_pic;
				var currentUserType = data.user_type;

				// Display Name for Topbar
				$("#userFullNameTopBar").html(userFullName);
				document.getElementById("userProfilePicture").src = userProfilePicture;
				$("#currentUserType").html(currentUserType);
			} else {
				notification("error", "", "No data has been retrieved");
			}
		},
		error: () => {
			notification("error", "", "Error occured while getting data");
		},
	});
};
