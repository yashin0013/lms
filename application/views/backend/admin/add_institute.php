
<div class="row ">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-body">
				<h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('Add_institute'); ?></h4>
			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>

<div class="row">

<div class="col-xl-12">
	<div class="card">
		<div class="card-body">
			
				<?php echo form_open(site_url('admin/institute_add/add') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
			
				<div class="form-group" >
					<label><?php echo get_phrase('Select_city');?></label>
					<select name="city_name" class="custom-select" required>
					    <option selected="selected" disabled>Select_city</option>
    					<?php
    					$city = $this->db->get('city')->result_array();
                        foreach ($city as $key) {
                            ?>
    					<option value="<?php echo $key['id']; ?>"><?php echo $key['city_name']; ?></option>
    					<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label><?php echo get_phrase('Institute_Name');?></label>
					<input type="text" class="form-control" name="institute" value="" required/>
				</div>
				 <div class="form-group">
                    <label><?php echo get_phrase('Institute_Address');?></label>
                    <input type="text" class="form-control" name="institute_address" value="" required />
                </div>
				<div class="row justify-content-center">
					<button type="submit" class="btn btn-info"><?php echo get_phrase('Add_institute');?></button>
				</div>
			</form>
		
	</div>
</div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function () {
	initSummerNote(['#biography']);
});
</script>
