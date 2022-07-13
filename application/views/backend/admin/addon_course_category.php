<?php
$course_details = $this->crud_model->get_course_by_id($course_id)->row_array();
?>
<div class="row">

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <?php echo form_open(site_url('admin/add_course2') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

               
                 <div class="form-group">
                    <label><?php echo get_phrase('Select_Category');?></label>
                    <select name="category" class="custom-select">
                        <option name="category" selected="selected" disabled>Select_Category</option>
                        <?php
    					$category = $this->db->get('category')->result_array();
                        foreach ($category as $key) {
                            ?>
                        <option value="<?php echo $key['id']; ?>"><?php echo $key['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- <div class="form-group">-->
                <!--    <label><?php echo get_phrase('Select_Sub_Category');?></label>-->
                <!--    <select class="custom-select" name="level" id="level">-->
                <!--             <option value="basic"><?php echo get_phrase('Basic'); ?></option>-->
                <!--            <option value="premium"><?php echo get_phrase('Premium'); ?></option>-->
                <!--     </select>-->
                <!--</div>-->
                 <div class="form-group">
                    <label><?php echo get_phrase('Select_Course');?></label>
                    <select name="course" class="custom-select">
                        <option selected="selected" disabled>Select_course</option>
                        <?php
    					$course = $this->db->get('course')->result_array();
                        foreach ($course as $key) {
                            ?>
                        <option value="<?php echo $key['id']; ?>"><?php echo $key['title']; ?></option>
                        <?php } ?>
                         </select>
                </div>
                <!--<div class="form-group">-->
                <!--    <label><?php echo get_phrase('Enter_institute_name');?></label>-->
                <!--    <input type="text" class="form-control" name="institute" value="" required />-->
                <!--</div>-->
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-info"><?php echo get_phrase('Update_Category');?></button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    initSummerNote(['#biography']);
});
</script>