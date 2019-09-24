<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       $this->load->model('Sale_model','sale');
    }

    // public function index()
    // { 
    //      $data['sales']= $this->sale->get_all();
    //      $this->load->view('sale/index', $data);
    // }
    public function create()
    {
        if (!empty($this->input->post('submit'))) {
            $sale=array(
            'code'=>$this->input->post('code'),
            'name'=>$this->input->post('name'),
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password')
            );
            $this->sale->create($sale);
        $message=array();
        if(true) $message=array('status'=>'save');
        else $message = array('status' =>'not save' );
        //echo json_encode($message);
        }
        $this->load->view('sale/create');      
    }
    
    public function delete($data)
    {
       $this->sale->delete($data);
    }
   
    public function edit($id)
    {
         if (!empty($this->input->post('submit')))
        {
            $sale=array(
                'name'=>$this->input->post('name'),
                'description'=>$this->input->post('description')
            );    
            if($this->sale->edit($sale,$id) > 0)
                  redirect(base_url().'sales','refresh');
        }
        $data['sale']=$this->sale->get_id($id);
        $this->load->view('sale/edit', $data);
    }
 }

