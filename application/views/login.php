<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php echo $web->nama?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  
  <link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet" />
</head>
 
<body>

    <div class="login">
      <section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Login Now</h2>
        <form class="login-form" action="<?php echo base_url();?>login/ceklogin" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"  class="text-uppercase">Username</label>
    <input type="text" class="form-control" name="username" placeholder=" ..... " autofocus>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" name="password" placeholder=" ..... ">
  </div>
  
  
 
    <button type="submit" class="btn btn-login float-right">LOG IN</button>
  
  
</form>
 
    </div>
    <div class="col-md-8 banner-sec">
             
  
     
    </div>
  </div>
</div>

<?php
            // echo password_hash("user", PASSWORD_DEFAULT);
            if($this->session->flashdata('error')){
            echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('error').'</p>';
            }

            ?>


</section>
         
</div>

    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>