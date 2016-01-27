<div class="banner">
  <h2>Executive Board</h2>
  <h3>Our Current Chapter Leadership</h3>
</div>
</header>
<section class="main">

<div class="container">
<div class="row">
  <?php if (count($eboard->result()) == 0): ?>
    <div class="small-12 medium-8 medium-centered columns">
      <div class="placeholder">No members in current eboard.</div>
    </div>
  <?php else: ?>
    <?php if (count($eboard->result()) == 1): ?>
      <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1">
    <?php elseif (count($eboard->result()) == 2): ?>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
    <?php else: ?>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
    <?php endif; ?>
    <?php foreach ($eboard->result() as $member): ?>
      <li>
        <ul class="eboard-card">
          <img class="img-circle" src="<?=base_url().$member->pic?>" width="200"/>
          <li class="position"><?=$member->position?></li>
          <li class="name"><?=$member->name?></li>
          <li class="major"><?=$member->major?></li>
          <li class="year">Class of <?=$member->grad_year?></li>
        </ul>
      </li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>
</div>
