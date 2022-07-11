<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * =============================================================================
 * * ADMIN CONTROLLER
 * ============================================================================= 
 */

class Admin extends CI_Controller
{
    /**
     * =============================================================================
     * * CUSTOM-DEFINED METHODS
     * ============================================================================= 
     */

    // Directory Folder of Views
    private String $dir = "admin";

    /**
     * =============================================================================
     * * VIEWS AND CONTROLLER METHODS
     * ============================================================================= 
     */

    // Load Views Method
    // This load the header and the footer templates automatically when called
    private function load_views(String $pageTitle, array $views)
    {

        // Check if the user is not a Super Admin based on session data
        if ($this->session->user_type !== 'Admin') {
            // George Not Found 404
            $this->load->model('AuthModel');
            $this->AuthModel->page_not_found();
        } else {
            //Load all the content views

            foreach ($views as $view) {
                $viewPath = $this->dir . '/' . $view[0];
                $viewData = isset($view[1]) ? $view[1] : NULL;
                $this->load->view($viewPath, $viewData);
            }
            $this->load->view('all/components/modals/logout_modal');
        }
    }

    public function index()
    {
        redirect('admin');
    }

    // Dashboard
    public function dashboard()
    {
        $this->load_views('Dashboard', [['dashboard']]);
    }
}