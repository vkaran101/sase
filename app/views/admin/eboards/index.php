<div class="banner text-left">
  <div class="row">
    <div class="small-12 columns">
      <h3>Manage Eboards</h3>
      <p>
        Click on name to view more information about eboard member,
        and to access actions like Edit and Delete.
      </p>
      <i class="fa fa-fw fa-plus-square"></i>
      <a href="<?=base_url()?>admin/eboards/create">add new eboard member</a>
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
        <a href="<?=base_url().'admin/eboards/index/'.$pair->semester.'/'.$pair->year?>">
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
    <?php if ($eboards->num_rows() == 0): ?>
      <div class="placeholder">No eboard members found.</div>
    <?php else: ?>
      <div class="overflow">
        <table>
          <thead>
            <tr>
              <?php foreach ($eboards->list_fields() as $col): ?>
                <?php if($col == 'id'): ?>
                  <th>rank</th>
                <?php elseif ($col == 'rank' || $col == 'pic'): #do nothing ?>
                <?php elseif ($col == 'semester' || $col == 'year'): #do nothing ?>
                <?php elseif ($col == 'created' || $col == 'updated'): #do nothing ?>
                <?php else: ?>
                  <th><?=$col?></th>
                <?php endif; ?>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($eboards->result() as $member): ?>
              <tr>
                <td><?=$member->rank?></td>
                <td>
                  <a href="<?=base_url()?>admin/eboards/show/<?=$member->id?>">
                    <?=$member->name?>
                  </a>
                </td>
                <td><?=$member->position?></td>
                <td><?=$member->major?></td>
                <td><?=$member->grad_year?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <p>Total <?=$eboards->num_rows()?> entries</p>
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
          <a href="<?=base_url().'admin/eboards/index/'.$pair->semester.'/'.$pair->year?>">
            <?=ucfirst($pair->semester).' '.$pair->year?>
          </a>
        <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>
