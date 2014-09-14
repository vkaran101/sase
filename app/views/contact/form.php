<div class="row">
  <div class="small-12 medium-4 columns porcelain">
    <div class="container">
      <h3>Contact Us</h3>
      <p>
        Send us a message anytime for questions, comments, suggestions, or
        just to say hi!
      </p>
      <p>
        <span class="gmail-red">Email</span><br />
        <a href="mailto:northeastern.sase@gmail.com">
          northeastern.sase@gmail.com
        </a>
      </p>
      <p>
        <span class="facebook-blue">Facebook</span><br />
        <a href="https://www.facebook.com/NortheasternSASE" target="_blank">
          /NortheasternSASE
        </a>
      </p>
      <p>
        <span class="orgsync-green">OrgSync</span><br />
        <a href="https://orgsync.com/67847/chapter" target="_blank">
          /67847/chapter
        </a>
      </p>
    </div>
  </div>
  <div class="small-12 medium-7 columns">
    <div class="container">
      <h3>Drop Us a Line!</h3>
      <?=form_open('contact/send')?>
        <div class="row">
          <div class="small-12 medium-6 columns">
            <label>Name
              <input type="text" name="name" placeholder="Full Name"
                value="<?=set_value('name')?>"
              />
            </label>
            <?=form_error('name')?>
          </div>
          <div class="small-12 medium-6 columns">
            <label>Email
              <input type="email" name="email" placeholder="example@husky.neu.edu"
                value="<?=set_value('email')?>"
              />
            </label>
            <?=form_error('email')?>
          </div>
        </div>
        <div class="row">
          <div class="small-12 columns">
            <label>Subject
              <input type="text" name="subject" value="<?=set_value('subject')?>" />
            </label>
            <?=form_error('subject')?>
          </div>
        </div>
        <div class="row">
          <div class="small-12 columns">
            <label>Message
              <textarea name="message" rows="5"><?=set_value('message')?></textarea>
            </label>
            <?=form_error('message')?>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="small-12 columns">
            <button class="button radius" type="submit">
              <i class="fa fa-fw fa-send"></i> Send!
            </button>
          </div>
        </div>
      <?=form_close()?>
    </div>
  </div>
</div>
