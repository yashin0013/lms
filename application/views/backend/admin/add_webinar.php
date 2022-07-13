<h2>Add Webinar</h2>
<div class="tab-pane" id="live-class">
    	<?php echo form_open(site_url('home/add_webinar') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
    <!--<form action="home/add_webinar" method="post">-->
        <div class="row">
            <div class="col-md-7">
                <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label"
                        for="event_name"><?php echo get_phrase('event_name'); ?></label>
                    <div class="col-md-6">
                        <input type="text" name="event_name" class="form-control date" id="event_name">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label" for="zoom_id"><?php echo get_phrase('zoom_id'); ?></label>
                    <div class="col-md-6">
                        <input type="text" name="zoom_id" class="form-control date" id="zoom_id">
                    </div>
                </div>
                 <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label" for="password"><?php echo get_phrase('Password'); ?></label>
                    <div class="col-md-6">
                        <input type="text" name="password" class="form-control date" id="password">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label" for="date"><?php echo get_phrase('Date'); ?></label>
                    <div class="col-md-6">
                        <input type="date" name="date" class="form-control date" id="date">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label" for="time"><?php echo get_phrase('Time'); ?></label>
                    <div class="col-md-6">
                        <input type="time" name="time" class="form-control date" id="time">
                    </div>
                </div>
                  <div class="form-group row mb-3">
                    <label class="col-md-4 col-form-label" for="desc"><?php echo get_phrase('Description'); ?></label>
                    <div class="col-md-6">
                        <textarea name="desc" class="form-control" id="desc" ></textarea>
                    </div>
                </div>
                  <div class="form-group row mb-3">
                     <button type="submit" class="btn btn-primary" >Submit</button>
                </div>


            </div>

        </div>
    </form>
</div>