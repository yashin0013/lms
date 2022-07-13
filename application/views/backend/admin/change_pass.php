
<div class="row ">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-body">
				<h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('update_password'); ?></h4>
			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>

<div class="row">

<div class="col-xl-12">
	<div class="card">
		<div class="card-body">
			
				<?php echo form_open(site_url('admin/manage_profile/change_password1/'.$user_id) , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
				<!--<div class="form-group">-->
				<!--	<label><?php echo get_phrase('current_password');?></label>-->
				<!--	<input type="password" class="form-control" name="current_password" value="" required/>-->
				<!--</div>-->
				<div class="form-group">
					<label><?php echo get_phrase('new_password');?></label>
					<input type="password" class="form-control" name="new_password" value="" required/>
				</div>
				<div class="form-group">
					<label><?php echo get_phrase('confirm_new_password');?></label>
					<input type="password" class="form-control" name="confirm_password" value="" required/>
				</div>
				<div class="row justify-content-center">
					<button type="submit" class="btn btn-info"><?php echo get_phrase('update_password');?></button>
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
