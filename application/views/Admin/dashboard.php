<?php include_once ('includes/header.php');

	if ($this->session->flashdata('welcome')){
		echo $this->session->flashdata('welcome');

	}
echo "<br>";
 echo $this->session->userdata('fname')." ".$this->session->userdata('lname');
 ?>
 <a href="<?php echo base_url('index.php/Login/logoutUser');?>">log out</a>
 <?php include_once ('includes/footer.php');?>