<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Profil <?php echo $this->session->userdata('user_nama');?></h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nama</label>
                                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('user_nama');?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Username</label>
                                                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('user_username');?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Agama</label>
                                                    <input type="email" class="form-control" placeholder="<?php echo $this->session->userdata('user_agama');?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Gender</label>
                                                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('user_gender');?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Tanggal Lahir</label>
                                                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('user_tgllhr');?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Telpon</label>
                                                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('user_tlp');?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" placeholder="<?php echo $this->session->userdata('user_alamat');?>" readonly></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                       <img src="<?php echo base_url()?>assets/landing/img/kit/faces/<?php echo $this->session->userdata('user_nama');?>.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray"><?php echo $this->session->userdata('role_nama');?></h6>
                                    <h4 class="card-title"><?php echo $this->session->userdata('user_nama');?></h4>
                                    
<?php if ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='201'||$this->session->userdata('user_kelas_id')=='202'||$this->session->userdata('user_kelas_id')=='203'||$this->session->userdata('user_kelas_id')=='204'||$this->session->userdata('user_kelas_id')=='205'||$this->session->userdata('user_kelas_id')=='206'||$this->session->userdata('user_kelas_id')=='207'||$this->session->userdata('user_kelas_id')=='208'||$this->session->userdata('user_kelas_id')=='209') { ?>
                                    <div class="row">
                                    <div class="card-header card-header-info card-header-icon">
                                   
                                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#arsip1">Raport kelas 1</button>

                                    </div>
                                    </div>
<?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='301'||$this->session->userdata('user_kelas_id')=='302'||$this->session->userdata('user_kelas_id')=='303'||$this->session->userdata('user_kelas_id')=='304'||$this->session->userdata('user_kelas_id')=='305'||$this->session->userdata('user_kelas_id')=='306'||$this->session->userdata('user_kelas_id')=='307'||$this->session->userdata('user_kelas_id')=='308'||$this->session->userdata('user_kelas_id')=='309') { ?>

                                    <div class="row">
                                    <div class="card-header card-header-info card-header-icon">
                                    
                                        
                                    </div>

                                    </div>
                                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#arsip1">Raport kelas 1</button>
                                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#arsip2">Raport kelas 2</button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                <?php if ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='101'||$this->session->userdata('user_kelas_id')=='102'||$this->session->userdata('user_kelas_id')=='103'||$this->session->userdata('user_kelas_id')=='104'||$this->session->userdata('user_kelas_id')=='105'||$this->session->userdata('user_kelas_id')=='106'||$this->session->userdata('user_kelas_id')=='107'||$this->session->userdata('user_kelas_id')=='108'||$this->session->userdata('user_kelas_id')=='109') { ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Nilai Raport Kelas 1 <?php echo $this->session->userdata('user_nama');?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Agama :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_agama1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">B.Indonesia :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">B.Inggris :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_b_inggris1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPA :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPA1');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPS :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPS1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Matematika :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_matematika1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">PKN :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_PKN1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">TIK :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_TIK1');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
<?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='201'||$this->session->userdata('user_kelas_id')=='202'||$this->session->userdata('user_kelas_id')=='203'||$this->session->userdata('user_kelas_id')=='204'||$this->session->userdata('user_kelas_id')=='205'||$this->session->userdata('user_kelas_id')=='206'||$this->session->userdata('user_kelas_id')=='207'||$this->session->userdata('user_kelas_id')=='208'||$this->session->userdata('user_kelas_id')=='209') { ?>

                        <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Nilai Raport Kelas 2 <?php echo $this->session->userdata('user_nama');?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Agama :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_agama2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">B.Indonesia :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">B.Inggris :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_b_inggris2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPA :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPA2');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPS :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPS2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Matematika :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_matematika2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">PKN :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_PKN2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">TIK :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_TIK2');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

<?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='301'||$this->session->userdata('user_kelas_id')=='302'||$this->session->userdata('user_kelas_id')=='303'||$this->session->userdata('user_kelas_id')=='304'||$this->session->userdata('user_kelas_id')=='305'||$this->session->userdata('user_kelas_id')=='306'||$this->session->userdata('user_kelas_id')=='307'||$this->session->userdata('user_kelas_id')=='308'||$this->session->userdata('user_kelas_id')=='309') { ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Nilai Raport Kelas 3 <?php echo $this->session->userdata('user_nama');?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Agama :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_agama3');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">B.Indonesia :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia3');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">B.Inggris :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_b_inggris3');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPA :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPA3');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPS :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPS3');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Matematika :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_matematika3');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">PKN :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_PKN3');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">TIK :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_TIK3');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
    <?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='401'||$this->session->userdata('user_kelas_id')=='402'||$this->session->userdata('user_kelas_id')=='403'||$this->session->userdata('user_kelas_id')=='404'||$this->session->userdata('user_kelas_id')=='405'||$this->session->userdata('user_kelas_id')=='406'||$this->session->userdata('user_kelas_id')=='407'||$this->session->userdata('user_kelas_id')=='408'||$this->session->userdata('user_kelas_id')=='409') { ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Nilai Raport Kelas 4 <?php echo $this->session->userdata('user_nama');?></h4>
            </div>
            <div class="card-body">
                <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">Agama :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_agama4');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">B.Indonesia :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_b_indonesia4');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">B.Inggris :</p>
                <h3 class="card-title">
                <small><?php echo $this->session->userdata('nilai_b_inggris4');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                 <i class="material-icons">school</i>
                </div>
                <p class="card-category">IPA :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_IPA4');?></small>
                    </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">IPS :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_IPS4');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">Matematika :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_matematika4');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">PKN :</p>
                <h3 class="card-title">
                <small><?php echo $this->session->userdata('nilai_PKN4');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                 <i class="material-icons">school</i>
                </div>
                <p class="card-category">TIK :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_TIK4');?></small>
                    </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    
</div>
<?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='501'||$this->session->userdata('user_kelas_id')=='502'||$this->session->userdata('user_kelas_id')=='503'||$this->session->userdata('user_kelas_id')=='504'||$this->session->userdata('user_kelas_id')=='505'||$this->session->userdata('user_kelas_id')=='506'||$this->session->userdata('user_kelas_id')=='507'||$this->session->userdata('user_kelas_id')=='508'||$this->session->userdata('user_kelas_id')=='509') { ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Nilai Raport Kelas 5 <?php echo $this->session->userdata('user_nama');?></h4>
            </div>
            <div class="card-body">
                <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">Agama :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_agama5');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">B.Indonesia :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_b_indonesia5');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">B.Inggris :</p>
                <h3 class="card-title">
                <small><?php echo $this->session->userdata('nilai_b_inggris5');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                 <i class="material-icons">school</i>
                </div>
                <p class="card-category">IPA :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_IPA5');?></small>
                    </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">IPS :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_IPS5');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">Matematika :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_matematika5');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">PKN :</p>
                <h3 class="card-title">
                <small><?php echo $this->session->userdata('nilai_PKN5');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                 <i class="material-icons">school</i>
                </div>
                <p class="card-category">TIK :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_TIK5');?></small>
                    </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    
</div>
<?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='601'||$this->session->userdata('user_kelas_id')=='602'||$this->session->userdata('user_kelas_id')=='603'||$this->session->userdata('user_kelas_id')=='604'||$this->session->userdata('user_kelas_id')=='605'||$this->session->userdata('user_kelas_id')=='606'||$this->session->userdata('user_kelas_id')=='607'||$this->session->userdata('user_kelas_id')=='608'||$this->session->userdata('user_kelas_id')=='609') { ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Nilai Raport Kelas 6 <?php echo $this->session->userdata('user_nama');?></h4>
            </div>
            <div class="card-body">
                <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">Agama :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_agama6');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">B.Indonesia :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_b_indonesia6');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">B.Inggris :</p>
                <h3 class="card-title">
                <small><?php echo $this->session->userdata('nilai_b_inggris6');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                 <i class="material-icons">school</i>
                </div>
                <p class="card-category">IPA :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_IPA6');?></small>
                    </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">IPS :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_IPS6');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">Matematika :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_matematika6');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">school</i>
                </div>
                <p class="card-category">PKN :</p>
                <h3 class="card-title">
                <small><?php echo $this->session->userdata('nilai_PKN6');?></small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                 <i class="material-icons">school</i>
                </div>
                <p class="card-category">TIK :</p>
                <h3 class="card-title">
                    <small><?php echo $this->session->userdata('nilai_TIK6');?></small>
                    </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    
</div>
                                          <?php } ?>

                </div>
            </div>

<!-- Modal Arsip Raport kelas 1 siswa-->
         <div class="modal fade" id="arsip1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                     <div class="modal-content">
                             <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                     <h4 class="modal-title" id="myModalLabel">Arsip Nilai Raport Kelas 1 <?php echo $this->session->userdata('user_nama');?></h4>
                             </div>
                             <div class="modal-body">
                                 <!-- Modal Body -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Agama :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_agama1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">B.Indo :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Eng :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_b_inggris1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPA :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPA1');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPS :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPS1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Math :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_matematika1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">PKN :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_PKN1');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">TIK :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_TIK1');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                             </div>
                             <div class="modal-footer">
                                        <button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
                             </div>
                        </div>
                </div>
         </div>
     </div>
<!-- End Arsip-->
<!-- Modal Arsip Raport kelas 2 siswa-->
         <div class="modal fade" id="arsip2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                     <div class="modal-content">
                             <div class="modal-header">
                                     
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                     <h4 class="modal-title" id="myModalLabel">Arsip Nilai Raport Kelas 2 <?php echo $this->session->userdata('user_nama');?></h4>
                             </div>
                             <div class="modal-body">
                                 <!-- Modal Body -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Agama :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_agama2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">B.Indo :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Eng :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_b_inggris2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPA :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPA2');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">IPS :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_IPS2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">Math :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_matematika2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">PKN :</p>
                                    <h3 class="card-title">
                                    <small><?php echo $this->session->userdata('nilai_PKN2');?></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">school</i>
                                    </div>
                                    <p class="card-category">TIK :</p>
                                    <h3 class="card-title">
                                        <small><?php echo $this->session->userdata('nilai_TIK2');?></small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                             </div>
                             <div class="modal-footer">
                                        <button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
                             </div>
                        </div>
                </div>
         </div>
     </div>
<!-- End Arsip-->
            <footer class="footer ">
                <div class="container-fluid">
                    <nav class="pull-left">
                        
                    </nav>
                    <div class="copyright pull-right">
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/dashboard/js/core/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/bootstrap-material-design.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/bootstrap-notify.js"></script>
<!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/bootstrap-select.js"></script>

<!-- Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/jquery.tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/jasny-bootstrap.min.js"></script>

<!-- Plugin for Small Gallery in Product Page -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/jquery.flexisel.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="<?php echo base_url()?>assets/dashboard/js/material-dashboard.js?v=2.0.0"></script>

<!-- welcome notif -->
<?php
 $message = $this->session->flashdata('message');
 if($message == "sukseslogin"){
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
                                         '<b>Welcome</b> <?php echo $this->session->userdata('role_nama');?> <?php echo $this->session->userdata('user_nama');?>'+
                                         '</div>'+'</div>'

             });

        });
    </script>
<?php
};
?>

</html>
