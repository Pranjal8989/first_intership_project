<?php
class FormM extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function signup_insert($fname,$username,$password)
    {
        $password = md5($password);
        $q="INSERT INTO signup (fname,username,password) VALUES ('$fname','$username','$password')";
        $this->db->query($q);
        return 1;
    }


    public function insert_form($title,$fname,$mname, $lname,$aadhar,$pan_no, $mobile1,$mobile2,$gender, $dob, $email,$category,$religion,$blood_group, $minority,$handicap,$laddress, $paddress, $city,$district,$pincode,$state,$father_name,$mother_name)
    {
        $sql="INSERT INTO student_info (title,fname,mname,lname,aadhar,pan_no,mobile1,mobile2,gender ,dob ,email,category,religion,blood_group,minority,handicap, laddress , paddress,city,district, pincode,state,father_name,mother_name) VALUES ('$title','$fname','$mname',' $lname','$aadhar','$pan_no', $mobile1,$mobile2,'$gender','$dob',' $email','$category','$religion','$blood_group', '$minority','$handicap','$laddress', '$paddress', '$city','$district',$pincode,'$state','$father_name','$mother_name')";
       
        $this->db->query($sql);
        return 1;
    }

    
    public function signin_data($username,$password)
    {
        $password = md5($password);
        $data="SELECT * FROM signup WHERE username='$username' and password='$password'";
       
        $q=$this->db->query($data);
        return $q->result_array();
        // if($data->num_rows() )
        // {
        //     return true;
        // }else{
        //     return false;
        // }

    }
     public function display()
    {
        $data="SELECT * FROM student_info";
       
        $q=$this->db->query($data);
        return $q->result();

    }
    public function delete_entry($id)
    {
        // $result=$this->db->delete('rs',array('id'=>$id));
        $query="DELETE  FROM student_info WHERE id=$id";
        $result=$this->db->query($query);
        return $result;
    }
   public function getAllRecords($id)
    {
      $qurey=$this->db->get_where('student_info',array('id'=>$id));
      if($qurey->num_rows() > 0)
      {
          return $qurey->row();
      }
    }
    public function update_data($id,$title,$fname,$mname, $lname,$aadhar,$pan_no, $mobile1,$mobile2,$gender, $dob, $email,$category,$religion,$blood_group, $minority,$handicap,$laddress, $paddress, $city,$district,$pincode,$state,$father_name,$mother_name)
        {
               $data="UPDATE student_info SET title='$title', fname='$fname',mname='$mname', lname='$lname',aadhar='$aadhar', pan_no='$pan_no', mobile1='$mobile1',mobile2='$mobile2', gender='$gender',dob='$dob', email='$email', category='$category', blood_group='$blood_group', religion='$religion', minority='$minority', handicap='$handicap', laddress='$laddress', paddress='$paddress', city='$city', district='$district', pincode='$pincode', state='$state' WHERE id=$id";
            // print_r($sql);
            // die();
               return $this->db->query($data);
           
          //   return $data;

            
        }
        public function contact_us($name,$email,$subject,$mesg)
        {
            $query ="INSERT INTO contact(name,email,subject,mesg) VALUES ('$name','$email','$subject','$mesg')";
            $this->db->query($query);
            return 1;
        }
    public function get_forgot($username)
    {
        $query="SELECT * FROM signup WHERE username='$username'";
        $data=$this->db->query($query);
        return $data->result_array();
    }
        public function new_password($id,$pass)
        {
            $pass = md5($pass);
               $data="UPDATE signup SET password='$pass' WHERE id='$id'";
            // print_r($sql);
            // die();
               return $this->db->query($data);
        }
        public function contact_datafatch(){
            $data="SELECT * FROM contact";
       
        $q=$this->db->query($data);
        return $q->result();
        }
        public function profile_display($email)
        {
            $data="SELECT id,title,fname,mname,lname,gender,religion,blood_group,mobile1,email FROM student_info WHERE '$email'=email";
        //    print_r($data); die();
            $q=$this->db->query($data);
            return $q->result();
    
        }
  }


?>