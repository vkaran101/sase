<div class="banner">
  <h2>Events</h2>
  <h3>Find Upcoming Events, Meetings, and Community Services</h3>
</div>
</header>
<section class="main">

<div class="banner" id="upcoming">
  <h3>Upcoming Events</h3>
</div>
<div class="row banner">
  <?php if ($upcoming->num_rows() == 0): ?>
    <div class="small-12 medium-8 medium-centered columns">
      <div class="placeholder">No events planned yet. Check back soon!</div>
    </div>
  <?php else: ?>
    <?php if ($upcoming->num_rows() == 1): ?>
      <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1">
    <?php elseif ($upcoming->num_rows() == 2): ?>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
    <?php else: ?>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
    <?php endif; ?>
    <?php foreach ($upcoming->result() as $entry): ?>
      <li>
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
      </li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>

<div class="banner" id="meeting">
  <h3>General Meetings</h3>
</div>
<div class="row banner">
  <?php if ($meetings->num_rows() == 0): ?>
    <div class="small-12 medium-8 medium-centered columns">
      <div class="placeholder">No general meetings planned yet. Check back soon!</div>
    </div>
  <?php else: ?>
    <?php if ($meetings->num_rows() == 1): ?>
      <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1">
    <?php elseif ($meetings->num_rows() == 2): ?>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
    <?php else: ?>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
    <?php endif; ?>
    <?php foreach ($meetings->result() as $entry): ?>
      <li>
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
      </li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>

<div class="banner" id="service">
  <h3>Community Service</h3>
</div>
<div class="row banner">
  <?php if ($services->num_rows() == 0): ?>
    <div class="small-12 medium-8 medium-centered columns">
      <div class="placeholder">No community services planned yet. Check back soon!</div>
    </div>
  <?php else: ?>
    <?php if ($services->num_rows() == 1): ?>
      <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1">
    <?php elseif ($services->num_rows() == 2): ?>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
    <?php else: ?>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
    <?php endif; ?>
    <?php foreach ($services->result() as $entry): ?>
      <li>
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
      </li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>

<div class="bottom-banner">
  <div class="row">
    <div class="small-12 medium-10 medium-centered columns">
      <div class="small-12 medium-7 columns text-center">
        <p>Check out our past events to see what we have done!</p>
      </div>
      <div class="small-12 medium-5 columns text-center">
        <a href="<?=base_url()?>events/past" class="button btn-outline radius">Past Events</a>
      </div>
    </div>
  </div>
</div>
