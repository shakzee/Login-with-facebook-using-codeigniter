<?php
class Mod_courses extends CI_Model
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

	public function check_course($course_id)
	{
		 // return $this->db->get_where('courses',array('c_id'=>$course_id))->result_array();
		return $this->db->select('courses.*,users.*')
		->from('courses')
		->join('users','users.u_id = courses.user_id')
		->where('courses.c_id',$course_id)
		->get()
		->result_array();
	}

	public function all_videos($value)
	{
		return $this->db->select('*')
		->from('videos')
		->where(array('course_id'=>$value))
		->join('courses','courses.c_id = videos.course_id')
		->get();
		//return $this->db->get_where('videos',array('course_id'=>$value));
	}


	public function check_video($video_id)
	{
		 // return $this->db->get_where('courses',array('c_id'=>$course_id))->result_array();
		return $this->db->select('videos.*,courses.*,users.*')
		->from('videos')
		->join('courses','courses.c_id = videos.course_id')
		->join('users','users.u_id = videos.user_id')
		->where('videos.v_id',$video_id)
		->get()
		->result_array();
	}

	public function popular_course($value)
	{
		//return $this->db->get_where('videos',array('course_id'=>$value))->result_array();

		return $this->db->select('videos.*,courses.*')
		->from('videos')
		->join('courses','courses.c_id = videos.course_id')
		->where('courses.c_id',$value)
		->limit(1)
		->get()
		->result_array();
	}

	public function check_al_register($value)
	{
		return $this->db->get_where('newslater',array('email'=>$value['email']))->result_array();
	}

	public function news_later($value)
	{
		return $this->db->insert('newslater',$value);
	}

	public function update_newslater($value)
	{
		$this->db->where('email',$value['email']);
		return $this->db->update('newslater',array('nl_status'=>1));		
	}

	public function addcomment($value)
	{
		$this->db->insert('video_comments',$value);
		return $this->db->insert_id();

	}	

	public function add_video_coomment_reply($value)
	{
		$this->db->insert('vcomment_reply',$value);
		return $this->db->insert_id();
	}
	public function get_all_comments($value)
	{
		//return $this->db->get_where('video_comments',array('video_id'=>$value));
		return $this->db->select('video_comments.*,users.*')
		->from('video_comments')
		->join('users','users.u_id = video_comments.user_id')
		->where('video_id',$value)
		->limit(10)
		->order_by('video_comments.c_id','desc')
		->get();
	}

	public function v_comment_reply($comment_id)
	{
		return $this->db->select('vcomment_reply.*,users.*')
		->from('vcomment_reply')
		->join('users','users.u_id = vcomment_reply.user_id')
		->where('vcomment_reply.vido_com_id',$comment_id)
		->limit(10)
		->order_by('vcomment_reply.vcr_id','desc')
		->get();

	}

	public function delcomment($value)
	{
		$this->db->where($value);
		return $this->db->delete('video_comments');
		//$this->db->last_query();

	}

	public function delrepcomment($value)
	{
		$this->db->where($value);
		return $this->db->delete('vcomment_reply');
		//$this->db->last_query();

	}

	public function updatecomemnt($value)
	{
		$this->db->where(array('user_id'=>$value['user_id'],'c_id'=>$value['c_id']));
		return $this->db->update('video_comments',array('comment'=>$value['comment']));
	}

	public function updatecomemntrep($value)
	{
		$this->db->where(array('user_id'=>$value['user_id'],'vcr_id'=>$value['vcr_id']));
		return $this->db->update('vcomment_reply',array('vc_reply'=>$value['vc_reply']));
	}


	public function check_l_d($value)
	{
		return $this->db->get_where('video_like',array('video_id'=>$value['video_id'],'user_id'=>$value['user_id']))->result_array();
	}

	public function update_video_like($value,$udata)
	{
		$this->db->where(array('user_id'=>$value['user_id'],'video_id'=>$value['video_id']));
		return $this->db->update('video_like',$udata);
	}

	public function insert_video_like($value)
	{
		return $this->db->insert('video_like',$value);
	}

	public function check_course_wisht($value)
	{
		return $this->db->get_where('course_wishlist',array('course_id'=>$value['course_id'],'user_id'=>$value['user_id']))->result_array();
	}


	public function add_couse_wish($value)
	{
		return $this->db->insert('course_wishlist',$value);
	}

	public function couse_unwish($value)
	{
		$this->db->where(array('course_id'=>$value['course_id'],'user_id'=>$value['user_id']));
		return $this->db->update('course_wishlist',array('cw_status'=>$value['cw_status']));
	}

	

	public function FunctionName($value)
	{

	}


	public function pro_check_course_wisht($value)
	{
		return $this->db->get_where('pcourse_wishlist',array('pro_course_id'=>$value['pro_course_id'],'user_id'=>$value['user_id']))->result_array();
	}

	public function pro_couse_unwish($value)
	{
		$this->db->where(array('pro_course_id'=>$value['pro_course_id'],'user_id'=>$value['user_id']));
		return $this->db->update('pcourse_wishlist',array('pcw_status'=>$value['pcw_status']));
	}


	public function pro_add_couse_wish($value)
	{
		return $this->db->insert('pcourse_wishlist',$value);
	}

	
}//class ends here
