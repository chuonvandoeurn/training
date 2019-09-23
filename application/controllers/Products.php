<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model('product_model','product');
    }

    public function index()
    { 
         $data['products']= $this->product->get_all();
         $this->load->view('product/index', $data);
    }
    public function create()
    {
        if (!empty($this->input->post('submit'))) {
            $product=array(
            'name'=>$this->input->post('name'),
            'category'=>$this->input->post('category'),
            'description'=>$this->input->post('description')
            );
        $this->product->create($product);
        }
         $data1['categories']=$this->product->cat();
        $this->load->view('product/create',$data1);
    }
    
    public function delete($data)
    {
       $this->product->delete($data);
    }
   
    public function edit($id)
    {
         if (!empty($this->input->post('submit')))
        {
           $product=array(
            'name'=>$this->input->post('name'),
            'category'=>$this->input->post('category'),
            'description'=>$this->input->post('description')
            ); 
            if($this->product->edit($product,$id) > 0)
                  redirect(base_url().'products','refresh');
        }
        $data['product']=$this->product->get_id($id);
        $data1['categories']=$this->product->cat();
        // $data2 = array('$data','$data1');
        $data2 = $data + $data1;
        $this->load->view('product/edit',$data2 );
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

