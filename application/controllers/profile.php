<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profile extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $row=$this->session->userdata('user');
        if(empty($row))
        {
            redirect(base_url('Welcome/login'));
        }
        $this->load->model('ProfileM');
		$this->load->model('formM');  
         $email=$row['username'];
		$data['ram'] = $this->ProfileM->profile_display($email);
		$this->load->view('header',$data);     

		     
    }

    public function profile()
	{
    
		$row=$this->session->userdata('user');
		$email=$row['username'];
		// print_r($email); die();
		$data['ram'] = $this->ProfileM->profile_display($email);
		$photo=$this->ProfileM->select_photo($email);
		if(!$photo){
			$data['image'] =$photo;
		} else{
		foreach($photo as $image){
			$data['image'] = $image;
		}
	}
		// print_r($image); 
		// die();
        // $data['image']=$data[0]['filename'];
		$this->load->view('header');	
		$this->load->view('profile',$data);
		$this->load->view('footer');
	


    }public function upload(){
		$this->load->library('session');
		$row=$this->session->userdata('user');
		$email=$row['username'];
		if (isset($_POST['upload'])) {

			$filename = $_FILES["uploadfile"]["name"];
			$tempname = $_FILES["uploadfile"]["tmp_name"];
			$folder = "./upload/image/" . $filename;
             $this->ProfileM->upload_photo($filename,$email);
			// print_r($data['photo']); die();
			// Now let's move the uploaded image into the folder: image
			if (move_uploaded_file($tempname, $folder)) {
				echo "<h3> Image uploaded successfully!</h3>";
			 return redirect(base_url('Profile/profile'));
			} else {
				echo "<h3> Failed to upload image!</h3>";
			}
			// $this->load->view('profile',$data);
			
		}
}


// public function pr()
// {
// $this->load->view('header');
// $this->load->view('table1');
// $this->load->view('footer');
// }
}