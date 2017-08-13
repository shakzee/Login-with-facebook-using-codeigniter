<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('c_error'))
{
    function c_error()
    {
    	$CI  = & get_instance();
    	if ($CI->session->flashdata('class') && $CI->session->flashdata('erro'))
    	{
	    	
	    	$CI->load->library('session');
	    	$data['class'] = $CI->session->flashdata('class');
	    	$data['message'] = $CI->session->flashdata('erro');
	    	$CI->load->view('errors/d_error',$data);

    	}
    	
    } 


}

if ( ! function_exists('c_flash'))
{
    function c_flash($class,$string,$url)
    {
	  	//echo 'wroking..';  	
    	$CI = & get_instance();
    	$CI->load->helper('url');
    	$CI->load->library('session');
    	$CI->session->set_flashdata('class',$class);
    	$CI->session->set_flashdata('erro',$string);
    	redirect($url);
    } 
}


if (!function_exists('admin_login'))
{
    function admin_login()
    {
    	$CI = & get_instance();
    	$CI->load->library('session');
    	if ($CI->session->userdata('admin_id'))
    	{
    		return TRUE;
    	}
    	else
    	{
    		return FALSE;
    	}
    
    } 
}


if ( ! function_exists('admin_id'))
{
    function admin_id()
    {
    	$CI = & get_instance();
    	$CI->load->library('session');
    	if ($CI->session->userdata('a_id'))
    	{
    		return $CI->session->userdata('a_id');
    	}
    	else
    	{
    		return FALSE;
    	}
    
    } 
}


if (!function_exists('no_data'))
{
    function no_data($class,$error)
    {
    	$CI = & get_instance();
    	$data['error'] = $error;
    	$data['class'] = $class;

    	$CI->load->view('errors/no_data',$data);
    } 
}


if (!function_exists('is_logedin'))
{
    function is_logedin()
    {
        $CI = & get_instance();
        $CI->load->library('session');
        if ($CI->session->userdata('u_id') == true)
        {
            return TRUE;
        }
        else 
        {
            return FALSE;
        }
        
    }
}

if (!function_exists('is_teacher'))
{
    function is_teacher()
    {
        $CI = & get_instance();
        $CI->load->library('session');
        if ($CI->session->userdata('teacher') == 1)
        {
            return TRUE;
        }
        else 
        {
            return FALSE;
        }
        
    }
}



if (!function_exists('last_login'))
{
    function last_login($user_id)
    {
        $CI = & get_instance();
        $CI->load->model('mod_registration');
        $CI->mod_registration->last_login($user_id);
    }
}

if (!function_exists('user_id'))
{
    function user_id()
    {
        $CI = & get_instance();
        $CI->load->library('session');
        if ($CI->session->userdata('u_id'))
        {
            return $CI->session->userdata('u_id');
        }
        else 
        {
            return FALSE;
        }
    }
}

if (!function_exists('update_fb'))
{
    function update_fb($data)
    {
        $CI = & get_instance();
        $CI->load->library('session');
		$CI->load->model('mod_registration');
		$CI->load->helper('url');
		$myupdate_fb = $CI->mod_registration->update_fb($data);
		if($myupdate_fb)
		{
			$all_userdata = $CI->mod_registration->all_userdata($data['email']);
			if(count($all_userdata) == 1)
			{
				if($all_userdata[0]['u_status'] == 1)
				{
					$userdata = array();
					$userdata['u_id'] = $all_userdata[0]['u_id'];
					$userdata['fname'] = $all_userdata[0]['fname'];
					$userdata['lname'] = $all_userdata[0]['lname'];
					$userdata['email'] = $all_userdata[0]['email'];
					$userdata['u_dp'] = $all_userdata[0]['u_dp'];
					$userdata['u_address'] = $all_userdata[0]['u_address'];
					$userdata['u_mobile'] = $all_userdata[0]['u_mobile'];
					$userdata['u_dob'] = $all_userdata[0]['u_dob'];
					$userdata['u_gender'] = $all_userdata[0]['u_gender'];
					$userdata['last_login'] = $all_userdata[0]['last_login'];
					$userdata['teacher'] = $all_userdata[0]['teacher'];
					$userdata['u_type'] = $all_userdata[0]['u_type'];
					$userdata['u_created'] = $all_userdata[0]['u_created'];
					$userdata['u_status'] = $all_userdata[0]['u_status'];
					$userdata['social'] = $all_userdata[0]['social'];
					$userdata['social_dp'] = $all_userdata[0]['social_dp'];
					$userdata['social_network'] = $all_userdata[0]['social_network'];
					$userdata['oauth_uid'] = $all_userdata[0]['oauth_uid'];
					$userdata['last_noti_date'] = $all_userdata[0]['last_noti_date'];
					$CI->session->set_userdata($userdata);
					if($CI->session->userdata('u_id') == true)
					{
						redirect('home');
					}
					else
					{
						//echo 'else here';
						c_flash('alert-warning','Soory youo can\'t login right now please try again.' ,'signup');
					}
					
				}
				else if($all_userdata[0]['u_status'] == 2)
				{
					c_flash('alert-warning','Your account has blocked, if you have any question fell free to ask.' ,'signup');
					
				}
			}
			else
			{
				c_flash('alert-warning','Oops something going wrong please try again. ' ,'signup');
				
			}
		}
		else
		{
			c_flash('alert-warning','Oops something going wrong please try again. ' ,'signup');
			
		}
    }
	
}//fb ends here


if (!function_exists('insert_fb'))
{
    function insert_fb($data)
    {
        $CI = & get_instance();
        $CI->load->library('session');
		$CI->load->model('mod_registration');
		$CI->load->helper('url');
		$insert_fb = $CI->mod_registration->insert_fb($data);
		if(is_integer($insert_fb))
		{
			$all_userdata = $CI->mod_registration->all_userdata($data['email']);
			if(count($all_userdata) == 1)
			{
				if($all_userdata[0]['u_status'] == 1)
				{
					$userdata = array();
					$userdata['u_id'] = $all_userdata[0]['u_id'];
					$userdata['fname'] = $all_userdata[0]['fname'];
					$userdata['lname'] = $all_userdata[0]['lname'];
					$userdata['email'] = $all_userdata[0]['email'];
					$userdata['u_dp'] = $all_userdata[0]['u_dp'];
					$userdata['u_address'] = $all_userdata[0]['u_address'];
					$userdata['u_mobile'] = $all_userdata[0]['u_mobile'];
					$userdata['u_dob'] = $all_userdata[0]['u_dob'];
					$userdata['u_gender'] = $all_userdata[0]['u_gender'];
					$userdata['last_login'] = $all_userdata[0]['last_login'];
					$userdata['teacher'] = $all_userdata[0]['teacher'];
					$userdata['u_type'] = $all_userdata[0]['u_type'];
					$userdata['u_created'] = $all_userdata[0]['u_created'];
					$userdata['u_status'] = $all_userdata[0]['u_status'];
					$userdata['social'] = $all_userdata[0]['social'];
					$userdata['social_dp'] = $all_userdata[0]['social_dp'];
					$userdata['social_network'] = $all_userdata[0]['social_network'];
					$userdata['oauth_uid'] = $all_userdata[0]['oauth_uid'];
					$CI->session->set_userdata($userdata);
					if($CI->session->userdata('u_id') == true)
					{
						redirect('home');
					}
					else
					{
						c_flash('alert-warning','Soory youo can\'t login right now please try again.' ,'signup');
					}
					
				}
				else if($all_userdata[0]['u_status'] == 2)
				{
					c_flash('alert-warning','Your account has blocked, if you have any question fell free to ask.' ,'signup');
				}
			}
			else
			{
				c_flash('alert-warning','Oops something going wrong please try again. ' ,'signup');
				
			}
		}
		else
		{
			c_flash('alert-warning','Oops something going wrong please try again. ' ,'signup');
			
		}
    }
	
}//insert_fb ends here



if (!function_exists('update_googleplus'))
{
    function update_googleplus($data)
    {
        $CI = & get_instance();
        $CI->load->library('session');
		$CI->load->model('mod_registration');
		$CI->load->helper('url');
		$update_googleplus = $CI->mod_registration->update_googleplus($data);
		if($update_googleplus)
		{
			$all_userdata = $CI->mod_registration->all_userdata($data['email']);
			if(count($all_userdata) == 1)
			{
				if($all_userdata[0]['u_status'] == 1)
				{
					$userdata = array();
					$userdata['u_id'] = $all_userdata[0]['u_id'];
					$userdata['fname'] = $all_userdata[0]['fname'];
					$userdata['lname'] = $all_userdata[0]['lname'];
					$userdata['email'] = $all_userdata[0]['email'];
					$userdata['u_dp'] = $all_userdata[0]['u_dp'];
					$userdata['u_address'] = $all_userdata[0]['u_address'];
					$userdata['u_mobile'] = $all_userdata[0]['u_mobile'];
					$userdata['u_dob'] = $all_userdata[0]['u_dob'];
					$userdata['u_gender'] = $all_userdata[0]['u_gender'];
					$userdata['last_login'] = $all_userdata[0]['last_login'];
					$userdata['teacher'] = $all_userdata[0]['teacher'];
					$userdata['u_type'] = $all_userdata[0]['u_type'];
					$userdata['u_created'] = $all_userdata[0]['u_created'];
					$userdata['u_status'] = $all_userdata[0]['u_status'];
					$userdata['social'] = $all_userdata[0]['social'];
					$userdata['social_dp'] = $all_userdata[0]['social_dp'];
					$userdata['social_network'] = $all_userdata[0]['social_network'];
					$userdata['oauth_uid'] = $all_userdata[0]['oauth_uid'];
					$userdata['last_noti_date'] = $all_userdata[0]['last_noti_date'];

					$CI->session->set_userdata($userdata);
					if($CI->session->userdata('u_id') == true)
					{
						redirect(site_url());
					}
					else
					{
						c_flash('alert-warning','Soory youo can\'t login right now please try again.' ,'signup');
					}
					
				}
				else if($all_userdata[0]['u_status'] == 2)
				{
					c_flash('alert-warning','Your account has blocked, if you have any question fell free to ask.' ,'signup');
					
				}
			}
			else
			{
				c_flash('alert-warning','Oops something going wrong please try again. ' ,'signup');
				
			}
		}
		else
		{
			c_flash('alert-warning','Oops something going wrong please try again. ' ,'signup');
			
		}
    }
	
}//update_googleplus ends here


if (!function_exists('insert_googleplus'))
{
    function insert_googleplus($data)
    {
        $CI = & get_instance();
        $CI->load->library('session');
		$CI->load->model('mod_registration');
		$CI->load->helper('url');
		$insert_googleplus = $CI->mod_registration->insert_googleplus($data);
		if(is_integer($insert_googleplus))
		{
			$all_userdata = $CI->mod_registration->all_userdata($data['email']);
			if(count($all_userdata) == 1)
			{
				if($all_userdata[0]['u_status'] == 1)
				{
					$userdata = array();
					$userdata['u_id'] = $all_userdata[0]['u_id'];
					$userdata['fname'] = $all_userdata[0]['fname'];
					$userdata['lname'] = $all_userdata[0]['lname'];
					$userdata['email'] = $all_userdata[0]['email'];
					$userdata['u_dp'] = $all_userdata[0]['u_dp'];
					$userdata['u_address'] = $all_userdata[0]['u_address'];
					$userdata['u_mobile'] = $all_userdata[0]['u_mobile'];
					$userdata['u_dob'] = $all_userdata[0]['u_dob'];
					$userdata['u_gender'] = $all_userdata[0]['u_gender'];
					$userdata['last_login'] = $all_userdata[0]['last_login'];
					$userdata['teacher'] = $all_userdata[0]['teacher'];
					$userdata['u_type'] = $all_userdata[0]['u_type'];
					$userdata['u_created'] = $all_userdata[0]['u_created'];
					$userdata['u_status'] = $all_userdata[0]['u_status'];
					$userdata['social'] = $all_userdata[0]['social'];
					$userdata['social_dp'] = $all_userdata[0]['social_dp'];
					$userdata['social_network'] = $all_userdata[0]['social_network'];
					$userdata['oauth_uid'] = $all_userdata[0]['oauth_uid'];
					$CI->session->set_userdata($userdata);
					if($CI->session->userdata('u_id')== true)
					{
						redirect('home');
					}
					else
					{
						c_flash('alert-warning','Soory youo can\'t login right now please try again.' ,'signup');
					}
					
				}
				else if($all_userdata[0]['u_status'] == 2)
				{
					c_flash('alert-warning','Your account has blocked, if you have any question fell free to ask.' ,'signup');
				}
			}
			else
			{
				c_flash('alert-warning','Oops something going wrong please try again. ' ,'signup');
				
			}
		}
		else
		{
			c_flash('alert-warning','Oops something going wrong please try again. ' ,'signup');
			
		}
    }
	
}//insert_googleplus ends here



if (!function_exists('get_user_ip'))
{
    function get_user_ip()
    {
        $CI = & get_instance();
        $ip = $CI->input->ip_address();
        if (!$CI->input->valid_ip($ip))
        {
            return '000.000.0.0';
        }
        else 
        {
        	return $ip;
        }
        
    }
}

if (!function_exists('add_course_view'))
{
    function add_course_view($course_id,$user_ip)
    {
        $CI = & get_instance();
       	//$CI->load->library('session');
       	$check_count = $CI->db->get_where('course_views',array('course_id'=>$course_id,'ip_address'=>$user_ip))->result_array();
       //	var_dump($check_count);
       	if (count($check_count) == 0)
       	{
       		$insert_count  = array(
	       				'course_id'=>$course_id,
	       				'ip_address'=>$user_ip,
	       				'cv_created'=>date('Y-m-d H:i:s')
	       			);
       		if (is_logedin())
       		{
       			$insert_count['user_id'] = user_id(); 
       		} 
       		
       		$CI->db->insert('course_views',$insert_count);

       		/*if ($check_count[0]['ip_address'] != $user_ip)
       		{
	       		$old = $check_count[0]['count'];
	       		$CI->db->where(array('course_id'=>$course_id,'ip_address'=>$user_ip));
	       		$CI->db->update('course_views',array('count'=>$old+1));
       		} */
       		
       	}
        
    }
}

if (!function_exists('add_video_view'))
{
    function add_video_view($video_id,$user_ip)
    {
        $CI = & get_instance();
       	//$CI->load->library('database');
       	$check_count = $CI->db->get_where('video_views',array('video_id'=>$video_id,'vv_ip'=>$user_ip))->result_array();
       	if (count($check_count) == 0)
       	{
       		$insert_count  = array(
       				'video_id'=>$video_id,
       				'vv_ip'=>$user_ip,
       				'vv_created'=>date('Y-m-d H:i:s')
       			);
       		if (is_logedin())
       		{
       			$insert_count['user_id'] = user_id();
       		} 
       		
       		$CI->db->insert('video_views',$insert_count);
       	}
        
    }
}

if (!function_exists('course_views'))
{
    function course_views($course_id)
    {
        $CI = & get_instance();
       	//$CI->load->library('database');
       	$check_count = $CI->db->get_where('course_views',array('course_id'=>$course_id));
       	if ($check_count->num_rows() > 0 )
       	{
       		return $check_count->num_rows();
       	}
       	else
       	{
       		return 0;
       	}
        
    }
}

if (!function_exists('video_views'))
{
    function video_views($video_id)
    {
        $CI = & get_instance();
       	//$CI->load->library('database');
       	$check_count = $CI->db->get_where('video_views',array('video_id'=>$video_id));
       	if ($check_count->num_rows() > 0 )
       	{
       		return $check_count->num_rows();
       	}
       	else
       	{
       		return 0;
       	}
        
    }
}

if (!function_exists('user_img'))
{
    function user_img($u_id)
    {
        $CI = & get_instance();
       	$CI->load->library('session');
       	$CI->load->helper('url');

		$userdata = $CI->db->get_where('users',array('u_id'=>$u_id))->result_array();       	
       	$social = $CI->session->userdata('social');
       	if ($userdata[0]['social'])
       	{
       		return $userdata[0]['social_dp'];
       	}
       	else
       	{
       		return base_url('assets/images/users/'.$userdata[0]['u_dp']);
       	}
    }
}

if (!function_exists('u_s_data'))
{
    function u_s_data($key)
    {
        $CI = & get_instance();
       	$CI->load->library('session');
       	$CI->load->helper('url');
       	if ($CI->session->userdata($key))
       	{
       		return $CI->session->userdata($key);
       	}
       	else
       	{
       		return FALSE;
       	}
       	
        
    }
}

if (!function_exists('v_comment_reply'))
{
    function v_comment_reply($comment_id)
    {
        $CI = & get_instance();
       	$CI->load->model('mod_courses');
       return 	$check_rep = $CI->mod_courses->v_comment_reply($comment_id);
       	// if ($check_rep->num_rows() > 0)
       	// {
       	// 	return $check_rep;
       	// }
    }
}

if (!function_exists('get_comments'))
{
    function get_comments($blog_id)
    {
        $CI = & get_instance();
       	return $query = $CI->db->get_where('blog_tags',array('blog_id'=>$blog_id));

       	// if ($check_rep->num_rows() > 0)
       	// {
       	// 	return $check_rep;
       	// }
    }
}


if (!function_exists('totsl_blog_comment'))
{
    function totsl_blog_comment($blog_id)
    {
        $CI = & get_instance();
       	return $query = $CI->db->get_where('blog_comments',array('blog_id'=>$blog_id))->num_rows();

       	// if ($check_rep->num_rows() > 0)
       	// {
       	// 	return $check_rep;
       	// }
    }
}


if (!function_exists('add_blog_view'))
{
    function add_blog_view($blog_id,$user_ip)
    {
        $CI = & get_instance();
        //$CI->load->library('session');
        $check_count = $CI->db->get_where('blog_views',array('blog_id'=>$blog_id,'bv_ip'=>$user_ip))->result_array();
       //   var_dump($check_count);
        if (count($check_count) == 0)
        {
            $insert_count  = array(
                        'blog_id'=>$blog_id,
                        'bv_ip'=>$user_ip,
                        'bv_created'=>date('Y-m-d H:i:s')
                    );
            
            /*if (is_logedin())
            {
                $insert_count['user_id'] = user_id(); 
            } */
            
            $CI->db->insert('blog_views',$insert_count);

            /*if ($check_count[0]['ip_address'] != $user_ip)
            {
                $old = $check_count[0]['count'];
                $CI->db->where(array('course_id'=>$course_id,'ip_address'=>$user_ip));
                $CI->db->update('course_views',array('count'=>$old+1));
            } */
            
        }
        
    }
}

if (!function_exists('blog_replies'))
{
    function blog_replies($comment_id)
    {
        $CI = & get_instance();
        $CI->load->helper('url');
        return  $check_wishlist = $CI->db->select('bc_replies.*,users.*')
        ->from('bc_replies')
        ->join('users','users.u_id = bc_replies.user_id')
        ->where('bc_replies.comment_id',$comment_id)
        ->get();
    }
} 

if (!function_exists('get_section_images'))
{
    function get_section_images($city_id)
    {
        $CI = & get_instance();
        $section = $CI->db->select('*')
        ->from('section_images')
        ->where('section_id',$city_id)
        ->get();
        if ($section->num_rows() > 0)
        {
           return $section;
        }
        else
        {   
            return FALSE;
        }
        
    } 
}

if (!function_exists('timeago'))
{
    function timeago($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}

if (!function_exists('get_blog_tags'))
{
    function get_blog_tags()
    {
        $CI = & get_instance();
        $CI->load->helper('url');
        return  $check_wishlist = $CI->db->select('*')
        ->from('blog_tags')
        ->where('tag_status',1)
        ->group_by('tag_name')
        ->limit(8)
        ->get();
    }
}


if ( ! function_exists('total_videos'))
{
    function total_videos()
    {
	  	//echo 'wroking..';  	
    	$CI = & get_instance();
    	return $CI->db->get_where('videos',array('v_status'=>1))->num_rows();
    } 
}


if (!function_exists('blog_views'))
{
    function blog_views($blog_id)
    {
        $CI = & get_instance();
        $CI->load->helper('url');
        return  $blog_views = $CI->db->select('bv_ip')
        ->from('blog_views')
        ->where('blog_id',$blog_id)
        ->group_by('bv_ip')
        ->get()
        ->num_rows();
    }
}


