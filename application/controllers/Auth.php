<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * =============================================================================
 * * AUTH CONTROLLER
 * ============================================================================= 
 */

class Auth extends CI_Controller
{
    /**
     * =============================================================================
     * * CUSTOM-DEFINED METHODS
     * ============================================================================= 
     */

    // Directory Folder of Views
    private String $dir = "auth";

    /**
     * =============================================================================
     * * VIEWS AND CONTROLLER METHODS
     * ============================================================================= 
     */

    // oAuth - For user authentication
    public function oAuth()
    {
        // Get url parameters
        $params = $this->input->get();

        // Check if parameters are null
        if ($params == null) {
            // ! Not Found!
            // $this->Auth_model->page_not_found();
        } else {
            // Save parameter data to session
            $this->session->set_userdata([
                'token'     => $params['token'],
                'user_id'   => $params['user_id'],
                'user_type' => $params['user_type']
            ]);

            // Get the user_type from session
            $user_type = $this->session->user_type;

            // Redirect to page according to user_type
            //if ($user_type === 'Resident')     redirect('r');
            //if ($user_type === 'Librarian')    redirect('l');
            if ($user_type === 'Admin')          redirect('admin');
        }
    }

    // 403: Forbidden display
    public function forbidden()
    {
        $this->AuthModel->forbidden();
    }

    // 404: Page not Found display
    public function page_not_found()
    {
        $this->AuthModel->page_not_found();
    }

    public function logout()
    {
        if ($this->session->has_userdata('user_type') && $this->input->post('request') === 'logout') {
            session_destroy();
        } else {
            // something went wrong
        }
    }
}