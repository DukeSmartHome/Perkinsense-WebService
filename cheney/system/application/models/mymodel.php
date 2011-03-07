<?php

class Mymodel extends Model {
  
  function Mymodel()
  {
    parent::Model();
  }
  
    function get_records()
  {
    $query = $this->db->get('events');
    return $query->result();
  }
  
  function add_record($device_id,$active,$timestamp)
  {
    echo $active;
    $data=array(
      'device_id'=>$device_id,
      'active'=>$active,
      'timestamp'=>$timestamp
    );
  
    $count=$this->db->insert('events',$data);
    echo $count;
    return;
  }
  
  function update_record($data)
  {
    $this->db->where('id',12);
    $this->db->update('data',$data);
  }
  
  function delete_row()
  {
    $this->db->where('id',$this->uri->segment(3));
    $this->db->delete('data');
  }
  
}