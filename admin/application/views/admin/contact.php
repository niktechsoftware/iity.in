                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr> 
                                                 <th>SNo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                   <th>Contact Number</th>
                                                      <th>Enquiry Message</th>           
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("enquiry_contact_detail")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                              
                                              <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                   <td><?php echo $row->contact_number; ?></td>
                                                      <td><?php echo $row->message; ?></td>    
                                                <td>
                                                	<a href="<?php echo base_url();?>apanel/deleteCareer/<?php echo $row->id; ?>">
                                                	<span style="color:black;display:block; ">Delete</span>
                                                	</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->