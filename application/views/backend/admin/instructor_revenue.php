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
        
        



<div class="row ">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-body">
        <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('instructor_revenue'); ?></h4>
      </div> <!-- end card body-->
    </div> <!-- end card -->
  </div><!-- end col-->
</div>

<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-body">
        <h4 class="mb-3 header-title"><?php echo get_phrase('instructor_revenue'); ?></h4>
        <div class="table-responsive-sm mt-4">
          <!--<table id="basic-datatable" class="table table-striped table-centered mb-0">-->
           <table id="example" class="display row-border nowrap table-striped m-0 responsive-utilities jambo_table">
            <thead>
              <tr>
                <th><?php echo get_phrase('instructor_name'); ?></th>
                <th><?php echo get_phrase('date'); ?></th>
                <th><?php echo get_phrase('enrolled_course'); ?></th>
                <th><?php echo get_phrase('total_amount'); ?></th>
                <th><?php echo get_phrase('instructor_revenue'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($payment_history as $payment) :
                $course_data = $this->db->get_where('course', array('id' => $payment['course_id']))->row_array();
                $user_data = $this->db->get_where('users', array('id' => $course_data['user_id']))->row_array(); ?>
                <?php
                $paypal_keys          = json_decode($user_data['paypal_keys'], true);
                $stripe_keys          = json_decode($user_data['stripe_keys'], true);
                ?>
                <tr class="gradeU">
                <td><?php echo $user_data['first_name'] . ' ' . $user_data['last_name']; ?></td>
                <td><?php echo date('D, d-M-Y', $payment['date_added']); ?></td>
                  <td>
                    <strong><a href="<?php echo site_url('home/course/' . slugify($course_data['title']) . '/' . $course_data['id']); ?>" target="_blank"><?php echo $course_data['title']; ?></a></strong><br>
                    <small class="text-muted"><?php echo get_phrase('enrolment_date') . ': ' . date('D, d-M-Y', $payment['date_added']); ?></small>
                    <?php if ($payment['coupon']) : ?>
                      <small class="d-block">
                        <span class="text-muted">
                          <?php echo get_phrase('coupon_applied'); ?> :
                        </span>
                        <span class="badge badge-success">
                          <i class="fas fa-tags"></i> <?php echo $payment['coupon']; ?>
                        </span>
                      </small>
                    <?php endif; ?>
                  </td>
                 
                  <td>
                    <?php echo currency($payment['amount']); ?>
                  </td>
                  <td>
                    <?php echo currency($payment['instructor_revenue']); ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>