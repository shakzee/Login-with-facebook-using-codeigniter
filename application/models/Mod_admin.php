<?php
class Mod_admin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function checkadmin($value)
	{
		$sql = "SELECT * FROM admin INNER JOIN users ON admin.user_id = users.u_id WHERE email=? AND password=?";
		return $this->db->query($sql,array($value['email'],$value['password']))->result_array();
		//return 
	}

	public function checkcategroy($value)
	{
		return $this->db->get_where('categories',array('c_name'=>$value['c_name']));
	}


	public function addcategory($value)
	{
		return $this->db->insert('categories',$value);
	}
	public function get_products()
	{
		return $this->db->get_where('categories',array('c_status'=>1));
	}


	public function check_product($value)
	{
		return $this->db->get_where('products',
			array(
				'p_name'=>$value['p_name'],
				'cat_id'=>$value['cat_id'],
				'p_manufa'=>$value['p_manufa']
			)
		);
	}


	public function add_product($value)
	{
		return $this->db->insert('products',$value);
	}

	public function get_all_categories()
	{
		return $this->db->get_where('categories');
	}

	public function fatch_allcategory()
	{
		$query = $this->db->get_where('categories');
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

	public function get_all_products()
	{
		// return $this->db->get_where('products');
		return $this->db->select('products.*,categories.*')
		->from('products')
		->join('categories','categories.c_id = products.cat_id')
		->get();
	}

	public function fatch_allproducts()
	{
		$query = $this->db->select('products.*,categories.*')
		->from('products')
		->join('categories','categories.c_id = products.cat_id')
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




	public function editcategory($value)
	{
		return $this->db->get_where('categories',array('c_id'=>$value))->result_array();
	}

	public function productedit($value)
	{
		//return $this->db->get_where('products',array('p_id'=>$value))->result_array();
		return $this->db->select('products.*,categories.*')
		->from('products')
		->join('categories','categories.c_id = products.cat_id')
		->where('products.p_id',$value)
		->get()->result_array();
	}


	public function edit_category($value,$c_id)
	{
		$this->db->where('c_id',$c_id);
		return $this->db->update('categories',$value);
		//return $this->db->insert('categories',$value);
	}

	public function editproduct($value,$p_id)
	{
		//return $this->db->insert('products',$value);
		$this->db->where('p_id',$p_id);
		return $this->db->update('products',$value);
	}

	public function deletecategory($value)
	{
		$this->db->where('c_id',$value);
		return $this->db->delete('categories');
	}
	public function deleteproduct($value)
	{
		$this->db->where('p_id',$value);
		return $this->db->delete('products');
	}

	public function get_product_name($value)
	{
		return $this->db->select('*')
		->from('products')
		->like('p_name',$value)
		->get();
	}



	public function check_model($value)
	{
		return $this->db->get_where('models',
			array(
				'm_name'=>$value['m_name'],
				'product_id'=>$value['product_id']
			)
		);
	}


	public function add_model($value)
	{
		return $this->db->insert('models',$value);
	}



	public function get_all_modals()
	{
		// return $this->db->get_where('products');
		return $this->db->select('models.*,products.*')
		->from('models')
		->join('products','products.p_id = models.product_id')
		->get();
	}

	public function fatch_all_models()
	{
		$query = $this->db->select('models.*,products.*')
		->from('models')
		->join('products','products.p_id = models.product_id')
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


	public function model_exist($value)
	{
		//return $this->db->get_where('products',array('p_id'=>$value))->result_array();
		return $this->db->select('models.*,products.*')
		->from('models')
		->join('products','products.p_id = models.product_id')
		->where('models.m_id',$value)
		->get()->result_array();
	}

	public function edit_model($value,$m_id)
	{
		$this->db->where('m_id',$m_id);
		return $this->db->update('models',$value);
		//return $this->db->insert('models',$value);
	}

	public function deletemodel($value)
	{
		$this->db->where('m_id',$value);
		return $this->db->delete('models');
	}

	public function get_model_name($value)
	{
		return $this->db->select('*')
		->from('models')
		->like('m_name',$value)
		->get();
	}

	public function check_spac($value)
	{
		return $this->db->get_where('specs',array(
							'sp_name'=>$value['sp_name'],
							'model_id'=>$value['model_id']
					)
				);
	}

	public function add_spac_name($value)
	{
		$this->db->insert('specs',$value);
		return $this->db->insert_id();
	}

	public function add_spc_values($value)
	{
		return $this->db->insert_batch('specs_values',$value);
	}


	public function get_all_specs()
	{
		// return $this->db->get_where('products');
		return $this->db->select('specs.*,models.*')
		->from('specs')
		->join('models','models.m_id = specs.model_id')
		->join('specs_values','specs_values.spact_id = specs.s_id')
		->get();
	}

	public function fatch_all_specs()
	{
		$query = $this->db->select('specs.*,models.*')
		->from('specs')
		->join('models','models.m_id = specs.model_id')
		// ->join('specs_values','specs_values.spact_id = specs.s_id')
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

	public function deletespec($value)
	{
		$this->db->where('s_id',$value);
		return $this->db->delete('specs');
	}

	public function edit_spec($value)
	{
		//return $this->db->get_where('specs',array('s_id'=>$value))->result_array();
		return $this->db->select('specs.*,models.*')
		->from('specs')
		->join('models','models.m_id = specs.model_id')
		->where('specs.s_id',$value)
		->get()
		->result_array();
	}

	public function edit_spac_name($value,$s_id)
	{
		$this->db->where('s_id',$s_id);
		return $this->db->update('specs',$value);
	}

	public function specvalues($value)
	{
		return $this->db->select('specs_values.*,specs.*,models.*')
		->from('specs_values')
		->join('specs','specs.s_id = specs_values.spact_id')
		->join('models','models.m_id = specs.model_id')
		->where('specs.s_id',$value)
		->get();
	}	




}//class end shere

