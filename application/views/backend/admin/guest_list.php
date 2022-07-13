<h2>Student Enrolled</h2>
<div class="table-responsive-sm mt-4">
    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo get_phrase('Name'); ?></th>
                <th><?php echo get_phrase('Email'); ?></th>
                <th><?php echo get_phrase('Mobile'); ?></th>
                <!--<th><?php echo get_phrase('actions'); ?></th>-->
            </tr>
        </thead>
        <tbody>
            
            <?php 
            $webinarId=$this->uri->segment(3);
             $web = $this->db->get_where('webinar_guests', array('webinar_id'=>  $webinarId))->result_array();
             foreach ($web as $list) {
             $user_id= $list['user_id'];
             $users = $this->db->get_where('guests', array('id'=>  $user_id))->result_array();
            
            foreach ($users as $key) :
                                   
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
                    <span class=""><?php echo $key['guest_name']; ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['email']; ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['mobile']; ?></span>
                </td>
                <!-- <td>-->
                <!--    <span class=""><button class="btn btn-danger" type="submit" name="deleteWebinar">Delete</button></span> -->
                <!--</td>-->
                
               </form>
              
              
            </tr>
            <?php endforeach; 
             }?>
        </tbody>
    </table>
</div>