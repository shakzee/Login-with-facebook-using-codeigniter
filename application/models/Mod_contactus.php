<?php
class Mod_contactus extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_courses()
	{
		//$this->db->get_where('courses',array(''=>))
	}

	public function submitquery($value)
	{
		return $this->db->insert('contactus',$value);
	}

}//class ends here
