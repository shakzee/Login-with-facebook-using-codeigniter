<?php
class Mod_tutor extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function chck_course($value)
	{
		$where = array(
			'course_name' =>$value['course_name'],
			'user_id' =>$value['user_id']
		 );
		return $this->db->get_where('courses',$where);
	}

	public function add_course($value)
	{
		return $this->db->insert('courses',$value);
	}
	public function courseedit($course_id,$value)
	{
		$this->db->where('c_id',$course_id);
		return $this->db->update('courses',$value);

	}

	public function get_all_courses($value)
	{
		return $this->db->select('courses.*,users.*')
		->from('courses')
		->where('courses.user_id',$value)
		->join('users','users.u_id =  courses.user_id')
		->get();
	}

	public function fatch_allcourses($limit,$start,$user_id)
	{
		$this->db->limit($limit, $start);
		$query =  $this->db->select('courses.*,users.*')
				->from('courses')
				->join('users','users.u_id =  courses.user_id')
				->where('courses.user_id',$user_id)
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

	public function check_tut_course($user_id,$course_id)
	{
		return $this->db->get_where('courses',array('user_id'=>$user_id,'c_id'=>$course_id))->result_array();
	}
	public function check_video($value)
	{
		return $this->db->get_where('videos',array('user_id'=>$value['user_id'],'y_link'=>$value['y_link'],'course_id'=>$value['course_id']));
	}

	public function addvideo($value)
	{
		return $this->db->insert('videos',$value);
	}


	public function get_all_videos($value)
	{
		return $this->db->select('videos.*,courses.*,users.*')
		->from('videos')
		->join('courses','courses.c_id = videos.course_id')		
		->join('users','users.u_id =  videos.user_id')
		->order_by('videos.v_id','desc')
		->where('courses.user_id',$value)
		->get();
	}

	public function fatch_all_videos($limit,$start,$user_id)
	{
		$this->db->limit($limit, $start);
		$query =  $this->db->select('videos.*,courses.*,users.*')
					->from('videos')
					->join('courses','courses.c_id = videos.course_id')		
					->join('users','users.u_id =  videos.user_id')
					->order_by('videos.v_id','desc')
					->where('courses.user_id',$user_id)
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


	public function check_tut_video($user_id,$video_id)
	{
		return $this->db->select('videos.*,courses.*,users.*')
		->from('videos')
		->join('courses','courses.c_id = videos.course_id')
		->join('users','users.u_id = videos.user_id')
		->where('videos.v_id',$video_id)
		->get()
		->result_array();
		// return $this->db->get_where('videos',array('user_id'=>$user_id,'v_id'=>$video_id))->result_array();
	}

	public function update_video($value,$video_id)
	{
		$this->db->where(array('user_id'=>$value['user_id'],'v_id'=>$video_id));
		return $this->db->update('videos',$value);
	}

	public function total_videos($course_id,$user_id)
	{
		return $this->db->get_Where('videos',array('course_id'=>$course_id,'user_id'=>$user_id))->num_rows();
	}

	public function insert_blog_tags($value)
	{
		return $this->db->insert('blog_tags',$value);
	}
	public function insert_blog_tags_batch($value)
	{
		return $this->db->insert_batch('blog_tags',$value);
	}
	public function addblog($value)
	{
		 $this->db->insert('blogs',$value);
		return $this->db->insert_id();
	}
	
	public function addprocourse($value)
	{
		return $this->db->insert('user_courses',$value);
	}


	public function get_all_pro_courses($value)
	{
		return $this->db->select('user_courses.*,users.*')
				->from('user_courses')
				->join('users','users.u_id =  user_courses.teacher_id')
				->order_by('user_courses.uc_id','desc')
				->where('user_courses.teacher_id',$value)
				->get();
	}

	public function fatch_all_pro_courses($limit,$start,$user_id)
	{
		$this->db->limit($limit, $start);
		$query =  $this->db->select('user_courses.*,users.*')
					->from('user_courses')
					->join('users','users.u_id =  user_courses.teacher_id')
					->order_by('user_courses.uc_id','desc')
					->where('user_courses.teacher_id',$user_id)
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


	public function check_pro_course($teacher_id,$pro_c_id)
	{
		return $this->db->get_where('user_courses',array('teacher_id'=>$teacher_id,'uc_id'=>$pro_c_id))->result_array();
	}

	public function updateprocourse($value,$old_id)
	{
		$this->db->where(array('uc_id'=>$old_id,'teacher_id'=>$value['teacher_id']));
		return $this->db->update('user_courses',$value);
	}

	public function check_procourse($value,$old_id)
	{
		return $this->db->get_where('user_courses',array('teacher_id'=>$value['teacher_id'],'uc_id'=>$old_id));
	}


		public function check_blog_category($value)
	{
		return $this->db->get_where('blog_category',array('bc_name'=>$value['bc_name']));
	}


	public function add_blog_category($value)
	{
		return $this->db->insert('blog_category',$value);
	}

	public function getall_blog_categories()
	{
		// return $this->db->get_where('products');
		return $this->db->select('blog_category.*,users.*')
		->from('blog_category')
		->join('users','users.u_id = blog_category.user_id')
		->where('blog_category.bc_status',1)
		->get();
	}

	public function fatch_blog_categories($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->select('blog_category.*,users.*')
				->from('blog_category')
				->join('users','users.u_id = blog_category.user_id')
				->where('blog_category.bc_status',1)
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



	public function check_blog_catid($value)
	{
		return $this->db->get_where('blog_category',array('bc_id'=>$value))->result_array();

	}


	public function get_blog_categories()
	{
		return $this->db->get_where('blog_category',array('bc_status'=>1));
	}



	public function getall_blogs()
	{
		// return $this->db->get_where('products');
		return $this->db->select('blogs.*,blog_category.*,users.*')
		->from('blogs')
		->where('blogs.b_status',1)
		->where('blogs.user_id',user_id())
		->join('blog_category','blog_category.bc_id = blogs.bcat_id')
		->join('users','users.u_id = blogs.user_id')
		->order_by('blogs.b_id','desc')
		->get();
	}

	public function fatch_blogs($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query =  $this->db->select('blogs.*,blog_category.*,users.*')
					->from('blogs')
					->where('blogs.b_status',1)
					->where('blogs.user_id',user_id())
					->join('blog_category','blog_category.bc_id = blogs.bcat_id')
					->join('users','users.u_id = blogs.user_id')
					->order_by('blogs.b_id','desc')
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



	public function get_blog_tags($value)
	{
		return $this->db->get_where('blog_tags',array('blog_id'=>$value));
	}

	public function check_blog($value)
	{
		return $this->db->get_where('blogs',array('b_id'=>$value))->result_array();
		/*return $this->db->select('blogs.*,blog_tags.*')
		->from('blogs')
		->join('blog_tags','blog_tags.blog_id = blogs.b_id','left')
		->where('blogs.b_id',$value)
		->get()
		->result_array();*/

	}


	/*public function get_blog_tags($value)
	{
		return $this->db->get_where('blog_tags',array('blog_id'=>$value));
	}*/


	public function deletetag($value)
	{
		$this->db->where('t_id',$value);
	    return $this->db->delete('blog_tags');
		//return $this->db->last_query(); 
	}

	public function updateblog($value,$blogid)
	{
		$this->db->where('b_id',$blogid);
		return $this->db->update('blogs',$value);
		//return $this->db->insert_id();
	}


	public function deleteblog($value)
	{
		$this->db->where('b_id',$value);
	    return $this->db->delete('blogs');
		//return $this->db->last_query(); 
	}


	public function getall_messages()
	{
		// return $this->db->get_where('products');
		return $this->db->select('contactus.*,users.*')
			->from('contactus')
			->join('users','users.u_id = contactus.user_id','left')
			->order_by('contactus.c_id','desc')
			->get();
	}

	public function fatch_messages($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query =  $this->db->select('contactus.*,users.*')
					->from('contactus')
					->join('users','users.u_id = contactus.user_id','left')
					->order_by('contactus.c_id','desc')
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



	public function get_user_messages()
	{
		// return $this->db->get_where('products');
		return $this->db->select('user_messages.*,users.*')
			->from('user_messages')
			->join('users','users.u_id = user_messages.user_id','left')
			->order_by('user_messages.m_id','desc')
			->get();
	}

	public function fatch_user_messages($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query =  $this->db->select('user_messages.*,users.*')
					->from('user_messages')
					->join('users','users.u_id = user_messages.user_id','left')
					->order_by('user_messages.m_id','desc')
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



	public function update_user_message($value,$order_id)
	{
		$this->db->where_in('m_id',$order_id);
		return $this->db->update('user_messages',$value);
	}


}//class ends here