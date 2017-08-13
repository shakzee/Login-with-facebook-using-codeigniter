<?php

 class Mod_onlinecourses extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

	public function all_courses()
	{
		return $this->db->select('user_courses.*,users.*')
			->from('user_courses')
			->join('users','user_courses.teacher_id = users.u_id')
			->get();
	}

	public function fetch_al_lcourses($limit, $start)
	{

		$this->db->limit($limit, $start);
		$query = $this->db->select('user_courses.*,users.*')
			->from('user_courses')
			->join('users','user_courses.teacher_id = users.u_id')
			->order_by('user_courses.uc_id','desc')
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


	public function check_course($course_id)
	{
		 // return $this->db->get_where('courses',array('c_id'=>$course_id))->result_array();
		return $this->db->select('user_courses.*,users.*')
		->from('user_courses')
		->join('users','users.u_id = user_courses.teacher_id')
		->where('user_courses.uc_id',$course_id)
		->get()
		->result_array();
	}	

	public function related_pro_courses($value)
	{
		$this->db->limit(7);
		$this->db->order_by('uc_id','desc');
		return $this->db->get_where('user_courses',array('uc_id !='=>$value));
	}

 }//class ends here