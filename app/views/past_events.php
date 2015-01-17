<div class="banner">
  <h2>Past Events</h2>
  <h3>Browse Past Events, Meetings, and Community Services</h3>
</div>
</header>
<section class="main">

<div class="banner text-left">
  <div class="row">
    <div class="small-12 medium-4 columns hide-for-small-only">
      <h3>Semesters</h3>
      <?php if ($semester_list->num_rows() == 0): ?>
        <div class="placeholder">No semesters available to be selected.</div>
      <?php else: ?>
        <ul class="side-label-nav">
        <?php foreach ($semester_list->result() as $pair): ?>
          <?php if (($pair->semester == $semester) && ($pair->year == $year)): ?>
            <li class="active">
          <?php else: ?>
            <li>
          <?php endif; ?>
          <a href="<?=base_url().'events/past/'.$pair->semester.'/'.$pair->year?>">
            <?=ucfirst($pair->semester).' '.$pair->year?>
          </a>
        <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
    <div class="small-12 medium-8 columns">
      <h3 class="clearfix">
        <?=ucfirst($semester).' '.$year?>
        <a data-reveal-id="semester-list" class="button btn-secondary radius tiny right show-for-small-only">
          Select
        </a>
      </h3>
      <hr/>
      <?php if ($events->num_rows() == 0): ?>
        <div class="placeholder">No past events found.</div>
      <?php else: ?>
        <?php foreach ($events->result() as $entry): ?>
          <ul class="event-card">
            <li class="title"><?=$entry->title?></li>
            <li class="info">
              <i class="fa fa-fw fa-calendar-o"></i>
              <span><?=date('n/j/Y', strtotime($entry->date))?></span>
              <?php if (!$entry->all_day): ?>
                <i class="fa fa-fw fa-clock-o"></i>
                <span><?=date('g:i a', strtotime($entry->time))?></span>
              <?php endif; ?>
              <i class="fa fa-fw fa-map-marker"></i>
              <span><?=$entry->location?></span>
            </li>
            <li class="description"><?=$entry->description?></li>
          </ul>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div id="semester-list" class="reveal-modal" data-reveal>
  <div class="row">
    <div class="small-12 columns">
      <h3>Select Semester</h3>
      <?php if ($semester_list->num_rows() == 0): ?>
        <div class="placeholder">No semesters available to be selected.</div>
      <?php else: ?>
        <ul class="side-label-nav">
        <?php foreach ($semester_list->result() as $pair): ?>
          <?php if (($pair->semester == $semester) && ($pair->year == $year)): ?>
            <li class="active">
          <?php else: ?>
            <li>
          <?php endif; ?>
          <a href="<?=base_url().'events/past/'.$pair->semester.'/'.$pair->year?>">
            <?=ucfirst($pair->semester).' '.$pair->year?>
          </a>
        <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>
