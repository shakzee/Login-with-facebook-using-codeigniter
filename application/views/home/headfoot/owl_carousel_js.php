<script type="text/javascript" src="<?php echo base_url('assets/owl/owl.carousel.min.js'); ?>"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    stagePadding: 10,
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
	$('.owl-prev').html('<span class="fa fa-angle-left"></span>');
	$('.owl-next').html('<span class="fa fa-angle-right"></span>');
</script>