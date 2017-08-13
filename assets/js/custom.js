


$(document).ready(function(){
	$(function(){
		$('.bl_cnt').find('img').addClass('img-responsive');
		$('.bhylcon').find('img').addClass('img-responsive');
	})


	// var adBlockEnabled = false;
	// var testAd = document.createElement('div');
	// testAd.innerHTML = '&nbsp;';
	// testAd.className = 'adsbox';
	// document.body.appendChild(testAd);
	// window.setTimeout(function() {
	//   if (testAd.offsetHeight === 0) {
	//     adBlockEnabled = true;
	//     $('#cmd').modal({
	//   		backdrop: 'static',
	// 		keyboard: false
	//   	});
	//   		$('#cmd').addClass('ablockcls');
	//   		$('.ablockcls').find('.modal-dialog').addClass('mwhp');
	//   		$('.ablockcls').find('.modal-content').addClass('cntadbl');
	//   		$('.ablockcls').find('.modal-title').addClass('adbmtit');
	//   }
	  
	//   testAd.remove();
	  	


	// 		var cmt = "Adblock Detected"
	// 		var cmb = "";
	// 		var cmf = "";
	// 		cmb+='<div calss="form-group"><div class="adbcd">'
	// 		cmb+='<p>It appears that you\'ve installed an adblocking plugin.</p><p>The revenue from the ads keeps the site running.</p>';
	// 		cmb+='<p>Please whitelist Shakzee.com in your adblocking plugins.</p>';
	// 		cmb+='<p>Your Adblocker will keep on working on other sites..</p>';
	// 		cmb+='<p><span class="fa fa-window-close fwsp" aria-hidden="true"></span></p>'
	// 		cmb+='<div class="dadbl"><p><a target="__blank" href="http://wedontwanttoberu.de/prx?u=aHR0cDovL3MzLmFtYXpvbmF3cy5jb20vYWRleHRlbnQuY29wZWpzL3doaXRlbGlzdEluc3RydWN0aW9ucy5odG1s&country=none">Disable adblocker on Shakzee.com</a></p></div>'
	// 		cmb+='</div></div>'
	// 		cmb+='<div class="form-group fpfd_6"></div>'
	// 		$('#cmt').html(cmt);
	// 		$('#cmb').html(cmb);
	// 		$('#cmf').html(cmf);

	// }, 100);
	
	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    if(scroll >= 100)
	    {
	    	$('.customnavbar').addClass("headereffect");
	    }
	    if(scroll < 100)
	    {
	    	$('.customnavbar').removeClass("headereffect");
	    }
	});

	/*$('.owlproductca').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:2
	        },
	        600:{
	            items:4
	        },
	        1000:{
	            items:8
	        }
	    }
	});*/

	$('.owl-prev').html('<span class="fa fa-angle-left"></span>');
	$('.owl-next').html('<span class="fa fa-angle-right"></span>');

	$('#myTabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});

	$('.mainhovereffectdv .adcart').hover(function(){
		$('.adcartdv').toggle();
	});
	$('.mainhovereffectdv .quickv').hover(function(){
		$('.quickviewdv').toggle();
	});
	$('.mainhovereffectdv .adfvt').hover(function(){
		$('.adfvtdv').toggle();
	});

/*	 $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: true,
        nav:true,
        navText:["",""],
        autoPlay:false
    });
	 var owl = $("#owl-demo4")
	 owl.owlCarousel({
      items : 6, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
*/
	$(function(){
		$('#nltr_2').click(function(){
			 var $btn = $(this).button('loading')
			var enltr = $('#enltr').val();
			//console.log(enltr)
			if (enltr == "")
			{
				$('.fnlt').html(alert_erro('alert-warning','Please Insert your Email.'))
				$btn.button('reset')				
			}
			else
			{
				$.ajax({
		            type : 'POST',
		            url : surl+'courses/newslater',
		            data : {
		            	 enltr:enltr
		            },
		            success : function (mydata)
		            {
						console.log(mydata)
						$('.fnlt').html(alert_erro('alert-info',mydata));
						$btn.button('reset')				

		            },
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
						$btn.button('reset')				

		            }
		        });	
			}

		});
	})

        $('#example-1').sticklr({
            animate         : true,
            showOn          : 'hover'
        });


$(function(){
			$('#tgs').bind('keypress', function(e) {
				if(e.keyCode == 13){
					// Enter pressed... do anything here...
					//console.log('working.')
					var tag = ""
					var cval = $(this).val();
					tag+="<li class="+cval+">"+cval+"<a href='javascript:void(0)' onclick=removetg(\'"+cval+"\')>"
					tag+='<i class="fa fa-times"></i></a><input type="hidden" name="tags[]" value="'+cval+'"></li>'
					if (!$('#i_gz_x li').hasClass(cval))
					{
						if ($.trim(cval) !="")
						{
							$('#i_gz_x').append(tag);
							$(this).val('')
						}
					}


					 return false;  
				}
			});	
		
		})

	$(function(){
		$('#fps_9').click(function(){
			$('#cmd').modal('show');
			var cmt = "Fogot Password"
			var cmb = "";
			var cmf = "";
			cmb+='<div calss="form-group"> <label>Email<span class="red">*</span></lable>'
			cmb+='<input type="text" class="form-control fpin_7" placeholder="Please insert you Email."> </div>'
			cmb+='<div class="form-group fpfd_6"></div>'
			cmf+='<button type="button" class="btn btn-primary fpcnf_3" data-loading-text="Loading..." autocomplete="off">Send Password</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#cmt').html(cmt);
			$('#cmb').html(cmb);
			$('#cmf').html(cmf);

		});

		$(function(){
			$('body').on('click','.fpcnf_3',function(){
				var fpin_7 = $('.fpin_7').val();
				 var $btn = $(this).button('loading')
				if (fpin_7 == "")
				{
					$('.fpfd_6').html(alert_erro('alert-warning','Please enter your email.'))
					$btn.button('reset')
				}
				else
				{
					if (!validemail(fpin_7))
					{
						$('.fpfd_6').html(alert_erro('alert-warning','Please insert a valid email.'))
						$btn.button('reset')
					}
					else
					{
							$.ajax({
							type:'POST',
							url:surl+'login/forgotpass',
							data:{
								fpin_7:fpin_7
							},
							success:function(mydata){
								$('.fpfd_6').html(alert_erro('alert-info',mydata))
								$btn.button('reset')
							},
							error:function(){
								$btn.button('reset')
							}
						})
					}	
				}
			})
		})
	})

	$(function(){
		$('#vc_91').keyup(function(){
			$vc_91 = jQuery.trim($(this).val());
			if ($vc_91 != "")
			{
				$('#vcsb_98').removeAttr('disabled');
			}
			else
			{
				$('#vcsb_98').attr('disabled','disabled');
			}
		}).keydown(function(){
			$vc_91 = jQuery.trim($(this).val());
			if ($vc_91 != "")
			{
				$('#vcsb_98').removeAttr('disabled');
			}
			else
			{
				$('#vcsb_98').attr('disabled','disabled');
			}
		})
	})
	$(function(){
		$('body').on('click','#vcsb_98',function(){
			var vc_91 = $('#vc_91').val();
			var $btn = $(this).button('loading');
			var rc_9 =  $('#rc_9').val();
			var vd_34 =  $('#vd_34').val();
			var nlnk = curl ;
			var c_r = 5000;			
			//console.log(vc_91)
			if (vc_91 == "")
			{
				$('.vc_r0p').html(alert_erro('alert-warning','Please check required field and try again.'))
				$btn.button('reset');
			}
			else
			{
				if (vc_91.length > c_r)
				{
					$('.vc_r0p').html(alert_erro('alert-warning', c_r + ' Charecter required.'))
					$btn.button('reset')
				}
				else
				{
					if (rc_9 == "" || vd_34 == "")
					{
						$('.vc_r0p').html(alert_erro('alert-warning','Oops something went wrong please try again.'))
						$btn.button('reset')
					}
					else
					{
						$.ajax({
				            type : 'POST',
				            url : surl+'courses/addcomment',
				            data : {
				            	 rc_9:rc_9,
				            	 vd_34:vd_34,
				            	 vc_91:vc_91,
				            	 nlnk:nlnk
				            },
				            success : function (mydata)
				            {
				            	//console.log(mydata);
				            	var c_comment = JSON.parse(mydata);
								//console.log(mydata)
								//console.log(c_comment);
								//console.log(c_comment.fname);
								$('#vc_91').val('');
								var c_c_data = ""
								c_c_data+='<div class="ncom dltcm'+c_comment.c_id+'"><ol class="molc"><li>';
								c_c_data+='<div class="avatar"><a href="#"> <img src="'+c_comment.u_img+'" alt="'+c_comment.fname+'" class="img-responsive"></a></div>';
								c_c_data+='<div class="comment_right clearfix"><div class="dropdown pull-right crop_9"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span> </button>';
								c_c_data+='<ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li><a hhref="javascript:void(0)" data-text="'+c_comment.enc_id+'" class="edcnt" data-id="'+c_comment.c_id+'">Edit</a></li><li><a href="javascript:void(0)" class="dmcnt" data-text="'+c_comment.enc_id+'" data-id="'+c_comment.c_id+'">Delete</a></li></ul></div></div>';
								c_c_data+='<div class="comment_info">Posted by <a href="#"> '+c_comment.fname+' </a> <span>|</span> '+c_comment.c_date+'<span>|</span><a href="javascript:void(0)" class="rpcl" data-id="'+c_comment.c_id+'">Reply </a></div> <div class="vcom'+c_comment.c_id+'">'+c_comment.comment+' </div></div>';
								c_c_data+='<ul class="vcrp"> <li> <div class="form-group crptb" id="crp'+c_comment.c_id+'"><input type="text" class="form-control vcri'+c_comment.c_id+'">  <button class="button_medium crepl" data-id="'+c_comment.c_id+'">reply</button></div></li></ul>';
								c_c_data+='</li> </ol></div>';
								// c_c_data+'';
								// c_c_data+'';
								// c_c_data+'';
								// c_c_data+'';
								// c_c_data+'';
								// c_c_data+'';
								// c_c_data+'';

								$('.cc_76').prepend(c_c_data);
								//$('.vc_r0p').html(alert_erro('alert-info',mydata));
								$btn.button('reset')				

				            },
				            error:function(){
								$('.vc_r0p').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
								$btn.button('reset')				

				            }
				        });	
					}
				}
			}
		})
	})

	$(function(){
		$('body').on('click','.rpcl',	function(){
			//console.log('wroking..')
			var id = $(this).data('id');
			$('#crp'+id).slideToggle();

		})
	})

	$(function(){
		$('.crepl').click(function(){
			var text_id = $(this).data('text');
			var d_id = $(this).data('id');
			var curs = $('.curs'+d_id).val()
			var reply = $('.vcri'+d_id).val();
			//console.log(curs);
				
			var $btn = $(this).button('loading')
			if (jQuery.trim(reply) != "")
			{
				//console.log('working..');
				$.ajax({
					type:'POST',
					url:surl+'courses/vcoomment_reply',
					data:{
						reply:reply,
						text_id:text_id,
						curs:curs,
						nlnk:curl,
					},
					success:function(mydata){
						//$('.fpfd_6').html(alert_erro('alert-info',mydata))
						var rep_data = JSON.parse(mydata);
						//console.log(mydata)
						//console.log(rep_data)
						var c_c_reply = "";						
						c_c_reply+='<li class="dcrp dcrp'+rep_data.rep_id+'">';
						c_c_reply+='<div class="avatar"><a href="#"><img src="'+rep_data.u_img+'" alt="'+rep_data.fname+'" class="img-responsive"></a></div>';
						c_c_reply+='<div class="comment_right clearfix">';
						c_c_reply+='<div class="dropdown pull-right crop_9">';
						c_c_reply+='<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span> </button><ul class="dropdown-menu" aria-labelledby="dropdownMenu1"><li><a class="edcntrep" href="javascrip:void(0)" data-text="'+rep_data.envcr_id+'" data-id="'+rep_data.rep_id+'">Edit</a></li><li><a class="dmcntrep" href="javascrip:void(0)" data-text="'+rep_data.envcr_id+'" data-id="'+rep_data.rep_id+'"> Delete</a></li></ul>';
						c_c_reply+='</div>';
						c_c_reply+=' <div class="comment_info">Posted by <a href="#">'+rep_data.fname+'&nbsp'+rep_data.lname+'</a>';
						c_c_reply+=' <span>|</span> '+rep_data.c_date+' ';
						c_c_reply+='<span>|</span>';
						c_c_reply+='</div>';
						c_c_reply+='<div class="vcomrep'+rep_data.rep_id+'"> '+rep_data.vc_reply+'</div>';
						c_c_reply+='</div>';
						c_c_reply+=' </li>';
						$('.vcri'+d_id).val('')
						$('.rpcnt'+d_id).prepend(c_c_reply);
						$btn.button('reset')
					},
					error:function(){
						$btn.button('reset')
					}
				})

			}
		})
	})

	$(function(){
		$('body').on('click','.dmcnt',function(){
			var ctext = $(this).data('text');
			var cti = $(this).data('id');

			var cmt = "Delete Comment"
			var cmb = "";
			var cmf = "";
			cmb+='<div class="form-group">'
			cmb+='You can edit this post, if you delete this post you won\'t be able to find it anymore. </div>'
			cmb+='<div class="form-group fpfd_6"></div>'
			cmf+='<button data-id="'+cti+'" data-text="'+ctext+'" type="button" class="btn btn-primary cn_cde" data-loading-text="Loading..." autocomplete="off">Confirm Delete</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#cmt').html(cmt);
			$('#cmb').html(cmb);
			$('#cmf').html(cmf);
			$('#cmd').modal('show');

		})
	})

	$(function(){
		$('body').on('click','.cn_cde',function(){
			var $btn = $(this).button('loading')
			var ctext = $(this).data('text');
			var cti = $(this).data('id');

			if (ctext == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Oops something went wrong please try again.'))

			}
			else
			{
				$.ajax({
		            type : 'POST',
		            url : surl+'courses/delcomment',
		            data : {
		            	 ctext:ctext
		            },
		            success : function (mydata)
		            {
						//console.log(mydata)
						setTimeout(function(){
							$('#cmd').modal('hide')
						}, 1000);

						$('.fpfd_6').html(alert_erro('alert-info',mydata));
						$('.dltcm'+cti).remove();
						$btn.button('reset')				

		            },
		            error:function(){
						$('.fpfd_6').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
						$btn.button('reset')				

		            }
		        });	
			}

		})
	})


	$(function(){
		$('body').on('click','.dmcntrep',function(){
			var ctext = $(this).data('text');
			var cti = $(this).data('id');

			var cmt = "Delete Comment"
			var cmb = "";
			var cmf = "";
			cmb+='<div class="form-group">'
			cmb+='You can edit this post, if you delete this post you won\'t be able to find it anymore. </div>'
			cmb+='<div class="form-group fpfd_6"></div>'
			cmf+='<button data-id="'+cti+'" data-text="'+ctext+'" type="button" class="btn btn-primary cn_cderep" data-loading-text="Loading..." autocomplete="off">Confirm Delete</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#cmt').html(cmt);
			$('#cmb').html(cmb);
			$('#cmf').html(cmf);
			$('#cmd').modal('show');

		})
	})

	$(function(){
		$('body').on('click','.cn_cderep',function(){
			var $btn = $(this).button('loading')
			var ctext = $(this).data('text');
			var cti = $(this).data('id');

			if (ctext == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Oops something went wrong please try again.'))

			}
			else
			{
				$.ajax({
		            type : 'POST',
		            url : surl+'courses/delrepcomment',
		            data : {
		            	 ctext:ctext
		            },
		            success : function (mydata)
		            {
						//console.log(mydata)
						setTimeout(function(){
							$('#cmd').modal('hide')
						}, 1000);

						$('.fpfd_6').html(alert_erro('alert-info',mydata));
						$('.dcrp'+cti).remove();
						$btn.button('reset')				

		            },
		            error:function(){
						$('.fpfd_6').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
						$btn.button('reset')				

		            }
		        });	
			}

		})
	})

	$(function(){
		$('body').on('click','.edcnt',function(){
			var ctext = $(this).data('text');
			var cti = $(this).data('id');
			var comment = jQuery.trim($('.vcom'+cti).text())
			var cmt = "Edit Comment"
			var cmb = "";
			var cmf = "";
			cmb+='<div class="form-group">'
			cmb+='<textarea class="form-control edcntt'+cti+'" >'+comment+'</textarea></div>'
			cmb+='<div class="form-group fpfd_6"></div>'
			cmf+='<button data-id="'+cti+'" data-text="'+ctext+'" type="button" class="btn btn-primary edcnt_co" data-loading-text="Loading..." autocomplete="off">Update Comment</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#cmt').html(cmt);
			$('#cmb').html(cmb);
			$('#cmf').html(cmf);
			$('#cmd').modal('show');
		});
	})


	$(function(){
		$('body').on('click','.edcnt_co',function(){
			var $btn = $(this).button('loading')
			var ctext = $(this).data('text');
			var cti = $(this).data('id');
			var comment = jQuery.trim($('.edcntt'+cti).val());
			//console.log(comment)
			if (ctext == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Oops something went wrong please try again.'))

			}
			else
			{
				if (ctext == "")
				{
					$('.fpfd_6').html(alert_erro('alert-warning','Comment Required.'))
				}
				else
				{
					$.ajax({
			            type : 'POST',
			            url : surl+'courses/updatecomemnt',
			            data : {
			            	 ctext:ctext,
			            	 comment:comment
			            },
			            success : function (mydata)
			            {
							//console.log(mydata)
							setTimeout(function(){
								$('#cmd').modal('hide')
							}, 1000);

							$('.fpfd_6').html(alert_erro('alert-info',mydata));
							$('.vcom'+cti).text(comment);
							$btn.button('reset')				

			            },
			            error:function(){
							$('.fpfd_6').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
							$btn.button('reset')				

			            }
			        });	
				}
				
			}

		})
	})


	$(function(){
		$('body').on('click','.edcntrep',function(){
			var ctext = $(this).data('text');
			var cti = $(this).data('id');
			var comment = jQuery.trim($('.vcomrep'+cti).text())
			var cmt = "Edit Comment"
			var cmb = "";
			var cmf = "";
			cmb+='<div class="form-group">'
			cmb+='<textarea class="form-control edcntt'+cti+'" >'+comment+'</textarea></div>'
			cmb+='<div class="form-group fpfd_6"></div>'
			cmf+='<button data-id="'+cti+'" data-text="'+ctext+'" type="button" class="btn btn-primary edcnt_co" data-loading-text="Loading..." autocomplete="off">Update Comment</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#cmt').html(cmt);
			$('#cmb').html(cmb);
			$('#cmf').html(cmf);
			$('#cmd').modal('show');
		});
	})


	$(function(){
		$('body').on('click','.edcnt_co',function(){
			var $btn = $(this).button('loading')
			var ctext = $(this).data('text');
			var cti = $(this).data('id');
			var comment = jQuery.trim($('.edcntt'+cti).val());
			//console.log(comment)
			if (ctext == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Oops something went wrong please try again.'))

			}
			else
			{
				if (ctext == "")
				{
					$('.fpfd_6').html(alert_erro('alert-warning','Comment Required.'))
				}
				else
				{
					$.ajax({
			            type : 'POST',
			            url : surl+'courses/updatecomemntrep',
			            data : {
			            	 ctext:ctext,
			            	 comment:comment
			            },
			            success : function (mydata)
			            {
							//console.log(mydata)
							setTimeout(function(){
								$('#cmd').modal('hide')
							}, 1000);

							$('.fpfd_6').html(alert_erro('alert-info',mydata));
							$('.vcomrep'+cti).text(comment);
							$btn.button('reset')				

			            },
			            error:function(){
							$('.fpfd_6').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
							$btn.button('reset')				

			            }
			        });	
				}
				
			}

		})
	})

	$(function(){
		$('body').on('click','.vcrp_77',function(){
			var ctext = $(this).data('text');
			var cti = $(this).data('id');
			var comment = jQuery.trim($('.vcomrep'+cti).text())
			var cmt = "Report"
			var cmb = "";
			var cmf = "";

			cmb+'<div classs="form-group"><div class="radio"><label>'
			cmb+='<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>'
			cmb+='option here'
			cmb+='</label></div><div>'

			cmf+='<button data-id="'+cti+'" data-text="'+ctext+'" type="button" class="btn btn-primary edcnt_co" data-loading-text="Loading..." autocomplete="off">Update Comment</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#cmt').html(cmt);
			$('#cmb').html(cmb);
			$('#cmf').html(cmf);
			$('#cmd').modal('show');
		});
	})

	$(function(){
		$('body').on('click','.ldl',function(){
			var rc_9 = $('#rc_9').val();
			var vd_34 = $('#vd_34').val();

				$.ajax({
		            type : 'POST',
		            url : surl+'courses/videolike',
		            data : {
		            	 rc_9:rc_9,
		            	 vd_34:vd_34
		            },
		            success : function (mydata)
		            {
		            	if (mydata != 'false')
		            	{
		            		$('.al_lk').text(mydata);
		            	}

		            }/*,
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
		            }*/
		        })
 		})
	})

	$(function(){
		$('body').on('click','.vdk',function(){
			var rc_9 = $('#rc_9').val();
			var vd_34 = $('#vd_34').val();

				$.ajax({
		            type : 'POST',
		            url : surl+'courses/videodlike',
		            data : {
		            	 rc_9:rc_9,
		            	 vd_34:vd_34
		            },
		            success : function (mydata)
		            {
		            	if (mydata != 'false')
		            	{
		            		$('.al_dk').text(mydata);
		            	}


		            }/*,
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
		            }*/
		        })
 		})
	})

	$(function(){
		$('#cnti').click(function(){
			$('.hmnot').css('display','none')
			$.ajax({
				type:'POST',
				url:surl+'user/lastnoti',
				success:function(mydata){
					console.log(mydata)
				},
					error:function(){
				}
			})
		
		});
	})

	$(function(){
		$('body').on('click','.cwlst',function(){
			var text = $(this).data('text');
			console.log(text);
			if (text == "" || text == "undefined")
			{
				console.log('not working..');
			}
			else
			{
				// console.log(text);
				$.ajax({
		            type : 'POST',
		            url : surl+'courses/coursewishlist',
		            data : {
		            	 text:text
		            },
		            success : function (mydata)
		            {
						console.log(mydata);
						var ndata = JSON.parse(mydata);
						//console.log(ndata);
						if (ndata.return == "true")
						{
							if (ndata.cw_status == '1')
							{
								console.log(ndata.cw_status)
								$('#wlh').removeClass('fa-heart-o').addClass('fa-heart');
							}
							else if(ndata.cw_status == '0')
							{
								console.log(ndata.cw_status)
								$('#wlh').removeClass('fa-heart').addClass('fa-heart-o');
							}
						}
						else 
						{
							$('.cwfdb').text('Sowething went wrong please try again.');
						}

		            },
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))

		            }
				})

			}
		})
	})


	$(function(){
		$('body').on('click','.pcwlst',function(){
			var text = $(this).data('text');
			//console.log(text);
			if (text == "" || text == "undefined")
			{
				console.log('not working..');
			}
			else
			{
				// console.log(text);
				$.ajax({
		            type : 'POST',
		            url : surl+'courses/procoursewishlist',
		            data : {
		            	 text:text
		            },
		            success : function (mydata)
		            {
						//console.log(mydata);
						var ndata = JSON.parse(mydata);
						//console.log(ndata);
						if (ndata.return == "true")
						{
							if (ndata.pcw_status == '1')
							{
								//console.log(ndata.pcw_status)
								$('#pwlh').removeClass('fa-heart-o').addClass('fa-heart');
							}
							else if(ndata.pcw_status == '0')
							{
								//console.log(ndata.pcw_status)
								$('#pwlh').removeClass('fa-heart').addClass('fa-heart-o');
							}
						}
						else 
						{
							$('.cwfdb').text('Sowething went wrong please try again.');
						}

		            }/*,
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))

		            }*/
				})

			}
		})
	})

	$(function(){
        $('.xpw3').keyup(function(){
          var cmnt = jQuery.trim($('.cmnts').val());
          if (cmnt != "")
          {
            $('.mntsb6_8').removeAttr('disabled')
          }
          else
          {
            $('.mntsb6_8').attr('disabled','disabled')
          }
        })
      }).keydown(function(){
          var cmnt = jQuery.trim($('.cmnts').val());
          if (cmnt != "")
          {
            $('.mntsb6_8').removeAttr('disabled')
          }
          else
          {
            $('.mntsb6_8').attr('disabled','disabled')
          }
        })

    $(function(){
        $('.mntsb6_8').click(function(){
          var cmnt = jQuery.trim($('.cmnts').val());
          var y67xp = $('.y67xp').val();
          var c_commnt = "";
          if (cmnt == "")
          {
            $('.xpw3').html(alert_erro('alert-warning','Please write a comment to submit.'))
          }
          else
          {
          $.ajax({
            type:'POST',
            url:surl+'blogs/addcomment',
            data:{
              cmnt:cmnt,
              y67xp:y67xp
            },
            success:function(mydata){
              console.log(mydata);
              var respon = JSON.parse(mydata);
              if (mydata.length > 0)
              {
                if (respon.return   == true)
                {
                  c_commnt+='<div class="media mopw domobj'+respon[0].bc_id+'">';
                  c_commnt+='<div class="dropdown  pull-right">';
                  c_commnt+='<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="fa fa-sort-desc" aria-hidden="true"></span></button>';
                  c_commnt+='<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">';
                  c_commnt+='<li><a href="javascript:void(0)" data-text="'+respon.commnt_i_encrypt+'" data-id="'+respon[0].bc_id+'" class="cdt87">Edit</a></li>';
                  c_commnt+='<li><a href="javascript:void(0)" data-text="'+respon.commnt_i_encrypt+'" data-id="'+respon[0].bc_id+'" class="dlcom">Delete</a></li>';
                  c_commnt+='</ul>';
                  c_commnt+='</div>';
                  c_commnt+='<a class="pull-left" href="#">';
                  c_commnt+='<img class="media-object" src="'+respon.user_img+'" alt="'+respon[0].fname+'">';
                  c_commnt+='</a>';
                  c_commnt+='<div class="media-body">';
                  c_commnt+='<h4 class="media-heading">'+respon[0].fname+'';
                  c_commnt+=' <small>'+respon.timeago+'</small>';
                  c_commnt+='<a href="javascript:void(0)" class="brep" data-id="'+respon[0].bc_id+'"> Reply </a>';
                  c_commnt+='</h4>';
                  c_commnt+='<div class="orc'+respon[0].bc_id+'">';
                  c_commnt+=''+respon[0].bc_comment+'';
                  c_commnt+=' </div>';
                  c_commnt+='</div>';
                  c_commnt+='<div class="replies"></div>';
                  c_commnt+='</div>';
                  c_commnt+='<div class="r_cm'+respon[0].bc_id+' dn">';
                  c_commnt+='<div class="form-group"><input type="text" class="form-control rpbr rpt'+respon[0].bc_id+'" >';
                  c_commnt+='</div>';
                  c_commnt+='<div class="form-group">';
                  c_commnt+='<button class="btn btn-primary bcrep" data-id="'+respon[0].bc_id+'" data-text="'+respon.commnt_i_encrypt+'">Reply</button>'
                  c_commnt+='</div>'
                  c_commnt+=' </div>'
                  $('.bcmnts').prepend(c_commnt);
                  //console.log(respon);
                }
                else if(respon.return   == false)
                {
                  $('.xpw3').html(alert_erro('alert-info',respon.message));
                }
                else
                {
                  $('.xpw3').html(alert_erro('alert-info',respon.message));
                }
              }
              else
              {
                $('.xpe').html(alert_erro('alert-warning','Something went wrong please try again.'))
              }
            }/*,
            error:function(){
              $('.xpe').html(error('alert-warning','Something went wrong please try again.'))
            }*/
          })

          }
        });

      })

    $(function(){
        $('body').on('click','a.brep',function(){
          console.log($(this).data('id'));
          var xpe = $(this).data('id');
          $('.r_cm'+xpe).slideToggle()
        })
      })


      $(function(){
    $('body').on('click','.cdt87',function(){
      var di = $(this).data('id');
      var text = $(this).data('text');
      var comment = jQuery.trim($('.orc'+di).text());



      $('#cmd').modal('show');
      var m_tl = "Update Comment"
      var m_bdy = ""
      var m_ft = ""
      m_ft+='<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
      m_ft+='<button type="button" class="btn btn-primary cnfucm" data-id="'+di+'" data-text="'+text+'">Update</button>';
      m_bdy+='<div class="form-group">';
      m_bdy+='<textarea class="form-control edcom'+di+'">'+comment+'</textarea></div>'
      m_bdy+='<div class="form-group mdres"></div>';
      $('#cmt').html(m_tl)
      $('#cmb').html(m_bdy)
      $('#cmf').html(m_ft)

    });
  })


  $(function(){
        $('body').on('click','.cnfucm',function(){
          var y7x =  $(this).data('id');
          var text_r98 =  $(this).data('text');
          var edcom =  jQuery.trim($('.edcom'+y7x).val());
          if (y7x == "" || text_r98 == "" || edcom == "")
          {
            $('.mdres').html(alert_erro('alert-warning','Something went wrong please try againempty.'))
          }
          else
          {
          $.ajax({
            type:'POST',
            url:surl+'blogs/editcomment',
            data:{
              y7x:y7x,
              text_r98:text_r98,
              edcom:edcom
            },
            success:function(mydata){
              //console.log(mydata);
              var respon = JSON.parse(mydata);
              if (mydata.length > 0)
              {
                if (respon.return   == true)
                {
                  console.log(respon);
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                   $('.orc'+y7x).text(respon.comment)
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
                else if(respon.return   == false)
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
                else
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
              }
              else
              {
                $('.mdres').html(alert_erro('alert-info','Something went wrong please try again objerro.'))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
              }
            }/*,
            error:function(){
              $('.xpe').html(alert_erro('alert-warning','Something went wrong please try again.'))
            }*/
          })

          }
        });

      })


  	 $(function(){
    $('body').on('click','.dlcom',function(){
      var di = $(this).data('id');
      var text = $(this).data('text');


      $('#cmd').modal('show');
      var m_tl = "Delete Comment"
      var m_bdy = ""
      var m_ft = ""
      m_ft+='<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
      m_ft+='<button type="button" class="btn btn-primary cnfdc" data-id="'+di+'" data-text="'+text+'">Delete</button>';
      m_bdy+='<div class="form-group">';
      m_bdy+='Are you sure you want to delete</div>'
      m_bdy+='<div class="form-group mdres"></div>';
      $('#cmt').html(m_tl)
      $('#cmb').html(m_bdy)
      $('#cmf').html(m_ft)

    });
  })


  $(function(){
        $('body').on('click','.cnfdc',function(){
          var y7x =  $(this).data('id');
          var text_r98 =  $(this).data('text');
          if (y7x == "" || text_r98 == "")
          {
            $('.mdres').html(alert_erro('alert-warning','Something went wrong please try again.'))
          }
          else
          {
          $.ajax({
            type:'POST',
            url:surl+'blogs/deletecomment',
            data:{
              y7x:y7x,
              text_r98:text_r98
            },
            success:function(mydata){
              console.log(mydata);
              var respon = JSON.parse(mydata);
              if (mydata.length > 0)
              {
                if (respon.return   == true)
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                     $('.domobj'+y7x).remove();
                  }, 2000);
                }
                else if(respon.return   == false)
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
                else
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
              }
              else
              {
                $('.mdres').html(alert_erro('alert-info','Something went wrong please try again.'))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
              }
            }/*,
            error:function(){
              $('.xpe').html(error('alert-warning','Something went wrong please try again.'))
            }*/
          })

          }
        });

      })


  $(function(){
        $('body').on('click','.bcrep',function(){
          var y7x =  $(this).data('id');
          var text_r98 =  $(this).data('text');
          var reply = jQuery.trim($('.rpt'+y7x).val());
          var c_c_reply = "";
          //var text_r98 = $('.y67xp').val();
          if (reply == "")
          {
            console.log('empty reply...');
            //$('.xpw3').html(error('alert-warning','Please write a comment to submit.'))
          }
          else
          {
          $.ajax({
            type:'POST',
            url:surl+'blogs/addreply',
            data:{
              reply:reply,
              text_r98:text_r98
            },
            success:function(mydata){
              //console.log(mydata);
              var respon = JSON.parse(mydata);
              if (mydata.length > 0)
              {
                if (respon.return   == true)
                {
                  //console.log(respon[0].comment_d_encr);
                  c_c_reply+='<div class="media mrep domobjrep'+respon[0].bcp_id+'">';
                  c_c_reply+='<div class="dropdown  pull-right domobjrep'+respon[0].bcp_id+'">';
                  c_c_reply+='<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="fa fa-sort-desc" aria-hidden="true"></span></button>';
                  c_c_reply+='<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">';
                  c_c_reply+='<li><a href="javascript:void(0)" data-text="'+respon.comment_d_encr+')" data-id="'+respon[0].bcp_id+'" class="rdt87">Edit</a></li>';
                  c_c_reply+='<li><a href="javascript:void(0)" data-text="'+respon.comment_d_encr+'" data-id="'+respon[0].bcp_id+'" class="dlrp">Delete</a></li>';
                  c_c_reply+='</ul>';
                  c_c_reply+='</div>';
                  c_c_reply+='<div class="media-left">';
                  c_c_reply+='<a href="#"><img class="media-object" src="'+respon.user_pic+'" alt="'+respon[0].fname+' " " '+respon[0].lname+'"></a>';
                  c_c_reply+='</div>';
                  c_c_reply+='<div class="media-body">';
                  c_c_reply+='<h4 class="media-heading"><small>'+respon.dateago+'</small></h4>';
                  c_c_reply+='<div class="rx8e crep'+respon[0].bcp_id+'">';
                  c_c_reply+=''+respon[0].pcp_reply+'';
                  c_c_reply+='</div>';
                  c_c_reply+='</div>';
                  c_c_reply+='</div>';
                  $('.replies').prepend(c_c_reply);
                  $('.rpt'+y7x).val('');
                  $('.r_cm'+y7x).slideToggle();
                  //console.log(respon);
                }
                else if(respon.return   == false)
                {
                  $('.xpw3').html(alert_erro('alert-info',respon.message));
                }
                else
                {
                  $('.xpw3').html(alert_erro('alert-info',respon.message));
                }
              }
              else
              {
                $('.xpe').html(alert_erro('alert-warning','Something went wrong please try again.'))
              }
            }/*,
            error:function(){
              $('.xpe').html(error('alert-warning','Something went wrong please try again.'))
            }*/
          })

          }
        });

      })



  	$(function(){
    $('body').on('click','.rdt87',function(){
      var di = $(this).data('id');
      var text = $(this).data('text');
      var reply = jQuery.trim($('.crep'+di).text());



      $('#cmd').modal('show');
      var m_tl = "Update Comment"
      var m_bdy = ""
      var m_ft = ""
      m_ft+='<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
      m_ft+='<button type="button" class="btn btn-primary cnfurp" data-id="'+di+'" data-text="'+text+'">Update</button>';
      m_bdy+='<div class="form-group">';
      m_bdy+='<textarea class="form-control edrep'+di+'">'+reply+'</textarea></div>'
      m_bdy+='<div class="form-group mdres"></div>';
       $('#cmt').html(m_tl)
      $('#cmb').html(m_bdy)
      $('#cmf').html(m_ft)

    });
  })


  $(function(){
        $('body').on('click','.cnfurp',function(){
          var y7x =  $(this).data('id');
          var text_r98 =  $(this).data('text');
          var erep =  jQuery.trim($('.edrep'+y7x).val());
          if (y7x == "" || text_r98 == "" || erep == "")
          {
            $('.mdres').html(alert_erro('alert-warning','Something went wrong please try againempty.'))
          }
          else
          {
          $.ajax({
            type:'POST',
            url:surl+'blogs/editreply',
            data:{
              y7x:y7x,
              text_r98:text_r98,
              erep:erep
            },
            success:function(mydata){
              //console.log(mydata);
              var respon = JSON.parse(mydata);
              if (mydata.length > 0)
              {
                if (respon.return   == true)
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                   $('.crep'+y7x).text(respon.pcp_reply)
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
                else if(respon.return   == false)
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
                else
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
              }
              else
              {
                $('.mdres').html(alert_erro('alert-info','Something went wrong please try again objerro.'))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
              }
            }/*,
            error:function(){
              $('.xpe').html(alert_erro('alert-warning','Something went wrong please try again.'))
            }*/
          })

          }
        });

      })


  $(function(){
    $('body').on('click','.dlrp',function(){
      var di = $(this).data('id');
      var text = $(this).data('text');


      $('#cmd').modal('show');
      var m_tl = "Delete Comment"
      var m_bdy = ""
      var m_ft = ""
      m_ft+='<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
      m_ft+='<button type="button" class="btn btn-primary cnfcd" data-id="'+di+'" data-text="'+text+'">Delete</button>';
      m_bdy+='<div class="form-group">';
      m_bdy+='Are you sure you want to delete</div>'
      m_bdy+='<div class="form-group mdres"></div>';
      $('#cmt').html(m_tl)
      $('#cmb').html(m_bdy)
      $('#cmf').html(m_ft)

    });
  })


  $(function(){
        $('body').on('click','.cnfcd',function(){
          var y7x =  $(this).data('id');
          var text_r98 =  $(this).data('text');
          if (y7x == "" || text_r98 == "")
          {
            $('.mdres').html(alert_erro('alert-warning','Something went wrong please try again.'))
          }
          else
          {
          $.ajax({
            type:'POST',
            url:surl+'blogs/deletereply',
            data:{
              y7x:y7x,
              text_r98:text_r98
            },
            success:function(mydata){
              console.log(mydata);
              var respon = JSON.parse(mydata);
              if (mydata.length > 0)
              {
                if (respon.return   == true)
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                     $('.domobjrep'+y7x).remove();
                  }, 2000);
                }
                else if(respon.return   == false)
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
                else
                {
                  $('.mdres').html(alert_erro('alert-info',respon.message))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
                }
              }
              else
              {
                $('.mdres').html(alert_erro('alert-info','Something went wrong please try again.'))
                  setTimeout(function(){
                     $('#cmd').modal('hide')
                  }, 2000);
              }
            }/*,
            error:function(){
              $('.xpe').html(alert_erro('alert-warning','Something went wrong please try again.'))
            }*/
          })

          }
        });

      })


/*  $(function(){
  	$('.bhylcon').find('pre').addClass('brush: js');
  })*/

  $(function(){
  	$('.qx10').click(function(){
  		$('.sq99').slideToggle();
  	})
  })

  $('.sq99 ').keyup(function(){
    var key =  jQuery.trim($(this).val());
    var urslt = "" ;
    var eerress;
    if (key != "")
    {
	    $.ajax({
				type:'POST',
				url:surl+'search/query',
				data:{
					key:key
					},
				success:function(mydata){
					qdata = JSON.parse(mydata);
					if (mydata.length > 0 )
					{
						$('.qlst').removeClass('qlstdisps');
						if (qdata.return == true)
						{
							if (qdata.videos.length > 0) 
							{
								urslt+="<li class='st99'>Videos</li>"
								for (var i = 0; i < qdata.videos.length; i++) {
									urslt+='<a href="'+surl+"/video/"+qdata.videos[i].v_id+"/"+qdata.videos[i].video_name+'"><li>'+qdata.videos[i].video_name+'</li></a>';
									//console.log(qdata.videos[i].v_id)
								}
							}
							if (qdata.course.length > 0)
							{
								urslt+="<li class='st99'>Courses</li>"
								for (var i = 0; i < qdata.course.length; i++) {
									urslt+='<a class="in99a"  href="'+surl+"/courses/detail/"+qdata.course[i].c_id+"/"+qdata.course[i].course_name+'"><li>'+qdata.course[i].course_name+'</li></a>';
									//qdata.courses[i]
								}
							}
							if (qdata.pro_course.length > 0)
							{
								urslt+="<li class='st99'>Online Coruses</li>"
								for (var i = 0; i < qdata.pro_course.length; i++) {
									urslt+='<a class="in99a" href="'+surl+"/onlinecourses/detail/"+qdata.pro_course[i].uc_id+"/"+qdata.pro_course[i].uc_coursename+'"><li>'+qdata.pro_course[i].uc_coursename+'</li></a>';
									//qdata.courses[i]
								}
							}
							if (qdata.blogs.length > 0)
							{
								urslt+="<li class='st99'>Blogs</li>"
								for (var i = 0; i < qdata.blogs.length; i++) {
									urslt+='<a class="in99a" href="'+surl+"/blogs/readblog/"+qdata.blogs[i].b_id+"/"+qdata.blogs[i].blog_title+'"><li>'+qdata.blogs[i].blog_title+'</li></a>';
									//qdata.courses[i]
								}
							}
							$('.qrllu').html(urslt);
							 eerress = $('.qrllu').height();
							if (eerress >= 260)
							{
								$('.qlst').addClass('lrcl97');
							}
							else
							{
								$('.qlst').removeClass('lrcl97');
							}
							//console.log(qdata.videos.length);	
						}
						else if(qdata.return == false)
						{
							console.log(qdata.message)
						}
					}
					else
					{
						$('.qlst').addClass('qlstdisps');
						console.log('somehtig wet wrong.')
					}
				}
				,error:function(){

				}
			});
    }
    else
    {
    	$('.qlst').removeClass('lrcl97');
    	$('.qlst').addClass('qlstdisps');
    	$('.qrllu').empty();
    }

  }).keydown(function(){
  	var key =  jQuery.trim($(this).val());
    var urslt = "" ;
    var eerress;
    if (key != "")
    {
	    $.ajax({
				type:'POST',
				url:surl+'search/query',
				data:{
					key:key
					},
				success:function(mydata){
					qdata = JSON.parse(mydata);
					if (mydata.length > 0 )
					{
						$('.qlst').removeClass('qlstdisps');
						if (qdata.return == true)
						{
							if (qdata.videos.length > 0) 
							{
								urslt+="<li class='st99'>Videos</li>"
								for (var i = 0; i < qdata.videos.length; i++) {
									urslt+='<a class="in99a" href="'+surl+"/video/"+qdata.videos[i].v_id+"/"+qdata.videos[i].video_name+'"><li>'+qdata.videos[i].video_name+'</li></a>';
									//console.log(qdata.videos[i].v_id)
								}
							}
							if (qdata.course.length > 0)
							{
								urslt+="<li class='st99'>Courses</li>"
								for (var i = 0; i < qdata.course.length; i++) {
									urslt+='<a class="in99a" href="'+surl+"/courses/detail/"+qdata.course[i].c_id+"/"+qdata.course[i].course_name+'"><li>'+qdata.course[i].course_name+'</li></a>';
									//qdata.courses[i]
								}
							}
							if (qdata.pro_course.length > 0)
							{
								urslt+="<li class='st99'>Online Coruses</li>"
								for (var i = 0; i < qdata.pro_course.length; i++) {
									urslt+='<a class="in99a" href="'+surl+"/onlinecourses/detail/"+qdata.pro_course[i].uc_id+"/"+qdata.pro_course[i].uc_coursename+'"><li>'+qdata.pro_course[i].uc_coursename+'</li></a>';
									//qdata.courses[i]
								}
							}
							if (qdata.blogs.length > 0)
							{
								urslt+="<li class='st99'>Blogs</li>"
								for (var i = 0; i < qdata.blogs.length; i++) {
									urslt+='<a class="in99a" href="'+surl+"/blogs/readblog/"+qdata.blogs[i].b_id+"/"+qdata.blogs[i].blog_title+'"><li>'+qdata.blogs[i].blog_title+'</li></a>';
									//qdata.courses[i]
								}
							}
							$('.qrllu').html(urslt);
							 eerress = $('.qrllu').height();
							if (eerress >= 260)
							{
								$('.qlst').addClass('lrcl97');
							}
							else
							{
								$('.qlst').removeClass('lrcl97');
							}
							//console.log(qdata.videos.length);	
						}
						else if(qdata.return == false)
						{
							console.log(qdata.message)
						}
					}
					else
					{
						$('.qlst').addClass('qlstdisps');
						console.log('somehtig wet wrong.')
					}
				}
				,error:function(){

				}
			});
    }
    else
    {
    	$('.qlst').removeClass('lrcl97');
    	$('.qlst').addClass('qlstdisps');
    	$('.qrllu').empty();
    }
  })





});//ready ends here


$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 300;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "View more";
    var lesstext = "View less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});

function alert_erro(myclass,message){
	var my_message = "";
	my_message+='<div class="alert '+myclass+' alert-dismissible" role="alert">'
	my_message+='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
	my_message+=' ' + message + ' </div>'
	return my_message;
}

function validemail(email)
{
	   var log_emailpattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
	   var valid_logemail = log_emailpattern.test(email);
	   return valid_logemail;
}