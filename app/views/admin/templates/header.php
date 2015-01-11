<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>        <html lang="en" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>        <html lang="en" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8"/>
  <title><?=$title?> - NUSASE Admin</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css"/>
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css"/>
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
  <script src="<?=base_url()?>public/js/jquery.min.js"></script>
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
        <div class="small-12 columns">
          <a href="<?=base_url()?>admin">
            <img src="<?=base_url()?>public/img/site/northeastern_sase_white.png" width="300"/>
          </a>
        </div>
        <div class="small-12 columns">
          <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
              <li class="name">
                <div id="user">
                  <i class="fa fa-fw fa-user"></i>
                  <?=$user->username?> | <a href="<?=base_url()?>admin/auth/logout">Logout</a>
                </div>
              </li>
              <li class="toggle-topbar">
                <a class="left-off-canvas-toggle" href="#"><i class="fa fa-2x fa-navicon"></i></a>
              </li>
            </ul>
            <section class="top-bar-section">
              <ul class="right">
              <li class="<?=admin_nav('settings')?> <?=admin_nav('home')?>">
                <a href="<?=base_url()?>admin/settings">Settings</a>
              </li>
              <li class="<?=admin_nav('events')?>"><a href="<?=base_url()?>admin/events">Events</a></li>
              <li class="<?=admin_nav('eboards')?>"><a href="<?=base_url()?>admin/eboards">Eboards</a></li>
              </ul>
            </section>
          </nav>
        </div>
      </div>
      <aside class="left-off-canvas-menu">
        <ul class="off-canvas-list">
          <li><label><a href="<?=base_url()?>admin">Admin Dashboard</a></label></li>
          <li class="<?=admin_nav('settings')?> <?=admin_nav('home')?>">
            <a href="<?=base_url()?>admin/settings">Settings</a>
          </li>
          <li class="<?=admin_nav('events')?>"><a href="<?=base_url()?>admin/events">Events</a></li>
          <li class="<?=admin_nav('eboards')?>"><a href="<?=base_url()?>admin/eboards">Eboards</a></li>
        </ul>
      </aside>
    </header>
    <section class="main">
<!-- end header -->
