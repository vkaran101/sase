<div class="banner">
<div class="row">
  <div class="small-12 medium-10 medium-centered columns">
    <h2>Past Events</h2>
    <h4 class="subheader">Browse past events, meetings, and community services.</h4>
  </div>
</div>
</div>

<div class="row show-for-small-only">
  <div class="small-12 columns">
    <dl class="accordion" data-accordion>
      <dd class="accordion-navigation">
        <a href="#selector">View semester<i class="fa fa-fw fa-caret-down right"></i></a>
        <div id="selector" class="content">
          <ul class="side-nav">
            <?php if ($semester_list->num_rows() == 0): ?>
              <li>No semesters available to be selected.</li>
            <?php else: ?>
              <?php foreach ($semester_list->result() as $pair): ?>
                <?php if (($pair->semester == $semester) && ($pair->year == $year)): ?>
                  <li class="active">
                <?php else: ?>
                  <li>
                <?php endif; ?>
                <a href="<?=base_url().'events/past/'.$pair->year.'/'.$pair->semester?>">
                  <?=ucfirst($pair->semester).' '.$pair->year?>
                </a>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
          <hr />
        </div>
      </dd>
    </dl>
    <br />
  </div>
</div>

<div class="row">
  <div class="small-12 medium-4 columns hide-for-small-only">
    <ul class="events-table">
      <li class="title">View Semester:</li>
      <li class="entry">
        <ul class="side-nav">
          <?php if ($semester_list->num_rows() == 0): ?>
            <div class="event-placeholder">No semesters available to be selected.</div>
          <?php else: ?>
            <?php foreach ($semester_list->result() as $pair): ?>
              <?php if (($pair->semester == $semester) && ($pair->year == $year)): ?>
                <li class="active">
              <?php else: ?>
                <li>
              <?php endif; ?>
              <a href="<?=base_url().'events/past/'.$pair->year.'/'.$pair->semester?>">
                <?=ucfirst($pair->semester).' '.$pair->year?>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </li>
    </ul>
  </div>
  <div class="small-12 medium-8 columns">
    <ul class="events-table">
      <li class="title"><?=ucfirst($semester).' '.$year?></li>
      <?php if ($query->num_rows() == 0): ?>
        <li class="entry">
          <div class="event-placeholder">No past events found.</div>
        </li>
      <?php else: ?>
        <?php foreach ($query->result() as $entry): ?>
          <li class="entry">
            <h4><?=$entry->title?></h4>
            <div class="event-info">
              <i class="fa fa-fw fa-calendar-o"></i><span><?=date('n/j/y',strtotime($entry->date))?></span>
              <i class="fa fa-fw fa-clock-o"></i><span><?=date('g:i a',strtotime($entry->time))?></span>
              <i class="fa fa-fw fa-map-marker"></i><span><?=$entry->location?></span>
            </div>
            <p><?=$entry->description?></p>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
