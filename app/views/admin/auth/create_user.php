<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?=$title?> | NUSASE Admin</title>
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
    <h4><?=$title?></h4>
    <?php if (!empty($message)): ?>
      <div data-alert class="alert-box info radius">
        <?=$message?>
        <a href="#" class="close">&times;</a>
      </div>
    <?php endif; ?>
    <?=form_open('admin/auth/create_user')?>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <label>First Name:
            <input type="text" name="first_name" id="first_name"
              value="<?=set_value('first_name')?>"
            />
          </label>
          <?=form_error('first_name')?>
        </div>
        <div class="small-12 medium-6 columns">
          <label>Last Name:
            <input type="text" name="last_name" id="last_name"
              value="<?=set_value('last_name')?>"
            />
          </label>
          <?=form_error('last_name')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>Email:
            <input type="email" name="email" id="email"
              value="<?=set_value('email')?>"
            />
          </label>
          <?=form_error('email')?>
        </div>
      </div>
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
        <div class="small-12 medium-6 columns">
          <label>Password:
            <input type="password" name="password" id="password"
              value="<?=set_value('password')?>"
            />
          </label>
          <?=form_error('password')?>
        </div>
        <div class="small-12 medium-6 columns">
          <label>Confirm Password:
            <input type="password" name="password_confirm" id="password_confirm"
              value="<?=set_value('password_confirm')?>"
            />
          </label>
          <?=form_error('password_confirm')?>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="small-12 columns">
          <?=form_submit('submit','Submit','class="button radius"')?>
          <?=anchor('/admin/auth','Cancel','class="button secondary radius"')?>
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
