<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>View Eboard Member - NUSASE Admin</title>
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
      <i class="fa fw fa-arrow-circle-left"></i><a
      href="<?=base_url()?>admin/eboards"> Back to All Eboards</a>
    </p>
    <div class="row">
      <div class="small-12 columns text-center">
        <img class="img-circle" src="<?=base_url().$member->pic?>"/>
      </div>
    </div>
    <br/>
    <div class="row">
      <div class="small-12 columns">
        <h4><?=$member->name?></h4>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Position: </strong><?=$member->position?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Rank: </strong><?=$member->rank?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Major: </strong><?=$member->major?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Graduation Year: </strong><?=$member->grad_year?>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <strong>Semester: </strong><?=ucfirst($member->semester)?> <?=$member->year?>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="small-12 columns">
        <strong>Created: </strong><?=date('n/j/y g:i a',strtotime($member->created))?>
        <br/>
        <strong>Updated: </strong><?=date('n/j/y g:i a',strtotime($member->updated))?>
      </div>
    </div>
    <hr />
    <div class="small-12 columns">
      <a href="<?=base_url()?>admin/eboards/edit/<?=$member->id?>" class="button radius">Edit</a>
      <input type="button" class="button radius alert" id="delete" value="Delete" />
    </div>
  </div>
</div>

<script src="<?=base_url()?>public/js/jquery.min.js"></script>
<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>
<script>
  $('#delete').click(function() {
    var response = confirm('Warning: data will be lost!\n\nContinue to delete eboard member?');
    if (response) {
      window.location.href = '<?=base_url()?>admin/eboards/destroy/<?=$member->id?>';
    }
  });
</script>

</body>
</html>
