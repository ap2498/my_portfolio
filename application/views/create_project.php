<!-- <form action="<?php echo site_url('projects/add_project'); ?>" method="post">
    <label for="title">Title</label>
    <input type="text" class="title" name="title" id="title"> <br>
    <label for="desc">Description</label>
    <textarea name="desc" id="desc"></textarea><br>
    <label for="company">company</label>
    <input type="text" class="company" name="company" id="company"> <br>
    <label for="url">URL</label>
    <input type="text" class="url" name="url" id="url"> <br>
    <label for="notes">Notes</label>
    <textarea name="notes" id="notes"></textarea> <br>

    

    <button type="submit">Submit</button>
</form> -->

<form action="<?php echo site_url('projects/add_project'); ?>" method='post'>
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
    
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea name="desc" class="form-control" id="desc"></textarea>
  </div>
  <div class="form-group">
    <label for="company">Company</label>
    <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company">
    
  </div>
  <div class="form-group">
    <label for="url">URL</label>
    <input type="text" name="url" class="form-control" id="url" placeholder="Enter URL">
    
  </div>
  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea name="notes" id="notes" class="form-control"></textarea>
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>