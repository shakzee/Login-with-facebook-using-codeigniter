<?php
class Mod_allcourses extends CI_Model
{
	function __construct(){
		parent::__construct();
	}


	public function all_courses()
	{
		return $this->db->select('courses.*,users.*')
		->from('courses')
		->join('users','courses.user_id = users.u_id')
		->get();
	}

	public function fetch_al_lcourses($limit, $start)
	{

		$this->db->limit($limit, $start);
		$query = $this->db->select('courses.*,users.*')
				->from('courses')
				->join('users','courses.user_id = users.u_id')
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


}//class ends here
