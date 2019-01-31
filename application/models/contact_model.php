<?php 
class Contact_model extends CI_Model
{
    public function contact() {
        
        
        if(!empty($this->input->post('op')))
        {
            $name =$this->input->post('name');
            $email =$this->input->post('email');
            $message =$this->input->post('message');
            $data = array(
                'name' => $name ,
                'email' => $email ,
                'message' => $message
            );
            
            $this->db->insert('contact', $data);
            
            $this->load->library('email');
            $this->email->from('info@nyseps.com', 'Nyseps Team');
            $this->email->to($email);
            $this->email->subject('Email Testing');
            $this->email->message('This is my message');
            $this->email->set_newline("\r\n");
            $this->email->send();
            if (!$this->email->send()) {
                # code...
                show_error($this->email->print_debugger());
            }
            else
                echo "emil sent";

           
    }
}

}


