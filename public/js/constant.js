/**
 * ===========================================================================
 * * CONSTANTS
 * ---------------------------------------------------------------------------
 * Here are the constants that are used by some javascript files.
 * Configure this as needed.
 *
 * Naming Convention: constant variables must be in this form: CAPITAL_LETTERS
 * ===========================================================================
 */

/**
 * ===========================================================================
 * * CONSTANT VARIABLES
 * ===========================================================================
 */

// Base URLs
const BASE_URL_MAIN = "http://localhost/ebasa/";
const BASE_URL_API = "http://localhost:3600/ebasa/v1/";

// User Main Routes
const RESIDENT_MAIN_ROUTE = `${BASE_URL_MAIN}resident/`;
const LIBRARIAN_MAIN_ROUTE = `${BASE_URL_MAIN}librarian/`;
const ADMIN_MAIN_ROUTE = `${BASE_URL_MAIN}admin/`;

// User API Routes
const RESIDENT_API_ROUTE = `${BASE_URL_API}resident/`;
const LIBRARIAN_API_ROUTE = `${BASE_URL_API}librarian/`;
const ADMIN_API_ROUTE = `${BASE_URL_API}admin/`;

// AJAX Variables
const AJAX_REQUEST_TIMEOUT = 30000;

// Live update data timeout
const LIVE_UPDATE_DATA_TIMEOUT = 5000;

/**
 * ===========================================================================
 * * CONSTANT OBJECTS
 * ===========================================================================
 */

// AJAX Headers
const AJAX_HEADERS = {
	Accept: "application/json",
	Authorization: `Bearer ${localStorage.getItem("token")}`,
};

/**
 * ===============================================================
 * * FUNCTIONS AND METHODS
 * ===============================================================
 */

hideAlert = () => {
	toastr.clear();
};

const liveRenderData = (handler) => {
	// Execute handler when page is loaded
	handler();

	// Live execute the handler
	setInterval(() => handler(), LIVE_UPDATE_DATA_TIMEOUT);
};
