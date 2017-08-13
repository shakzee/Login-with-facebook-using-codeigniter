<div class="container">
	<div class="row">
    	<div class="col-md-12">
			<h1>Contacts</h1>
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo base_url('') ?>">Home</a>
					<span class="divider">/</span>
				</li>
				<li class="active">
					Contact
				</li>
			</ul>
		</div>
		<aside  class="col-md-4 col-sm-4">
			<div class="col-left">
				<h3>Address</h3>
				<ul>
					<li>
						<i class="icon-home"></i> 11 Fifth Ave, Loftus - NEW JERSEY, US
					</li>
					<li>
						<i class="icon-phone"></i> Telephone: + 61 (2) 8093 3400
					</li>
					<li>
						<i class="icon-phone-sign"></i> Fax: +61 (2) 9542 3599
					</li>
					<li>
						<i class="icon-envelope"></i> Email: 
						<a href="#">
							<span class="__cf_email__" data-cfemail="bac9cfd8d7d3c9c9d3d5d4c9faded5d7dbd3d494d9d5d7">[email&#160;protected]</span>
							<script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>
						</a>
					</li>
				</ul>
				<hr>
				<iframe height="250" src="https://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=new+york&amp;sll=40.714353,-74.005973&amp;sspn=0.868126,2.422485&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+Stati+Uniti&amp;t=m&amp;z=10&amp;iwloc=A&amp;ll=40.714353,-74.005973&amp;output=embed" style="border:0;">
				</iframe>
				<br/>
				<small>
					<a href="https://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=new+york&amp;sll=40.714353,-74.005973&amp;sspn=0.868126,2.422485&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+Stati+Uniti&amp;t=m&amp;z=10&amp;iwloc=A&amp;ll=40.714353,-74.005973" style="text-align:left">View bigger</a>
				</small>
            	<hr>
             	<p>
             		Get directions writing your start point.
             	</p>
	            <form action="#" method="get" target="_blank">
	               <input type="text" name="saddr"  placeholder="Enter your location" class="form-control" />
	                <input type="hidden" name="daddr" value="New York, NY 11430" />
	                <input type="submit" value="Get directions" class=" button_medium" />
	            </form>    
			</div>
			<p>
				<a href="<?php echo base_url('all-courses') ?>" title="All courses">
				<img src="<?php echo base_url('assets/home/img/banner.jpg') ?>" alt="Banner" class="img-rounded img-responsive">
				</a>
			</p>
		</aside>
		<section class="col-md-8 col-sm-8">
			<div class="col-right">
				<p class="lead">
					An utinam reprimique duo, <strong>putant mandamus cu qui</strong>. Priaeque iuvaret nominati et, ad mea clita numquam. Maluisset dissentiunt et per, dico liber erroribus vis te. Dolor consul graecis nec ut, scripta eruditi scriptorem et nam.
				</p>
				<hr>
				<h4>General Enquire or Apply</h4>
				<div id="message-contact"></div>
				<form method="post" action="#" id="contaactform">
					<div class="row">
						<div class="col-md-6">
							<label>Name <span class="required">* </span></label>
							<input type="text" class="form-control ie7-margin" id="name_contact">
						</div>
						<div class="col-md-6">
							<label>Last name <span class="required">* </span></label>
							<input type="text" class="form-control ie7-margin" id="lastname_contact">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Email <span class="required">* </span></label>
							<input type="email" id="email_contact" class="form-control ie7-margin">
						</div>
						<div class="col-md-6">
							<label>Phone <span class="required">* </span></label>
							<input type="text" id="phone_contact" class="form-control ie7-margin">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Select a department</label>
							<select id="subject_contact" class="form-control">
								<option value="Administration">
									Administration
								</option>
								<option value="Admissions">
									Admissions
								</option>
								<option value="Courses">
									Courses
								</option>
								<option value="Apply">
									Apply
								</option>
							</select>
						</div>
					</div>
                	<div class="row">
						<div class="col-md-12">
							<label>Message <span class="required">*</span></label>
							<textarea rows="5" id="message_contact" class="form-control"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label>
								<span class="required">*</span> Are you human? 3 + 1 =
							</label>
							<input type="text" id="verify_contact" class="form-control">
						</div>
						<div class="button-align col-md-3">
							<input type="submit" id="submit-contact" value="Submit" class=" button_medium">
						</div>
					</div>
					<hr>
				</form>
				<h4>Plan a visit</h4>
				<div id="message-visit"></div>
				<form method="post" action="#" id="visit">
					<div class="row">
						<div class="col-md-6">
							<label>Name <span class="required">* </span></label>
							<input type="text" class="form-control ie7-margin" id="name_visit">
						</div>
						<div class="col-md-6">
							<label>Last name <span class="required">* </span></label>
							<input type="text" class="form-control ie7-margin" id="lastname_visit">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Email <span class="required">* </span></label>
							<input type="email" id="email_visit" class="form-control ie7-margin">
						</div>
						<div class="col-md-6">
							<label>Phone <span class="required">* </span></label>
							<input type="text" id="phone_visit" class="form-control ie7-margin">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div id="datetimepicker" class="input-append" style="position:relative;">
								<label>Select a date <span class="required">* </span></label>
								<input type="text" class=" dateinput form-control" id="date_visit">
								<span class="add-on" style="position:absolute; top:34px; right:5px; cursor:pointer">
									<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<label>
								<span class="required">*</span> Are you human? 3 + 1 =
							</label>
							<input type="text" id="verify_visit" class="form-control">
						</div>
					</div>
					<input type="submit" id="asdas" value="Submit" class=" button_medium">
				</form>
			</div><!-- end col right-->
		</section>
	</div><!-- end row-->
</div><!-- end container-->
