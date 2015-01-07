<div class="banner">
  <h2>Executive Board</h2>
  <h3>Our Current Chapter Leadership</h3>
</div>
</header>
<section class="main">

<div class="container">
<div class="row">
  <?php if (count($eboard->result()) == 0): ?>
    <div class="eboard-placeholder">No members in current eboard.</div>
    <br />
  <?php else: ?>
    <?php $count = 0; ?>
    <?php foreach ($eboard->result() as $member): ?>
      <div class="small-12 medium-6 columns">
        <ul class="eboard-card">
          <li class="pic"><img src="<?=base_url().$member->pic?>" width="200"/></li>
          <li class="position"><?=$member->position?></li>
          <li class="name"><?=$member->name?></li>
          <li class="major"><?=$member->major?></li>
          <li class="year">Class of <?=$member->grad_year?></li>
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
