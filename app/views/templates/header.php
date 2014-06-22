<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title><?=$title?></title>
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css" />
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
</head>
<body>

<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">
  <div class="row">
    <div class="small-10 small-centered medium-uncentered large-uncentered medium-4 columns">
      <a href="<?=base_url()?>"><img src="<?=base_url()?>public/img/sase.png"></a>
    </div>
    <div class="hide-for-small medium-8 columns">
      <nav class="top-bar" data-topbar>
      <section class="top-bar-section">
        <ul class="right">
          <li class="<?=active_nav('home')?>"><a href="<?=base_url()?>">Home</a></li>
          <li class="<?=active_nav('events')?>"><a href="<?=base_url()?>events">Events</a></li>
          <li class="<?=active_nav('programs')?>"><a href="<?=base_url()?>programs">Programs</a></li>
          <li class="has-dropdown <?=active_nav('about')?> <?=active_nav('eboard')?>
          <?=active_nav('sponsors')?>"><a href="<?=base_url()?>about">About</a>
            <ul class="dropdown">
              <li><a href="<?=base_url()?>eboard">Executive Board</a></li>
              <li><a href="<?=base_url()?>sponsors">Sponsors</a></li>
            </ul>
          </li>
          <li class="<?=active_nav('contact')?>"><a href="<?=base_url()?>contact">Contact</a></li>
        </ul>
      </section>
      </nav>
    </div>
  </div><!-- end div.row -->

  <nav class="tab-bar show-for-small">
    <section class="left-small">
      <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
    </section>
  </nav>

  <aside class="left-off-canvas-menu">
    <ul class="off-canvas-list">
      <li><label>Northeastern SASE</label></li>
      <li class="<?=active_nav('home')?>"><a href="<?=base_url()?>">Home</a></li>
      <li class="<?=active_nav('events')?>"><a href="<?=base_url()?>events">Events</a></li>
      <li class="<?=active_nav('programs')?>"><a href="<?=base_url()?>programs">Programs</a></li>
      <li class="<?=active_nav('about')?>"><a href="<?=base_url()?>about">About</a></li>
      <li class="subnav <?=active_nav('eboard')?>"><a href="<?=base_url()?>eboard">Executive Board</a></li>
      <li class="subnav <?=active_nav('sponsors')?>"><a href="<?=base_url()?>sponsors">Sponsors</a></li>
      <li class="<?=active_nav('contact')?>"><a href="<?=base_url()?>contact">Contact</a></li>
    </ul>
  </aside>
  <a class="exit-off-canvas"></a>
  <section class="main">
<!-- end header -->
