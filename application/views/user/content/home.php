<?php
  $userdata = $this->session->all_userdata();

?>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h2>General Account Settings</h2>
        <div class="form-group">
          <?php echo c_error(); ?>
        </div>
        <table class="table">
          <input type="hidden" class="fname" value="<?php echo $userdata['fname']; ?>">
          <input type="hidden" class="lname" value="<?php echo $userdata['lname']; ?>">
          <?php if($userdata['social'] != 1): ?>
			  <tr>
				<td>
				  Name
				</td>
				<td class="fupname">
				  <?php echo $userdata['fname'].nbs(1).$userdata['lname']?>
				</td>
				<td>
				  <a href="javascript:void(0)" class="name">
					Edit
				  </a>
				</td>
			  </tr>
		<?php else: ?>
			  <tr>
				<td>
				  Name
				</td>
				<td class="fupname">
				  <?php echo $userdata['fname'].nbs(1).$userdata['lname']?>
				</td>
			  </tr>
		<?php endif?>
          <tr>
            <td>
              Mobile
            </td>
            <td class="fmob">
              <?php  if(empty($userdata['u_mobile'])): echo 'N/A'; else: echo $userdata['u_mobile']; endif;?>
            </td>
            <td>
              <a href="javascript:void(0)" class="ubl_4">
                Edit
              </a>
            </td>
          </tr>
          <tr>
            <td>
              Date of Birth
            </td>
            <td class="ddob">
              <?php if($userdata['u_dob'] !="0000-00-00"): echo $userdata['u_dob']; else: echo 'N/A'; endif;?>
            </td>
            <td>
              <a href="javascript:void(0)" class="edob">
                Edit
              </a>
            </td>
          </tr>
          <tr>
            <td>
              Gender
            </td>
            <td class="gndr">
              <?php echo $userdata['u_gender']?>
            </td>
            <td>
              <a href="javascript:void(0)" class="gr_21">
                Edit
              </a>
            </td>
            </tr>
          <tr>
            <td>
              Address
            </td>
            <td class="add_81">
              <?php  if(empty($userdata['u_address'])): echo 'N/A'; else: echo $userdata['u_address']; endif; ?>
            </td>
            <td>
              <a href="javascript:void(0)" class="ed_91">
                Edit
              </a>
            </td>
          </tr>
		<?php if($userdata['social'] != 1): ?>
          <tr>
            <td>
              Profile pic
            </td>
            <td class="oldimg">
              <img src="<?php echo user_img(user_id());?>" class="img-responsive" style="width:50px;" data-text="<?php echo $this->encrypt->encode($userdata['u_dp']);?>">
            </td>
            <td>
              <a href="javascript:void(0)" class="cngdp">
                Edit
              </a>
            </td>
          </tr>
		<?php else: ?>
          <tr>
            <td>
              Profile pic
            </td>
            <td class="oldimg">
              <img src="<?php echo user_img(user_id());?>" class="img-responsive" style="width:50px;" data-text="<?php echo $this->encrypt->encode($userdata['u_dp']);?>">
            </td>
          </tr>
		<?php endif;?>
        </table>
      </div>
    </div>
  </div>
</div><!-- /.content-wrapper -->