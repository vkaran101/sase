<div class="section">
  <div class="row">
    <div class="small-12 medium-8 medium-centered columns">
      <h4><?=$title?></h4>
      <p>* required field</p>

      <?=form_open('admin/events/'.$action)?>
        <label>Title *
          <input type="text" name="title"
            <?php if (isset($entry->title)): ?>
              value="<?=$entry->title?>"
            <?php else: ?>
              value="<?=set_value('title')?>"
            <?php endif; ?>
          />
        </label>
        <?=form_error('title')?>

        <div class="row">
          <div class="small-12 medium-6 columns">
            <label>Date *</label>
            <div class="row collapse">
              <div class="small-3 columns">
                <input type="text" name="date_month" placeholder="MM"
                  <?php if (isset($entry->date)): ?>
                    value="<?=date('m', strtotime($entry->date))?>"
                  <?php else: ?>
                    value="<?=set_value('date_month')?>"
                  <?php endif; ?>
                />
              </div>
              <div class="small-1 columns"><span class="midfix">/</span></div>
              <div class="small-3 columns">
                <input type="text" name="date_day" placeholder="DD"
                  <?php if (isset($entry->date)): ?>
                    value="<?=date('d', strtotime($entry->date))?>"
                  <?php else: ?>
                    value="<?=set_value('date_day')?>"
                  <?php endif; ?>
                />
              </div>
              <div class="small-1 columns"><span class="midfix">/</span></div>
              <div class="small-4 columns">
                <input type="text" name="date_year" placeholder="YYYY"
                  <?php if (isset($entry->date)): ?>
                    value="<?=date('Y', strtotime($entry->date))?>"
                  <?php else: ?>
                    value="<?=set_value('date_year')?>"
                  <?php endif; ?>
                />
              </div>
            </div>
            <?=form_error('date_month')?><?=form_error('date_day')?><?=form_error('date_year')?>
          </div>
          <div class="small-12 medium-6 columns">
            <label class="clearfix">Time *
              <span class="right">
                <input type="checkbox" name="all_day" value="1"
                  <?php if (isset($entry->all_day) && $entry->all_day == 1): ?>
                    checked
                  <?php else: ?>
                    <?=set_checkbox('all_day','1',FALSE)?>
                  <?php endif; ?>
                />
                <label for="all_day">All day</label>
              </span>
            </label>
            <div class="row collapse">
              <div class="small-3 columns">
                <input type="text" name="time_hour" placeholder="HH"
                  <?php if (isset($entry->time)): ?>
                    value="<?=date('h', strtotime($entry->time))?>"
                  <?php else: ?>
                    value="<?=set_value('time_hour')?>"
                  <?php endif; ?>
                />
              </div>
              <div class="small-1 columns"><span class="midfix">:</span></div>
              <div class="small-3 columns">
                <input type="text" name="time_minute" placeholder="MM"
                  <?php if (isset($entry->time)): ?>
                    value="<?=date('i', strtotime($entry->time))?>"
                  <?php else: ?>
                    value="<?=set_value('time_minute')?>"
                  <?php endif; ?>
                />
              </div>
              <div class="small-5 columns">
                <select name="time_oclock" class="postfix">
                  <option
                    <?php if (isset($entry->time) && date('a', strtotime($entry->time)) == 'am'): ?>
                      selected
                    <?php else: ?>
                      <?=set_select('time_oclock','am')?>
                    <?php endif; ?>
                    value="am">AM
                  </option>
                  <option
                    <?php if (isset($entry->time) && date('a', strtotime($entry->time)) == 'pm'): ?>
                      selected
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

        <label>Location *
          <input type="text" name="location" placeholder="i.e. 410 Ell Hall"
            <?php if (isset($entry->location)): ?>
              value="<?=$entry->location?>"
            <?php else: ?>
              value="<?=set_value('location')?>"
            <?php endif; ?>
          />
        </label>
        <?=form_error('location')?>

        <label>Description *
          <?php if (isset($entry->description)): ?>
            <textarea name="description" rows="5"><?=$entry->description?></textarea>
          <?php else: ?>
            <textarea name="description" rows="5"><?=set_value('description')?></textarea>
          <?php endif; ?>
        </label>
        <?=form_error('description')?>

        <div class="row">
          <div class="small-12 medium-6 columns">
            <label>Semester *
              <select name="semester">
                <option
                  <?php if (isset($entry->semester) && $entry->semester == 'fall'): ?>
                    selected
                  <?php else: ?>
                    <?=set_select('semester','fall',TRUE)?>
                  <?php endif; ?>
                  value="fall">Fall
                </option>
                <option
                  <?php if (isset($entry->semester) && $entry->semester == 'spring'): ?>
                    selected
                  <?php else: ?>
                    <?=set_select('semester','spring')?>
                  <?php endif; ?>
                  value="spring">Spring
                </option>
                <option
                  <?php if (isset($entry->semester) && $entry->semester == 'summer1'): ?>
                    selected
                  <?php else: ?>
                    <?=set_select('semester','summer1')?>
                  <?php endif; ?>
                  value="summer1">Summer 1
                </option>
                <option
                  <?php if (isset($entry->semester) && $entry->semester == 'summer2'): ?>
                    selected
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
            <label>Year *
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
            <label>Event Type</label>
            <input type="radio" name="type" id="event" value="event"
              <?php if (isset($entry->type) && $entry->type == 'event'): ?>
                checked
              <?php else: ?>
                <?=set_radio('type','event',TRUE)?>
              <?php endif; ?>
            /><label for="event">event</label>
            <input type="radio" name="type" id="meeting" value="meeting"
              <?php if (isset($entry->type) && $entry->type == 'meeting'): ?>
                checked
              <?php else: ?>
                <?=set_radio('type','meeting')?>
              <?php endif; ?>
            /><label for="meeting">meeting</label>
            <input type="radio" name="type" id="service" value="service"
              <?php if (isset($entry->type) && $entry->type == 'service'): ?>
                checked
              <?php else: ?>
                <?=set_radio('type','service')?>
              <?php endif; ?>
            /><label for="service">service</label>
          </div>
        </div>

        <hr />
        <input type="submit" value="Submit" class="button btn-outline radius small"/>
        <a href="<?=$cancel_action?>" class="button btn-secondary radius small">Cancel</a>
      <?=form_close()?>

    </div>
  </div>
</div>

<script>
  function update_all_day_checkbox() {
    var state = false;
    if ($('input[name="all_day"]').prop('checked')) {
      state = true;
    }

    $('input[name="time_hour"]').prop('disabled', state);
    $('input[name="time_minute"]').prop('disabled', state);
    $('select[name="time_oclock"]').prop('disabled', state);
  }

  $(document).ready(function() {
    update_all_day_checkbox();
    var box = $('input[name="all_day"]');
    box.css('margin-bottom', 0);
    box.change(function() {
      update_all_day_checkbox();
    });
  });
</script>
