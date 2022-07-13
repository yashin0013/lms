<h2>Webinar Information</h2>
<div class="table-responsive-sm mt-4">
    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo get_phrase('Name'); ?></th>
                <th><?php echo get_phrase('Zoom_id'); ?></th>
                <th><?php echo get_phrase('Date'); ?></th>
                <th><?php echo get_phrase('Time'); ?></th>
                 <th><?php echo get_phrase('Description'); ?></th>
                <th><?php echo get_phrase('actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
             $web = $this->db->get('webinar')->result_array();
            foreach ($web as $key) :
                                   
                                ?>
            <tr>
                <!--<td><?php echo ++$key; ?></td>-->
                <?php echo form_open(site_url('home/delete_webinar') , array('target'=>'_top'));?>
                <input type="hidden" name="webinarId" value="<?php echo $key['id']; ?>" />
                 <td>
                    <span class=""><?php echo $key['id']; ?></span>
                </td>
                <td>
                    <strong><?php echo ellipsis($key['event_name']); ?></strong><br>
                    
                </td>
                <td>
                    <span class=""><?php echo $key['zoom_id']; ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['date']; ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['time']; ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['description']; ?></span>
                </td>
                 <td>

                    <span class=""><button class="btn btn-danger" type="submit" name="deleteWebinar">Delete</button></span> 
                    
                </td>
                
               </form>
              
              
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>