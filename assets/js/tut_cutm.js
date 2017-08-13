
$(document).ready(function(){
	$(function(){
			$('#tgs').bind('keypress', function(e) {
				if(e.keyCode == 13){
					// Enter pressed... do anything here...
					console.log('working.')
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
				else
				{
					console.log('here is your error.');
				}
			});	
		
		})
	
	$('body').on("click",'a.sbtags',function(){
			//console.log('hellow world');
			var dtxt = $(this).data('text');
			var di = $(this).data('id');
			
			//console.log(dtxt+di)
			$.ajax({
				url: surl+'tutor/deletetag',
				type:'post',
				data:{dtxt:dtxt,di:di},
				error:function(){
					ajerror('Something went wrong please try again.');
							setTimeout(function(){
 								 $('#c_mdl').modal('hide')
							}, 2000);	
				},
				success:function(mydata){
						var respon = JSON.parse(mydata);
						//console.log(respon);
					if (mydata.length > 0)
					{
						if (respon.return   == true)
						{
							 $('.lisbtags'+di).remove();
						}
						else if(respon.return == false)
						{

							ajerror(respon.message);
							setTimeout(function(){
 								 $('#c_mdl').modal('hide')
							}, 2000);							
						}
						else
						{
							ajerror(respon.message);
							setTimeout(function(){
 								 $('#c_mdl').modal('hide')
							}, 2000);	
						}

					}
					else
					{
						ajerror('Something went wrong please try again.');
							setTimeout(function(){
 								 $('#c_mdl').modal('hide')
							}, 2000);	
					}
					// console.log(mydata)
				}
			})

		})

	$(function(){
		$('.vmsgx90').click(function(){
			console.log('click is working....')
			var mdi = $(this).data('id');
			var message = $('.shmsg'+mdi).val();
			var m_title = "";
	        var m_body = "";
	        var m_footer = ""

	      m_title+= "Message";
	      m_body+='<div class="form-group xpe">'+message+'</div>'
	      m_footer+= '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';

	      $('#m_title').text(m_title);    
	      $('#m_body').html(m_body);    
	      $('#m_footer').html(m_footer);    
	      $('#c_mdl').modal('show');

		})
	})




	$(function(){
		$('body').on('change','#checkall_07',function(){
			//console.log('working..')
			var admr = ""
			$('.al_cb_09').prop('checked', this.checked);
			/*if ($(this).is(':checked'))
			{
				//console.log($(this).is(':checked'))
				admr+='<div class="form-group"><input type="text" name="admr" class="form-control" placeholder="admin margin"></div>'
				$('.admr').html(admr);
				$('.admr').addClass('col-md-4')
			}   
			else
			{
				$('.admr').empty();
				$('.admr').removeClass('col-md-4')
			} 
*/
		})
	})

	
	$(function(){
		$('#adction_090').change(function(){
			var action = $(this).val();
			if (action == "remark")
			{
				$('.admr').html('<input type="text" name="fmrks" placeholder="Remark" class="form-control">');
				$('.ncln').addClass('col-md-4 xyp');
				$('.ncln').html('<button class="btn btn-primary">Apply</button>');
			}	
			else
			{
				$('.admr').empty();
				$('.ncln').removeClass('col-md-4 xyp').empty();
				$('.admr').html('<button class="btn btn-primary">Apply</button>');
			}

		})
	})


})//eady ends here


function ajerror($error)
  {
      var m_title = "";
      var m_body = "";
      var m_footer = ""
      m_title+= "Error";
      m_body+= "<h3>"+$error+"</h3>";
      m_body+='<div class="form-group xpe"></div>'
      m_footer+= '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';

      $('#m_title').text(m_title);    
      $('#m_body').html(m_body);    
      $('#m_footer').html(m_footer);    

      $('#u_c_mdl').modal('show');
  }


function selecttag(myid)
	{
		//alert(myid);
		var tagname = $('#tcont'+myid).text();
		var user_tag = "";
		user_tag+='<span id="utags'+myid+'" class="udes utags'+myid+'">'+tagname+'<a href="javascript:void(0)" onclick="removetag('+myid+')">';
		user_tag+='<i class="fa fa-times"></i></a></apan>'
		user_tag+='<input type="hidden" name="tags[]" value="'+myid+'"  class="utags'+myid+'">'
		if (!$('#tag_fed').find('span').hasClass('utags'+myid))
		{
			if ($('#tag_fed').find('span').length == 1)
			{

			} 
				else
			{
				$('.tag_fed').append(user_tag);
			};

			$('.show_tags').empty();
			$('#q_3_t').val('');
			$('.show_tags').removeClass('tagscr');

			//$('.tag_fed').append(user_tag);
		}
	}

	function removetag(rem)
	{
		$('.utags'+rem).remove();
	}