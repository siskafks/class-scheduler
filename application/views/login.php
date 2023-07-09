<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>CV</b>school</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login to start your session</p>

    <form action="<?php echo base_url('login') ?>" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?php echo form_error('username','<div class="text-small text-danger"></div>') ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo form_error('password','<div class="text-small text-danger"></div>') ?>
      </div>
      <div class="form-group">
        <div class="radio">
            <label>
                <input type="radio" name="keterangan" value="0" checked>
                Student
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="keterangan" value="1">
                Teacher
            </label>
        </div>
        <?php echo form_error('keterangan','<div class="text-small text-danger"></div>') ?>
    </div>
      <div class="row">
        <div class="col-xs-4 pull-right">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <br>
    <a href="<?php echo base_url('register') ?>" class="text-center">Register now</a>
</body>