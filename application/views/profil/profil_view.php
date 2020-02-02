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
                                    
<?php if ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='801'||$this->session->userdata('user_kelas_id')=='802'||$this->session->userdata('user_kelas_id')=='803'||$this->session->userdata('user_kelas_id')=='804'||$this->session->userdata('user_kelas_id')=='805'||$this->session->userdata('user_kelas_id')=='806'||$this->session->userdata('user_kelas_id')=='807'||$this->session->userdata('user_kelas_id')=='808'||$this->session->userdata('user_kelas_id')=='809') { ?>
                                    <div class="row">
                                    <div class="card-header card-header-info card-header-icon">
                                   
                                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#arsip7">Raport kelas 7</button>

                                    </div>
                                    </div>
<?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='901'||$this->session->userdata('user_kelas_id')=='902'||$this->session->userdata('user_kelas_id')=='903'||$this->session->userdata('user_kelas_id')=='904'||$this->session->userdata('user_kelas_id')=='905'||$this->session->userdata('user_kelas_id')=='906'||$this->session->userdata('user_kelas_id')=='907'||$this->session->userdata('user_kelas_id')=='908'||$this->session->userdata('user_kelas_id')=='909') { ?>

                                    <div class="row">
                                    <div class="card-header card-header-info card-header-icon">
                                    
                                        
                                    </div>

                                    </div>
                                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#arsip7">Raport kelas 7</button>
                                        <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#arsip8">Raport kelas 8</button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                                          <?php if ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='701'||$this->session->userdata('user_kelas_id')=='702'||$this->session->userdata('user_kelas_id')=='703'||$this->session->userdata('user_kelas_id')=='704'||$this->session->userdata('user_kelas_id')=='705'||$this->session->userdata('user_kelas_id')=='706'||$this->session->userdata('user_kelas_id')=='707'||$this->session->userdata('user_kelas_id')=='708'||$this->session->userdata('user_kelas_id')=='709') { ?>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Nilai Raport Kelas 7 <?php echo $this->session->userdata('user_nama');?></h4>
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
                                        <small><?php echo $this->session->userdata('nilai_agama7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia7');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_b_inggris7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPA7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPS7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_matematika7');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_PKN7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_TIK7');?></small>
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
<?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='801'||$this->session->userdata('user_kelas_id')=='802'||$this->session->userdata('user_kelas_id')=='803'||$this->session->userdata('user_kelas_id')=='804'||$this->session->userdata('user_kelas_id')=='805'||$this->session->userdata('user_kelas_id')=='806'||$this->session->userdata('user_kelas_id')=='807'||$this->session->userdata('user_kelas_id')=='808'||$this->session->userdata('user_kelas_id')=='809') { ?>

                        <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Nilai Raport Kelas 8 <?php echo $this->session->userdata('user_nama');?></h4>
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
                                        <small><?php echo $this->session->userdata('nilai_agama8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia8');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_b_inggris8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPA8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPS8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_matematika8');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_PKN8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_TIK8');?></small>
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

<?php } elseif ($this->session->userdata('user_role_id')=='3' && $this->session->userdata('user_kelas_id')=='901'||$this->session->userdata('user_kelas_id')=='902'||$this->session->userdata('user_kelas_id')=='903'||$this->session->userdata('user_kelas_id')=='904'||$this->session->userdata('user_kelas_id')=='905'||$this->session->userdata('user_kelas_id')=='906'||$this->session->userdata('user_kelas_id')=='907'||$this->session->userdata('user_kelas_id')=='908'||$this->session->userdata('user_kelas_id')=='909') { ?>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Nilai Raport Kelas 8 <?php echo $this->session->userdata('user_nama');?></h4>
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
                                        <small><?php echo $this->session->userdata('nilai_agama9');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia9');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_b_inggris9');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPA9');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPS9');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_matematika9');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_PKN9');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_TIK9');?></small>
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

<!-- Modal Arsip Raport kelas 7 siswa-->
         <div class="modal fade" id="arsip7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                     <div class="modal-content">
                             <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                     <h4 class="modal-title" id="myModalLabel">Arsip Nilai Raport Kelas 7 <?php echo $this->session->userdata('user_nama');?></h4>
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
                                        <small><?php echo $this->session->userdata('nilai_agama7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia7');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_b_inggris7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPA7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPS7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_matematika7');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_PKN7');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_TIK7');?></small>
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
<!-- Modal Arsip Raport kelas 8 siswa-->
         <div class="modal fade" id="arsip8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                     <div class="modal-content">
                             <div class="modal-header">
                                     
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                     <h4 class="modal-title" id="myModalLabel">Arsip Nilai Raport Kelas 8 <?php echo $this->session->userdata('user_nama');?></h4>
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
                                        <small><?php echo $this->session->userdata('nilai_agama8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_b_indonesia8');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_b_inggris8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPA8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_IPS8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_matematika8');?></small>
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
                                    <small><?php echo $this->session->userdata('nilai_PKN8');?></small>
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
                                        <small><?php echo $this->session->userdata('nilai_TIK8');?></small>
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
