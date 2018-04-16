<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration-CI Login Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>

<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                    <?php $attributes = array('id' => 'registerform'); 
                    echo form_open('account/register', $attributes); ?>
                    <?php if(validation_errors()) { ?>
                      <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                      </div>
                    <?php } ?>
                      
                         
                              <div class="form-group">
                                  <label for="user_name" class="col-sm-2 col-form-label">Gebruikersnaam</label>
                                    <div class="col-sm-10">
                                  <input class="form-control" placeholder="Name" name="user_name" type="text" autofocus required minlength="2">
                              </div>
                            </div>
                            </br>
                              <div class="form-group">
                                    <label for="user_email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                  <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                              </div>
                            </div>

                              <div class="form-group">
                                    <label for="user_password" class="col-sm-2 col-form-label">Wachtwoord</label>
                                    <div class="col-sm-10">
                                  <input class="form-control" placeholder="Password" name="user_password" type="password" value="" required  pattern=".{6,}" title="6 of meer characters">
                              </div>
                            </div>

                              <div class="form-group">
                                <label for="user_age" class="col-sm-2 col-form-label">Leeftijd</label>
                                <div class="col-sm-10">
                                  <input class="form-control" placeholder="Age" name="user_age" type="number" value="" maxlength="2" minlength="1" pattern="[0-9]">
                              </div>
                            </div>

                              <div class="form-group">
                                <label for="user_mobile" class="col-sm-2 col-form-label">Mobiel nummer</label>
                                <div class="col-sm-10">
                                  <input class="form-control" placeholder="Mobile No" name="user_mobile" type="number" value="" required pattern="^\d{10}$" }">
                              </div>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register">

                     
                      </form>
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('account'); ?>">Login here</a></center>
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




  </body>
</html>