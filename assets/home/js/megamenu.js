// MENU MOBILE ===============================================================================
// Collpsable menu mobile and tablets

	$("#megamenu-button-mobile").click(function(){
		$(".megamenu").slideToggle(400);
		$(this).toggleClass("active");
	});

// MENU DROP DOWN ====================================== //
 $(document).ready(function() {
    $(".megamenu .drop-down").click(function() {
      if($(this).next("div").is(":visible")){
        $(this).next("div").slideToggle("normal");
      } else {
        $(".megamenu .drop-down-container").fadeOut("fast");
        $(this).next("div").slideToggle("slow");
		
		$("#map_1").each(function(){                         
    var embed ='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1742.367350725998!2d67.16170216833783!3d24.81109316710879!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33af23afba64d%3A0x65443fda314bdad!2sGhous+Pak+Rd%2C+Karachi%2C+Pakistan!5e0!3m2!1sen!2s!4v1472400792783" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                                $(this).html(embed);                    
   }); 
      }
    });
  });
  

// DROP DOWN MENU TABS ====================================== //
$('body').on('click', 'ul.tabs > li > a', function(e) {

    //Get Location of tab's content
    var contentLocation = $(this).attr('href');

    //Let go if not a hashed one
    if(contentLocation.charAt(0)=="#") {

        e.preventDefault();

        //Make Tab Active
        $(this).parent().siblings().children('a').removeClass('active');
        $(this).addClass('active');

        //Show Tab Content & add active class
        $(contentLocation).show().addClass('active').siblings().hide().removeClass('active');

    }
});