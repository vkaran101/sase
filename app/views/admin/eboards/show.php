<div class="banner text-left">
  <div class="row">
    <div class="small-12 medium-8 medium-centered columns">
      <div class="row">
        <div class="small-12 columns text-center">
          <img class="img-circle" src="<?=base_url().$member->pic?>" width="200"/>
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
          <strong>Created: </strong><?=date('n/j/Y g:i a',strtotime($member->created))?>
          <br/>
          <strong>Updated: </strong><?=date('n/j/Y g:i a',strtotime($member->updated))?>
        </div>
      </div>
      <hr />
      <a href="<?=base_url()?>admin/eboards/edit/<?=$member->id?>"
        class="button btn-outline radius small">Edit
      </a>
      <input type="button" class="button btn-secondary radius small" id="reset" value="Reset Picture"/>
      <input type="button" class="button btn-alert radius small" id="delete" value="Delete"/>
    </div>
  </div>
</div>

<script>
  $('#delete').click(function() {
    var response = confirm('Warning: data will be lost!\n\nContinue to delete eboard member?');
    if (response) {
      window.location.href = '<?=base_url()?>admin/eboards/destroy/<?=$member->id?>';
    }
  });
  $('#reset').click(function() {
    var response = confirm('Reset the eboard picture to default?');
    if (response) {
      window.location.href= '<?=base_url()?>admin/eboards/delete_img/<?=$member->id?>';
    }
  });
</script>
