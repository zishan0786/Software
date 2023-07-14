<?php
include('inc/header.php');
?>
<div class="login-page">
<div class="row">
    <div class="col-md-12">
      <div class="form-group col-md-2 col-xs-6">
          <select class="form-control input-sm language_id" style="margin: 10px;">
            <option value="4">Arabic</option><option value="5">Bangla</option><option selected="" value="1">English</option><option value="6">French</option><option value="2">Russian</option><option value="3">Spanish</option>         
           </select>
      </div>
    </div>
  </div>

  <div class="login-box">

  <div class="login-logo">
    <a href="#"><b>
      <img src="https://sysrootsolution.com/billing/uploads/site/logo.png">
    </b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    
    <p class="login-box-msg">Sign in to start your session</p>

     <div class="text-danger tex-center"></div>
       <div class="text-success tex-center"></div>
         
    
    <form id="login-form" action="https://sysrootsolution.com/billing/login/verify" method="post">
      <input type="hidden" name="csrf_test_name" value="1a4ac2e8840c89fe2a022bb8de25b6f5">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email/Username" id="email" name="email" autofocus=""><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="pass" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
      <div class="row">
                <div class="col-xs-6 text-right pull-right"><br>
          <a href="forgotpass.php">Forgot Password</a>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-md-12 text-center">
        <p style="font-style: italic;">Version 3.0</p>   
      </div>
    </div>
  </div>
  <!-- /.login-box-body -->
          
  
</div>
</div>
 <?php   
include('inc/footer.php');
?>

    