<?php
class Users extends CI_Model
{


public function get_all_users()
	{
		// return $this->db->get_where('products');
		return $this->db->select('*')
				->from('my_users')
				->get();
		
	}

	public function fatch_all_users($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query =  $this->db->select('*')
				->from('my_users')
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
	
}