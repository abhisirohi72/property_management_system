<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    // protected ?object $current_user = null;//php7.1 mein
    protected $current_user = null;

    public function __construct()
    {
        parent::__construct();
    }
}