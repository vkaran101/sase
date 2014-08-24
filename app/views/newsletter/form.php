<div class="banner">
  <div class="row">
    <div class="small-12 columns">
      <h2>Newsletter Subscription</h2>
      <h4 class="subheader">Get updates and reminders on meetings, events, and programs.</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="small-12 columns">
    <?=form_open('newsletter/subscribe')?>
      <div class="row">
        <div class="small-12 medium-6 columns">
          <label>First Name
            <input type="text" name="fname"
              value="<?=set_value('fname')?>"
            />
          </label>
          <?=form_error('fname')?>
        </div>
        <div class="small-12 medium-6 columns">
          <label>Last Name
            <input type="text" name="lname"
              value="<?=set_value('lname')?>"
            />
          </label>
          <?=form_error('lname')?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label>Email
            <input type="email" name="email" placeholder="example@husky.neu.edu"
              value="<?=set_value('email')?>"
            />
          </label>
          <?=form_error('email')?>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="small-12 columns">
          <button class="button radius" type="submit">
            <i class="fa fa-fw fa-send"></i> Submit
          </button>
        </div>
      </div>
    <?=form_close()?>
  </div>
</div>
