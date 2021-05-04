<?php 
class Errors404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
    } 

    public function index() 
    { 
        // $this->output->set_status_header('404'); 
        echo "404 Not found.";        
    } 
}