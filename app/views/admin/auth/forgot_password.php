<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Forgot Password | NUSASE Admin</title>
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
    <h4>Forgot Password</h4>
    <?php if (!empty($message)): ?>
      <div data-alert class="alert-box info radius">
        <?=$message?>
        <a href="#" class="close">&times;</a>
      </div>
    <?php endif; ?>
    <?=form_open('admin/auth/forgot_password')?>
      <div class="row">
        <div class="small-12 columns">
          <p>Please enter your username so we can send you an email to reset your password.</p>
          <label>Username:
            <input type="text" name="username" id="username"
              value="<?=set_value('username')?>"
            />
          </label>
          <?=form_error('username')?>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="small-12 columns">
          <?=form_submit('submit','Submit','class="button radius"')?>
          <?=anchor('/admin/auth/','Cancel','class="button secondary radius"')?>
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
