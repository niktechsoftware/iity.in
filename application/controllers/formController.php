<?php
class formController extends CI_Controller{
	
	public function saveAlumni(){
		
		$i = false;
		$photo_name = time().trim($_FILES['stuImage']['name']);
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$image_path = realpath(APPPATH . '../assets/alumni/');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '600';
		$config['file_name'] = $photo_name;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['stuImage']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('stuImage')) {
				// ---------------------------------- Redirect Success Page ----------------------
				$i = true;
			}
			else{
				echo $this->upload->display_errors();
			}
		} 
		
		if($i){
			
			$data['name'] = $this->input->post("preName").' '.$this->input->post("firstName").' '. $this->input->post('lastName');
			$data['company_name']  = $this->input->post("companyName");
			$data['email']  = $this->input->post("email");
			$data['mobile']  = $this->input->post("mobile");
			$data['course']  = $this->input->post("course");
			$data['passout']  = $this->input->post("passoutYear");
			$data['comments']  =$this->input->post("experience");
			$data['image']  = $photo_name;
			$data['date']  =  date("Y-m-d H:i:s");
			$data['status']  = "Pending";
			
				
		}
		if($this->db->insert("alumni",$data)){
			redirect("welcome/index/");
		}
		else{
			redirect("index.php/login/index/noteFalse");
		}
	}
	
	
	public function saveContactDetail(){
	
		
				
			$data['name'] = $this->input->post("preName").' '.$this->input->post("firstName").' '. $this->input->post('lastName');
			$data['email']  = $this->input->post("email");
			$data['mobile']  = $this->input->post("mobile");
			$data['suggestion_type']  = $this->input->post("suggestion_type");
			$data['suggestions']  = $this->input->post("suggestions");
			$data['date']  =  date("Y-m-d H:i:s");
			
		if($this->db->insert("enquiry",$data)){
			redirect("welcome/contactDetail/");
		}
		else{
			redirect("index.php/login/index/noteFalse");
		}
	}
	
	
	public function registration()
	{
	
	   $data=array( 
               'student_course'=>$this->input->post('coursename') ,
               'student_name'=>$this->input->post('yourname') ,
               'f_name'=>$this->input->post('fathername') ,
               'm_name'=>$this->input->post('mothername') ,
               'student_address'=>$this->input->post('address') ,
                'student_contact_no'=>$this->input->post('contactno') ,
                'addmi_date'=>$this->input->post('addmi_date') ,
                );
	             
		    $insert=$this->db->insert("registration_table",$data);
		       $id=$this->db->insert_id();
             if($id)
             {
           $stu_id="Stud".date("ymd", strtotime($this->input->post("addmi_date"))).$id;

         $update=array(
             'stud_id' =>$stu_id,
         );
          $this->db->where('id',$id);
         $up=$this->db->update('registration_table',$update);
         if($up)
         {
             echo '<script>alert(" Your Registration Successfully Submitted");</script>';
          $this->db->where('id',$id);
        $data['adc']=$this->db->get('registration_table')->result();
         $this->load->view('insFeePayment',$data);
        }

       }
                

  }
	public function conDetail()
	{

	    $data= array(
	    	'name' =>$this->input->post('name') , 
            'contact_number' =>$this->input->post('contact_number') , 
            'email' =>$this->input->post('email') , 
            'message' =>$this->input->post('message') 
	    );
		$insert= $this->db->insert("enquiry_contact_detail",$data);
		 if($insert)
		 {
		 	redirect ("welcome/index",'refresh');
		 }
		 else
		 {

           redirect ("welcome/contact",'refresh');

		 }

}





	
}