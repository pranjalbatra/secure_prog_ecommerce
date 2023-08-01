</div>
<div class="footer">
    <div class="wrapper">
        <div class="section group">
            <div class="col_1_of_2 span_1_of_2">
                <div class="social-icons">
                    <h4>Follow Us</h4>
                    <ul>
                        <li class="facebook"><a href="<?php echo get_option('site_facebook_link');?>" target="_blank"> </a></li>
                        <li class="twitter"><a href="<?php echo get_option('site_twitter_link');?>" target="_blank"> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p><b>Developed By secure_prog_ecommerce</b></p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="<?php echo base_url()?>assets/web/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="<?php echo base_url()?>assets/web/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
</body>
</html>
