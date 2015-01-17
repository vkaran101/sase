<div class="section">
  <div class="row">
    <div class="small-12 medium-10 medium-centered large-8 columns">
      <h4><?=$title?></h4>
      <p>* required field</p>
      <?=form_open('admin/settings/'.$action)?>
        <label>Name *
          <input type="text" name="name"
            <?php if (isset($setting->name)): ?>
              value="<?=$setting->name?>"
            <?php else: ?>
              value="<?=set_value('name')?>"
            <?php endif; ?>
          />
        </label>
        <?=form_error('name')?>
        <label>Value *
          <input type="text" name="value"
            <?php if (isset($setting->value)): ?>
              value="<?=$setting->value?>"
            <?php else: ?>
              value="<?=set_value('value')?>"
            <?php endif; ?>
          />
        </label>
        <?=form_error('value')?>
        <hr />
        <input type="submit" value="Submit" class="button btn-outline radius small"/>
        <a href="<?=$cancel_action?>" class="button btn-secondary radius small">Cancel</a>
      <?=form_close()?>
    </div>
  </div>
</div>
