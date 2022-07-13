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
                    // buttons: [{
                    //         extend: 'excelHtml5',
                    //         text: 'Export All',
                    //         exportOptions: {
                    //             columns: ':visible:not(.not-exported)'
                    //         },
                    //         title: 'Data export'
                    //     }, {
                    //         extend: 'excelHtml5',
                    //         text: 'Export selected',
                    //         exportOptions: {
                    //             columns: ':visible:not(.not-exported)',
                    //             modifier: {
                    //                 selected: true
                    //             }
                    //         },
                    //         title: 'Data export'
                    //     }
                    // ],
                    // select: {
                    // 	style : "multi"
                    // }
                });
});

        </script>
        
        



<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('Manage_institute'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title"><?php echo get_phrase('Manage_institute'); ?></h4>
              <!--<div class="row justify-content-md-center">-->
              <!--    <div class="col-xl-6">-->
              <!--        <form class="form-inline" action="<?php echo site_url('admin/enrol_history/filter_by_date_range') ?>" method="get">-->
              <!--            <div class="col-xl-10">-->
              <!--                <div class="form-group">-->
              <!--                    <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue"  data-cancel-class="btn-light" style="width: 100%;">-->
              <!--                        <i class="mdi mdi-calendar"></i>&nbsp;-->
              <!--                        <span id="selectedValue"><?php echo date("F d, Y" , $timestamp_start) . " - " . date("F d, Y" , $timestamp_end);?></span> <i class="mdi mdi-menu-down"></i>-->
              <!--                    </div>-->
              <!--                    <input id="date_range" type="hidden" name="date_range" value="<?php echo date("d F, Y" , $timestamp_start) . " - " . date("d F, Y" , $timestamp_end);?>">-->
              <!--                </div>-->
              <!--            </div>-->
              <!--            <div class="col-xl-2">-->
              <!--                <button type="submit" class="btn btn-info" id="submit-button" onclick="update_date_range();"> <?php echo get_phrase('filter');?></button>-->
              <!--            </div>-->
              <!--        </form>-->
              <!--    </div>-->
              <!--</div>-->
              <div class="table-responsive-sm mt-4">
                  <?php// if (count($enrol_history->result_array()) > 0): ?>
                      <!--<table class="table table-striped table-centered mb-0">-->
                      <table id="example" class="display row-border nowrap table-striped responsive-utilities jambo_table">
                          <thead>
                              <tr>
                                  <th><?php echo get_phrase('S.no'); ?></th>
                                  <th><?php echo get_phrase('Institute_Name'); ?></th>
                                  
                                  <th><?php echo get_phrase('institute_address'); ?></th>
                                  <th><?php echo get_phrase('City_Name'); ?></th>
                                  <th><?php echo get_phrase('Pincode'); ?></th>
                                  <th><?php echo get_phrase('Actions'); ?></th>
                              </tr>
                          </thead>
                          <tbody>
                             	<?php
                             	    $ctr=1;
                					$city = $this->db->get('institute')->result_array();
                                    foreach ($city as $key) {
                                        ?>
                                <tr class="gradeU">
                                      <td><?php echo $ctr; ?>.</td>
                                      <td><b><?php echo $key['institute_name']; ?></b></td>
                                       <td><b><?php echo $key['institute_address']; ?></b></td>
                                      <?php $city_data = $this->db->get_where('city', array('id' => $key['city_id']))->row_array();?>
                                      <td><b><?php echo $city_data['city_name']; ?></b></td>
                                       
                                      <td><b><?php echo $city_data['pincode']; ?></b></td>
                                      
                                      <td>
                                          <button type="button" class="btn btn-outline-danger btn-icon btn-rounded btn-sm" onclick="confirm_modal('<?php echo site_url('admin/enrol_history_delete/'.$enrol['id']); ?>');"> <i class="dripicons-trash"></i> </button>
                                      </td>
                                  </tr>
                              <?php $ctr++;} ?>
                          </tbody>
                      </table>
                  <?php// endif; ?>
                  <?php if (count($enrol_history->result_array()) == 0): ?>
                      <div class="img-fluid w-100 text-center">
                        <img style="opacity: 1; width: 100px;" src="<?php echo base_url('assets/backend/images/file-search.svg'); ?>"><br>
                        <?php echo get_phrase('no_data_found'); ?>
                      </div>
                  <?php endif; ?>
              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<script type="text/javascript">
    function update_date_range()
    {
        var x = $("#selectedValue").html();
        $("#date_range").val(x);
    }
</script>
