<?php
class Mod_home extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function corses_for_nav($courses)
	{
		return $this->db->select('courses.*,users.*')
		->from('courses')
		->join('users','users.u_id = courses.user_id')
		->where_in('c_id',$courses)
		->get();
	}

	public function total_courses_nav($course_id)
	{
		return $this->db->get_where('videos',array('course_id'=>$course_id))->num_rows();
	}

	public function get_home_course($value)
	{
		//return $this->db->get_where('',array(''=>));
		return $this->db->select('courses.*,videos.*')
		->from('courses')
		->join('videos','videos.course_id = courses.c_id')
		->where('courses.c_id',$value)
		->get();

	}
	public function get_tutors()
	{
		return $this->db->get_where('users',array('teacher'=>1))->result_array();
	}


	public function pro_courses($limit)
	{
		return $this->db->select('user_courses.*,users.*')
		->from('user_courses')
		->join('users','users.u_id = user_courses.teacher_id')
		->where('user_courses.uc_status',1)
		->limit($limit)
		->get();

	}

	public function latest_courses($limit)
	{
		return $this->db->select('courses.*,users.*')
		->from('courses')
		->join('users','users.u_id = courses.user_id')
		->limit($limit)
		->order_by('c_id','desc')
		->get();

	}

	public function latest_blogs($limit)
	{
		return $this->db->select('blogs.*,users.*')
		->from('blogs')
		->join('users','users.u_id = blogs.user_id')
		->limit($limit)
		->order_by('b_id','desc')
		->get();
	}


	public function get_testimonials($limit)
	{
		return $this->db->select('user_messages.*,users.*')
		->from('user_messages')
		->join('users','users.u_id = user_messages.user_id')
		->limit($limit)
		->where('user_messages.m_status',1)
		->order_by('user_messages.m_id','desc')
		->get();
	}


}//class ends here