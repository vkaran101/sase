<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>View Event Entry - NUSASE Admin</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/foundation5.css" />
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.css" />
  <script src="<?=base_url()?>public/js/modernizr.js"></script>
</head>
<body>

<div class="row">
  <div class="small-12 medium-10 medium-centered large-8 columns">
    <h1><a href="<?=base_url()?>admin">Admin Dashboard</a></h1>
    <hr />
    <p>
      <i class="fa fw fa-arrow-circle-left"></i><a href="<?=base_url()?>admin/events"> Back to All Events</a>
    </p>
    <div class="row">
      <div class="small-12 columns">
        <h3><?=$entry->title?></h3>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Date: </strong><?=date('n/j/Y', strtotime($entry->date))?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Time: </strong>
        <?php if ($entry->all_day): ?>
          All day
        <?php else: ?>
          <?=date('g:i a', strtotime($entry->time))?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Location: </strong><?=$entry->location?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Semester: </strong><?=ucfirst($entry->semester)?> <?=$entry->year?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Event Type: </strong><?=$entry->type?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <br/>
        <strong>Description:</strong>
        <br/>
        <?=$entry->description?>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="small-12 columns">
        <strong>Created: </strong><?=date('n/j/Y g:i a',strtotime($entry->created))?>
        <br/>
        <strong>Updated: </strong><?=date('n/j/Y g:i a',strtotime($entry->updated))?>
      </div>
    </div>
    <hr />
    <div class="small-12 columns">
      <a href="<?=base_url()?>admin/events/edit/<?=$entry->id?>" class="button radius">Edit</a>
      <input type="button" class="button radius alert" id="delete" value="Delete" />
    </div>
  </div>
</div>

<script src="<?=base_url()?>public/js/jquery.min.js"></script>
<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>
<script>
  $('#delete').click(function() {
    var response = confirm('Warning: data will be lost!\n\nContinue to delete event entry?');
    if (response) {
      window.location.href = '<?=base_url()?>admin/events/destroy/<?=$entry->id?>';
    }
  });
</script>

</body>
</html>
