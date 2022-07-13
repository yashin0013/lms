<?php
    $status_wise_courses = $this->crud_model->get_status_wise_courses();
    $number_of_courses = $status_wise_courses['pending']->num_rows() + $status_wise_courses['active']->num_rows();
    $number_of_lessons = $this->crud_model->get_lessons()->num_rows();
    $number_of_enrolment = $this->crud_model->enrol_history()->num_rows();
    $number_of_students = $this->user_model->get_user()->num_rows();
?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('email'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="card">
	<h3>
		<span class="p-3"><?php echo get_phrase('Send_Email');?></span>
	</h3>
	
	<div class="card-body">
		<!--<form method="post" class="mt-2" action="<?php echo site_url('admin/message/send_new'); ?>" enctype="multipart/form-data">-->
        <form method="post" class="mt-2" action="<?php echo site_url('admin/mail'); ?>" enctype="multipart/form-data">
            
            <div class="form-group">
                        <label for="msg"><?php echo get_phrase('Send Mail By User / Course :'); ?><span class="required">*</span> </label>
                        <select class="form-control select2" title="Select Single or Multiple User" data-toggle="select2" name="mail_type" id="mail_type" required>
                        <option selected="selected" disabled>Select Mail Type:</option>    
                        <option value="course">By Course</option>
                        <option value="user">By User</option>
                        </select>
            </div>
            
		            <div class="form-group">
                        <label id="uid" for="user_id">Select Type</label>
                        <span id="" class="required">*</span>
                        <div id="cidd">
                        <select class="form-control select2" title="Select course" data-toggle="select2" name="course_id" id="courseid">
                            <!--<select class="selectpicker" title="Type" multiple>-->
                            <option value="" selected="selected" disabled><?php echo get_phrase('select_course'); ?></option>
                        <option value="<?php echo 'all'; ?>" <?php if($selected_category_id == 'all') echo 'selected'; ?>><?php echo get_phrase('all'); ?></option>
                                <?php $categories = $this->crud_model->get_categories();
                                foreach ($categories->result_array() as $category): ?>
                                    <optgroup label="<?php echo $category['name']; ?>">
                                        <?php $sub_categories = $this->crud_model->get_sub_categories($category['id']);
                                        foreach ($sub_categories as $sub_category): ?>
                                        <option value="<?php echo $sub_category['id']; ?>" <?php if($selected_category_id == $sub_category['id']) echo 'selected'; ?>><?php echo $sub_category['name']; ?></option>
                                    <?php endforeach; ?>
                                </optgroup>
                            <?php endforeach; ?>
                        </select>
                        </div>

                        <div id="uidd">
                        <select class="form-control select2" title="Select Single or Multiple User" data-toggle="select2" name="user_id" id="user_id" multiple>
                            <!--<select class="selectpicker" title="Type" multiple>-->
                            <option value="" disabled><?php echo get_phrase('select_user'); ?></option>
                            <option value="all" ><?php echo get_phrase('all'); ?></option>
                            <?php $user_list = $this->user_model->get_user()->result_array();
                                foreach ($user_list as $user):?>
                                <option value="<?php echo $user['id'] ?>"><?php echo $user['first_name'].' '.$user['last_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        </div>

                        
                    </div>

                    
                    
            <div class="form-group">
                        <label for="msg"><?php echo get_phrase('Write Mail Here:'); ?><span class="required">*</span> </label>
                        <textarea id='msg' name='msg' required></textarea>		   
            </div>


		    <div class="form-group mt-8">
		        <div class="row">
		            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-13 text-center">
		                <button type="submit" class="btn btn-success float-right"><?php echo get_phrase('send_message'); ?></button>
		            </div>
		        </div>
		    </div>
		</form>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

$(document).ready(function () {
        $('#cidd').hide();
        $('#uidd').hide();
});
        //$('#check').hide();

var dropdown = document.getElementById("user_id");
    dropdown.onchange = function(event){
       if(dropdown.value=="all"){
         alert("Due to large number of data in user table unable to send mail in single click ! Error code x093");
       }
    }


	$(function() { 
    $('#mail_type').change(function() {
        var ml = $(this).val();
        if(ml == 'course')
         {
             $('#uid').text('Select course');
             $('#uidd').hide();
             $('#cidd').show();
         }
         if(ml == 'user')
         {
             $('#uid').text('Select Single or Multiple User');
             $('#cidd').hide();
             $('#uidd').show();
         }
    }).change(); // Trigger the event
});
</script>



<script type="text/javascript">
  $(document).ready(function () {
    initSummerNote(['#msg']);
  });
</script>


<script type="text/javascript">
    $('#unpaid-instructor-revenue').mouseenter(function() {
        $('#go-to-instructor-revenue').show();
    });
    $('#unpaid-instructor-revenue').mouseleave(function() {
        $('#go-to-instructor-revenue').hide();
    });
</script>
