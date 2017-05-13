<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register User</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" class="form-control" type="email" id="email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="" name="password">
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </form>
  </div>
</div>
