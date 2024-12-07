<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 function __construct() {
        parent::__construct();
		$this->load->model('formM');               
		        
    }



	public function index()
	{
		$this->load->view('landing/landingpage');

	}
	public function login()
	{
		$this->load->view('landing/login');
	}
	public function signin()
	{
		// print_r($_POST);
		// die();
		// $email= $_POST['email'];
		// $password=$_POST['password'];
		// $this->load->model('formM');
		// $this->formM->signin_data();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run()) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			// print_r($_POST);die();
			$this->load->model('formM');
			$r = $this->formM->signin_data($username, $password);
			if ($r) {
				//echo "match";
				$this->load->library('session');
				$session_array=array(
					'id'=>$r[0]['id'],
					'username'=>$r[0]['username'],
					'password'=>$r[0]['password'],
					'fname'=>$r[0]['fname']
				);
				$this->session->set_userdata('user', $session_array);
				return  redirect(base_url('Student'));
				// print_r($session_array);
				// die();
			} else {
				$this->load->library('session');
				$this->session->set_flashdata('pass', 'Invalied username or password');
				redirect(base_url("Welcome/login"));
				// echo "failed login";
			}

		} else {
			$this->load->view("landing/login");
		}
	}
	
	public function login_form()
	{
		$this->load->view('pranjal');
	}
	public function logout()
	{
		$session = $this->session->userdata('id');
		// print_r($session);
		// die();
		$this->db->close();
		$this->session->sess_destroy();
		redirect(base_url("Welcome"));
	}
	public function signup()
	{
		$fname = $_POST['fname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$this->load->model('formM');
		$e = $this->formM->signup_insert($fname, $username, $password);
		if ($e) {
			//echo "match";
			$this->load->library('session');
			$this->session->set_userdata('id', $e);
			$this->session->set_flashdata('username', 'Data is store successfully');
			redirect(base_url('Welcome'));
		}
	}
	public function contact()
	{
		$name=$_POST['Name'];
		$email=$_POST['Email'];
		$subject =$_POST['Subject'];
		$mesg=$_POST['mesg'];
		// $this->load->model('formM');
		$this->formM->contact_us($name,$email,$subject,$mesg);
		redirect(base_url('Welcome'));
	}

	
	 public function fedit()
	{
	  $this->load->view('forgot/forgotemail');
	}
	public function forgot()
	{
		$username=$_POST['username'];
		$this->load->model('formM');
		$data['forgot']=$this->formM->get_forgot($username);
		$this->load->view('forgot/forgot',$data);
		
		}

		public function set_password($id)
		{
			$pass=$_POST['password'];
				// print_r($_POST);
				// die();

				$this->load->model('formM');
				$this->formM->new_password($id,$pass);
				redirect(base_url('Welcome/login'));
		}


	

}