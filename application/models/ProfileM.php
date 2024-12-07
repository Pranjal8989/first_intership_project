<?php
class ProfileM extends CI_Model{


    public function profile_display($email)
    {
        $data="SELECT id,title,fname,mname,lname,gender,religion,blood_group,mobile1,email FROM student_info WHERE '$email'=email";
    //    print_r($data); die();
        $q=$this->db->query($data);
        return $q->result();

    }
    public function upload_photo($filename,$email){
        $q = "INSERT INTO image (filename,email) VALUES ('$filename','$email')";
        // print_r($q); die();
        $this->db->query($q);
                return 1;
    }
    public function select_photo($email){
        $query="SELECT * FROM image WHERE email='$email'";
        //  print_r($query); die();
        $data=$this->db->query($query);
        return $data->result_array();
        // print_r($q); die();

    }



}
