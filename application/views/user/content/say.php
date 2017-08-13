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
                  <img src="<?php echo user_img($this->session->userdata('u_id')); ?>" class="img-responsive pull-right" alt="<?php echo $this->session->userdata('fname').$this->session->userdata('lname');?>" style="max-width: 120px;  border-radius: 50%;">
                </div>
                <div class="col-md-8">
                  <div class="prcn">
                    <h3><?php echo $this->session->userdata('fname').nbs(1).$this->session->userdata('lname')?></h3>
                    <form action="<?php echo site_url('user/saynow'); ?>" method="post">
                      <div class="form-group">
                        <?php echo form_textarea('say_now','','class="form-control"');?>
                      </div>
                      <div class="form-group">
                        <input type="text" name="desig" placeholder="Designation" class="form-control">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" type="submit">Send Your Message</button>
                      </div>
                    </form>
                  </div>
                </div>
             </div>
      </div>
    </div>
  </div>
</div><!-- /.content-wrapper -->