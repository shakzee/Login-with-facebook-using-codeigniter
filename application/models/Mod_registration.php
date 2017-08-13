<?php
class Mod_registration extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function check_user($value)
	{
		return $this->db->get_where('users',array('email'=>$value['email']));
	}

	public function create_new_account($value)
	{
		return $this->db->insert('users',$value);
	}

	public function check_link($value)
	{
		return $this->db->get_where('users',array('confirm_pass'=>$value));
	}


	public function confirm_account($data,$value)
	{
		$this->db->where('confirm_pass',$value);
		return $this->db->update('users',$data);
	}

	public function check_user_login($value)
	{
		return $this->db->get_where('users',
				array(
						'email'=>$value['email'],
						'password'=>$value['password'],
						'u_status'=>1
						)
					)->result_array();
	}

	public function last_login($value)
	{
		$this->db->where('u_id',$value);
        $this->db->update('users',array('last_login'=>date('Y-m-d H:i:s')));
	}

	public function check_email($value){
		return $this->db->get_where('users',array('email'=>$value['email']))->result_array();
	}
	
	public function update_fb($data)
	{
		$this->db->where('email',$data['email']);
		return $this->db->update('users',$data);
	}
	
	public function all_userdata($email){
		return $this->db->get_where('users',array('email'=>$email))->result_array();
	}
	
	public function insert_fb($data){
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}

	public function update_googleplus($data)
	{
		$this->db->where('email',$data['email']);
		return $this->db->update('users',$data);
	}
	public function insert_googleplus($data){
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}

	public function send_fpass($value)
	{
		$this->db->where('email',$value['email']);
		return $this->db->update('users',array('confirm_pass'=>$value['confirm_pass']));
	}
	
	public function check_get($value)
	{
		return $this->db->get_where('users',array('confirm_pass'=>$value))->result_array();
	}

	public function resetpass($value)
	{
		$this->db->where('confirm_pass',$value['confirm_pass']);
		return $this->db->update('users',array('password'=>$value['password'],'confirm_pass'=>$value['confirm_pass'].'ok'));
	}	
}//class ends here