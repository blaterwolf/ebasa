/**
 * ====================================================================
 * * USER MANAGEMENT METHOD
 * --------------------------------------------------------------------
 * This file contains the methods and functions for fetching users
 * count
 * ====================================================================
 */

/**
 * ====================================================================
 * Declare functions here that are required to render data
 * ====================================================================
 */

liveRenderData(() => {
	getUsersCount();
});

// Get User Count
function getUsersCount() {
	$.ajax({
		url: `${ADMIN_API_ROUTE}users-count`,
		type: "GET",
		headers: AJAX_HEADERS,
		success: (result) => {
			const c = result.user_count;
			$("#totalUsersCount").html(c.all);
			$("#totalAdminsCount").html(c.admin);
			$("#totalLibrariansCount").html(c.librarian);
			$("#totalResidentsCount").html(c.resident);
		},
	});
}
