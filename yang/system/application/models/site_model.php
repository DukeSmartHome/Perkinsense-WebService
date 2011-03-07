<?php

class Site_model extends Model
{

	function Site_model(){
		parent::Model();
	}
	
	function get_records()
	{
		$query=$this->db->get('events');
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
		$this->db->where('id',$this->uri->segment(3));
		$this->db->update('events',$data);
	}
	
	function delete_row()
	{
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('events');
	}

}