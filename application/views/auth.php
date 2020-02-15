<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/landing/img/kit/free/apple-icon.png">
    <link rel="icon" href="<?php echo base_url()?>assets/landing/img/kit/free/favicon.png">
    <title>
        Material Kit by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/landing/css/material-kit.css?v=2.0.2">
    <!-- Documentation extras -->
    <!-- iframe removal -->
</head>

<body class="index-page ">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
               <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/landing/img/kit/logo.png" data-placement="bottom" data-html="true">
                SD Negeri Plempukan </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/" target="_blank" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/" target="_blank" data-original-title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/" target="_blank" data-original-title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('<?php echo base_url()?>assets/landing/img/kit/banner.jpeg');">

    </div>
    <div class="main main-raised">
        <div class="section"></div>
        <div class="section section-signup page-header" >
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="card card-signup">
                            <form class="form" action="<?php echo base_url().'index.php/auth'; ?>" method="post" accept-charset="utf-8">
                                <div class="card-header card-header-primary text-center">
                                    <h4>Login</h4>

                                </div>
                                <p class="text-divider">Be Classical</p>
                                <div class="card-body">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" name="user_username" class="form-control" placeholder="Username" required="">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" name="user_password" placeholder="Password" class="form-control" required="">
                                    </div>

                                </div>
                                <div class="card-footer justify-content-center">
                                    <button class="btn btn-primary btn-round" type="submit">
                                        <i class="material-icons">touch_app</i> Sign in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer ">
        <div class="container">
            <nav class="pull-left">

            </nav>
            <div class="copyright pull-right">

            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>assets/landing/js/core/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/core/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="<?php echo base_url()?>assets/landing/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="<?php echo base_url()?>assets/landing/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url()?>assets/landing/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="<?php echo base_url()?>assets/landing/js/material-kit.js?v=2.0.2"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url().'assets/js/bootstrap-notify.js'?>"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="<?php echo base_url()?>assets/landing/assets-for-demo/js/material-kit-demo.js"></script>
    <script>
        $(document).ready(function() {

            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
        });
    </script>
    <?php
 $message = $this->session->flashdata('message');
 if($message == "usernamesalah"){
?>
     <script type="text/javascript">
            $(document).ready(function(){
             $.notify({

             },{
                     type: 'danger',
                     timer: 500,
                     template: '<div class="alert alert-danger">'+
                                         '<div class="container-fluid">'+
                                         '<div class="alert-icon">'+
                                         '<i class="material-icons">error_outline</i>'+
                                         '</div>'+
                                         '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                         '<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
                                         '</button>'+
                                         '<b>Gagal :</b>  Username yang anda masukkan salah'+
                                         '</div>'+'</div>'

             });

        });
    </script>
<?php
}
elseif($message == "passwordsalah"){
?>
 <script type="text/javascript">
        $(document).ready(function(){
         $.notify({

         },{
                 type: 'danger',
                 timer: 500,
                 template: '<div class="alert alert-danger">'+
                                     '<div class="container-fluid">'+
                                     '<div class="alert-icon">'+
                                     '<i class="material-icons">error_outline</i>'+
                                     '</div>'+
                                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                     '<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
                                     '</button>'+
                                     '<b>Gagal :</b>  Password yang anda masukkan salah'+
                                     '</div>'+'</div>'

         });

    });
</script>
<?php
}
elseif($message == "sukseslogout"){
?>
 <script type="text/javascript">
        $(document).ready(function(){
         $.notify({

         },{
                 type: 'info',
                 timer: 500,
                 template: '<div class="alert alert-info">'+
                                     '<div class="container-fluid">'+
                                     '<div class="alert-icon">'+
                                     '<i class="material-icons">info_outline</i>'+
                                     '</div>'+
                                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                     '<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
                                     '</button>'+
                                     '<b>Berhasil :</b>  Anda telah logout'+
                                     '</div>'+'</div>'

         });

    });
</script>
<?php
};
?>
</body>

</html>
