<h2>Webinar Information</h2>
<div class="table-responsive-sm mt-4">
    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>#</th>
                <!--<th><?php echo get_phrase('Name'); ?></th>-->
                <th><?php echo get_phrase('Zoom_id'); ?></th>
                 <!--<th><?php echo get_phrase('Description'); ?></th>-->
                <th><?php echo get_phrase('actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
             $web = $this->db->get('zoom')->result_array();
             $i=1;
            foreach ($web as $key) :
                                   
                                ?>
            <tr>
                 <td>
                    <span class=""><?php echo $i++; ?></span>
                </td>
                <td>
                    <strong><?php echo ellipsis($key['meet_id']); ?></strong><br>
                    
                </td>
                
                <!-- <td>-->
                <!--    <span class=""><?php echo $key['description']; ?></span>-->
                <!--</td>-->
                 <td>
                     <a  href="<?php echo site_url('admin/edit_meet/'. $key['id']) ?>" class="btn btn-primary" type="button" ><?php echo get_phrase('edit'); ?></a>
                     <a href="<?php echo site_url('admin/delete_meet/'. $key['id']) ?>" class="btn btn-danger" type="button">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>