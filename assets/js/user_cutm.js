
$(document).ready(function(){
	$(function(){	
		$('body').on('keyup','.nmbr',function(e)
		                                {
		  if (/\D/g.test(this.value))
		  {
			    // Filter non-digits from input value.
			    this.value = this.value.replace(/\D/g, '');
		  }
		});		
	})

	$(function(){
		$('.name').click(function(){
			var fname =  $('.fname').val();
			var lname =  $('.lname').val();
	
			var cmt = "Edit Name"
			var cmb = "";
			var cmf = "";
			cmb+='<div class="form-group"> <label>First Name<span class="red">*</span></lable>'
			cmb+='<input type="text" class="form-control fname_7" placeholder="First Name." value="'+fname+'"> </div>'
			cmb+='<div class="form-group"> <label>Last Name<span class="red">*</span></lable>'
			cmb+='<input type="text" class="form-control lname_7" placeholder="Last Name." value="'+lname+'"> </div>'
			cmb+='<div class="form-group fpfd_6"></div>'

			cmf+='<button type="button" class="btn btn-primary fpcnf_3" data-loading-text="Loading..." autocomplete="off">Update Name</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#m_title').html(cmt);
			$('#m_body').html(cmb);
			$('#m_footer').html(cmf);
			$('#u_c_mdl').modal('show');
		})
	})

	$(function(){
		$('body').on('click','.fpcnf_3',function(){
			var fname_7 = $('.fname_7').val();
			var lname_7 = $('.lname_7').val();
			 var $btn = $(this).button('loading');			
			if (fname_7 == "" || lname_7 == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Please check required fields and try again.'));
				$btn.button('reset');
			}
			else
			{
				$.ajax({
		            type : 'POST',
		            url : surl+'user/updatename',
		            data : {
		            	 fname_7:fname_7,
		            	 lname_7:lname_7
		            },
		            success : function (mydata)
		            {
						console.log(mydata);
						var ndata = JSON.parse(mydata);
						if (mydata.length > 0)
						{
							if (ndata.return == 'true')
							{
								console.log('true here')
								$('.fupname').text(ndata.fname + ' ' + ndata.lname);
								$('.fname_7').val(ndata.fname);
								$('.lname_7').val(ndata.lname);
								setTimeout(function(){
									$('#u_c_mdl').modal('hide')
								}, 1000);

								$('.fpfd_6').html(alert_erro('alert-success','Your Name is successfully updated.'));
								$btn.button('reset');								
							}
							else if(ndata.return == 'false')
							{
								$('.fpfd_6').html(alert_erro('alert-warning','We can\'t update your Name right now, pelase try again.'));
								$btn.button('reset');								
							}
							else
							{
								$('.fpfd_6').html(alert_erro('alert-warning',ndata.error));
								$btn.button('reset');		
							}
						}

						$('.fnlt').html(alert_erro('alert-info',ndata));
						$btn.button('reset')				

		            }/*,
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
						$btn.button('reset')				

		            }*/
		         })
			}

		})
	})


	$(function(){
		$('.ubl_4').click(function(){
			var mobile =  jQuery.trim($('.fmob').text());
			var cmt = "Edit Mobile"
			var cmb = "";
			var cmf = "";
			if (mobile =="N/A")
			{
				mobile = "";
			}
			cmb+='<div class="form-group"> <label>Your Mobile Number<span class="red">*</span></lable>'
			cmb+='<input type="text" class="form-control mb_7 nmbr" placeholder="Your mobile number." value="'+mobile+'"> </div>'
			cmb+='<div class="form-group fpfd_6"></div>'

			cmf+='<button type="button" class="btn btn-primary mob_5" data-loading-text="Loading..." autocomplete="off">Update Name</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#m_title').html(cmt);
			$('#m_body').html(cmb);
			$('#m_footer').html(cmf);
			$('#u_c_mdl').modal('show');
		})
	})


	$(function(){
		$('body').on('click','.mob_5',function(){
			 var $btn = $(this).button('loading');
			var mb_7 = $('.mb_7').val();
			if (mb_7 == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Please check required fields and try again.'));
				$btn.button('reset');
			}
			else
			{
			  if (/\D/g.test(this.value))
			  {
				    // Filter non-digits from input value.
				    //this.value = this.value.replace(/\D/g, '');
				    $('.fpfd_6').html(alert_erro('alert-warning','Please insert a number.'));
			  }
			  else
			  {
					$.ajax({
		            type : 'POST',
		            url : surl+'user/updatemobile',
		            data : {
		            	 mb_7:mb_7
		            },
		            success : function (mydata)
		            {
						console.log(mydata);
						var ndata = JSON.parse(mydata);
						if (mydata.length > 0)
						{
							if (ndata.return == 'true')
							{
								$('.fmob').text(ndata.u_mobile);
								setTimeout(function(){
									$('#u_c_mdl').modal('hide')
								}, 1000);

								$('.fpfd_6').html(alert_erro('alert-success','Your Mobile number is successfully updated.'));
								$btn.button('reset');								
							}
							else if(ndata.return == 'false')
							{
								$('.fpfd_6').html(alert_erro('alert-warning','We can\'t update your Name right now, pelase try again.'));
								$btn.button('reset');								
							}
							else
							{
								$('.fpfd_6').html(alert_erro('alert-warning',ndata.error));
								$btn.button('reset');		
							}
						}

						$('.fnlt').html(alert_erro('alert-info',ndata));
						$btn.button('reset')				

		            }/*,
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
						$btn.button('reset')				

		            }*/
		         })

			  }				

			}//else

		})
	})


	$(function(){
		$('.gr_21').click(function(){
			var gndr =  jQuery.trim($('.gndr').text());
			var cmt = "Edit Gender"
			var cmb = "";
			var cmf = "";
			if (gndr =="N/A")
			{
				gndr = "";
			}
			cmb+='<div class="form-group"> <label>Your Gender<span class="red">*</span></lable>'
			cmb+='<select class="form-control gn_7"><option value="">Select Your Gender</option><option value="male">male</option><option value="female">female</option></select></div>'
			cmb+='<div class="form-group fpfd_6"></div>'

			cmf+='<button type="button" class="btn btn-primary gndr_5" data-loading-text="Loading..." autocomplete="off">Update Name</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#m_title').html(cmt);
			$('#m_body').html(cmb);
			$('#m_footer').html(cmf);
			$('#u_c_mdl').modal('show');
		})
	})


	$(function(){
		$('body').on('click','.gndr_5',function(){
			 var $btn = $(this).button('loading');
			var gn_7 = $('.gn_7').val();
			if (gn_7 == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Please check required fields and try again.'));
				$btn.button('reset');
			}
			else
			{

					$.ajax({
		            type : 'POST',
		            url : surl+'user/updategender',
		            data : {
		            	 gn_7:gn_7
		            },
		            success : function (mydata)
		            {
						console.log(mydata);
						var ndata = JSON.parse(mydata);
						if (mydata.length > 0)
						{
							if (ndata.return == 'true')
							{
								$('.gndr').text(ndata.u_gender);
								setTimeout(function(){
									$('#u_c_mdl').modal('hide')
								}, 1000);

								$('.fpfd_6').html(alert_erro('alert-success','Your Gender is successfully updated.'));
								$btn.button('reset');								
							}
							else if(ndata.return == 'false')
							{
								$('.fpfd_6').html(alert_erro('alert-warning','We can\'t update your Gender right now, pelase try again.'));
								$btn.button('reset');								
							}
							else
							{
								$('.fpfd_6').html(alert_erro('alert-warning',ndata.error));
								$btn.button('reset');		
							}
						}

						$('.fnlt').html(alert_erro('alert-info',ndata));
						$btn.button('reset')				

		            }/*,
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
						$btn.button('reset')				

		            }*/
		         })
			}//else

		})
	})

	$(function(){
		$('.ed_91').click(function(){
			var address =  jQuery.trim($('.add_81').text());
			var cmt = "Edit Gender"
			var cmb = "";
			var cmf = "";
			if (address =="N/A")
			{
				address = "";
			}
			cmb+='<div class="form-group"> <label>Your Address<span class="red">*</span></lable>'
			cmb+='<textarea class="form-control ad_7" cols="12" rows="7" placeholder="Enter you address."></textarea></div>'
			cmb+='<div class="form-group fpfd_6"></div>'

			cmf+='<button type="button" class="btn btn-primary add_45" data-loading-text="Loading..." autocomplete="off">Update Name</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#m_title').html(cmt);
			$('#m_body').html(cmb);
			$('#m_footer').html(cmf);
			$('#u_c_mdl').modal('show');
		})
	})


	$(function(){
		$('body').on('click','.add_45',function(){
			 var $btn = $(this).button('loading');
			var ad_7 = $('.ad_7').val();
			if (ad_7 == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Please check required fields and try again.'));
				$btn.button('reset');
			}
			else
			{

					$.ajax({
		            type : 'POST',
		            url : surl+'user/updatedadd',
		            data : {
		            	 ad_7:ad_7
		            },
		            success : function (mydata)
		            {
						console.log(mydata);
						var ndata = JSON.parse(mydata);
						if (mydata.length > 0)
						{
							if (ndata.return == 'true')
							{
								$('.add_81').text(ndata.u_address);
								setTimeout(function(){
									$('#u_c_mdl').modal('hide')
								}, 1000);

								$('.fpfd_6').html(alert_erro('alert-success','Your address is successfully updated.'));
								$btn.button('reset');								
							}
							else if(ndata.return == 'false')
							{
								$('.fpfd_6').html(alert_erro('alert-warning','We can\'t update your address right now, pelase try again.'));
								$btn.button('reset');								
							}
							else
							{
								$('.fpfd_6').html(alert_erro('alert-warning',ndata.error));
								$btn.button('reset');		
							}
						}

						$('.fnlt').html(alert_erro('alert-info',ndata));
						$btn.button('reset')				

		            }/*,
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
						$btn.button('reset')				

		            }*/
		         })
			}//else

		})
	})

	$(function(){
		$('.edob').click(function(){
			var dob =  jQuery.trim($('.ddob').text());
			var cmt = "Edit Date of birth"
			var cmb = "";
			var cmf = "";
			var date = "";
			var month = "";
			var year = "";
			for (var i = 1; i <=31; i++) {
				date+='<option value="'+i+'">'+i+'</option>'
			}
			for (var i = 1905; i <=2016; i++) {
				year+='<option value="'+i+'">'+i+'</option>'
			}
			if (dob == "N/A")
			{
				dob = "";
			}
			cmb+='<div class="form-group"> <label>Select  Date<span class="red">*</span></lable>'
			cmb+='<select class="form-control" id="date">'
			cmb+='<option>Date</option>'
			cmb+=date;
			cmb+='</select>'			
			cmb+='</div>'

			cmb+='<div class="form-group"> <label>Select  Month<span class="red">*</span></lable>'
			cmb+='<select id="month"  class="form-control"><option>Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sept</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>'
			cmb+='</div>'

			cmb+='<div class="form-group"> <label>Select  Year<span class="red">*</span></lable>'
			cmb+='<select class="form-control" id="year">'
			cmb+='<option>Date</option>'
			cmb+=year;
			cmb+='</select>'			
			cmb+='</div>'

			cmb+='<div class="form-group fpfd_6"></div>'

			cmf+='<button type="button" class="btn btn-primary dob_450" data-loading-text="Loading..." autocomplete="off">Update Name</button>'
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#m_title').html(cmt);
			$('#m_body').html(cmb);
			$('#m_footer').html(cmf);
			$('#u_c_mdl').modal('show');
		})
	})


	$(function(){
		$('body').on('click','.dob_450',function(){
			 var $btn = $(this).button('loading');
			var date = $('#date').val();
			var month = $('#month').val();
			var year = $('#year').val();

			if (date == "" || month == "" || year == "")
			{
				$('.fpfd_6').html(alert_erro('alert-warning','Please check required fields and try again.'));
				$btn.button('reset');
			}
			else
			{

					$.ajax({
		            type : 'POST',
		            url : surl+'user/updatedob',
		            data : {
		            	 date:date,
		            	 month:month,
		            	 year:year
		            },
		            success : function (mydata)
		            {
						console.log(mydata);
						var ndata = JSON.parse(mydata);
						if (mydata.length > 0)
						{
							if (ndata.return == 'true')
							{
								$('.ddob').text(ndata.u_dob);
								setTimeout(function(){
									$('#u_c_mdl').modal('hide')
								}, 1000);

								$('.fpfd_6').html(alert_erro('alert-success','Your address is successfully updated.'));
								$btn.button('reset');								
							}
							else if(ndata.return == 'false')
							{
								$('.fpfd_6').html(alert_erro('alert-warning','We can\'t update your address right now, pelase try again.'));
								$btn.button('reset');								
							}
							else
							{
								$('.fpfd_6').html(alert_erro('alert-warning',ndata.error));
								$btn.button('reset');		
							}
						}

						$('.fnlt').html(alert_erro('alert-info',ndata));
						$btn.button('reset')				

		            }/*,
		            error:function(){
						$('.fnlt').html(alert_erro('alert-warning','Oops something going wrong please try again.'))
						$btn.button('reset')				

		            }*/
		         })
			}//else

		})
	})

	$(function(){
		$('.cngdp').click(function(){
			var pc =  $('.oldimg').find('img').attr('data-text');
			var cmt = "Edit Profile pic"
			var cmb = "";
			var cmf = "";
			if (pc =="N/A")
			{
				pc = "";
			}
			cmb+='<form action="'+surl+'user/changedp" method="post" enctype="multipart/form-data">';
			cmb+='<div class="form-group"><label>Your Address<span class="red">*</span></lable>'
			cmb+='<input type="file" name="ndp"><input type="hidden" name="dp" value="'+pc+'"></div><div class="form-group"><button type="submit" class="btn btn-primary" data-loading-text="Loading..." autocomplete="off">Update profile pic</button></div>'
			cmb+='<div class="form-group fpfd_6"></div>'
			cmb+='</form>';
			cmf+='<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>';
			$('#m_title').html(cmt);
			$('#m_body').html(cmb);
			$('#m_footer').html(cmf);
			$('#u_c_mdl').modal('show');
		})
	})
	//ready ends here
})



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