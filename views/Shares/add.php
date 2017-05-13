<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="title">Share Title</label>
        <input type="text" class="form-control" id="title" placeholder="" name="title">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" rows="8" cols="80" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="link">Link</label>
        <input type="text" class="form-control" id="link" placeholder="" name="link">
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
      <a class="btn btn-danger" href="<?php echo ROOT_PATH ?>shares">Cancell</a>
    </form>
  </div>
</div>
