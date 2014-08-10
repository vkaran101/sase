<div class="banner">
<div class="row">
  <div class="small-12 medium-10 medium-centered columns">
    <h2>Events</h2>
    <h4 class="subheader">Find upcoming events, meetings, and community service.</h4>
  </div>
</div>
</div>

<div class="row">
  <div class="small-12 medium-6 columns">
    <ul class="events-table">
      <li class="title">Upcoming</li>
      <?php if ($upcoming->num_rows() == 0): ?>
        <li class="entry">
          <div class="event-placeholder">No events planned yet. Check back soon!</div>
        </li>
      <?php else: ?>
        <?php foreach ($upcoming->result() as $entry): ?>
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
  <div class="small-12 medium-6 columns">
    <div class="row">
      <div class="small-12 columns">
        <ul class="events-table">
          <li class="title">General Meetings</li>
          <?php if ($meetings->num_rows() == 0): ?>
            <li class="entry">
              <div class="event-placeholder">No general meetings planned yet. Check back soon!</div>
            </li>
          <?php else: ?>
            <?php foreach ($meetings->result() as $entry): ?>
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
    <div class="row">
      <div class="small-12 columns">
        <ul class="events-table">
          <li class="title">Community Service</li>
          <?php if ($services->num_rows() == 0): ?>
            <li class="entry">
              <div class="event-placeholder">No community services planned yet. Check back soon!</div>
            </li>
          <?php else: ?>
            <?php foreach ($services->result() as $entry): ?>
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
  </div>
</div>

<div class="bottom-banner">
<div class="row">
  <div class="small-12 medium-10 medium-centered columns">
    <div class="small-12 medium-7 columns text-center">
      <p>Check out our past events to see what we have done!</p>
    </div>
    <div class="small-12 medium-5 columns text-center">
      <a href="<?=base_url()?>events/past" class="button radius">Past Events</a>
    </div>
  </div>
</div>
</div>
