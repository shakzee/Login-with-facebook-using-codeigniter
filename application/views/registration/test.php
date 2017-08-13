<?php
public function forgotpass()
	{
		 $data['email'] = $this->input->post('email',TRUE);

		 if (!empty($data['email']))
		 {
				 $checkmail = $this->mod_register->check_email($data);
				 if ($checkmail->num_rows() > 0 )
				 {
				 	$this->load->helper('string');
					$data['password'] = random_string('sha1');
					//$data['status'] = 2;
					$updateforgotpass = $this->mod_register->updateforgotpass($data);
					if ($updateforgotpass)
					{
						$config = Array(
								 'useragent' => 'CodeIgniter',        
								 'protocol' => 'mail',        
								 'mailpath' => '/usr/sbin/sendmail',
								 'smtp_host' => 'localhost',
								 'smtp_user' => 'info@shakzee.com',
								 'smtp_pass' => 'Talha171$',
								 'smtp_port' => 25,
								 'smtp_timeout' => 35,
								 'wordwrap' => TRUE,
								 'wrapchars' => 76,
								 'mailtype' => 'html',
								 'charset'  => 'utf-8',
								 'validate' => FALSE,
								 'priority' => 3,
								 'crlf' => "\r\n",
								 'newline' => "\r\n",
								 'bcc_batch_mode' => FALSE,
								 'bcc_batch_size' => 200,									  
								 		);

								  $message = $this->load->view('registration/forgotpass',$data,TRUE); 
								//$message = 'Here is you confirmation code....!<br><br>'. anchor('register/setpassword/'.$data['password'], 'Please click here to confirm.', 'title="varification"');
								$this->load->library('email', $config);
								$this->email->set_newline("\r\n");
							 	$this->email->from('info@shakzee.com'); // change it to yours
								$this->email->to($data['email']);// change it to yours
								$this->email->subject('Please varifie you email..');
								$this->email->message($message);
								if($this->email->send())
								{
									echo 'an email has been sent to your ' . $data["email"] . ' address please confirm it.';
								}
								else
								{
									show_error($this->email->print_debugger());
								}

			 	 }
				 else
				 {
					echo 'something wrong please inform us..';
				 }
					
				 }
				 else
				 {
				 	echo 'This '. $data['email'].' is not registered Please SignUp';
				 }

		 }
		 else
		 {
		 	redirect('home');
		 }
		 

		 
	}