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
    <p class="login-box-msg">Forgot Password</p>
     <div class="text-danger tex-center"></div>
    <form action="https://sysrootsolution.com/billing/login/send_otp" method="post" id="password-form">
      <input type="hidden" name="csrf_test_name" value="1a4ac2e8840c89fe2a022bb8de25b6f5">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" id="email" name="email" autofocus=""><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
        </div>
        <!-- /.col -->
      </div>
       
    
    </form>
    <br>
    <div class="row">
            <div class="col-xs-6 text-right pull-right">
        <a href="index.php">Sign In</a>
      </div>
    </div>

    <!-- <a class="pull-right" href="https://sysrootsolution.com/billing/login">Click here to Sign in</a><br> -->

  </div>
  <!-- /.login-box-body -->
  
</div>

    </div>

<?php
include('inc/footer.php');
?>