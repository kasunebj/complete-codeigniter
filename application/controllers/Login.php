<?php
class Login extends CI_Controller{
	public function loginUser(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login');
                }
                else
                {
                        $this->load->model('Model_user');
                      $result=  $this->Model_user->LoginUser();

                      if ($result != FALSE){
                      	$user_data = array(
                            'user_ID'  => $result->ID,
        					'fname'     => $result->FirstName,
        					'lname'     => $result->LastName,
        					'email'     => $result->email,
        					'password'  =>$result->password,

        					'logged_in' => TRUE
);

$this->session->set_userdata($user_data);
$this->session->set_flashdata('welcome','welcome back');
                       		redirect('Admin/index');

					 }else {
                      	$this->session->set_flashdata('errmsg','login failed');
                       		redirect('Home/login');
                      }
                }
	}
	public function logoutUser(){

		$this->session->unset_userdata('user_ID');
		$this->session->unset_userdata('fname');
		$this->session->unset_userdata('lname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('logged_in');

		redirect('Home/login');
	}
}