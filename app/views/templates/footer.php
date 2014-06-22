<div id="newsletter">
<div class="row">
  <div class="medium-7 columns">
    <h5>Subscribe to our mailing list and get awesome updates!</h5>
  </div>
  <div class="medium-5 columns">
    <form method="#" action="#">
      <div class="row collapse">
        <div class="small-8 columns">
          <input type="email" id="newsletter-email" placeholder="example@husky.neu.edu" />
        </div>
        <div class="small-4 columns">
          <input type="submit" href="#" class="button postfix" value="Sign Up" />
        </div>
      </div>
    </form>
  </div>
</div><!-- close div.row -->
</div><!-- close div#newsletter -->

<footer>
<div class="row collapse">
  <div class="medium-6 medium-push-3 columns">
    <p>Get involved. Join our SASE chapter or become a national member for free!</p>
    <a href="<?=base_url()?>join" class="button small">Join SASE</a>
    <div class="row">
      <div class="small-4 columns">
        <a href="mailto:northeastern.sase@gmail.com" data-tooltip data-options="disable_for_touch:true"
        class="has-tooltip tip-bottom" title="Mail us: northeastern.sase@gmail.com">
          <span class="fa-stack fa-2x">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <i class="fa fa-envelope fa-stack-1x"></i>
          </span>
        </a>
      </div>
      <div class="small-4 columns">
        <a href="https://www.facebook.com/NortheasternSASE" data-tooltip data-options="disable_for_touch:true"
        class="has-tooltip tip-bottom" target="_blank" title="Like our Facebook Page!">
          <span class="fa-stack fa-2x">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x"></i>
          </span>
        </a>
      </div>
      <div class="small-4 columns">
        <a href="https://orgsync.com/67847/chapter" data-tooltip data-options="disable_for_touch:true"
        class="has-tooltip tip-bottom" target="_blank" title="Find us on OrgSync!">
          <span class="fa-stack fa-2x">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <i class="fa fa-repeat fa-stack-1x"></i>
          </span>
        </a>
      </div>
    </div>
    <hr class="divider show-for-small" />
  </div>
  <div class="medium-3 medium-push-3 columns" id="affiliations">
    <h3>Affiliations</h3>
    <ul>
      <li><a href="http://saseconnect.org" target="_blank">SASE National</a></li>
      <li><a href="http://saseneregion.weebly.com" target="_blank">SASE Northeast</a></li>
      <li><a href="http://www.northeastern.edu" target="_blank">Northeastern</a></li>
      <li><a href="http://www.coe.neu.edu/coe/index.html" target="_blank">COE</a> |
        <a href="http://www.northeastern.edu/cos/" target="_blank">COS</a></li>
      <li><a href="http://www.northeastern.edu/aac/paac/index.html"
        target="_blank">PAAC</a></li>
    </ul>
    <hr class="divider show-for-small" />
  </div>
  <div class="medium-3 medium-pull-9 columns">
    <div class="row collapse">
      <div class="small-6 small-centered medium-9 columns" id="logo-stamp">
        <a href="<?=base_url()?>"><img src="<?=base_url()?>public/img/sase_stamp_light.png"></a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="small-12 columns" id="copyright">
    <hr />
    <?php date_default_timezone_set('America/New_York'); ?>
    <p><small>&copy; Copyright <?=date("Y")?> Northeastern SASE</small></p>
  </div>
</div>
</footer>

</section><!-- close section.main -->
</div><!-- close div.inner-wrap -->
</div><!-- close div.off-canvas-wrapper -->

<script src="<?=base_url()?>public/js/jquery.min.js"></script>
<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>

</body>
</html>
