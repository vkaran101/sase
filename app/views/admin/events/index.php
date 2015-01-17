<div class="section">
  <div class="row">
    <div class="small-12 columns">
      <h3>Manage Events</h3>
      <p>
        Click on event title to view more information about event,
        and to access actions like Edit and Delete.
      </p>
      <i class="fa fa-fw fa-plus-square"></i>
      <a href="<?=base_url()?>admin/events/create">create new event</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="small-12 medium-3 columns hide-for-small-only">
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
        <a href="<?=base_url().'admin/events/index/'.$pair->semester.'/'.$pair->year?>">
          <?=ucfirst($pair->semester).' '.$pair->year?>
        </a>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  <div class="small-12 medium-9 columns">
    <h3 class="clearfix">
      <?=ucfirst($semester).' '.$year?>
      <a data-reveal-id="semester-list" class="button btn-secondary radius tiny right show-for-small-only">
        Select
      </a>
    </h3>
    <hr/>
    <?php if ($events->num_rows() == 0): ?>
      <div class="placeholder">No events found.</div>
    <?php else: ?>
      <div class="overflow">
        <table>
          <thead>
            <tr>
              <?php foreach ($events->list_fields() as $col): ?>
                <?php if ($col == 'id' || $col == 'all_day'): #do nothing ?>
                <?php elseif ($col == 'semester' || $col == 'year'): #do nothing ?>
                <?php elseif ($col == 'created' || $col == 'updated'): #do nothing ?>
                <?php else: ?>
                  <th><?=$col?></th>
                <?php endif; ?>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($events->result() as $entry): ?>
              <tr>
                <td>
                  <a href="<?=base_url()?>admin/events/show/<?=$entry->id?>">
                    <?=$entry->title?>
                  </a>
                </td>
                <td><?=date('n/j/y', strtotime($entry->date))?></td>
                <td>
                  <?php if ($entry->all_day): ?>
                    All day
                  <?php else: ?>
                    <?=date('g:ia', strtotime($entry->time))?>
                  <?php endif; ?>
                </td>
                <td>
                  <?php if (strlen($entry->location) > 15): ?>
                    <?=substr($entry->location,0,15).' ...'?>
                  <?php else: ?>
                    <?=$entry->location?>
                  <?php endif; ?>
                </td>
                <td>
                  <?php if (strlen($entry->description) > 20): ?>
                    <?=substr($entry->description,0,20).' ...'?>
                  <?php else: ?>
                    <?=$entry->description?>
                  <?php endif; ?>
                </td>
                <td><?=$entry->type?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <p>Total <?=$events->num_rows()?> entries</p>
    <?php endif; ?>
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
          <a href="<?=base_url().'admin/events/index/'.$pair->semester.'/'.$pair->year?>">
            <?=ucfirst($pair->semester).' '.$pair->year?>
          </a>
        <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>
