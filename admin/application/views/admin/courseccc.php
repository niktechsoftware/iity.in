<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <h2><center>Course on Computer concept Student Detail</center></h2>
                                           <?php $i = 1;
                                             $this->db->where('student_course','Course on Computer concept (CCC)'); 
                                              $this->db->where('status',1); 
                                             ?>

                                            <?php $res = $this->db->get("registration_table")->result();?>

                                            <thead><tr>
                                              <th>SNO</th>
                                               <th>STUDENT ID</th>
                                              <th>STUDENT NAME</th>
                                              <th>FATHER NAME</th>
                                              <th>MOTHER NAME</th>
                                              <th>MOBILE</th>
                                              <th>COURSE NAME</th>
                                              <th>ADMISSION DATE</th>
                                              <th>ADDRESS</th>
                                             </tr></thead>

                                            <?php foreach($res as $row)
                                            {
                                            ?>
                                            <tr><td>
                                            <?php echo $i; ?></td>
                                          <td><?php echo $row->stud_id;?></td>
                                          <td><?php echo $row->student_name;?></td>
                                          <td><?php echo $row->f_name;?></td>
                                          <td><?php echo $row->m_name;?></td>
                                         <td><?php echo $row->student_contact_no;?></td>
                                         <td><?php echo $row->student_course;?></td>
                                         <td><?php echo $row->addmi_date;?></td>
                                          <td><?php echo $row->student_address;?></td>
                                       </tr>
                                       <?php $i++;}?>    
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->