<?php 
class Model_user extends CI_Model{
	function insertUserdata (){
		$data = array(
			'FirstName'=>$this->input->post('fname',TRUE),
			'LastName'=>$this->input->post('lname',TRUE),
			'email'=>$this->input->post('email',TRUE),
			'password'=>sha1($this->input->post('password',TRUE))

		);
		return $this->db->insert('users',$data);
	}

	public function LoginUser (){
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));
		$this->db->where('email', $email);
        $this->db->where('password', $password);

        $response = $this->db->get('users');
        if ($response->num_rows()==1){
        	return ($response->row(0));
        	
        }else{
        	return (FALSE);
        	
        }


	}
	

	}
	
