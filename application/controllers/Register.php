<?php
class Register extends CI_Controller {
	public function registerUser(){
            

			$this->form_validation->set_rules('fname', 'Firstname', 'required');
			$this->form_validation->set_rules('lname', 'Lastname', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register');
                }
                else
                {
                        $this->load->model('Model_user');
                       $response = $this->Model_user->insertUserdata();
                       if ($response){
                       		$this->session->set_flashdata('msg','registered succesfully');
                       		redirect('Home/register');

                       }else {
                       	echo ("not this time");
                       	
                       }
                }

}

}