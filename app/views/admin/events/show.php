<div class="banner text-left">
  <div class="row">
    <div class="small-12 medium-8 medium-centered columns">
      <div class="row">
        <div class="small-12 columns">
          <h3><?=$entry->title?></h3>
          <br/>
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
      <a href="<?=base_url()?>admin/events/edit/<?=$entry->id?>" class="button btn-outline radius small">Edit</a>
      <input type="button" class="button btn-alert radius small" id="delete" value="Delete"/>
    </div>
  </div>
</div>

<script>
  $('#delete').click(function() {
    var response = confirm('Warning: data will be lost!\n\nContinue to delete event entry?');
    if (response) {
      window.location.href = '<?=base_url()?>admin/events/destroy/<?=$entry->id?>';
    }
  });
</script>
