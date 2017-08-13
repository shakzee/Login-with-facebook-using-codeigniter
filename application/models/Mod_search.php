<?php
class Mod_search extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function find_videos($key){
		//return
		$query = array(); 
		$query['videos'] = $this->db->select('v_id,video_name,v_status')
		->from('videos')
		->like('video_name', $key)
		->where('v_status',1)
		->get()
		->result_array();

		$query['blogs'] = $this->find_blogs($key);
		$query['course'] = $this->find_courses($key);
		$query['pro_course'] = $this->find_pro_courses($key);
		return $query;
	}
	private function find_courses($key){
		return $this->db->select('course_name,c_id,course_status')
		->from('courses')
		->like('course_name', $key)
		->where('course_status',1)
		->get()
		->result_array();	
	}


	private function find_pro_courses($key){
		return $this->db->select('uc_coursename,uc_id,uc_status')
		->from('user_courses')
		->like('uc_coursename', $key)
		->where('uc_status',1)
		->get()
		->result_array();	
	}

	private function find_blogs($key){
		return $this->db->select('b_id,blog_title,b_status')
		->from('blogs')
		->like('blog_title', $key)
		->where('b_status',1)
		->get()
		->result_array();	
	}



public function find_all_videos($key){
		//return
		$query = array(); 
		$query['videos'] = $this->db->select('videos.v_id,videos.video_name,videos.v_status,courses.course_cover')
		->from('videos')
		->limit(16)
		->like('video_name', $key)
		->where('v_status',1)
		->join('courses','courses.c_id = videos.course_id')
		->get()
		->result_array();

		$query['blogs'] = $this->find_all_blogs($key);
		$query['course'] = $this->find_all_courses($key);
		$query['pro_course'] = $this->find_all_pro_courses($key);
		return $query;
	}
	private function find_all_courses($key){
		 return $this->db->select('courses.*,users.fname,users.lname')//course_name,c_id,course_status,course_cover
		->limit(16)
		->from('courses')
		->like('course_name', $key)
		->where('course_status',1)
		->join('users','users.u_id = courses.user_id')
		->get()
		->result_array();	
	}


	private function find_all_pro_courses($key){
		return $this->db->select('user_courses.*,users.fname,users.lname')
		->from('user_courses')
		->limit(16)
		->like('uc_coursename', $key)
		->where('uc_status',1)
		->join('users','users.u_id = user_courses.teacher_id')
		->get()
		->result_array();	
	}

	private function find_all_blogs($key){
		return $this->db->select('b_id,blog_title,b_status,blog_cover,blog')
		->from('blogs')
		->limit(16)
		->like('blog_title', $key)
		->where('b_status',1)
		->get()
		->result_array();	
	}
/*	private function find_users($key){
		return $tihs->db->select('b_id,blog_title,b_status')
		->from('blogs');
		->link('blog_title', $key)
		->where('b_status',1)
		->get()
		->result_array();	
	}*/




/*public function search_all($key)
	{
		// return $this->db->get_where('products');
		$this->db->distinct();
		return $this->db->select('
									users.u_id,users.fname,users.lname,users.u_status,
									videos.v_id,videos.video_name,videos.v_status,
									courses.course_name,courses.c_id,courses.course_status,
									user_courses.uc_coursename,user_courses.uc_id,user_courses.uc_status,
									blogs.b_id,blogs.blog_title,blogs.b_status
								'
								)
		->from('users')
		->like('users.fname', $key)
		->or_like('users.lname',$key)
		->or_like('videos.video_name',$key)
		->or_like('courses.course_name',$key)
		->or_like('user_courses.uc_coursename',$key)
		->or_like('blogs.blog_title',$key)
		->where('users.u_status',1)
		->join('videos','videos.user_id = users.u_id')
		->join('courses','courses.user_id = users.u_id')
		->join('user_courses','user_courses.teacher_id = users.u_id')
		->join('blogs','blogs.user_id = users.u_id')
		->get();	
		
	}

	public function fetch_search_all($limit, $start,$key)
	{
		 $this->db->distinct();
				$query =  $this->db->select('
											users.u_id,users.fname,users.lname,users.u_status,
											videos.v_id,videos.video_name,videos.v_status,
											courses.course_name,courses.c_id,courses.course_status,
											user_courses.uc_coursename,user_courses.uc_id,user_courses.uc_status,
											blogs.b_id,blogs.blog_title,blogs.b_status
										'
										)
				->from('users')
				->like('users.fname', $key)
				->or_like('users.lname',$key)
				->or_like('videos.video_name',$key)
				->or_like('courses.course_name',$key)
				->or_like('user_courses.uc_coursename',$key)
				->or_like('blogs.blog_title',$key)
				->where('users.u_status',1)
				->join('videos','videos.user_id = users.u_id')
				->join('courses','courses.user_id = users.u_id')
				->join('user_courses','user_courses.teacher_id = users.u_id')
				->join('blogs','blogs.user_id = users.u_id')
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
*/


public function get_search_videos($key)
	{
		// return $this->db->get_where('products');
		return  $this->db->select('videos.v_id,videos.video_name,videos.v_status,courses.course_cover')
			->from('videos')
			->like('video_name', $key)
			->where('v_status',1)
			->join('courses','courses.c_id = videos.course_id')
			->get();
		
	}

	public function fetch_search_videos($limit, $start,$key)
	{
		$this->db->limit($limit, $start);
		  $query = $this->db->select('videos.v_id,videos.video_name,videos.v_status,courses.course_cover')
				->from('videos')
				->like('video_name', $key)
				->where('v_status',1)
				->join('courses','courses.c_id = videos.course_id')
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


public function get_search_couorses($key)
	{
		// return $this->db->get_where('products');
		return  $this->db->select('courses.*,users.fname,users.lname')
			->from('courses')
			->like('course_name', $key)
			->where('course_status',1)
			->join('users','users.u_id = courses.user_id')
			->get();
		
	}

	public function fetch_search_couorses($limit, $start,$key)
	{
		$this->db->limit($limit, $start);
		  $query = $this->db->select('courses.*,users.fname,users.lname')
					->from('courses')
					->like('course_name', $key)
					->where('course_status',1)
					->join('users','users.u_id = courses.user_id')
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


public function get_search_online_couorses($key)
	{
		// return $this->db->get_where('products');
		return  $this->db->select('user_courses.*,users.fname,users.lname')
				->from('user_courses')
				->like('uc_coursename', $key)
				->where('uc_status',1)
				->join('users','users.u_id = user_courses.teacher_id')				
				->get();
		
	}

	public function fetch_search_online_couorses($limit, $start,$key)
	{
		$this->db->limit($limit, $start);
		  $query = $this->db->select('user_courses.*,users.fname,users.lname')
					->from('user_courses')
					->like('uc_coursename', $key)
					->where('uc_status',1)
					->join('users','users.u_id = user_courses.teacher_id')				
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



public function get_search_blogs($key)
	{
		// return $this->db->get_where('products');
		return  $this->db->select('b_id,blog_title,b_status,blog_cover,blog')
				->from('blogs')
				->like('blog_title', $key)
				->where('b_status',1)
				->get();
		
	}

	public function fetch_search_blogs($limit, $start,$key)
	{
		$this->db->limit($limit, $start);
		  $query =  $this->db->select('b_id,blog_title,b_status,blog_cover,blog')
					->from('blogs')
					->like('blog_title', $key)
					->where('b_status',1)
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
