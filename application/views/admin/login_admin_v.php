<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login PRM</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script>
    // assumes you're using jQuery
    $(document).ready(function() {
    $('.alert').hide();
    <?php if($this->session->flashdata('msg')){ ?>
        $('.alert').show();
    });
    <?php } ?>
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

        <div class="col-md-4 col-md-offset-4">
            <div class="alert alert-danger fade in" style="display:none; margin-top:45px; alignt:center;">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                <?php echo $this->session->flashdata('msg'); ?>
            </div> 
        </div>

      <form method="post" class="form-signin" action="<?php echo base_url(); ?>admin/login_admin/auth">
        <h2 class="form-signin-heading">Login Admin</h2>
        <div class="login-wrap">
            <input name="username" type="text" class="form-control" placeholder="nama pengguna" autofocus>
            <input name="password" type="password" class="form-control" placeholder="kata sandi">            
            <button class="btn btn-lg btn-login btn-block" type="submit">Masuk</button>          
        </div>
      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


  </body>
</html>
