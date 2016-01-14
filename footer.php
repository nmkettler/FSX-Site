<footer class="text-center" id="foot">
  <div class="footer-above">                         
    <div class="container">
      <div class="row" id="descText">
        <div class="footer-col col-md-12" id="footNavText">
          <p><a href="index.php">Home </a> | <a href="contact.php">Contact</a> | <a href="news.php">News</a> | <a href="products.php">Products</a> |
            <a href="cleaningcomparison.php">Competitive Comparison </a>| <a href="reccSafteyEquip.php">Enviromental &amp; Safety </a>|
            <a href="bidSpecLang.php">Bid Spec. Language</a> | <a href="servicelocator.php">Service Locator Map</a> |
            <a href="baselineChart.php"> Baseline Chart</a> | <a href="videos.php"> Video</a></p>
        </div>
        <div class="row">
          <div class="footer-col col-md-12" id="footSocMedia">
            <ul class="list-inline">
              <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/pages/FSX-Inc-FSX-Equipment-Inc/146834845525900?rf=432189793569062">
                <i class="fa fa-facebook-square fa-2x"></i>               
              </a>
               <a class="btn btn-social-icon btn-facebook" href="mailto:%73%61%6c%65%73%40%66%73%78%69%6e%63%2e%63%6f%6d">
                <i class="fa fa-envelope fa-2x"></i>
               </a>
                <a class="btn btn-social-icon btn-facebook" href="tel:360-691-5991">
                 <i class="fa fa-phone fa-2x"></i>
                </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="footer-below">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>© Copyright FSX Incorporated 2008-<?php echo date("Y"); ?>, All Rights Reserved
            <?php echo date("Y"); ?>
          </p>
        </div>
      </div>
    </div>
  </div>

<!-- /top-link-block -->
</footer>

<a href="#" class="back-to-top"><i class="fa fa-arrow-up fa-1x"></i> Back to Top</a>

<script>
var offset = 100;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>
                

</html>
