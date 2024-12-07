<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Landing_page extends CI_Controller
{
public function create()
{
    $this->load->view('header');
    $this->load->view('landing/landingpage');
    $this->load->view('footer');
}

}
