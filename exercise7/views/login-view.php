<?php require 'partials/header.php'; ?>

<div class="login__container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4>Login</h4>
    </div>
    <div class="panel-body">
      <form action="?act=login" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" name="username" value="<?php echo old('username') ?>" id="exampleInputEmail1" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <p class="error"><?php echo getError('login') ?></p>
        <div class="center">
          <button type="submit" class="btn btn-primary">Login Now</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require 'partials/footer.php'; ?>
