<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title><?=$judul?> | <?=$subjudul?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/gritter/css/jquery.gritter.css" />

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

<body class="lock-screen" onload="startTime()">

    <div class="lock-wrapper">        

        <div id="time"></div>
        

        <?php 
            if (empty($logo)){$logo = "default.gif";}
        ?>
        <div class="lock-box text-center">
            <img src="<?php echo base_url().'assets/img/logo/'.$logo; ?>" alt="lock avatar" style="height:80px; width:80px;"/>
            <h1><?=$judul?></h1>
            <span class="locked">PERIODE <?=$periode?></span>
            <form method="post" role="form" class="form-inline" action="<?php echo base_url(); ?>user/login_user/auth">
                <div class="form-group col-lg-12">
                    <input type="text" placeholder="Password" id="password" name="password" class="form-control lock-input" autofocus style="color:black;">
                    <button class="btn btn-lock" type="submit">
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="alert alert-danger fade in" style="display:none; margin-top:45px; alignt:center;">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                <?php echo $this->session->flashdata('msg'); ?>
            </div> 
        </div> 
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/gritter/js/jquery.gritter.js"></script>

    <script type="text/javascript">
        <?php   if ($this->session->flashdata('pesan')) { ?>
                    var unique_id = $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: 'BERHASIL',
                        // (string | mandatory) the text inside the notification
                        text: '<?=$this->session->flashdata("pesan")?>',
                        // (int | optional) the time you want it to be alive for before fading out
                        // time: '',
                        // (string | optional) the class name you want to apply to that specific message
                        // class_name: 'my-sticky-class'
                    });

                    setTimeout(function(){

                     $.gritter.remove(unique_id, {
                     fade: true,
                     speed: 'slow'
                     });

                     }, 4000)
        <?php   } ?>
    </script>

    <script>
        function startTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('time').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){startTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
</body>
</html>
