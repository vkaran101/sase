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
          <input type="submit" href="#" class="button postfix" value="Go!" />
        </div>
      </div>
    </form>
  </div>
</div><!-- close div.row -->
</div><!-- close div#newsletter -->

<footer>
<div class="row">
  <div class="medium-6 medium-push-3 columns">
    <a href="<?=base_url()?>join" class="button">Join SASE!</a>
  </div>
  <div class="medium-3 medium-push-3 columns">
links
  </div>
  <div class="medium-3 medium-pull-9 columns">
    <div class="row">
      <div class="small-8 small-centered columns">
        <a href="<?=base_url()?>"><img src="<?=base_url()?>public/img/sase_stamp_light.png"></a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="small-10 small-centered medium-11 columns" id="copyright">
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
