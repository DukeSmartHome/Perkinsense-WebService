<?php

class Receiver extends Controller 
{
    function Receiver(){
      parent::Controller(); 
    }
    
    function index(){
      $data['rows']=$this->site_model->get_records();
      
      $this->load->view('test_view', $data);
    }
    
    
    function event(){
      $device_id=$_POST['device_id'];
      $active=$_POST['active'];
      $timestamp=$_POST['timestamp'];
      if(isset($device)&&isset($active)&&isset($timestamp)){
      		$this->site_model->add_record($device_id,$active,$timestamp);
	}
	$this->index();
    }
    
  // function index()
  // {
  //   $data = array();
  //   
  //   if($query = $this->site_model->get_records())
  //   {
  //     $data['records'] = $query;
  //   }
  //   
  //   $this->load->view('options_view', $data);
  // }
  // 
  // function create()
  // {
  //   $data = array(
  //     'title' => $this->input->post('title'),
  //     'content' => $this->input->post('content')
  //   );
  //   
  //   $this->site_model->add_record($data);
  //   $this->index();
  // }
  // 
  // function update()
  // {
  //   $data = array(
  //     'title' => 'My Freshly UPDATED Title',
  //     'content' => 'Content should go here; it is updated.' 
  //   );
  //   
  //   $this->site_model->update_record($data);
  // }
  // 
  // 
	  function delete()
	  {
	    $this->site_model->delete_row();
	    $this->index();
	  }
}