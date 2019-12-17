<?php

class User_model extends CI_Model
{
	public function create($formArray)
	{
              $this->db->insert('users', $formArray);
	}

	public function selectAll()
	{
		      $users=$this->db->get('users');
		      return $users->result_array();
	}

	public function selectOne($id)
	{
		      $this->db->where('user_id', $id);
		      $users=$this->db->get('users');
		      return $users->row_array();
	}

	public function update($id, $formArray)
	{
		     $this->db->where('user_id', $id);
             $this->db->update('users', $formArray);
    }

    public function delete($id)
    {
	    	 $this->db->where('user_id', $id);
	         $this->db->delete('users');
    }
}
?>