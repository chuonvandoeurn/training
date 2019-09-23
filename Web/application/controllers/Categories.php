<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model('category_model','category');
    }

    public function index()
    { 
         $data['categories']= $this->category->get_all();
         $this->load->view('category/index', $data);
    }
    public function create()
    {
        if (!empty($this->input->post('submit'))) {
            $category=array(
            'name'=>$this->input->post('name'),
            'description'=>$this->input->post('description')
            );
            $this->category->create($category);
        $message=array();
        if(true) $message=array('status'=>'save');
        else $message = array('status' =>'not save' );
        //echo json_encode($message);
        }
        $this->load->view('category/create');
      
    }
    
    public function delete($data)
    {
       $this->category->delete($data);
    }
   
    public function edit($id)
    {
         if (!empty($this->input->post('submit')))
        {
            $category=array(
                'name'=>$this->input->post('name'),
                'description'=>$this->input->post('description')
            );    
            if($this->category->edit($category,$id) > 0)
                  redirect(base_url().'categories','refresh');
        }
        $data['category']=$this->category->get_id($id);
        $this->load->view('category/edit', $data);
    }

    // public function create()
    // {
    //     $category= array(
    //         array(
    //         'name'=>'thi',
    //         'description'=>'fuck boy'
    //         ),
    //         array(
    //         'name'=>'thyda',
    //         'description'=>'hole boy'
    //         ),
    //         array(
    //         'name'=>'that',
    //         'description'=>'hey boy'
    //         )
    //     );
    //     $this->db->insert_batch('categories', $category);
        
    // }
    // public function delete()
    // {
    //     $this->db->where('id>', 5);
    //     $this->db->delete('categories');
    // }
   // public function index()
    // {
       
    //    // $categories= $this->db->query('SELECT * FROM categories')->result_array();
    //    // foreach ($categories as  $category) {
    //    //          echo $category['id']."<br>";
    //    //          echo $category['name']."<br>";
    //    //          echo $category['description']."<br>";                                                         
    //    // }
    //    // $this->db->select('id')
    //    // ->select('name')
    //    // ->select('description');
    //    // $this->db->from('categories');
    //    // $categories=$this->db->get()->result();
    //    // foreach ($categories as  $category) {
    //    //     echo $category->id."<br>";
    //    //     echo $category->name."<br>";
    //    //     echo $category->description."<br>";
    //    // }
      
        
    // }
}

