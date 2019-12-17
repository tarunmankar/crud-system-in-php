<?php

class Users extends CI_Controller
{
	public function index()
	{
    		$this->load->model('User_model');
    		$data['users']=$this->User_model->selectAll();
    		$this->load->view('list', $data);
	}

/* ---------------------------------------------------*/
	
  public function create()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','E-mail','required');

        if($this->form_validation->run()==true)
        {
        	  $name= $this->input->post('name');
              $email= $this->input->post('email');
              $created_at= date('y-m-d');
              $formArray=array('name' => $name, 'email'=> $email, 'created_at'=> $created_at);
        	  $this->load->model('User_model');
        	  $this->User_model->create($formArray);
        	  $this->session->set_flashdata('success','Record added Succesfully');
        	  redirect(base_url().'index.php/users');
        }
        else
        {
           $this->load->view('create');
        }
	}
  
  /* ---------------------------------------------------*/

  public function update($id)
  {
    $this->load->model('User_model');
    $data['users']=$this->User_model->selectOne($id);
   
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('email','E-mail','required');

        if($this->form_validation->run()==true)
        {
            $name= $this->input->post('name');
            $email= $this->input->post('email');
            $created_at= date('y-m-d'); 
            $formArray=array('name' => $name, 'email'=> $email, 'created_at'=> $created_at);
            $this->load->model('User_model');
            $this->User_model->update($id, $formArray);
            $this->session->set_flashdata('success','Record Updated Succesfully');
            redirect(base_url().'index.php/users');
        }
        else
        {
            $this->load->view('edit', $data);
        }
  }

  /* ---------------------------------------------------*/

  public function delete($id)
  { 
    $this->load->model('User_model');
    $this->User_model->delete($id);
    redirect(base_url().'index.php/users');
  }
}

?>