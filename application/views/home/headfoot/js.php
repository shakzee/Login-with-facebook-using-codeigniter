<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]--> <!-- Border radius fixed IE10-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83425480-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="<?php echo base_url('assets/home/js/modernizr.custom.17475.js') ?>"></script>
<script src="<?php echo base_url('assets/home/js/jquery.easing.js') ?>"></script>
<script src="<?php echo base_url('assets/home/js/megamenu.js') ?>"></script>
<script src="<?php echo base_url('assets/home/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/home/js/functions.js') ?>"></script>
<script src="<?php echo base_url('assets/home/assets/validate.js') ?>"></script> 
<!-- FANCYBOX -->
<script  src="<?php echo base_url('assets/home/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4') ?>" type="text/javascript"></script> 
<script src="<?php echo base_url('assets/home/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5') ?>" type="text/javascript"></script> 
<script src="<?php echo base_url('assets/home/js/fancy_func.js') ?>" type="text/javascript"></script> 
<!-- REVOLUTION SLIDER -->
<script src="<?php echo base_url('assets/home/rs-plugin/js/jquery.themepunch.plugins.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/home/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>"></script>
<script src="<?php echo base_url('assets/home/js/revolutio-slider-func.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<!-- STYLE SWITCHER -->
<script type="text/javascript" src="<?php echo base_url('assets/home/src/jquery-sticklr-1.4.min.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#example-1').sticklr({
            animate         : true,
            showOn          : 'hover'
        });
    });
    var burl="<?php echo base_url();?>"
    var surl="<?php echo site_url();?>"
    var curl="<?php echo $this->encrypt->encode(current_url());?>"

</script>

<script type="text/javascript" src="<?php echo base_url('assets/home/src/fswit.js') ?>"></script>


</body>
</html>