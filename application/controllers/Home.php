<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * =============================================================================
 * * HOME CONTROLLER
 * ============================================================================= 
 */

class Home extends CI_Controller
{

    /**
     * =============================================================================
     * * CUSTOM-DEFINED METHODS
     * ============================================================================= 
     */

    // Directory Folder of Views
    private String $dir = "home";

    // AJAX Scripts
    private array $AJAX_files = ['login'];

    // Load Views Method
    // This load the header and the footer templates automatically when called
    private function load_views(String $pageTitle, array $views)
    {

        // Load the header template
        $this->load->view('all/templates/header', ['title' => $pageTitle]);

        // Load all the content views
        foreach ($views as $view) {
            $viewPath = $this->dir . '/' . $view[0];
            $viewData = isset($view[1]) ? $view[1] : NULL;
            $this->load->view($viewPath, $viewData);
        }

        // Load the scripts and footer template
        $this->load->view('all/templates/footer', ['dir' => $this->dir, 'AJAX_files' => $this->AJAX_files]);
    }

    /**
     * =============================================================================
     * * VIEWS AND CONTROLLER METHODS
     * ============================================================================= 
     */

    // Index page
    public function index()
    {
        if ($this->session->has_userdata('user_type')) {
            $user_type = $this->session->user_type;
            if ($user_type === 'Resident')   redirect('r');
            if ($user_type === 'Librarian')  redirect('l');
            if ($user_type === 'Admin')      redirect('admin');
        } else {
            $this->load_views('Home', [['index']]);
        }
    }

    public function test()
    {
        $this->load->view('home/test');
    }

    public function data_privacy()
    {
        $this->load_views('Data Privacy', [['index']]);
    }

    public function login()
    {
        $this->load_views('Login', [['login']]);
    }
}