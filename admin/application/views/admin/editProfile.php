
  <div class="container jumbotron" style="margin-top:5px;">
  <form name="form" class="form-group" action="<?php echo base_url();?>index.php/ApanelForms/editProfile" method="post">
      <div class="form-group">
    <div class="form-row">
      <div class="col-md-6" style="">
        <label for="inputname">Student Course</label>
        <input type="text" name="name" class="form-control" readonly value="<?php echo $abc->student_course;?>">
    </div>
    <div class="form-group">
    <div class="form-row">
      <div class="col-md-6" style="">
        <label for="inputname">Student Name</label>
        <input type="text" name="name" class="form-control"  value="<?php echo $abc->student_name;?>" required="*">
      </div>
      <div class="col-md-6" style="">
        <label for="fathername">Student Father's Name</label>
        <input type="text" name="fathername" class="form-control" value="<?php echo $abc->f_name;?>" required="*">
      </div>
    </div>
  </div>
    <div class="form-group">
      <div class="form-row">
      <div class="col-md-6">
        <label for="mothername">Student Mother' Name</label>
        <input type="text" name="mothername" class="form-control" value="<?php echo $abc->m_name;?>" required="*">
      </div>
      <div class="col-md-6">
        <label for="address">Student Address</label>
        <input type="text" name="address" class="form-control" value="<?php echo $abc->student_address;?>" required="*">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <label for="contactno">Student Contact No</label>
        <input type="Number" name="contactno" class="form-control" value="<?php echo $abc->student_contact_no;?>" required="*">
      </div>
       <div class="col-md-6">
        <label for="admissiondate"> Student Admission Date</label>
        <input type="date" name="addmi_date" class="form-control " value="<?php echo $abc->addmi_date ;?>"  required="*" >
      </div> 
    </div>
  </div>
      <div class="form-group">
      <div class="form-row">  
      <div class="col-md-12 text-center" style="margin-top:10px;">
         <input type="hidden" name="Sudent_id" class="btn btn-primary btn-md "  value="<?php echo $abc->stud_id;?>" >
        <input type="Submit" name="Submit" class="btn btn-primary btn-md "  value="Update Profile" >
      </div> 
      </div>
      </div> 
      
</div>
  </form>
</div>