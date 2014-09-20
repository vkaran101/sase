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
    <?=form_open('admin/events/'.$action)?>
      <div class="row">
        <div class="small-12 columns">
          <label>Title
            <input type="text" name="title"
              <?php if (isset($entry->title)): ?>
                value="<?=$entry->title?>"
              <?php else: ?>
                value="<?=set_value('title')?>"
              <?php endif; ?>
            />
          </label>
          <?=form_error('title')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <label>Date</label>
          <div class="row collapse">
            <div class="small-3 columns">
              <input type="text" name="date_month" placeholder="MM"
                <?php if (isset($entry->date_month)): ?>
                  value="<?=$entry->date_month?>"
                <?php else: ?>
                  value="<?=set_value('date_month')?>"
                <?php endif; ?>
              />
            </div>
            <div class="small-1 columns"><span class="midfix">/</span></div>
            <div class="small-3 columns">
              <input type="text" name="date_day" placeholder="DD"
                <?php if (isset($entry->date_day)): ?>
                  value="<?=$entry->date_day?>"
                <?php else: ?>
                  value="<?=set_value('date_day')?>"
                <?php endif; ?>
              />
            </div>
            <div class="small-1 columns"><span class="midfix">/</span></div>
            <div class="small-4 columns">
              <input type="text" name="date_year" placeholder="YYYY"
                <?php if (isset($entry->date_year)): ?>
                  value="<?=$entry->date_year?>"
                <?php else: ?>
                  value="<?=set_value('date_year')?>"
                <?php endif; ?>
              />
            </div>
          </div>
          <?=form_error('date_month')?><?=form_error('date_day')?><?=form_error('date_year')?>
        </div>
        <div class="small-12 medium-6 columns">
          <label>Time (not required)</label>
          <div class="row collapse">
            <div class="small-3 columns">
              <input type="text" name="time_hour" placeholder="HH"
                <?php if (isset($entry->time_hour)): ?>
                  value="<?=$entry->time_hour?>"
                <?php else: ?>
                  value="<?=set_value('time_hour')?>"
                <?php endif; ?>
              />
            </div>
            <div class="small-1 columns"><span class="midfix">:</span></div>
            <div class="small-3 columns">
              <input type="text" name="time_minute" placeholder="MM"
                <?php if (isset($entry->time_minute)): ?>
                  value="<?=$entry->time_minute?>"
                <?php else: ?>
                  value="<?=set_value('time_minute')?>"
                <?php endif; ?>
              />
            </div>
            <div class="small-5 columns">
              <select name="time_oclock" class="postfix">
                <option
                  <?php if (isset($entry->time_oclock_am)): ?>
                    <?=$entry->time_oclock_am?>
                  <?php else: ?>
                    <?=set_select('time_oclock','am')?>
                  <?php endif; ?>
                  value="am">AM
                </option>
                <option
                  <?php if (isset($entry->time_oclock_pm)): ?>
                    <?=$entry->time_oclock_pm?>
                  <?php else: ?>
                    <?=set_select('time_oclock','pm',TRUE)?>
                  <?php endif; ?>
                  value="pm">PM
                </option>
              </select>
            </div>
          </div>
          <?=form_error('time_hour')?><?=form_error('time_minute')?><?=form_error('time_oclock')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>Location
            <input type="text" name="location" placeholder="i.e. 410 Ell Hall"
              <?php if (isset($entry->location)): ?>
                value="<?=$entry->location?>"
              <?php else: ?>
                value="<?=set_value('location')?>"
              <?php endif; ?>
            />
          </label>
          <?=form_error('location')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>Description
            <?php if (isset($entry->description)): ?>
              <textarea name="description" rows="5"><?=$entry->description?></textarea>
            <?php else: ?>
              <textarea name="description" rows="5"><?=set_value('description')?></textarea>
            <?php endif; ?>
          </label>
          <?=form_error('description')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <label>Semester
            <select name="semester">
              <option
                <?php if (isset($entry->semester_fall)): ?>
                  <?=$entry->semester_fall?>
                <?php else: ?>
                  <?=set_select('semester','fall',TRUE)?>
                <?php endif; ?>
                value="fall">Fall
              </option>
              <option
                <?php if (isset($entry->semester_spring)): ?>
                  <?=$entry->semester_spring?>
                <?php else: ?>
                  <?=set_select('semester','spring')?>
                <?php endif; ?>
                value="spring">Spring
              </option>
              <option
                <?php if (isset($entry->semester_summer1)): ?>
                  <?=$entry->semester_summer1?>
                <?php else: ?>
                  <?=set_select('semester','summer1')?>
                <?php endif; ?>
                value="summer1">Summer 1
              </option>
              <option
                <?php if (isset($entry->semester_summer2)): ?>
                  <?=$entry->semester_summer2?>
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
              <?php if (isset($entry->year)): ?>
                value="<?=$entry->year?>"
              <?php else: ?>
                value="<?=set_value('year')?>"
              <?php endif; ?>
            />
          </label>
          <?=form_error('year')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <input type="checkbox" value="meeting" id="meeting" name="meeting"
            <?php if (isset($entry->meeting_checkbox)): ?>
              <?=$entry->meeting_checkbox?>
            <?php else: ?>
              <?=set_checkbox('meeting','meeting',FALSE)?>
            <?php endif; ?>
          />
          <label for="meeting">general meeting</label>
          <br />
          <input type="checkbox" value="service" id="service" name="service"
            <?php if (isset($entry->service_checkbox)): ?>
              <?=$entry->service_checkbox?>
            <?php else: ?>
              <?=set_checkbox('service','service',FALSE)?>
            <?php endif; ?>
          />
          <label for="service">community service</label>
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
