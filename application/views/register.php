<?php include 'partials/header.html'?>

<h>register</h>
<div class='row'>
<div class='col-md-2'></div>
<div class='col-md-8'>
<div class='container'>
<?php if ($this->session->flashdata('msg')){
	echo "<h3>".$this->session->flashdata('msg')."</h3>";
}?>

<?php echo validation_errors(); ?>
<?php echo form_open('Register/registerUser');?>
<div class="form-group">
    <label for="exampleInputEmail1">first name</label>
    <input type="text" class="form-control" id="First name" aria-describedby="emailHelp" placeholder="Enter first name" name="fname">
    <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">last name</label>
    <input type="text" class="form-control" id="Last name" aria-describedby="emailHelp" placeholder="Enter last name" name="lname">
    <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php echo form_close();?>
</div>
</div>
<div class='col-md-2'></div>
</div>

<?php include 'partials/footer.html'?>