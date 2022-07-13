
    <!--<input value="" name="query" type="search" placeholder="<?php echo site_phrase('search'); ?>..." />-->
    <!--<button type="submit"><i class="icon_search"></i>-->
    <!--</button>-->
 <div class="container p-4" >
  <form action="<?php echo site_url('home/search'); ?>" role="search" id="searchform" method="get">
  <div class="form-group">
    <label for="search">Search</label>
    <input type="search" class="form-control" name="query" placeholder="<?php echo site_phrase('search'); ?>..." >
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
</div>