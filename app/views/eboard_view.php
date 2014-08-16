<div class="banner">
  <div class="row">
    <div class="small-12 medium-10 medium-centered columns">
      <h2>Executive Board</h2>
      <h4 class="subheader">Current Executive Board members.</h4>
    </div>
  </div>
</div>

<div class="row">
  <?php if (count($eboard) == 0): ?>
    <div class="eboard-placeholder">No members in current eboard.</div>
    <br />
  <?php else: ?>
    <?php $count = 0; ?>
    <?php foreach ($eboard as $member): ?>
      <div class="small-12 medium-6 columns">
        <ul class="eboard-table">
          <li class="position"><?=$member->position?></li>
          <li class="pic"><img src="<?=base_url()?>public/img/eboard/<?=$member->position?>.png" /></li>
          <li class="name"><?=$member->name?></li>
          <li class="item"><?=$member->major?> | Class of <?=$member->grad_year?></li>
          <li class="bio"><?=$member->bio?></li>
        </ul>
      </div>
      <?php $count++; ?>
      <?php if ($count % 2 == 0): ?>
        </div><!-- close row -->
        <div class="row">
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
