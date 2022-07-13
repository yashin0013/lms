
<div class="row ">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-body">
				<h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('Add_city'); ?></h4>
			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>

<div class="row">

<div class="col-xl-12">
	<div class="card">
		<div class="card-body">
			
				<?php echo form_open(site_url('admin/city_add/add') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
				<!--<div class="form-group">-->
				<!--	<label><?php echo get_phrase('current_password');?></label>-->
				<!--	<input type="password" class="form-control" name="current_password" value="" required/>-->
				<!--</div>-->
				<div class="form-group">
					<label><?php echo get_phrase('Enter_city_name');?></label>
					<input type="text" class="form-control" name="city" value="" required/>
				</div>
				<div class="form-group">
					<label><?php echo get_phrase('Enter_city_pincode');?></label>
					<input type="text" class="form-control" name="pincode" value="" required/>
				</div>
				<div class="row justify-content-center">
					<button type="submit" class="btn btn-info"><?php echo get_phrase('Add_city');?></button>
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
