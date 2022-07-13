<h2>Support</h2>
<div class="table-responsive-sm mt-4">
    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo get_phrase('User_name'); ?></th>
                <th><?php echo get_phrase('Message'); ?></th>
                <th><?php echo get_phrase('Status'); ?></th>
                <!--<th><?php echo get_phrase('Time'); ?></th>-->
                <!--<th><?php echo get_phrase('actions'); ?></th>-->
            </tr>
        </thead>
        <tbody>
            
            <?php 
            // $webinarId=$this->uri->segment(3);
            //  $web = $this->db->get_where('webinar_guests', array('webinar_id'=>  $webinarId))->result_array();
            //  foreach ($web as $list) {
            //  $user_id= $list['user_id'];
            
             $support = $this->db->get('support')->result_array();
            
            foreach ($support as $key) :
                                   
                                ?>
            <tr>
                <!--<td><?php echo ++$key; ?></td>-->
                
                <?php echo form_open(site_url('home/delete_webinar') , array('target'=>'_top'));?>
                <input type="hidden" name="webinarId" value="<?php echo $key['id']; ?>" />
                 <td>
                    <span ><?php echo $key['id']; ?></span>
                </td>
                <!--<td>-->
                <!--    <strong><a-->
                <!--            href="<?php echo site_url('admin/guest_list/' . $key['id']); ?>"><?php echo ellipsis($key['event_name']); ?></a></strong><br>-->
                    
                <!--</td>-->
                <td>
                    <?php 
                    $user = $this->db->get_where('users', array('id'=> $key['user_id']))->result_array();
                    foreach ($user as $list){
                    ?>
                   
                    <span class=""><?php echo $list['first_name'] .' ' . $list['last_name']  ; }?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['msg']; ?></span>
                </td>
                 <td>
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $key['status']; ?>
                          </button>
                      <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo site_url('admin/supp_status/1/' . $key['id']); ?>">Approved</a>
                            <a class="dropdown-item" href="<?php echo site_url('admin/supp_status/2/' . $key['id']); ?>">Rejected</a>
                            <a class="dropdown-item" href="<?php echo site_url('admin/supp_status/3/' . $key['id']); ?>">Pending</a>
                      </div>
                    </div>
                    <!--<span class=""><?php echo $key['status']; ?></span>-->
                </td>
                <!-- <td>-->
                <!--    <span class=""><?php echo $key['time']; ?></span>-->
                <!--</td>-->
                <!-- <td>-->
                <!--    <span class=""><button class="btn btn-danger" type="submit" name="deleteWebinar">Delete</button></span> -->
                <!--</td>-->
                
               </form>
              
              
            </tr>
            <?php endforeach; 
             ?>
        </tbody>
    </table>
</div>