<?php
class Mod_user extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function lastnoti($value)
	{	
		$this->db->where('u_id',$value['user_id']);
		return $this->db->update('users',array('last_noti_date'=>$value['last_noti_date']));
	}


	public function all_notifications($user_id)
	{
		return $this->db->select('notifications.*,users.*')
            ->from('notifications')
            ->join('users','users.u_id = notifications.sender_id')
            ->where('notifications.receiver_id',$user_id)
            ->or_where('allow_user',0)
            ->order_by('notifications.n_id','desc')
            ->get();
	}

	public function fetch_allnotifications($limit, $start,$user_id)
	{

		$this->db->limit($limit, $start);
		$query = $this->db->select('notifications.*,users.*')
	            ->from('notifications')
	            ->join('users','users.u_id = notifications.sender_id')
	            ->where('notifications.receiver_id',$user_id)
	            ->or_where('allow_user',0)
	            ->order_by('notifications.n_id','desc')
	            ->get();

		if ($query->num_rows() > 0)
		{
		    foreach ($query->result() as $row)
		    {
		      $data[] = $row;
		    }
		   return $data;
		}
		return false;

	}


	public function updatuser($user_id,$value)
	{
		$this->db->where('u_id',$user_id);
		return $this->db->update('users',$value);

	}


	public function check_msg($value)
	{
		return $this->db->get_where('user_messages',array('user_id'=>$value['user_id']))->result_array();
	}	

	public function add_message($value)
	{
		return $this->db->insert('user_messages',$value);
	}	


	public function check_message($value)
	{
		return $this->db->select('*')
		->from('user_messages')
		->where($value)
		->get()
		->result_array();
		//return $this->db->get_where('user_messages',$value)->result_array();
	}


	public function update_message($value,$m_id)
	{
		$this->db->where('m_id',$m_id);
		return $this->db->update('user_messages',$value);
	}

}//class ends here
