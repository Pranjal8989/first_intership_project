<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Student extends CI_Controller
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
	public function index()
	{
		$this->load->view('calender');
		$this->load->view('footer');
	}
    // public function dashboard()
    // { $row=$this->session->userdata('user');
	// 	// print_r($row);
	// 	// die();
    //     if(empty($row))
    //     {
    //         redirect(base_url('Welcome/login'));
    //     }else{
       
    //     $this->load->view('calender');
    //     $this->load->view('footer');
	// 	}
    // }
    public function create()
	{
		// $this->load->view('header');
		$this->load->view('create1');
		$this->load->view('footer');
		
	}
    public function add_student()
	{
		// echo"this is my form";
		// die();

		$title = $_POST['title'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$aadhar = $_POST['aadhar'];
		$pan_no = $_POST['pan_no'];
		$mobile1 = $_POST['mobile1'];
		$mobile2 = $_POST['mobile2'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$blood_group = $_POST['blood_group'];
		$category = $_POST['category'];	
		$religion = $_POST['religion'];	
		$minority = $_POST['minority'];	
		$handicap = $_POST['handicap'];	
		$laddress = $_POST['laddress'];
		$paddress = $_POST['paddress'];
		$city = $_POST['city'];
		$district = $_POST['district'];	
		$pincode = $_POST['pincode'];	
		$state = $_POST['state'];	
		$father_name = $_POST['father_name'];	
		$mother_name = $_POST['mother_name'];	
		// print_r($_POST);
		// die();	
		$this->load->model('formM');
		$this->formM->insert_form($title,$fname,$mname, $lname,$aadhar,$pan_no, $mobile1,$mobile2,$gender, $dob, $email,$category,$religion,$blood_group, $minority,$handicap,$laddress, $paddress, $city,$district,$pincode,$state,$father_name,$mother_name);
		return redirect(base_url('Student/create'));
	}
	public function fatch_form()
	{
		

		$this->load->model('formM');
		$data['rs'] = $this->formM->display();
		// $this->load->view('header');
		$this->load->view('table', $data);
		$this->load->view('footer');
		
	}
	// ****************excel file********************
	public function download()
	{
		$fileName = 'details.xlsx';
		$this->load->model('formM');
		$employeeData = $this->formM->display();
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'S NO.');
		$sheet->setCellValue('B1', 'Name');
		$sheet->setCellValue('C1', 'Aadhar Number');
		$sheet->setCellValue('D1', 'Pan Number');
		$sheet->setCellValue('E1', 'Mobile No.');
		$sheet->setCellValue('F1', 'Gender');
		$sheet->setCellValue('G1', 'Date Of Brith');
		$sheet->setCellValue('H1', 'Email');
		$sheet->setCellValue('I1', 'Category');
		$sheet->setCellValue('J1', 'Blood Group');
		$sheet->setCellValue('K1', 'Religion');
		$sheet->setCellValue('L1', 'Minority');
		$sheet->setCellValue('M1', 'Handicap');
		$sheet->setCellValue('N1', 'Local Address');
		$sheet->setCellValue('O1', 'Permanant Address');
		$sheet->setCellValue('P1', 'City');
		$sheet->setCellValue('Q1', 'District');
		$sheet->setCellValue('R1', 'Pincode');
		$sheet->setCellValue('S1', 'State');
		$sheet->setCellValue('T1', 'Father Name');
		$sheet->setCellValue('U1', 'Mother Name');
		$rows = 2;
		foreach ($employeeData as $val) {
			$sheet->setCellValue('A' . $rows, $val->id);
			$sheet->setCellValue('B' . $rows, $val->title,$val->fname,$val->mname,$val->lname);
			$sheet->setCellValue('C' . $rows, $val->aadhar);
			$sheet->setCellValue('D' . $rows, $val->pan_no);
			$sheet->setCellValue('E' . $rows, $val->mobile1);
			$sheet->setCellValue('F' . $rows, $val->gender);
			$sheet->setCellValue('G' . $rows, $val->dob);
			$sheet->setCellValue('H' . $rows, $val->email);
			$sheet->setCellValue('I' . $rows, $val->category);
			$sheet->setCellValue('J' . $rows, $val->blood_group);
			$sheet->setCellValue('K' . $rows, $val->religion);
			$sheet->setCellValue('L' . $rows, $val->minority);
			$sheet->setCellValue('M' . $rows, $val->handicap);
			$sheet->setCellValue('N' . $rows, $val->laddress);
			$sheet->setCellValue('O' . $rows, $val->paddress);
			$sheet->setCellValue('P' . $rows, $val->city);
			$sheet->setCellValue('Q' . $rows, $val->district);
			$sheet->setCellValue('R' . $rows, $val->pincode);
			$sheet->setCellValue('S' . $rows, $val->state);
			$sheet->setCellValue('T' . $rows, $val->father_name);
			$sheet->setCellValue('U' . $rows, $val->mother_name);
			$rows++;
		}
		$writer = new Xlsx($spreadsheet);
		header('Content-Type: appliction/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$fileName.'"');
		$writer->save('php://output');
	}





	public function deletedata($id)
	{
		
		$this->load->model('formM');
		$this->formM->delete_entry($id);
		return redirect(base_url('Student/fatch_form/'));
		
		// header('Location:http://localhost/ci/index.php/Welcome/fatch_form/');
	}
	public function edit($id)
	{
		
		$this->load->model('formM');
		$data['data'] = $this->formM->getAllRecords($id);
		// print_r($data['data']); die();
		// $this->load->view('header');
		$this->load->view('update', $data);
		$this->load->view('footer');
		
	}

	public function updatedata($id)
	{
		// echo"ramdev";
		// die();
		
		$title = $_POST['title'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$aadhar = $_POST['aadhar'];
		$pan_no = $_POST['pan_no'];
		$mobile1 = $_POST['mobile1'];
		$mobile2 = $_POST['mobile2'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$blood_group = $_POST['blood_group'];
		$category = $_POST['category'];	
		$religion = $_POST['religion'];	
		$minority = $_POST['minority'];	
		$handicap = $_POST['handicap'];	
		$laddress = $_POST['laddress'];
		$paddress = $_POST['paddress'];
		$city = $_POST['city'];
		$district = $_POST['district'];	
		$pincode = $_POST['pincode'];	
		$state = $_POST['state'];	
		$father_name = $_POST['father_name'];	
		$mother_name = $_POST['mother_name'];	
		// $email= $_POST['email'];
		// $password=$_POST['password'];
		// print_r($_POST);
		// die();
		$this->load->model('formM');
		$this->formM->update_data($id,$title,$fname,$mname, $lname,$aadhar,$pan_no, $mobile1,$mobile2,$gender, $dob, $email,$category,$religion,$blood_group, $minority,$handicap,$laddress, $paddress, $city,$district,$pincode,$state,$father_name,$mother_name);
return redirect(base_url('Student/fatch_form/'));
	}
	public function contact_fatch()
	{
      
		// $this->load->view('header');
		$this->load->model('formM');
		$data['ram'] = $this->formM->contact_datafatch();
		$this->load->view('contact_us',$data);
		$this->load->view('footer');
	}

}