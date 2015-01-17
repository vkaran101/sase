<div class="row">
  <div class="small-12 columns">
    <br/>
    <a href="<?=base_url()?>">view site</a>
    <button class="button btn-outline radius tiny right" id="migrate">Migrate Database</button>
    <hr/>
  </div>
</div>

<div class="row">
  <div class="small-12 columns">
    <h3>Settings</h3>
    <i class="fa fa-fw fa-plus-square"></i>
    <a href="<?=base_url()?>admin/settings/create">create new setting</a>
    <div class="overflow">
      <table>
        <thead>
          <tr>
            <th>actions</th><th>id</th>
            <th>name</th><th>value</th>
            <th>created</th><th>updated</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($settings->num_rows() == 0): ?>
            <tr><td></td></tr>
          <?php else: ?>
            <?php foreach ($settings->result() as $setting): ?>
              <tr>
                <td>
                  <div class="actions">
                    <a href="<?=base_url()?>admin/settings/edit/<?=$setting->id?>" title="Edit">
                      <i class="fa fa-fw fa-pencil-square-o"></i>
                    </a>
                    <a href="<?=base_url()?>admin/settings/destroy/<?=$setting->id?>"
                      title="Delete" class="delete">
                      <i class="fa fa-fw fa-trash-o"></i>
                    </a>
                  </div>
                </td>
                <td><?=$setting->id?></td>
                <td><?=$setting->name?></td>
                <td><?=$setting->value?></td>
                <td><?=date('n/j/y g:ia', strtotime($setting->created))?></td>
                <td><?=date('n/j/y g:ia', strtotime($setting->updated))?></td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
    <p>Total <?=$settings->num_rows()?> entries</p>
  </div>
</div>

<script>
  $('.delete').click(function(event) {
    event.preventDefault();
    var response = confirm('Warning! Data will be lost. Continue to delete setting?');
    if (response) {
      window.location.href = $(this).attr('href');
    }
  });

  $('#migrate').click(function() {
    var response = confirm('Migrate the database to latest version?');
    if (response) {
      window.location.href = '<?=base_url()?>admin/migrate';
    }
  });
</script>
