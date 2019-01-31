<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends My_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
	public function index()
	{
	    $data=array('isi' =>'home/index_home');
        
		$this->load->view('welcome_message',$data);
	}
	public function conDetail()
	{
	    $this->load->model('contact_model');
	    $this->contact_model->contact();
	    redirect(base_url()); 
	}
	public function regStudent()
	{
		$this->load->view('regStudent');
	}
	public function signUpNow()
	{
	    $this->load->view('signUpNow');
	}
	public function enroll()
	{
	    $this->load->view('enroll');
	}
	public function aboutUs()
	{
		$this->load->view('aboutUs');
	}
	public function diploma()
	{
	    $this->load->view('diploma');
	}
	public function diplomaPG()
	{
	    $this->load->view('diplomaPG');
	}
	public function admitCards()
	{
	    $this->load->view('admitCards');
	}
	public function results()
	{
	    $this->load->view('results');
	}
	public function ADCA()
	{
		$this->load->view('beyondAcademics');
	}
	public function onlineFeePay()
	{
	    $this->load->view('onlineFeePay');
	}
	public function insFeePayment()
	{
	    $this->load->view('insFeePayment');
	}
	public function affFeePayment()
	{
	    $this->load->view('affFeePayment');
	}
	public function trainCenterLogin()
	{
	    $this->load->view('trainCenterLogin');
	}
	public function news()
	{
	    $this->load->view('news');
	}
	public function contact()
	{
	    $this->load->view('contactDetail');
	}
	
	
	public function stuDataSending()
	{
		$this->load->view('stuDataSending');
	}
	public function directorMessage()
	{
		$this->load->view('directorMessage');
	}
	
	public function faculty()
	{
		$this->load->view('faculty');
	}
	public function admissinProcedure()
	{
		$this->load->view('admissinProcedure');
	}
	public function CCC()
	{
		$this->load->view('fmRedio');
	}
	public function infrastructure()
	{
		$this->load->view('infrastructure');
	}
	public function lectureTheaters()
	{
		$this->load->view('lectureTheaters');
	}
	public function library()
	{
		$this->load->view('library');
	}
	public function pedagogy()
	{
		$this->load->view('pedagogy');
	}
	public function YTT()
	{
		$this->load->view('hostel');
	}
	public function umang()
	{
		$this->load->view('umang');
	}
	public function placedStudent()
	{
		$this->load->view('placedStudent');
	}
	public function training()
	{
		$this->load->view('training');
	}
	public function recruiters()
	{
		$this->load->view('recruiters');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function CCA()
	{
		$this->load->view('alumniStudent');
	}
	public function contactDetail()
	{
		$this->load->view('contactDetail');
	}
	
	public function sendotp(){
	
		$mobile = $this->input->post("mob");
		$this->db->where("mobile_no",$mobile);
		$getResult = $this->db->get("student_registration");
	
	
		if($getResult->num_rows()>0){
			echo "<br><br><br>Student already Exist";
				
				
		}
		else{
			$rt = $getResult->row();
			if(strlen($rt->otp) <1){
				$otp= rand(6,100000);
				$data=array(
						"otp"=>$otp
				);
				$msg = "Your One time password is ".$otp." for Student Registration.";
				sms($rt->mobile_no,$msg);
				$this->db->update("student_registration",$data);
				?><script>
										 $("#otp").show();
										
				</script>
				<?php 	
		              }
				}
				
				}
	
	function getCorrection(){
				if($this->uri->segment(3)){
					$this->uri->segment(3);
					$this->db->where("sno",$this->uri->segment(3));
					$rt = $this->db->get("result");
				}else{
			$rnum 	= 	$this->input->post("regnumber");
			$mob 	= 	$this->input->post("mobilenumber");
			$otp 	=	$this->input->post("otp");
				$this->db->where("student_id",$rnum);
				$this->db->where("mobile_number",$mob);
				$this->db->where("otp",$otp);
				$rt = $this->db->get("result");
				}
				if($rt->num_rows()>0){
					$data['rt']=$rt->row();
				$this->load->view("correction",$data);
			}
			else{
				$msg=9;
				redirect("welcome/index/$msg");
			}
			}
	public	function mission()
		{

      $this->load->view('mision');

		}
	public	function vision()
		{

 $this->load->view('vision');

		}
	public	function aim_object()
		{

  $this->load->view('aim_object');

		}
			
			
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */