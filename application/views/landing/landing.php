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
       <?php echo $title; ?>
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/landing/css/material-kit.css">
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
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Profil Sekolah
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="#" class="dropdown-item">
                                <i class="material-icons">layers</i> Sejarah
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Visi dan Misi
                            </a>
                        </div>
                    </li>

                    <?php if ($this->session->userdata("logged_in", true)) { ?>

                    <li class="dropdown nav-item">
                                        <a href="#" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                                            <div class="profile-photo-small">
                                                <img src="<?php echo base_url()?>assets/landing/img/kit/faces/<?php echo $this->session->userdata('user_nama');?>.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <h6 class="dropdown-header">Welcome , <?php echo $this->session->userdata('role_nama');?> </h6>
                                            <a href="<?php echo base_url().'index.php/main';?>" class="dropdown-item">Dashboard</a>
                                            <a href="<?php echo base_url().'index.php/Auth/logout'; ?>" class="dropdown-item">Sign out</a>
                                        </div>
                                    </li>

                    <?php  } else {?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'index.php/auth'; ?>">
                            <i class="material-icons">account_circle</i> Login
                        </a>
                        </li>

                    
                        <?php
            }
                  ?>

                </ul>
            </div>


        </div>
    </nav>
    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('<?php echo base_url()?>assets/landing/img/kit/gerbang.jpg');">
        <div class="container">
            <div class="row">
                    <div class="col-md-8 mr-auto ml-auto">
                        <!-- Carousel Card -->
                        <div class="card card-raised card-carousel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?php echo base_url()?>assets/landing/img/kit/sample2.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4>
                                                <i class="material-icons">location_on</i> Sample Location, Indonesia
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url()?>assets/landing/img/kit/sample3.jpg" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4>
                                                <i class="material-icons">location_on</i> Sample Location, Indonesia
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url()?>assets/landing/img/kit/sample.jpg" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4>
                                                <i class="material-icons">location_on</i> Sample Location, Indonesia
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="material-icons">keyboard_arrow_left</i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Carousel Card -->
                    </div>
                </div>
        </div>
    </div>
    <div class="main main-raised">
        
        <div class="container">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Let&apos;s talk product</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Free Chat</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Verified Users</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">fingerprint</i>
                                </div>
                                <h4 class="info-title">Fingerprint</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section text-center">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img src="<?php echo base_url()?>assets/landing/img/kit/faces/evi.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Evi
                                        <br>
                                        <small class="card-description text-muted">Model</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img src="<?php echo base_url()?>assets/landing/img/kit/faces/novan.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Novan Lexiku
                                        <br>
                                        <small class="card-description text-muted">Designer</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <div class="card card-plain">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <img src="<?php echo base_url()?>assets/landing/img/kit/faces/kendall.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                                    </div>
                                    <h4 class="card-title">Kendall Jenner
                                        <br>
                                        <small class="card-description text-muted">Model</small>
                                    </h4>
                                    <div class="card-body">
                                        <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                            <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Classic Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link">Nice Button</button>
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    

    <footer class="footer ">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">
                            Sample
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Sample
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Sample
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Sample
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/landing/js/core/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/landing/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/landing/js/bootstrap-material-design.js"></script>

<!-- Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url()?>assets/landing/js/plugins/moment.min.js"></script>

<!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo base_url()?>assets/landing/js/plugins/bootstrap-select.js"></script>

<!-- Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="<?php echo base_url()?>assets/landing/js/plugins/jquery.tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url()?>assets/landing/js/plugins/jasny-bootstrap.min.js"></script>

<!-- Plugin for Small Gallery in Product Page -->
<script src="<?php echo base_url()?>assets/landing/js/plugins/jquery.flexisel.js"></script>

<!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="<?php echo base_url()?>assets/landing/js/plugins/bootstrap-datetimepicker.min.js"></script>

<!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url()?>assets/landing/js/plugins/nouislider.min.js"></script>

<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="<?php echo base_url()?>assets/landing/js/material-kit.js?v=2.0.0"></script>
</body>

</html>