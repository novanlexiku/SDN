<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/dashboard/img/apple-icon.png">
    <link rel="icon" href="<?php echo base_url()?>assets/dashboard/img/favicon.png">
    <title>
       <?php echo $title; ?>
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dashboard/css/material-dashboard.css?v=2.0.0">
    <!-- Documentation extras -->
    <!--  CSS for datatables     -->
  <link href="<?php echo base_url().'assets/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.css'?>" rel="stylesheet" type="text/css"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url()?>assets/dashboard/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url()?>assets/dashboard/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                
                <a  href="<?php echo base_url()?>" class="navbar-brand simple-text logo-normal">
                   <img src="<?php echo base_url()?>assets/landing/img/kit/logo.png" data-placement="bottom" data-html="true"> SDN Plempukan
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/main';?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                                    <!--Batas Authentification-->
                  <?php if ($this->session->userdata('user_role_id')=='1') { ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/profil';?>">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown show">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">content_paste</i>
                            <p>Master Data</p>
                        </a>
                       <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url().'index.php/kelas';?>">
                                        <i class="material-icons">assignment_ind</i>Master Kelas</a>
                                    <a class="dropdown-item" href="<?php echo base_url().'index.php/mapel';?>">
                                        <i class="material-icons">assignment_ind</i>Mata Pelajaran</a>
                                    
                                </div>
                    </li>
                    <li class="nav-item dropdown show">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">content_paste</i>
                            <p>Daftar Tabel</p>
                        </a>
                       <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url().'index.php/admin';?>">
                                        <i class="material-icons">assignment_ind</i>Tabel Admin</a>
                                    <a class="dropdown-item" href="<?php echo base_url().'index.php/guru';?>">
                                        <i class="material-icons">assignment_ind</i>Tabel Guru</a>
                                    <a class="dropdown-item" href="<?php echo base_url().'index.php/siswa';?>">
                                        <i class="material-icons">assignment_ind</i>Tabel Siswa</a>
                                    <a class="dropdown-item" href="<?php echo base_url().'index.php/walikelas';?>">
                                        <i class="material-icons">assignment_ind</i>Walikelas</a>
                                    <a class="dropdown-item" href="<?php echo base_url().'index.php/pengajar';?>">
                                        <i class="material-icons">assignment_ind</i>Pengajar</a>
                                </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/bagikelas';?>">
                            <i class="material-icons">library_books</i>
                            <p>Bagikelas</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/rombel';?>">
                            <i class="material-icons">library_books</i>
                            <p>Penilaian</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/ranking';?>">
                            <i class="material-icons">grade</i>
                            <p>Rank</p>
                        </a>
                    </li>
                    

                  
                    
                    <?php } elseif ($this->session->userdata('user_role_id')=='2') { ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/profil';?>">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/rombel';?>">
                            <i class="material-icons">library_books</i>
                            <p>Penilaian</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/ranking';?>">
                            <i class="material-icons">grade</i>
                            <p>Rank</p>
                        </a>
                    </li>

                    

                    <?php  } else {?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/profil';?>">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url().'index.php/ranking';?>">
                            <i class="material-icons">grade</i>
                            <p>Rank</p>
                        </a>
                    </li>

                     <?php
            }
                  ?>
                  
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="material-icons">dashboard</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                        <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                                            <div class="profile-photo-small">
                                                <img src="<?php echo base_url()?>assets/landing/img/kit/faces/<?php echo $this->session->userdata('user_nama');?>.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <h6 class="dropdown-header">Welcome , <?php echo $this->session->userdata('role_nama');?> </h6>
                                            <a href="#" class="dropdown-item">Me</a>
                                            <a href="<?php echo base_url().'index.php/Auth/logout'; ?>" class="dropdown-item">Sign out</a>
                                        </div>
                                    </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->