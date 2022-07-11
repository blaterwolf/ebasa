<?php

class AuthModel extends CI_Model
{

    // Directory Folder of Views
    private String $dir = "auth";

    // Load Views Method
    // This load the header and the footer templates automatically when called
    private function load_views(String $pageTitle, array $views)
    {
        // Load the content views
        foreach ($views as $view) {
            $viewPath = $this->dir . '/' . $view[0];
            $viewData = isset($view[1]) ? $view[1] : NULL;
            $this->load->view($viewPath);
        }
    }

    // 403: Forbidden display
    public function forbidden()
    {
        set_status_header(403);
        $this->load->view('auth/error/403');
    }

    // 404: Page not found display
    public function page_not_found()
    {
        set_status_header(404);
        $this->load->view('auth/error/404');
    }
}