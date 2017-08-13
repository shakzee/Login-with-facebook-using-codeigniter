<?php
  $userdata = $this->session->all_userdata();

?>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <h2>Your message</h2>
        <br><br>
        <div class="form-group">
          <?php echo c_error(); ?>
        </div>
        <div class="row">
                <div class="col-md-4">
                  <img src="<?php echo user_img($this->session->userdata('u_id')); ?>" class="img-responsive pull-right" alt="" style="max-width: 120px;  border-radius: 50%;">
                </div>
                <div class="col-md-8">
                  <div class="prcn">
                    <h3><?php echo $this->session->userdata('fname').nbs(1).$this->session->userdata('lname')?></h3>
                    <form action="<?php echo site_url('user/edit_now'); ?>" method="post">
                      <div class="form-group">
                        <?php echo form_textarea('say_now',$chmsg[0]['message'],'class="form-control"');?>
                      </div>
                      <div class="form-group">
                        <input type="text" name="desig" value="<?php echo $chmsg[0]['designation']?>" placeholder="Designation" class="form-control">
                      </div>
                      <input type="hidden" name="x887" value="<?php echo $this->encrypt->encode($chmsg[0]['m_id']);?>">
                      <div class="form-group">
                        <button class="btn btn-primary" type="submit">Edit Your Message</button>
                      </div>
                    </form>
                  </div>
                </div>
             </div>
      </div>
    </div>
  </div>
</div><!-- /.content-wrapper -->