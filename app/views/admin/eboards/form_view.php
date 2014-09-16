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
    <h4><?=$title?></h4>
    <?=form_open('admin/eboards/'.$action)?>
      <div class="row">
        <div class="small-12 columns">
          <label>Name
            <input type="text" name="name"
              <?php if (isset($member->name)): ?>
                value="<?=$member->name?>"
              <?php else: ?>
                value="<?=set_value('name')?>"
              <?php endif; ?>
            />
          </label>
          <?=form_error('name')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>Position
            <input type="text" name="position"
              <?php if (isset($member->position)): ?>
                value="<?=$member->position?>"
              <?php else: ?>
                value="<?=set_value('position')?>"
              <?php endif; ?>
            />
          </label>
          <?=form_error('position')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <label>Major
            <input type="text" name="major"
              <?php if (isset($member->major)): ?>
                value="<?=$member->major?>"
              <?php else: ?>
                value="<?=set_value('major')?>"
              <?php endif; ?>
            />
          </label>
          <?=form_error('major')?>
        </div>
        <div class="small-12 medium-6 columns">
          <label>Graduation Year
            <input type="text" name="grad_year" placeholder="YYYY"
              <?php if (isset($member->grad_year)): ?>
                value="<?=$member->grad_year?>"
              <?php else: ?>
                value="<?=set_value('grad_year')?>"
              <?php endif; ?>
            />
          </label>
          <?=form_error('grad_year')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>Bio
            <?php if (isset($member->bio)): ?>
              <textarea name="bio" rows="5"><?=$member->bio?></textarea>
            <?php else: ?>
              <textarea name="bio" rows="5"><?=set_value('bio')?></textarea>
            <?php endif; ?>
          </label>
          <?=form_error('bio')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <label>Semester
            <select name="semester">
              <option
                <?php if (isset($member->semester_fall)): ?>
                  <?=$member->semester_fall?>
                <?php else: ?>
                  <?=set_select('semester','fall',TRUE)?>
                <?php endif; ?>
                value="fall">Fall
              </option>
              <option
                <?php if (isset($member->semester_spring)): ?>
                  <?=$member->semester_spring?>
                <?php else: ?>
                  <?=set_select('semester','spring')?>
                <?php endif; ?>
                value="spring">Spring
              </option>
              <option
                <?php if (isset($member->semester_summer1)): ?>
                  <?=$member->semester_summer1?>
                <?php else: ?>
                  <?=set_select('semester','summer1')?>
                <?php endif; ?>
                value="summer1">Summer 1
              </option>
              <option
                <?php if (isset($member->semester_summer2)): ?>
                  <?=$member->semester_summer2?>
                <?php else: ?>
                  <?=set_select('semester','summer2')?>
                <?php endif; ?>
                value="summer2">Summer 2
              </option>
            </select>
          </label>
          <?=form_error('semester')?>
        </div>
        <div class="small-12 medium-6 columns">
          <label>Year
            <input type="text" name="year" placeholder="YYYY"
              <?php if (isset($member->year)): ?>
                value="<?=$member->year?>"
              <?php else: ?>
                value="<?=set_value('year')?>"
              <?php endif; ?>
            />
          </label>
          <?=form_error('year')?>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="small-12 columns">
          <input type="submit" value="Submit" class="button radius" />
          <a href="<?=$cancel_action?>" class="button radius secondary">Cancel</a>
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
