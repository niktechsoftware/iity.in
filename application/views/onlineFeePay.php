<!DOCTYPE html>
<html>
<head>
	<title>
		new ragistrartion
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-sacle=1>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

  <?php $this->load->view('header'); ?>   
   <?php $this->load->view('menu'); ?> 
	<div class="container" style="margin-top:-10px">
  <form name="form" class="form-group">
  	<div class="row jumbotron" >
        <h3 style="text-align:center; font-weight:bold;font-size:50px;margin-top:-45px">Login</h3>
  		<div class="col-md-12">
  		<label for="coursename"><h5>Your Course Name</h5></label>
  			<select class="form-control" style="height:40px;">
  				<option>select Your Course</option>
  				<option>Advance Diploma In Computer Application (ADCA)</option>
  				<option>Certificate In Computer Application (CCA)</option>
                <option>Course on Computer concept (CCC)</option>
  				<option>Yoga Teachers Training (YTT)</option>
  			</select>
  		</div>

  		<div class="col-md-6" style="margin-top:20px">
  			<label for="inputname">Your Name</label>
  			<input type="text" name="yourname" class="form-control" placeholder="Enter Your Name" required="*">
  		</div>
  		<div class="col-md-6" style="margin-top:20px">
  			<label for="fathername">Father's Name</label>
  			<input type="text" name="fathername" class="form-control" placeholder="Enter Your Father Name" required="*">
  		</div>
  		<div class="col-md-6">
  			<label for="mothername">Mother' Name</label>
  			<input type="text" name="mothername" class="form-control" placeholder="Enter Your Mother Name" required="*">
  		</div>
  		<div class="col-md-6">
  			<label for="address">Address</label>
  			<input type="text" name="address" class="form-control" placeholder="Enter Your Address Here" required="*">
  		</div>
  		<div class="col-md-6">
  			<label for="contactno">Contact No</label>
  			<input type="Number" name="contactno" class="form-control" placeholder="Enter Your Contact Number Here" required="*">
  		</div>
       <div class="col-md-6">
  			<label for="admissiondate">Admission Date</label>
  			<input type="date" name="date" class="form-control "  required="*" style="height:44px;">
  		</div> 
  		<div class="col-md-6">
  			<label for="certificatecreation">Certification Creation</label>
  			<input type="text" name="certificatecreation" class="form-control" placeholder="Enter Your Certification Creation" required="*">
  		</div> 
  		<div class="col-md-6">
  			<label for="enrollmentno">Enrollment No</label>
  			<input type="Number" name="enrollmentno" class="form-control" placeholder="Enter Your Enrollment No" required="*">
  		</div>  
      <div class="col-md-6">
        <input type="Submit" name="Submit" class="form-control btn btn-primary btn-lg"  value="Ragister Me" style="height:44px;">
      </div>  
       <div class="col-md-6">
        <input type="Reset" name="Reset" class="form-control btn btn-info"  value="Reset" style="height:44px;">
      </div>  
</div>
  	</div>
  </form>
</div>
	 <?php $this->load->view('footer'); ?>
</body>
</html>