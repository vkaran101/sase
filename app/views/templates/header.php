<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>        <html lang="en" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>        <html lang="en" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title><?=$title?></title>
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css"/>
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css"/>
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
  <script src="<?=base_url()?>public/js/jquery.min.js"></script>
  <script src="<?=base_url()?>public/js/conference_script.js" type="text/javascript"></script>
</head>
<body>

<!--[if lt IE 9]>
  <div id="outdate-box">
    You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/?locale=en">upgrade your browser</a>
    to improve your experience.
  </div>
<![endif]-->

<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">
  <header>
    <div class="row">
      <div class="small-9 medium-4 columns">
        <a href="<?=base_url()?>"><img src="<?=base_url()?>public/img/site/northeastern_sase_white.png"
          width="300"/>
        </a>
      </div>
      <div class="small-3 medium-8 columns">
        <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <li class="name"></li>
            <li class="toggle-topbar">
              <a class="left-off-canvas-toggle" href="#"><i class="fa fa-2x fa-navicon"></i></a>
            </li>
          </ul>
          <section class="top-bar-section">
            <ul class="right">
              <li class="<?=active_nav('conference')?>"><a href="<?=base_url()?>conference">Conference</a></li>
              <li class="<?=active_nav('events')?>"><a href="<?=base_url()?>events">Events</a></li>
              <li class="<?=active_nav('programs')?>"><a href="<?=base_url()?>programs">Programs</a></li>
              <li class="<?=active_nav('eboard')?>"><a href="<?=base_url()?>eboard">Eboard</a></li>
              <li class="<?=active_nav('sponsors')?>"><a href="<?=base_url()?>sponsors">Sponsors</a></li>
              <li class="<?=active_nav('about')?>"><a href="<?=base_url()?>about">About</a></li>
              <li class="<?=active_nav('contact')?>"><a href="<?=base_url()?>contact">Contact</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label><a href="<?=base_url()?>">Northeastern SASE</a></label></li>
        <li class="<?=active_nav('conference')?>"><a href="<?=base_url()?>conference">Conference</a></li>
        <li class="<?=active_nav('events')?>"><a href="<?=base_url()?>events">Events</a></li>
        <li class="<?=active_nav('programs')?>"><a href="<?=base_url()?>programs">Programs</a></li>
        <li class="<?=active_nav('eboard')?>"><a href="<?=base_url()?>eboard">Eboard</a></li>
        <li class="<?=active_nav('sponsors')?>"><a href="<?=base_url()?>sponsors">Sponsors</a></li>
        <li class="<?=active_nav('about')?>"><a href="<?=base_url()?>about">About</a></li>
        <li class="<?=active_nav('contact')?>"><a href="<?=base_url()?>contact">Contact</a></li>
      </ul>
    </aside>
<!-- end header -->
