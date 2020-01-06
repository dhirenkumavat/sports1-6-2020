<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from healthadmin.thememinister.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Feb 2018 07:09:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  
  <style type="text/css">
 body {
            background: #033951 !important;
        }
        .card {
            border: 1px solid #ffffff;
        }
        .card-login {
            margin-top: 130px;
            padding: 18px;
            max-width: 30rem;
        }

        .card-header {
            color: #073a53;
            /*background: #ff0000;*/
            font-family: sans-serif;
            font-size: 20px;
            font-weight: 600 !important;
            margin-top: 10px;
            border-bottom: 0;
        }

        .input-group-prepend span{
            width: 50px;
            background-color:#a81f31;
            color: #fff;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;
        }

        .login_btn{
            width: 130px;
        }

        .login_btn:hover{
            color: #fff;
            background-color:#a61f32;
        }

        .btn-outline-danger {
            color: #fff;
            font-size: 18px;
            background-color: #093b50;
            background-image: none;
            border-color: #ffffff;
        }

        .form-control {
           display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1.2rem;
    line-height: 1.6;
    color: #000000;
    background-color: transparent;
    background-clip: padding-box;
    border: 1px solid #093b50;
    border-radius: 6px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .input-group-text {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.6;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0;
        }
        .bg-dark {
    background-color: #fff!important;
}
  </style>
</head>

<body>

  <div class="container">

    <div class="card card-login mx-auto text-center bg-dark">

        <?php if($this->session->userdata('success')){ ?>
        <p  class="success" id="success1" style="color: #b52525;font-weight: bold;text-align: center;font-size: 25px;"><?=$this->session->userdata('success');?></p>
        <?php } $this->session->unset_userdata(array('success'));  ?>
             
        <?php if($this->session->userdata('error')){ ?>
          <div class="alert alert-danger display-show">
                    <span style="
    color: #fffff;
    font-weight: bold;
    text-align: center;
"><?=$this->session->userdata('error');?></span>
</div>
  <?php } $this->session->unset_userdata(array('error'));?>
                  
        <div class="card-header mx-auto bg-dark">
            <span> <img src="<?=base_url();?>assets/images/logo-1.png" alt="Logo" style="
    width: 200px;
"> </span><br/>
                        <span class="logo_title mt-5"> Login Dashboard </span>
<!--            <h1>--><?php //echo $message?><!--</h1>-->
  
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username"  required="">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="Login" class="btn btn-outline-danger float-right login_btn">
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>