<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function db()
    {
        if ($this->db->conn_id) {
            echo "Database Connected Successfully!";
        }
    }
}
