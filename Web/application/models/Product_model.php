<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function get_all()
	{
		$this->db->select('products.id,products.name,categories.name as categories_name,products.description');
		$this->db->from('products');
		$this->db->join('categories', 'categories.id = products.category');
        return $this->db->get()->result();
	}
	public function create($data)
	{
		$this->db->insert('products', $data);
	}
	public function delete($data)
	{
		$this->db->where('id',$data);
		$this->db->delete('products');
		redirect(base_url().'products','refresh');
	}
	public function get_id($id)
	{
		$this->db->select('*');
        $this->db->from('products');
        $this->db->where('id', $id);
        return $this->db->get()->row();
	}
	public function cat()
	{
		$this->db->select('*');
		$this->db->from('categories');
		return $this->db->get()->result();
	}
	public function edit($data,$id)
	{
		$this->db->where('id', $id);
        $this->db->update('products', $data);
        return $this->db->affected_rows();
    }
}

/* End of file Categories_model.php */
/* Location: ./application/models/Categories_model.php */