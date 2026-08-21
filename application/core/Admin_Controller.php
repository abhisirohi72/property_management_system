<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->require_authentication();
    }

    protected function require_authentication()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }
}