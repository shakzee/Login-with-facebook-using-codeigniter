
$(document).ready(function(){
	$('body').addClass('x_e');

	$(function(){
		$('.dcd').click(function(){
			var dtxt = $(this).data('text');
			var di = $(this).data('id');

			var m_title = "";
			var m_body = "";
			var m_footer = ""
			m_title+= "Delete Category";
			m_body+= "<h3>Are you sure you want to delete..?</h3>";
			m_footer+= '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
			m_footer+='<button type="button" data-id="'+di+'" data-text="'+dtxt+'" class="btn btn-primary cn_dc">Delete Category</button>'

			$('#m_title').text(m_title);		
			$('#m_body').html(m_body);		
			$('#m_footer').html(m_footer);		

			$('#c_mdl').modal('show');
		})		
	})
	
		$('body').on("click",'button.cn_dc',function(){
			//console.log('hellow world');
			var dtxt = $(this).data('text');
			var di = $(this).data('id');
			//console.log(dtxt+di)
			$.ajax({
				url: surl+'admin/deletecategory',
				type:'post',
				data:{dtxt:dtxt,di:di},
				error:function(){
					console.log('nothign here')
				},
				success:function(mydata){
					if (mydata == true)
					{
						$('.t_cx'+di).fadeOut();
						$('#c_mdl').modal('hide');
					}
					else if(mydata == false)
					{
						console.log('something going wrong')
						console.log(mydata)
					}
					// console.log(mydata)
				}
			})

		})


		$(function(){
		$('.dcp').click(function(){
			var dtxt = $(this).data('text');
			var di = $(this).data('id');

			var m_title = "";
			var m_body = "";
			var m_footer = ""
			m_title+= "Delete Product";
			m_body+= "<h3>Are you sure you want to delete..?</h3>";
			m_footer+= '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
			m_footer+='<button type="button" data-id="'+di+'" data-text="'+dtxt+'" class="btn btn-primary cn_dps">Delete Product</button>'

			$('#m_title').text(m_title);		
			$('#m_body').html(m_body);		
			$('#m_footer').html(m_footer);		

			$('#c_mdl').modal('show');
		})		
	})
	

		$('body').on("click",'button.cn_dps',function(){
			//console.log('hellow world');
			var dtxt = $(this).data('text');
			var di = $(this).data('id');
			//console.log(dtxt+di)
			$.ajax({
				url: surl+'admin/deleteproduct',
				type:'post',
				data:{dtxt:dtxt,di:di},
				error:function(){
					console.log('nothign here')
				},
				success:function(mydata){
					if (mydata == true)
					{
						$('.dp'+di).fadeOut();
						$('#c_mdl').modal('hide');
					}
					else if(mydata == false)
					{
						console.log('something going wrong')
						console.log(mydata)
					}
					// console.log(mydata)
				}
			})

		})


		$(function(){
		$('.mdcp').click(function(){
			var dtxt = $(this).data('text');
			var di = $(this).data('id');

			var m_title = "";
			var m_body = "";
			var m_footer = ""
			m_title+= "Delete Model";
			m_body+= "<h3>Are you sure you want to delete..?</h3>";
			m_footer+= '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
			m_footer+='<button type="button" data-id="'+di+'" data-text="'+dtxt+'" class="btn btn-primary cn_mdps">Delete Product</button>'

			$('#m_title').text(m_title);		
			$('#m_body').html(m_body);		
			$('#m_footer').html(m_footer);		

			$('#c_mdl').modal('show');
		})		
	})
	
	
		$('body').on("click",'button.cn_mdps',function(){
			//console.log('hellow world');
			var dtxt = $(this).data('text');
			var di = $(this).data('id');
			//console.log(dtxt+di)
			$.ajax({
				url: surl+'admin/deletemodel',
				type:'post',
				data:{dtxt:dtxt,di:di},
				error:function(){
					console.log('nothign here')
				},
				success:function(mydata){
					if (mydata == true)
					{
						$('.mdp'+di).fadeOut();
						$('#c_mdl').modal('hide');
					}
					else if(mydata == false)
					{
						console.log('something going wrong')
						console.log(mydata)
					}
					// console.log(mydata)
				}
			})

		})

		$(function(){
		$('.spcd').click(function(){
			var dtxt = $(this).data('text');
			var di = $(this).data('id');

			var m_title = "";
			var m_body = "";
			var m_footer = ""
			m_title+= "Delete Spec";
			m_body+= "<h3>Are you sure you want to delete..?</h3>";
			m_footer+= '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
			m_footer+='<button type="button" data-id="'+di+'" data-text="'+dtxt+'" class="btn btn-primary cn_spc">Delete Spec</button>'

			$('#m_title').text(m_title);		
			$('#m_body').html(m_body);		
			$('#m_footer').html(m_footer);		

			$('#c_mdl').modal('show');
		})		
	})
	
	
		$('body').on("click",'button.cn_spc',function(){
			//console.log('hellow world');
			var dtxt = $(this).data('text');
			var di = $(this).data('id');
			//console.log(dtxt+di)
			$.ajax({
				url: surl+'admin/deletespec',
				type:'post',
				data:{dtxt:dtxt,di:di},
				error:function(){
					console.log('nothign here')
				},
				success:function(mydata){
					if (mydata == true)
					{
						$('.spd'+di).fadeOut();
						$('#c_mdl').modal('hide');
					}
					else if(mydata == false)
					{
						console.log('something going wrong')
						console.log(mydata)
					}
					// console.log(mydata)
				}
			})

		})


	// find model starts here
	/*keyp tags*/
	$(function(){
		$('#q_3_t').keyup(function(){
				//console.log($(this).val())
			var data = {
				idd:$(this).val()
			}
			var tag = ""
			if (jQuery.trim($(this).val()) == "")
			{	
				$('.show_tags').removeClass('tagscr');
				$('.show_tags').text('please insert somthing to ')
			}
			else
			{
				$('.show_tags').html('<i class="fa fa-spinner fa-spin fa-2x"></i>');
				$.post(surl+'admin/findproduct',data,function(fdata){
						//console.log(fdata)
						var obje = JSON.parse(fdata);
						console.log(obje);
						//console.log(obje[0].t_id)
						if (obje.length != 0)
						{
							for (var i = 0; i < obje.length; i++)
							{
								if ( obje.length > 10)
								{
									$('.show_tags').addClass('tagscr');

								}

									tag+='<a class="tcont" href="javascript:void(0)" id="tcont'+obje[i].p_id+'" onclick="selecttag('+obje[i].p_id+')">'
									tag+=''+obje[i].p_name+'</a>'
									$('.show_tags').html(tag);
							}
						}
						else
						{
							$('.show_tags').removeClass('tagscr');
							$('.show_tags').text('tag not found..')
						}
					});
				$('.show_tags').removeClass('tagscr');
			}

		});//keyup 
	
	})



	$(function(){
		$('#q_4_t').keyup(function(){
				//console.log($(this).val())
			var data = {
				idd:$(this).val()
			}
			var tag = ""
			if (jQuery.trim($(this).val()) == "")
			{	
				$('.show_tags').removeClass('tagscr');
				$('.show_tags').text('please insert somthing to ')
			}
			else
			{
				$('.show_tags').html('<i class="fa fa-spinner fa-spin fa-2x"></i>');
				$.post(surl+'admin/findmodel',data,function(fdata){
						//console.log(fdata)
						var obje = JSON.parse(fdata);
						console.log(obje);
						//console.log(obje[0].t_id)
						if (obje.length != 0)
						{
							for (var i = 0; i < obje.length; i++)
							{
								if ( obje.length > 10)
								{
									$('.show_tags').addClass('tagscr');

								}

									tag+='<a class="tcont" href="javascript:void(0)" id="tcont'+obje[i].m_id+'" onclick="selecttag('+obje[i].m_id+')">'
									tag+=''+obje[i].m_name+'</a>'
									$('.show_tags').html(tag);
							}
						}
						else
						{
							$('.show_tags').removeClass('tagscr');
							$('.show_tags').text('tag not found..')
						}
					});
				$('.show_tags').removeClass('tagscr');
			}

		});//keyup 
	
	})
//find modle colse here

	$(function(){
		$('.add_cpcs').click(function(){
			var sp_count = $('.sp_cn').length;
			var items = "";
			items+='<div class="form-group spprel rmov'+sp_count+'">'
			items+='<label>Add Spacs <span class="red">*</span></label>'
			items+='<input type="text" name="sp_val[]" class="form-control sp_cn" placeholder="Add Specs Name">'
			items+='<span class="rem_cpcs" data-id="'+sp_count+'">-</span>'
			items+='</div>'
			if (sp_count <=10)
			{
				$('.ap_spc').append(items)
			}
			//console.log(sp_count);
		});
	})

	$(function(){
		$('body').on("click",'span.rem_cpcs',function(){
			var cur_rem = $(this).data('id');
			$('.rmov'+cur_rem).remove();
		})
	})


	$(function(){
		$('.spv').click(function(){
			var dtxt = $(this).data('text');
			var di = $(this).data('id');

			var m_title = "";
			var m_body = "";
			var m_footer = ""
			var tr = ""
			m_body+='<table class="table table-bordered xpx">';
			tr+='<thead><tr><th>ID</th>';
			tr+='<th>Model</th>';
			tr+='<th>Spec Name</th>';
			tr+='<th>Spec Values</th></tr></thead>';

			$.post({
				url:surl+'admin/specvalues',
				type:'post',
				data:{dtxt:dtxt},
				success:function(mydata){
					var newdata = JSON.parse(mydata)
					for (var i = 0; i < newdata.length; i++) {
						console.log(newdata[i].sv_values)
						tr+="<tr>"
						tr+='<td>'+newdata[i].sv+'</td>'
						tr+='<td>'+newdata[i].m_name+'</td>'
						tr+='<td>'+newdata[i].sp_name+'</td>'
						tr+='<td>'+newdata[i].sv_values+'</td>'

						tr+='</tr>'
					}
					//console.log(mydata)
					$('.xpx').html(tr)
				},
				error:function(){
					tr+="<tr>"
					tr+='<td>Something going wrong please try again.</td>'
					tr+='</tr>'
				}

			})
			m_body+='</talbe>'
			m_title+= "Spec Values";
			//m_body+= "<h3>Are you sure you want to delete..?</h3>";
			m_footer+= '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';

			$('#m_title').text(m_title);		
			$('#m_body').html(m_body);		
			$('#m_footer').html(m_footer);		

			$('#c_mdl').modal('show');
		})		
	})

})//ready close here


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

	function removetag (rem)
	{
		$('.utags'+rem).remove();
	}