<div class="banner">
  <h2>Join SASE</h2>
  <h3>Be a Part of the Local and National Communities</h3>
</div>
</header>
<section class="main">

<div class="container">
<div class="row">
  <div class="small-12 columns">
    <h3>Northeastern SASE</h3>
  </div>
</div>
<div class="row">
  <div class="small-12 medium-7 columns">
    <div class="flex-video">
      <div class="map-overlay show-for-small-only"></div>
      <iframe id="gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2949.1434211632263!2d-71.0877537!3d42.339465499999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37a185d8cbbe7%3A0xfd24fc5f9249a6f5!2sEll+Hall%2C+Northeastern+University%2C+Boston%2C+MA+02115!5e0!3m2!1sen!2sus!4v1410130867514" width="400" height="300" frameborder="0" style="border:0"></iframe>
    </div>
  </div>
  <div class="small-12 medium-4 columns text-center">
    <h4>General Meetings</h4>
    <p>Location: 410 Ell Hall</p>
    <p>Time: Thursday 7pm</p>
    <p>Frequency: Biweekly</p>
  </div>
</div>
</div>

<div class="container light-grey">
<div class="row">
  <div class="small-12 columns">
    <h3>SASE Boston Professional Chapter</h3>
  </div>
</div>
<div class="row">
  <div class="small-12 medium-8 columns text-justify">
    <p>
      If you are a graduate or a professional, check out the Boston
      Professional Chapter for events and programs specifically designed
      for working professionals around Boston!
    </p>
  </div>
  <div class="small-12 medium-4 columns text-center">
    <a href="http://saseneregion.weebly.com/professional-boston-chapter.html"
      class="button radius">Learn More
    </a>
  </div>
</div>
</div>

<div class="container">
<div class="row">
  <div class="small-12 columns">
    <h3>SASE National</h3>
  </div>
</div>
<div class="row">
  <div class="small-12 medium-8 columns text-justify">
    <p>National SASE membership is FREE and is open to everyone of all ethnic
      backgrounds. As a member, here are some of the benefits you will enjoy:
      <ul class="fa-ul text-left">
        <li><i class="fa-li fa fa-check-circle"></i>
          become part of the fastest growing Asian American professional group
        </li>
        <li><i class="fa-li fa fa-check-circle"></i>
          get notices of career opportunities with our organization sponsors
        </li>
        <li><i class="fa-li fa fa-check-circle"></i>
          receive news and event updates directly from SASE National
        </li>
        <li><i class="fa-li fa fa-check-circle"></i>
          receive SASE inFocus newsletter every 6 months for all SASE highlights
        </li>
      </ul>
    </p>
  </div>
  <div class="small-12 medium-4 columns text-center">
    <a href="http://www.saseconnect.org/become-a-member" class="button radius">
      Become a Member!
    </a>
  </div>
</div>
</div>

<script>
  // overlay the google map iframe
  function overlayGoogleMaps() {
    var w = $('#gmap').width();
    var h = $('#gmap').height();

    $('.map-overlay').width(w);
    $('.map-overlay').height(h);
  }

  $(document).ready(function() {
    overlayGoogleMaps();
    $(window).resize(function() {
      overlayGoogleMaps();
    });
  });
</script>
