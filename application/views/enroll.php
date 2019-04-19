<?php $this->load->view('header'); ?>   
	 <?php $this->load->view('menu'); ?> 
	<br>
	<br>
	 <div class="container">
	 	<div class="row">
		 <div class="col-md-8">
		<form action="<?php echo base_url();?>index.php/welcome/enroll" method="post">
      <input type="text" placeholder="Search.." name="search">
	  </div>
	  <div>
      <input type="submit" class="btn btn-success" id="submit1" >
    </form>
		 </div>
       </div>
       <div class="table-responsive" id="student">
		<table class="table-condensed" >
  <tr>
  <thead>
    <th>Student Name</th>
    <th>Father Name</th>
	<th>Mother Name</th>
    <!--<th>Enrollment Number</th>-->
   </thead>
  </tr>
  <br>
  <?php foreach($enroll as $enrl) :?>
  <tr>
  <tbody>
    <td><?php echo $enrl->student_name;?></td>
    <td><?php echo $enrl->f_name;?></td>
    <td><?php echo $enrl->m_name;?></td>
   <!--<td><?php echo $enrl->stud_id;?></td>-->
  </tbody>
  </tr>
  <?php endforeach ?>
  </table>
  </div>
  </div>
  <br>
  <br>
  <script>
function myFunction() {
  var x = document.getElementById("student");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
	 <?php $this->load->view('footer'); ?>
