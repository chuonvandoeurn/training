<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_model extends CI_Model {

	public function get_all()
	{
		$this->db->select('*');
        return $this->db->get('admin')->result();
	}
	public function create($data)
	{
		$this->db->insert('admin', $data);
		redirect(base_url().'sales','refresh');
	}
// 	public function delete($data)
// 	{
// 		$this->db->where('Code',$data);
// 		$this->db->delete('admin');
// 		redirect(base_url().'sales','refresh');
// 	}
// 	public function get_id($code)
// 	{
// 		$this->db->select('*');
//         $this->db->from('admin');
//         $this->db->where('Code', $code);
//         return $this->db->get()->row();
// 	}
// 	public function edit($data,$id)
// 	{
// 		$this->db->where('Code', $id);
//         $this->db->update('admin', $data);
//         return $this->db->affected_rows();
//     }
}

