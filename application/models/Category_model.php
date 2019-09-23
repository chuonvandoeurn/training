<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function get_all()
	{
		$this->db->select('*');
        return $this->db->get('categories')->result();
	}
	public function create($data)
	{
		$this->db->insert('categories', $data);
		redirect(base_url().'categories','refresh');
	}
	public function delete($data)
	{
		$this->db->where('id',$data);
		$this->db->delete('categories');
		redirect(base_url().'categories','refresh');
	}
	public function get_id($id)
	{
		$this->db->select('*');
        $this->db->from('categories');
        $this->db->where('id', $id);
        return $this->db->get()->row();
	}
	public function edit($data,$id)
	{
		$this->db->where('id', $id);
        $this->db->update('categories', $data);
        return $this->db->affected_rows();
    }
}

/* End of file Categories_model.php */
/* Location: ./application/models/Categories_model.php */