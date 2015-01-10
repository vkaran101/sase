<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title><?=$title?> - NUSASE Admin</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css"/>
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css"/>
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
  <script src="<?=base_url()?>public/js/jquery.min.js"></script>
</head>
<body>

<div id="login-bg">
  <div class="row">
    <div class="small-12 medium-6 medium-centered columns">
      <div id="login-card">
        <div class="row">
          <div class="small-12 columns">
            <h3>NUSASE Admin Login</h3>
            <?php if (!empty($message)): ?>
              <div data-alert class="alert-box info radius">
                <?=$message?>
                <a href="#" class="close">&times;</a>
              </div>
            <?php endif; ?>
            <?=form_open('admin/auth/login')?>
              <label>Username:
                <input type="text" name="username" id="username"
                  value="<?=set_value('username')?>"
                />
              </label>
              <?=form_error('username')?>
              <label>Password:
                <input type="password" name="password" id="password"
                  value="<?=set_value('password')?>"
                />
              </label>
              <?=form_error('password')?>
              <input type="checkbox" value="1" name="remember" id="remember"/>
              <label for="remember">Remember Me</label>
              <div><input type="submit" value="Login" class="button radius small"/></div>
            <?=form_close()?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // resize login background to fill entire page
  function spanLoginBackground() {
    var newHeight = $(document).height();
    $('#login-bg').height(newHeight);
  }

  $(document).ready(function() {
    spanLoginBackground();
    $(window).resize(function() {
      spanLoginBackground();
    });
  });
</script>

<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>

</body>
</html>
