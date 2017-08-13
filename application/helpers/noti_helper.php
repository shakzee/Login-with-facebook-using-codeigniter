<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('insert_noti'))
{
    function insert_noti($data)
    {
        $notiarray = array(
                'sender_id' => user_id(), 
                'n_message' => $data['n_message'], 
                'n_link' => $data['n_link'], 
                'n_created' => date('Y-m-d H:i:s'), 
                'receiver_id' => $data['receiver_id'], 
                'mod_type' => $data['mod_type'], 
                'n_type' => $data['n_type'], 
                'nt_id' => $data['video_id'], 
            );
        if(!empty($data['allow_user']))
        {
          $notiarray['allow_user'] =  $data['allow_user'];
        }

        if ($notiarray['sender_id'] != $notiarray['receiver_id'])
        {
            $CI  = & get_instance();
            $CI->db->insert('notifications',$notiarray);
        }
    } 

}


if ( ! function_exists('get_videos_likes'))
{
    function get_videos_likes($data)
    {
        $CI  = & get_instance();
        $where = array('video_id'=> $data['video_id'],'like'=>1);
        echo $CI->db->get_where('video_like',$where)->num_rows();

    } 

}


if ( ! function_exists('get_videos_dlikes'))
{
    function get_videos_dlikes($data)
    {
        $CI  = & get_instance();
        $where = array('video_id'=> $data['video_id'],'dlike'=>1);
        echo $CI->db->get_where('video_like',$where)->num_rows();

    } 

}

if (!function_exists('add_pro_course_view'))
{
    function add_pro_course_view($pcourse_id,$user_ip)
    {
        $CI = & get_instance();
        //$CI->load->library('session');
        $check_count = $CI->db->get_where('pcourses_views',array('p_course_id'=>$pcourse_id,'ip_address'=>$user_ip))->result_array();
       //   var_dump($check_count);
        if (count($check_count) == 0)
        {
            $insert_count  = array(
                        'p_course_id'=>$pcourse_id,
                        'ip_address'=>$user_ip,
                        'pv_created'=>date('Y-m-d H:i:s')
                    );
            if (is_logedin())
            {
                $insert_count['user_id'] = user_id(); 
            } 
            
            $CI->db->insert('pcourses_views',$insert_count);

            /*if ($check_count[0]['ip_address'] != $user_ip)
            {
                $old = $check_count[0]['count'];
                $CI->db->where(array('course_id'=>$course_id,'ip_address'=>$user_ip));
                $CI->db->update('course_views',array('count'=>$old+1));
            } */
            
        }
        
    }
}

if (!function_exists('pro_course_views'))
{
    function pro_course_views($course_id)
    {
        $CI = & get_instance();
        //$CI->load->library('database');
        $check_count = $CI->db->get_where('pcourses_views',array('p_course_id'=>$course_id));
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

if (!function_exists('get_total_noti'))
{
    function get_total_noti($user_id,$last_noti_date)
    {
        $allow_user = 0;
        $CI = & get_instance();
        //$CI->load->library('database');
        return $check_count = 
            $CI->db->select('notifications.*,users.*')
            ->from('notifications')
            ->join('users','users.u_id = notifications.receiver_id')
            ->where('u_id',$user_id)
            ->where('notifications.n_created >',$last_noti_date)
            //->or_where('notifications.allow_user',$allow_user)
            ->get()
            ->num_rows();
        
    }
}


if (!function_exists('get_session_element'))
{
    function get_session_element($session_key)
    {
        $CI = & get_instance();
        $CI->load->library('session');
        if ($CI->session->userdata('u_id') == TRUE) 
        {
          return  $CI->session->userdata($session_key);
        }
        else
        {
            return FALSE;
        }
        

    }
}

if (!function_exists('date_time'))
{
    function date_time()
    {
        return date('Y-m-d H:i:s');
    }
}




if (!function_exists('time_ago'))
{
 
    function time_ago($datetime, $full = false) {
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

if (!function_exists('get_notification'))
{
    function get_notification($user_id,$limit)
    {
        $allow_user = 0;
        $CI = & get_instance();
        //$CI->load->library('database');
        return  $CI->db->select('notifications.*,users.*')
            ->from('notifications')
            ->join('users','users.u_id = notifications.sender_id')
            ->where('notifications.receiver_id',$user_id)
            //->or_where('notifications.allow_user',$allow_user)
             ->order_by('notifications.n_id','desc')
            ->limit($limit)
            ->get();
        

    }
}

if (!function_exists('get_course_wish'))
{
    function get_course_wish($user_id,$course_id)
    {
        $allow_user = 0;
        $CI = & get_instance();
        //$CI->load->library('database');
        return  $CI->db->get_where('course_wishlist',array('course_id'=>$course_id,'user_id'=>$user_id))->result_array();
        

    }
}

if (!function_exists('get_pro_course_wish'))
{
    function get_pro_course_wish($user_id,$pro_course_id)
    {
        $allow_user = 0;
        $CI = & get_instance();
        //$CI->load->library('database');
        return  $CI->db->get_where('pcourse_wishlist',array('pro_course_id'=>$pro_course_id,'user_id'=>$user_id))->result_array();
        

    }
}