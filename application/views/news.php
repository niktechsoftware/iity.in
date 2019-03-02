<?php $this->load->view('header'); ?>
<div>
<table class=" table table-bordered" >
  <tr class="head_tr">
  <th colspan="2"> <span style="font-size: 15px;">1. Personal Detail</span> </th>
    </tr>
    <tr>
    <td class="text-left txt"> Student ID</td>
    <td><?php echo $abc->stud_id;?></td>
  </tr>
  <tr>
    <td class="text-left txt"> Student Course</td>
    <td><?php echo $abc->student_course;?></td>
  </tr>
    <tr>
    <td class="text-left txt"> Student Name</td>
    <td><?php echo $abc->student_name;?></td>
  </tr>
  
   <tr>
    <td class="text-left txt">Student Father Name</td>
   <td><?php echo $abc->f_name;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Student Mother Name</td>
   <td><?php echo $abc->m_name;?></td>
  </tr>
  
   
    <td class="text-left txt">Admisstion Date</td>
   <td><?php echo $abc->addmi_date;?></td>
  </tr>
   <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 2. Contact Detail</span></th>
    </tr>
   <tr>
    <td class="text-left txt">Student Contect Number</td>
   <td><?php echo $abc->student_contact_no;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 3. Address Detail</span></th>
    </tr>
   <tr>
    <td class="text-left txt">Student Address</td>
   <td><?php echo $abc->student_address	;?></td>
  </tr>
</table>
</div>