<div class="table-responsive-sm mt-4">
    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo get_phrase('title'); ?></th>
                <th><?php echo get_phrase('category'); ?></th>
                <th><?php echo get_phrase('enrolled_student'); ?></th>
                <!--<th><?php echo get_phrase('actions'); ?></th>-->
            </tr>
        </thead>
        <tbody>
            
            <?php 
             $courses = $this->db->get('course')->result_array();
            foreach ($courses as $key => $course) :
                                    $instructor_details = $this->user_model->get_all_user($course['user_id'])->row_array();
                                    $category_details = $this->crud_model->get_category_details_by_id($course['sub_category_id'])->row_array();
                                    $sections = $this->crud_model->get_section('course', $course['id']);
                                    $lessons = $this->crud_model->get_lessons('course', $course['id']);
                                    $enroll_history = $this->crud_model->enrol_history($course['id']);
                                ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td>
                    <strong><a
                            href="<?php echo site_url('admin/student_list/' . $course['id']); ?>"><?php echo ellipsis($course['title']); ?></a></strong><br>
                    <small
                        class="text-muted"><?php echo get_phrase('instructor') . ': <b>' . $instructor_details['first_name'] . ' ' . $instructor_details['last_name'] . '</b>'; ?></small>
                </td>
                <td>
                    <span class="badge badge-dark-lighten"><?php echo $category_details['name']; ?></span>
                </td>
                
                <td>
                    <small
                        class="text-muted"><?php echo '<b>' . get_phrase('total_enrolment') . '</b>: ' . $enroll_history->num_rows(); ?></small>
                </td>
              
              
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>