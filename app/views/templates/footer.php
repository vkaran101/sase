<footer>
<div class="row">
  <div class="small-12 medium-3 medium-push-3 columns small-only-text-center">
    <p>Subscribe to our mailing list and get awesome updates right in your mailbox!</p>
    <a href="<?=base_url()?>newsletter" class="button btn-outline-inverse small radius">Sign Up</a>
  </div>
  <div class="small-12 medium-3 medium-push-3 columns small-only-text-center">
    <p>Get involved. Join our SASE chapter or become a national member for free!</p>
    <a href="<?=base_url()?>join" class="button btn-outline-inverse small radius">Join SASE</a>
    <hr class="divider" />
  </div>
  <div class="small-6 medium-3 medium-pull-6 columns small-only-text-center">
    <h3>Affiliations</h3>
    <ul>
      <li><a href="http://saseconnect.org">SASE National</a></li>
      <li><a href="http://saseneregion.weebly.com">SASE Northeast</a></li>
      <li><a href="http://www.northeastern.edu">Northeastern</a></li>
      <li><a href="http://www.coe.neu.edu">College of Engineering</a></li>
      <li><a href="http://www.northeastern.edu/cos">College of Science</a></li>
      <li><a href="http://www.northeastern.edu/aac">PAAC</a></li>
    </ul>
  </div>
  <div class="small-6 medium-3 columns small-only-text-center">
    <h3>Connect</h3>
    <ul>
      <li><a href="mailto:northeastern.sase@gmail.com">
        <span class="fa-stack">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-envelope fa-stack-1x"></i>
        </span>
        Email Us</a>
      </li>
      <li><a href="https://www.facebook.com/NortheasternSASE" target="_blank">
        <span class="fa-stack">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-facebook fa-stack-1x"></i>
        </span>
        Follow Us</a>
      </li>
      <li><a href="https://orgsync.com/67847/chapter" target="_blank">
        <span class="fa-stack">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-repeat fa-stack-1x"></i>
        </span>
        Join Us</a>
      </li>
    </ul>
    <hr class="divider" />
  </div>
</div>

<div class="row">
  <div class="small-5 small-centered columns show-for-small-only">
    <a href="<?=base_url()?>"><img src="<?=base_url()?>public/img/site/sase_stamp_light.png"></a>
  </div>
</div>

<div class="row">
  <div class="small-12 columns" id="copyright">
    <hr />
    <?php date_default_timezone_set('America/New_York'); ?>
    <p>Copyright &copy; <?=date("Y")?> Northeastern SASE</p>
  </div>
</div>

<a href="#" id="scroller"><i class="fa fa-chevron-up fa-2x"></i></a>
</footer>

</section><!-- close section.main -->
<a class="exit-off-canvas"></a>
</div><!-- close div.inner-wrap -->
</div><!-- close div.off-canvas-wrapper -->

<script src="<?=base_url()?>public/js/foundation.min.js"></script>
<script src="<?=base_url()?>public/js/foundation5.js"></script>
<?php include_once("google_analytics.php") ?>

</body>
</html>
