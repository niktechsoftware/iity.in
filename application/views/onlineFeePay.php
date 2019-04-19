<?php $this->load->view('header'); ?>   
   <?php $this->load->view('menu'); ?> 
  <div class="container jumbotron" style="margin-top:-10px">
  <form name="form" class="form-group" action="<?php echo base_url();?>index.php/formController/registration" method="post">
    <div class="row " >
      <div class="col-md-12">
        <h3 style="text-align:center; font-weight:bold;font-size:30px;margin-top:5px">New Registration</h3>
      </div>
    </div>
      <div class="row">
      <div class="col-md-12">
      <label for="coursename"><h5>Your Course Name</h5></label>
        <select name="coursename" class="form-control" style="height: 40px;">
          <option>select Your Course</option>
          <option>Advance Diploma In Computer Application (ADCA)</option>
          <option>Certificate In Computer Application (CCA)</option>
                <option>Course on Computer concept (CCC)</option>
          <option>Yoga Teachers Training (YTT)</option>
        </select>
      </div>
    </div><br>
    <div class="form-group">
    <div class="form-row">
      <div class="col-md-6" style="">
        <label for="inputname">Your Name</label>
        <input type="text" name="yourname" class="form-control" placeholder="Enter Your Name" required="*">
      </div>
      <div class="col-md-6" style="">
        <label for="fathername">Father's Name</label>
        <input type="text" name="fathername" class="form-control" placeholder="Enter Your Father Name" required="*">
      </div>
    </div>
  </div>
    <div class="form-group">
      <div class="form-row">
      <div class="col-md-6">
        <label for="mothername">Mother' Name</label>
        <input type="text" name="mothername" class="form-control" placeholder="Enter Your Mother Name" required="*">
      </div>
      <div class="col-md-6">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Your Address Here" required="*">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <label for="contactno">Contact No</label>
        <input type="Number" name="contactno" class="form-control" placeholder="Enter Your Contact Number Here" required="*">
      </div>
       <div class="col-md-6">
        <label for="admissiondate">Admission Date</label>
        <input type="date" name="addmi_date" class="form-control "  required="*" style="height:44px;">
      </div> 
    </div>
  </div>
      <div class="form-group">
      <div class="form-row">  
      <div class="col-md-12 text-center">
        <input type="Submit" name="Submit" class="btn btn-primary btn-md "  value="Register Me" >
      </div> 
      </div>
      </div> 
      
</div>
    </div>
  </form>
</div>
   <?php $this->load->view('footer'); ?>
