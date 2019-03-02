<?php $this->load->view('header'); ?>   
	 <?php $this->load->view('menu'); ?> 
	 
	
	 <div  class="container" style="margin-top:-12px">
    <div style=" float:left;" >
      <div class=" "  width="100%">
        <div class="widget" width="100%">
                                  <h1 >Contact Form</h1>
                                    <form class="webform-client-form webform-client-form-96" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/formController/conDetail" method="post" id="webform-client-form-96" accept-charset="UTF-8"><div><div  class="form-item webform-component webform-component-textfield webform-component--name">
  <label class="" for="edit-submitted-name--2"><b>Name: </b></label>
 <input contenteditable="true" class="form-control form-text" type="text" id="edit-submitted-name--2" name="name"  placeholder="Name"   size="60" maxlength="128" required="*" />
</div>
<div  class="form-item webform-component webform-component-number webform-component--number" width="100%">
  <label class="" for="edit-submitted-number--2"><b>Contact Number:</b></label>
 <input placeholder="Number" contenteditable="true" class="form-control form-text form-number" width="100%" type="number"  placeholder="Email"  id="edit-submitted-number--2" name="contact_number" size="60" required="*" />
</div>
<div  class="form-item webform-component webform-component-email webform-component--email" width="100%">
  <label class="" for="edit-submitted-email--2"><b>Email:</b></label>
 <input placeholder="Email" contenteditable="true" class="form-control form-text form-email" width="100%" type="email"  placeholder="Email"  id="edit-submitted-email--2" name="email" size="60" required="*" />
</div>

<div  class="form-item webform-component webform-component-textarea webform-component--message" width="100%">
  <label class="" for="edit-submitted-message--2"><b>Message: </b> </label>
 <div class="form-textarea-wrapper resizable" width="100%"><textarea contenteditable="true" class="form-control textarea form-textarea" placeholder="Please write message less then 250 words" name="message" id="edit-submitted-message--2" cols="60" rows="5" required="*"></textarea></div>
</div>
<div class="form-actions"><input class="webform-submit button-primary form-control form-submit form-submit" type="submit" name="op" value="Submit" /></div></div></form>        </div>
    </div>

    </div>
    <div style="float:right">

      <div class="mapouter" style="margin-top:35px;"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=%20A-109 %20FirstFloor%20JP Tower%20Vikash Khand-1%2Indirapuram%20(NCR Region) %20Ghaziabad%2C%20201014&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.Niktechsoftwaresolution.com">Niktech Software Solution</a></div><style>.mapouter{text-align:right;height:430px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:430px;width:600px;}</style></div>

    </div>

	 </div>

	 <br>
	 <?php $this->load->view('footer'); ?>
