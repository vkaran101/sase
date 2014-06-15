<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title><?=$title?></title>
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css" />
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
</head>
<body>
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="<?=base_url()?>">Northeastern SASE</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <ul class="right">
      <li><a href="<?=base_url()?>">Home</a></li>
      <li><a href="<?=base_url()?>events">Events</a></li>
      <li><a href="<?=base_url()?>programs">Programs</a></li>
      <li class="has-dropdown"><a href="<?=base_url()?>about">About</a>
        <ul class="dropdown">
          <li><a href="<?=base_url()?>about/eboard">Executive Board</a></li>
          <li><a href="<?=base_url()?>about/sponsors">Sponsors</a></li>
        </ul>
      </li>
      <li><a href="<?=base_url()?>contact">Contact</a></li>
    </ul>
  </section>
</nav>
