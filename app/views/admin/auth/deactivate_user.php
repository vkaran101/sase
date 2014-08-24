<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Deactivate User | NUSASE Admin</title>
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
    <h4>Deactivate User</h4>
    <?php if (!empty($message)): ?>
      <div data-alert class="alert-box info radius">
        <?=$message?>
        <a href="#" class="close">&times;</a>
      </div>
    <?php endif; ?>
    <?=form_open('admin/auth/deactivate/'.$user->id)?>
      <div class="row">
        <div class="small-12 columns">
          <p>Are you sure you want to deactivate the user "<?=$user->username?>"?</p>
        </div>
      </div>
      <input type="hidden" name="confirm" value="yes" checked="checked" />
      <?=form_hidden('id',$user->id)?>
      <?=form_hidden($csrf)?>
      <div class="row">
        <div class="small-12 columns">
          <?=form_submit('submit','Yes','class="button radius"')?>
          <?=anchor('/admin/auth','No','class="button secondary radius"')?>
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
