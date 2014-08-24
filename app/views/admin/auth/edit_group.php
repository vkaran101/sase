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
    <?=form_open('admin/auth/edit_group/'.$group->id)?>
      <div class="row">
        <div class="small-12 columns">
          <label>Group Name:
            <input type="text" name="group_name" id="group_name"
              value="<?=set_value('group_name',$group->name)?>"
            />
          </label>
          <?=form_error('group_name')?>
        </div>
        <div class="small-12 columns">
          <label>Description:
            <input type="text" name="group_description" id="group_description"
              value="<?=set_value('group_description',$group->description)?>"
            />
          </label>
          <?=form_error('group_description')?>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="small-12 columns">
          <?=form_submit('submit','Save','class="button radius"')?>
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
