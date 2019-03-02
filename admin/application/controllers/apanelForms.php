<?php
class ApanelForms extends CI_Controller{

	public function headline(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("heading",$data)){
			redirect("apanel/headline");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-------------------------------------------------------------------------------------------------------------------------	
	
	public function inquiry(){
		$name = $this->input->post("name");
		$data = array(
				"name" => $this->input->post("name"),
				"mobile" => $this->input->post("mobile"),
				"email" => $this->input->post("email"),
				"msg" => $this->input->post("msg"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("inquiry",$data)){
			if($this->input->post("contact") == "contact"):
				redirect("welcome/contact/true/$name");
			else:
				redirect("welcome/index/true/$name");
			endif;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-------------------------------------------------------------------------------------------------------------------------	
	public function editProfile(){
	
		$id = $this->input->post('Sudent_id');

		$data= array(
				"student_name"=> $this->input->post('name'),
				"f_name"=>  $this->input->post('fathername'),
				"m_name"=> $this->input->post('mothername'),
				"student_address"=>  $this->input->post('address'),
				"student_contact_no"=> $this->input->post('contactno'),
				"addmi_date"=>  $this->input->post('addmi_date')
		           );
	     	$this->db->where("stud_id",$id);
		  $up = $this->db->update("registration_table",$data);
		  if($up)
		       {
						redirect("apanel/printRegister",'refresh');
		      }
	    	else
		  {
						echo "Somthing going wrong. Please Contact Site administrator";
		  }
	}
//-----------------------------------------------------------------------------------------------------------------------------
	public function deleteEnquiry(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("inquiry")){
			redirect(base_url()."apanel/inquiry");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-------------------------------------------------------------------------------------------------------------------------
	public function editHeadline(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("notice",$data)){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-----------------------------------------------------------------------------------------------------------------------------	
	public function noticeBoard(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("notice",$data)){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
//-----------------------------------------------------------------------------------------------------------------------------
	public function deleteHeadline(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("notice")){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function letestNews(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"url" => $this->input->post("url")
		);
		if($this->db->insert("latest_news",$data)){
			redirect(base_url()."apanel/latestNews");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function editNews(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"url" => $this->input->post("url")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("latest_news",$data)){
			redirect(base_url()."apanel/latestNews");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteNews(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("latest_news")){
			redirect(base_url()."apanel/latestNews");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	function uploadbooks(){
		$photo_name = time().trim($_FILES['uploadbooks']['name']);
		$data=array(
				'bookName'=>$this->input->post("title"),
				'subject'=>$this->input->post("subject"),
				'photo'=>$photo_name
		);
		$query = $this->db->insert("upload_books",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['uploadbooks']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('uploadbooks');
			redirect(base_url()."apanel/uploadbooks/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	function uploadpdf(){
		$photo_name = time().trim($_FILES['uploadbooks']['name']);
		$data=array(
				'pdfName'=>$this->input->post("title"),
				'filename'=>$photo_name
		);
		$query = $this->db->insert("upload_pdf",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/pdffile');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
			$config['max_size'] = '10024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['uploadbooks']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('uploadbooks');
			redirect(base_url()."apanel/uploadpdf/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	
	
	function saveSelectedStu(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'studentName'=>$this->input->post("title"),
				'department'=>$this->input->post("department"),
				'photo'=>$photo_name
		);
		
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			$query = $this->db->insert("selected_stu",$data);
			redirect(base_url()."apanel/selectedStudent/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	
	function saveGallery(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'name'=>$this->input->post("title"),
				'image'=>$photo_name,
				'date'=>date("Y-m-d")
		);
		$query = $this->db->insert("gallery",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			
			redirect(base_url()."apanel/gallery");
			//echo $image_path;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}

function savegames(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'name'=>$this->input->post("title"),
				'image'=>$photo_name,
				'date'=>date("Y-m-d")
		);
		$query = $this->db->insert("games",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			
			redirect(base_url()."apanel/games");
			//echo $image_path;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}

	function savecampus(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				
				'image'=>$photo_name,
				'date'=>date("Y-m-d")
		);
		$query = $this->db->insert("campus",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			
			redirect(base_url()."apanel/campus");
			//echo $image_path;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}




function saveStaff(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'name'=>$this->input->post("name"),
					'gender'=>$this->input->post("gender"),
						'mobile'=>$this->input->post("mobile"),
				'photo'=>$photo_name,
				
		);
		$query = $this->db->insert("employee_info",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			
			redirect(base_url()."apanel/staff");
			//echo $image_path;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
public function deleteCareer(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("carrer")){

			redirect(base_url()."apanel/contact");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}

	
	public function deleteGallery(){
		$this->db->where("sno",$this->uri->segment(3));
		if($this->db->delete("gallery")){
			redirect(base_url()."apanel/gallery");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deletegames(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("games")){
			redirect(base_url()."apanel/games");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}


	public function deleteCampus(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("campus")){
			redirect(base_url()."apanel/campus");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}

		public function deleteStaff(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("employee_info")){
			redirect(base_url()."apanel/staff");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}

	public function deletequick(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("inquiry")){
			redirect(base_url()."apanel/quickContact");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deleteBooks(){
		$this->db->where("SNo",$this->uri->segment(3));
		if($this->db->delete("upload_books")){
			redirect(base_url()."apanel/uploadbooks");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deleteStudents(){
		$this->db->where("sno",$this->uri->segment(3));
		if($this->db->delete("selected_stu")){
			redirect(base_url()."apanel/selectedStudent");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	function getFeeDetails(){
		$type=$this->input->post("detailType");
		$sdt=$this->input->post("sdt");
		$edt=$this->input->post("edt");
		$a = mysql_query("select student_id,paid_date,$type as stufee from fee where paid_date >= '".date("Y-m-d", strtotime($sdt))."' AND paid_date <= '".date("Y-m-d", strtotime($edt))."'");
		
			?><table class="display table" style="width: 100%; cellspacing: 0;">
  <tr>
  <th>SNO</th>
    <th>Student Id</th>
     <th>student Name</th>
     <th><?php echo $type; ?> Fee</th>
    <th>Paid Date</th>
  </tr>
  <?php $i=1; while($row = mysql_fetch_object($a)){ ?>
  <tr>
  <?php if($row->stufee >0){?>
    <td><?php echo $i;?></td>
    <td><?php echo $row->student_id;?></td>
    <td>
    	 <?php 
    	 	$this->db->where("student_id",$row->student_id);
    		$name=$this->db->get("student_info")->row();
    	?>
    	<?php echo $name->name;?>
    </td>
    <td><?php echo $row->stufee;?></td>
     <td><?php echo $row->paid_date;?></td>
  </tr>
  <?php $i++;}}?>
</table>
<?php 
		
		
		
		
		
		
		
	}
}