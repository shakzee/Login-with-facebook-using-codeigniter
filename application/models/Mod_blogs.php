<?php
class Mod_blogs extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}



	public function get_all_blogs()
	{
		// return $this->db->get_where('products');
		return $this->db->select('blogs.*,blog_category.*,users.*')
				->from('blogs')
				->join('blog_category','blog_category.bc_id = blogs.bcat_id')
				->join('users','users.u_id = blogs.user_id')
				->where('blogs.b_status',1)
				->order_by('blogs.b_id','desc')
				->group_by('blogs.b_id')
				->get();
		
	}

	public function fatch_all_blogs($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query =  $this->db->select('blogs.*,blog_category.*,users.*')
				->from('blogs')
				->join('blog_category','blog_category.bc_id = blogs.bcat_id')
				->join('users','users.u_id = blogs.user_id')
				->where('blogs.b_status',1)
				->order_by('blogs.b_id','desc')
				->group_by('blogs.b_id')
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

	public function get_blog_categories()
	{
		return $this->db->get_where('blog_category',array('bc_status'=>1));
	}

	public function mv_blogs()
	{
		return $this->db->select('blogs.*,users.*,blog_views.*,SUM(blog_views.bv_id) as mvblog')
		->from('blogs')
		->join('users','users.u_id = blogs.user_id')
		->join('blog_views','blog_views.blog_id = blogs.b_id','right')
		->where('blogs.b_status',1)
		->limit(5)
		->order_by('mvblog','desc')
		->group_by('blogs.b_id')
		->get();
	}

	public function check_blog($value)
	{
		//$query = $this->db->get_where('blogs',array('b_id'=>$value));
		//return $query->result_array();
		return $this->db->select('blogs.*,blog_category.*,users.*')
				->from('blogs')
				->join('blog_category','blog_category.bc_id = blogs.bcat_id')
				->join('users','users.u_id = blogs.user_id')
				->where('blogs.b_status',1)
				->where('blogs.b_id',$value)
				//->order_by('blogs.b_id','desc')
				//->group_by('blogs.b_id')
				->get()
				->result_array();
	}

	public function get_blog_comments($blog_id)
	{
		return $this->db->select('blog_comments.*,users.*')
		->from('blog_comments')
		->join('users','users.u_id = blog_comments.user_id','left')
		->where('blog_comments.blog_id',$blog_id)
		->order_by('blog_comments.bc_id','desc')
		->get();
	}

	public function get_blog_tags($value)
	{
		return $this->db->get_where('blog_tags',array('blog_id'=>$value));
	}


	public function get_blogs_bytag($b_tagname)
	{
		// return $this->db->get_where('products');
		return $this->db->select('blogs.*,blog_category.*,users.*,blog_tags.*')
				->from('blogs')
				->join('blog_category','blog_category.bc_id = blogs.bcat_id')
				->join('users','users.u_id = blogs.user_id')
				->join('blog_tags','blog_tags.blog_id = blogs.b_id')
				->where('blogs.b_status',1)
				->where('blog_tags.tag_name',$b_tagname)
				->order_by('blogs.b_id','desc')
				->group_by('blogs.b_id')
				->get();
		
	}

	public function fetch_blogs_bytag($limit, $start,$b_tagname)
	{
		$this->db->limit($limit, $start);
			$query =  $this->db->select('blogs.*,blog_category.*,users.*,blog_tags.*')
				->from('blogs')
				->join('blog_category','blog_category.bc_id = blogs.bcat_id')
				->join('users','users.u_id = blogs.user_id')
				->join('blog_tags','blog_tags.blog_id = blogs.b_id')
				->where('blogs.b_status',1)
				->where('blog_tags.tag_name',$b_tagname)
				->order_by('blogs.b_id','desc')
				->group_by('blogs.b_id')
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



	public function add_blog_comment($value)
	{
		$this->db->insert('blog_comments',$value);
		return $this->db->insert_id();
	}


	public function get_current_comment($blog_id)
	{
		return $this->db->select('blog_comments.*,users.*')
		->from('blog_comments')
		->join('users','users.u_id = blog_comments.user_id')
		->where('blog_comments.bc_id',$blog_id)
		->group_by('users.u_id')
		->get()
		->result_array();
	}

	public function update_blog_comment($value)
	{
		$this->db->where('bc_id',$value['bc_id']);
		$this->db->where('user_id',$value['user_id']);
		return $this->db->update('blog_comments',array('bc_comment'=>$value['bc_comment']));

	}

	public function deletecomment($value)
	{
		$this->db->where($value);
		return $this->db->delete('blog_comments');
	}

	public function add_blog_reply($value)
	{
		$this->db->insert('bc_replies',$value);
		return $this->db->insert_id();
	}

	public function get_current_reply($blog_id)
	{
		return $this->db->select('bc_replies.*,users.*')
		->from('bc_replies')
		->join('users','users.u_id = bc_replies.user_id')
		->where('bc_replies.bcp_id',$blog_id)
		->get()
		->result_array();
	}

	public function update_blog_reply($value)
	{
		$this->db->where('bcp_id',$value['bcp_id']);
		$this->db->where('user_id',$value['user_id']);
		return $this->db->update('bc_replies',array('pcp_reply'=>$value['pcp_reply']));

	}

	public function deletereply($value)
	{
		$this->db->where($value);
		return $this->db->delete('bc_replies');
	}
	public function add_philosophy($value)
	{	
		$this->db->insert('home_section',$value);
		return $this->db->insert_id();
	}
}//class ends here