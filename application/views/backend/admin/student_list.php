
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title"><?php echo get_phrase('student'); ?></h4>
                <div class="table-responsive-sm mt-4">
                    <!--<table id="basic-datatable" class="table table-striped table-centered mb-0">-->
                    <table id="example" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo get_phrase('name'); ?></th>
                                <th><?php echo get_phrase('email'); ?></th>
                                 <th><?php echo get_phrase('mobile'); ?></th> 
                                <!-- <th><?php echo get_phrase('actions'); ?></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //  $webinarId=$this->uri->segment(3);
            //  $users = $this->db->get_where('guests', array('id'=>  $user_id))->result_array();
                            $course_id=$this->uri->segment(3);
                            $user_list=$this->db->get_where('enrol', array('course_id' => $course_id))->result_array();
                            foreach ($user_list as $list) {
                            $id=$list['user_id'];
                          $user = $this->db->get_where('users', array('id' => $id))->result_array();
                        // $user = $this->db->get('users')->result_array();
                            foreach ($user as $key) : 
                                 
                             ?>
                            <tr>
                               <td><spain><?php echo $key['id']; ?></spain></td>
                                <td><spain><?php echo $key['first_name']; ?></spain></td>
                                <td><spain><?php echo $key['email']; ?></spain></td>
                                <td><spain><?php echo $key['mobile']; ?></spain></td>
                               
                               
                            </tr>
                           <?php endforeach;
                           }?>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>