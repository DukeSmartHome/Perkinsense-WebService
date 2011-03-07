<?php

class Receiver extends Controller {
  
  function Receiver()
  {
    parent::Controller();
  }
  
  
  function index()
  {
    $data = array();
    
    if($query = $this->mymodel->get_records())
    {
      $data['records'] = $query;
    }
    
    print_r($data);
   
    //$this->load->view('options_view', $data);
  }
  
  function event()
  {
    $data = array(
      'device_id' => $this->input->post('device_id'),
      'active' => $this->input->post('active'),
      'timestamp' => $this->input->post('timestamp')
    );
    
    
    $this->mymodel->add_record($data);
  
  }
  
  /*
  function create()
  {
    $data = array(
      'title' => $this->input->post('title'),
      'content' => $this->input->post('content')
    );
    
    $this->site_model->add_record($data);
    $this->index();
  }
  
  function update()
  {
    $data = array(
      'title' => 'My Freshly UPDATED Title',
      'content' => 'Content should go here; it is updated.' 
    );
    
    $this->site_model->update_record($data);
  }
  
  
  function delete()
  {
    $this->site_model->delete_row();
    $this->index();
  }
  */
  
  
  
  
  
}
