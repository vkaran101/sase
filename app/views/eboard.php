<div class="banner">
  <h2>Executive Board</h2>
  <h3>Our Current Chapter Leadership</h3>
</div>
</header>
<section class="main">

<div class="container">
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
          <li class="pic">
            <img src="<?=base_url()?>public/img/eboard/<?=$member->position?>.png"
              width="200"
            />
          </li>
          <li class="name"><?=$member->name?></li>
          <li class="item"><?=$member->major?> &mdash; Class of <?=$member->grad_year?></li>
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
</div>
