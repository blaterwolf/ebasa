/**
 * ===============================================================
 * * MAIN JS FILE
 * ---------------------------------------------------------------
 * This is the main javasript file for this app
 * General methods for the overall web app is declared here
 *
 * @author Albert :D
 * ===============================================================
 */

/**
 * ===============================================================
 * * ON PAGE LOAD FUNCTIONS
 * ===============================================================
 */
$(() => {
	$("#preloader").removeClass("d-flex").addClass("d-none");
	// Always hide any active alert on load
	hideAlert();
});

requestLogout = () => {
	// Send POST request for user logout
	$.ajax({
		url: `${BASE_URL_MAIN}auth/logout`,
		type: "POST",
		data: { request: "logout" },
		success: () => {
			// Clear the localStorage items
			localStorage.clear();

			// Redirect to Home Page
			location.assign(`${BASE_URL_MAIN}login`);
		},
		error: () => {
			console.log("Error occured");
		},
	}).fail(() => showConnErrModal("Error occured while you try to logout"));
};
const notification = (type, title, message) => {
	/**
	 * @param {string} type - {success, error, warning, info}
	 * @param {string} title - The title of the notification.
	 * @param {string} message - The message of the notification.
	 */
	return toastr[type](message, title);
};
