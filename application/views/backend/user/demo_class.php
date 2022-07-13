    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
        <script src='https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js'></script>
        <script src='//cdn.datatables.net/buttons/1.2.1/js/buttons.flash.min.js'></script>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
        <script src='//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
        <script src='//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
        <script src='//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js'></script>
        <script src='//cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js'></script>
        <script src='https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js'></script>

        <script>
        $(document).ready(function() {
  $('#example').DataTable({
                    "lengthMenu": [5, 10, 50, 100],
                    "pageLength": 5,
                    "scrollX": true,
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'excelHtml5',
                            text: 'Export All',
                            exportOptions: {
                                columns: ':visible:not(.not-exported)'
                            },
                            title: 'Data export'
                        }, {
                            extend: 'excelHtml5',
                            text: 'Export selected',
                            exportOptions: {
                                columns: ':visible:not(.not-exported)',
                                modifier: {
                                    selected: true
                                }
                            },
                            title: 'Data export'
                        }
                    ],
                    select: {
                    	style : "multi"
                    }
                });
});

        </script>
        
        <div class="container" >
             <h2>Student Enrolled</h2>
            <!--  <div class="row" >-->
            <!--<a href="<?php echo site_url('user/add_meet'); ?>" class="btn btn-primary">Add New Meet</a>-->
            <!--<a href="<?php echo site_url('user/manage_meet'); ?>" class="btn btn-primary ml-2">Manage Meet</a>-->
            <!--</div>-->
            <!-- </div>-->

<div class="table-responsive-sm mt-4">
    <table id="example" class="display row-border nowrap table-striped m-0 responsive-utilities jambo_table" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo get_phrase('Student_Name'); ?></th>
                <th><?php echo get_phrase('Email'); ?></th>
                <th><?php echo get_phrase('Assigend_teacher'); ?></th>
                <th><?php echo get_phrase('Status'); ?></th>
                <th><?php echo get_phrase('Time'); ?></th>
                <th><?php echo get_phrase('Date'); ?></th>
                <th><?php echo get_phrase('Meet_Id'); ?></th>
                <th><?php echo get_phrase('Language'); ?></th>
                <th><?php echo get_phrase('Course_name'); ?></th>
                <th><?php echo get_phrase('Course_level'); ?></th>
                <!--<th><?php echo get_phrase('actions'); ?></th>-->
            </tr>
        </thead>
        <tbody>
            
            <?php 
            // $webinarId=$this->uri->segment(3);
            //  $web = $this->db->get_where('webinar_guests', array('webinar_id'=>  $webinarId))->result_array();
            //  foreach ($web as $list) {
            //  $user_id= $list['user_id'];
            //  $demo = $this->db->get('demo_class')->result_array();
            $user_id= $this->session->userdata('user_id');
            $demo = $this->db->get_where('demo_class', array('assigened_teacher'=>  $user_id))->result_array();
             $i=1;
            foreach ($demo as $key) :
                                   
                                ?>
            <tr>
                <!--<td><?php echo ++$key; ?></td>-->
                
                <?php echo form_open(site_url('home/delete_webinar') , array('target'=>'_top'));?>
                <input type="hidden" name="webinarId" value="<?php echo $key['id']; ?>" />
                 <td>
                    <span ><?php echo $i++; ?></span>
                </td>
                <!--<td>-->
                <!--    <strong><a-->
                <!--            href="<?php echo site_url('admin/guest_list/' . $key['id']); ?>"><?php echo ellipsis($key['event_name']); ?></a></strong><br>-->
                    
                <!--</td>-->
                <td>
                    <?php
                    $name = $this->db->get_where('users', array('id'=>  $key['user_id']))->result_array();
                    foreach($name as $n) :
                    ?>
                    <span class=""><?php echo $n['first_name']; ?></span>
                    
                </td>
                 <td>
                   
                    <span class=""><?php echo $n['email']; ?></span>
                     <?php endforeach; ?>
                </td>
                 <td>
                    <span class=""><?php 
                            $t_name =$this->db->get_where('users', array('id' => $key['assigened_teacher']))->result_array();
                            foreach ($t_name as $li) {
                            echo $li['first_name'];
                            } ?>
                            </span>
                </td>
                 <td>
                     <!--<div class="btn-group">-->
                     <!--     <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                     <!--       <?php echo $key['status']; ?>-->
                     <!--     </button>-->
                    <!--  <div class="dropdown-menu">-->
                    <!--        <a class="dropdown-item" href="<?php echo site_url('admin/status/1/' . $key['id']); ?>">Approved</a>-->
                    <!--        <a class="dropdown-item" href="<?php echo site_url('admin/status/2/' . $key['id']); ?>">Rejected</a>-->
                    <!--        <a class="dropdown-item" href="<?php echo site_url('admin/status/3/' . $key['id']); ?>">Pending</a>-->
                     
                    <!--</div>-->
                    <span class=""><?php echo $key['status']; ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['time']; ?></span>
                </td>
                <td>
                    <span class=""><?php echo $key['date']; ?></span>
                </td>
                 <td>
                     
                    <span class=""> <?php 
                            // echo $key['zoom_id'];
                            $zoom = $this->db->get_where('zoom', array('id' => $key['zoom_id']))->result_array();
                            foreach ($zoom as $li) {
                            echo $li['meet_id'];
                                 }
                            ?></span>
                </td>
                 <td>
                    <span class=""><?php echo $key['language']; ?></span>
                </td>
                <td>
                      <?php
                    $Cname = $this->db->get_where('course', array('id'=>  $key['course_id']))->result_array();
                    foreach($Cname as $c) :
                    ?>
                    <span class=""><?php echo $c['title']; ?></span>
                </td>
                  <td>
                    <span class=""><?php echo $c['level']; ?></span>
                    <?php endforeach; ?>
                </td>
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