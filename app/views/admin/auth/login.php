<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?=$title?> - NUSASE Admin</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css" />
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
</head>
<body>

<div class="row">
  <div class="small-12 columns">
    <h1><a href="<?=base_url()?>admin">Admin Dashboard</a></h1>
    <hr />
    <h3><?=$title?></h3>
    <?php if (!empty($message)): ?>
      <div data-alert class="alert-box info radius">
        <?=$message?>
        <a href="#" class="close">&times;</a>
      </div>
    <?php endif; ?>
    <?=form_open('admin/auth/login')?>
      <div class="row">
        <div class="small-12 columns">
          <label>Username:
            <input type="text" name="username" id="username"
              value="<?=set_value('username')?>"
            />
          </label>
          <?=form_error('username')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>Password:
            <input type="password" name="password" id="password"
              value="<?=set_value('password')?>"
            />
          </label>
          <?=form_error('password')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <input type="checkbox" value="1" name="remember" id="remember" />
          <label for="remember">Remember Me</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <?=form_submit('submit','Login','class="button radius"')?>
        </div>
      </div>
    <?=form_close()?>
  </div>
</div>

<script src="<?=base_url()?>public/js/jquery.min.js"></script>
<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>

</body>
</html>
