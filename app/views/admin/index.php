<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?=$title?> - NUSASE Admin</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css" />
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
  <script src="<?=base_url()?>public/js/jquery.min.js"></script>
</head>
<body>

<div class="row">
  <div class="small-12 columns">
    <h1><a href="<?=base_url()?>admin">Admin Dashboard</a></h1>
    <hr />
  </div>
</div>
<div class="row">
  <div class="small-12 columns clearfix">
    <a href="<?=base_url()?>">view site</a>
    <p class="right">
      <i class="fa fa-fw fa-user"></i>
      <?=$user->username?> | <a href="<?=base_url()?>admin/auth/logout">Logout</a>
    </p>
    <hr/>
  </div>
</div>
<div class="row">
  <div class="small-12 columns">
    <h3>Settings</h3>
    <p>Current Semester: <?=ucfirst($current_semester).' '.$current_year?></p>
    <?=$semester_change_errors?>
    <a data-reveal-id="semester-modal" class="button radius small">Change Semester</a>
    <button class="button radius small" id="migrate">Migrate Database</button>
    <hr/>
  </div>
</div>
<div class="row">
  <div class="small-12 columns">
    <h3>Manage</h3>
    <a href="<?=base_url()?>admin/events" class="button radius small">Events</a>
    <a href="<?=base_url()?>admin/eboards" class="button radius small">Eboards</a>
  </div>
</div>

<div id="semester-modal" class="reveal-modal medium" data-reveal>
  <div class="row">
    <div class="small-12 medium-8 medium-centered large-6 columns">
      <?=form_open('admin/manager/change_current_semester')?>
        <h2>Change Semester</h2>
        <label>Semester
          <select name="semester">
            <option
              <?php if ($current_semester == 'fall'): ?>
                selected
              <?php endif; ?>
              value="fall">Fall
            </option>
            <option
              <?php if ($current_semester == 'spring'): ?>
                selected
              <?php endif; ?>
              value="spring">Spring
            </option>
            <option
              <?php if ($current_semester == 'summer1'): ?>
                selected
              <?php endif; ?>
              value="summer1">Summer 1
            </option>
            <option
              <?php if ($current_semester == 'summer2'): ?>
                selected
              <?php endif; ?>
              value="summer2">Summer 2
            </option>
          </select>
        </label>
        <label>Year
          <input type="text" name="year" placeholder="YYYY"/>
        </label>
        <hr/>
        <input type="submit" value="Submit" class="button radius"/>
      <?=form_close()?>
    </div>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>

<script>
  $('#migrate').click(function() {
    var response = confirm('Migrate the database to latest version?');
    if (response) {
      window.location.href = '<?=base_url()?>admin/migrate';
    }
  });
</script>

<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>

</body>
</html>
