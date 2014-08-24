<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?=$title?> | NUSASE Admin</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css" />
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
</head>
<body>

<div class="row">
  <div class="small-12 columns">
    <h1><a href="<?=base_url()?>admin">Admin Dashboard</a></h1>
    <hr />
    <p>Logged in as: <?=$user->username?> | <?=anchor('/admin/auth/logout','Logout')?></p>
    <p><a href="<?=base_url()?>">view site</a></p>
    <p><a href="<?=base_url()?>admin/events">manage events</a></p>
    <p><a href="<?=base_url()?>admin/eboards">manage eboards</a></p>
    <p><a href="<?=base_url()?>admin/migrate">migrate database to current</a></p>
  </div>
</div>

<script src="<?=base_url()?>public/js/jquery.min.js"></script>
<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>

</body>
</html>
