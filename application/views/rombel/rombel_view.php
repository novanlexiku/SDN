<div class="content">
	<style>
.datepicker{z-index:1151 !important;}
</style>
		<div class="container-fluid">
				<div class="row">
				<?php if ($this->session->userdata('user_role_id')=='1') { ?>

					<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_1</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $siswa7a ?>
                                        <small>Siswa</small>
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
                                        <i class="material-icons">filter_2</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $siswa8a ?>
                                        <small>Siswa</small>
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
                                <div class="card-header card-header-primary card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_3</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $siswa9a ?>
                                        <small>Siswa</small>
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
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_4</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $siswa9a ?>
                                        <small>Siswa</small>
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
                                        <i class="material-icons">filter_5</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $siswa9a ?>
                                        <small>Siswa</small>
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
                                <div class="card-header card-header-primary card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_6</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $siswa9a ?>
                                        <small>Siswa</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
								<!-- End-->
                                  	<?php
           							 }
              					    ?>
						
				</div>
				<div class="row">
					<div class="card card-nav-tabs card-plain">
    <div class="card-header card-header-primary">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                	<?php if ($this->session->userdata('user_role_id')=='1') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#siswa7a" data-toggle="tab"><i class="material-icons">filter_1</i>
                                  			siswa 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#siswa8a" data-toggle="tab"><i class="material-icons">filter_2</i>
                                  			siswa 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#siswa9a" data-toggle="tab"><i class="material-icons">filter_3</i>
                                  			siswa 3</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#siswa9a" data-toggle="tab"><i class="material-icons">filter_4</i>
                                  			siswa 4</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#siswa9a" data-toggle="tab"><i class="material-icons">filter_5</i>
                                  			siswa 5</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#siswa9a" data-toggle="tab"><i class="material-icons">filter_6</i>
                                  			siswa 6</a>
                    </li>
                    <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_kelas_id')=='701') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#siswa7a" data-toggle="tab"><i class="material-icons">filter_7</i>
                                  			siswa 7-A</a>
                    </li>
                    <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_kelas_id')=='801') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#siswa8a" data-toggle="tab"><i class="material-icons">filter_8</i>
                                  			siswa 8-A</a>
                    </li>
                    <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_kelas_id')=='901') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#siswa9a" data-toggle="tab"><i class="material-icons">filter_9</i>
                                  			siswa 9-A</a>
                    </li>
                    <!-- End-->
                                  	<?php
           							 }
              					    ?>
                </ul>
            </div>
        </div>
    </div><div class="card-body ">
        <div class="tab-content text-center">
            <div class="tab-pane" id="siswa7a">
                <table class="table table-hover" id="mytable7a">
                                            <thead class=" text-primary">
                                                <tr>
																<th>NIS</th>
																<th>Nama</th>												
																<th>Nilai</th>
															</tr>
                                            </thead>
                                         </table>
            </div>
            <div class="tab-pane" id="siswa8a">
                <table class="table table-hover" id="mytable8a">
                                            <thead class=" text-primary">
                                                <tr>
																<th>NIS</th>
																<th>Nama</th>												
																<th>Nilai</th>
															</tr>
                                            </thead>
                                         </table>
            </div>
            <div class="tab-pane" id="siswa9a">
                <table class="table table-hover" id="mytable9a">
                                            <thead class=" text-primary">
                                                <tr>
																<th>NIS</th>
																<th>Nama</th>												
																<th>Nilai</th>
															</tr>
                                            </thead>
                                         </table>
            </div>
        </div>
    </div>
  </div>


          				

						</div>
				</div>
		</div>

<!-- Modal View siswa-->
<form id="add-row-form" action="" method="" >
	 <div class="modal fade" id="ModalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" >
				 <div class="modal-content">
						 <div class="modal-header">
								 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								 <h4 class="modal-title" id="myModalLabel">Nilai siswa</h4>
						 </div>
						 <div class="modal-body">
							 <div class="row">
							 	                	<?php if ($this->session->userdata('user_role_id')=='1') { ?>

						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="orange">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
												<p class="category" >Agama :</p>
												<input type="text" name="nilai_agama" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="green">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >B.Indonesia :</p>
												<input type="text" name="nilai_b_indonesia" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="red">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >B.Inggris :</p>
												<input type="text" name="nilai_b_inggris" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="blue">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >IPA :</p>
												<input type="text" name="nilai_IPA" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="red">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
												<p class="category" >IPS :</p>
												<input type="text" name="nilai_IPS" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="blue">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >Math :</p>
												<input type="text" name="nilai_matematika" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="green">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >PKN :</p>
												<input type="text" name="nilai_PKN" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="orange">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >TIK :</p>
												<input type="text" name="nilai_TIK" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
					 	<?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='2') { ?>
					 	<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="orange">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
												<p class="category" >Agama :</p>
												<input type="text" name="nilai_agama" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>

	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='3') { ?>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="green">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >B.Indonesia :</p>
												<input type="text" name="nilai_b_indonesia" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						
	              	<?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='4') { ?>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="red">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >B.Inggris :</p>
												<input type="text" name="nilai_b_inggris" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='6') { ?>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="blue">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >IPA :</p>
												<input type="text" name="nilai_IPA" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='7') { ?>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="red">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
												<p class="category" >IPS :</p>
												<input type="text" name="nilai_IPS" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='8') { ?>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="blue">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >Math :</p>
												<input type="text" name="nilai_matematika" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						
						
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='10') { ?>
						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="green">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >PKN :</p>
												<input type="text" name="nilai_PKN" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
						
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='12') { ?>

						<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="card card-stats">
										<div class="card-header" data-background-color="orange">
												<i class="material-icons">school</i>
										</div>
										<div class="card-content">
                      <p class="category" >TIK :</p>
												<input type="text" name="nilai_TIK" class="form-control" placeholder="" style="text-align: center; font-size: 30px;"readonly>
										</div>
										
								</div>
						</div>
					 	


								<!-- End-->
                                  	<?php
           							 }
              					    ?>
															</div>

						 </div>
						 <div class="modal-footer">
									<button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
						 </div>
					</div>
			</div>
	 </div>
</form>

<!-- Modal Update siswa-->
	<form id="add-row-form" action="<?php echo base_url().'index.php/rombel/update'?>" method="post">
		 <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					 <div class="modal-content">
							 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									 <h4 class="modal-title" id="myModalLabel">Update Nilai</h4>
							 </div>
							 <div class="modal-body">
								 <div class="row">
								 	<?php if ($this->session->userdata('user_role_id')=='1') { ?>

								 	<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>

								 <div class="col-md-2"><div class="form-group">
										 <label for="nilai_agama" class="control-label">Agama</label>
										 <input type="text" name="nilai_agama" class="form-control" placeholder="" required>
						         </div></div>
									<div class="col-md-2"><div class="form-group">
										 <label for="nilai_b_indonesia" class="control-label">B.Indo</label>
										 <input type="text" name="nilai_b_indonesia" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_b_inggris" class="control-label">B.Inggris</label>
										 <input type="text" name="nilai_b_inggris" class="form-control" placeholder="" required>
						         </div></div>
						         
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_IPA" class="control-label">IPA</label>
										 <input type="text" name="nilai_IPA" class="form-control" placeholder="" required>
						         </div></div> 
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_IPS" class="control-label">IPS</label>
										 <input type="text" name="nilai_IPS" class="form-control" placeholder="" required>
						         </div></div> 
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_matematika" class="control-label">Math</label>
										 <input type="text" name="nilai_matematika" class="form-control" placeholder="" required>
						         </div></div> 
						         
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_PKN" class="control-label">PKN</label>
										 <input type="text" name="nilai_PKN" class="form-control" placeholder="" required>
						         </div></div> 
						         
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_TIK" class="control-label">TIK</label>
										 <input type="text" name="nilai_TIK" class="form-control" placeholder="" required>
						         </div></div>  
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='2') { ?>
								<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_agama" class="control-label">Agama</label>
										 <input type="text" name="nilai_agama" class="form-control" placeholder="" required>
						         </div></div>
									
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='3') { ?>
								<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_b_indonesia" class="control-label">B.Indo</label>
										 <input type="text" name="nilai_b_indonesia" class="form-control" placeholder="" required>
						         </div></div>
						         
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='4') { ?>
								<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_b_inggris" class="control-label">B.Inggris</label>
										 <input type="text" name="nilai_b_inggris" class="form-control" placeholder="" required>
						         </div></div>
						         
						         
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='6') { ?>
								<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_IPA" class="control-label">IPA</label>
										 <input type="text" name="nilai_IPA" class="form-control" placeholder="" required>
						         </div></div> 
						         
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='7') { ?>
								<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_IPS" class="control-label">IPS</label>
										 <input type="text" name="nilai_IPS" class="form-control" placeholder="" required>
						         </div></div> 
						         
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='8') { ?>
								<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_matematika" class="control-label">Math</label>
										 <input type="text" name="nilai_matematika" class="form-control" placeholder="" required>
						         </div></div> 
						         
						         
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='10') { ?>
								<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_PKN" class="control-label">PKN</label>
										 <input type="text" name="nilai_PKN" class="form-control" placeholder="" required>
						         </div></div> 
						         
						         
	                <?php } elseif ($this->session->userdata('user_role_id')=='2'&&$this->session->userdata('user_mapel_id')=='12') { ?>
								<div class="col-md-5"><div class="form-group">
										 <label for="kode_siswa" class="control-label">NIS</label>
										 <input type="text" name="kode_siswa" class="form-control" placeholder="" required>
						         </div></div>
						         <div class="col-md-2"><div class="form-group">
										 <label for="nilai_TIK" class="control-label">TIK</label>
										 <input type="text" name="nilai_TIK" class="form-control" placeholder="" required>
						         </div></div>
								<!-- End-->
                                  	<?php
           							 }
              					    ?>
																</div>

							 </div>
							 <div class="modal-footer">
										<button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
										<button type="submit" id="add-row" class="btn btn-success ml-2">Update</button>
							 </div>
						</div>
				</div>
		 </div>
 </form>

<!-- Modal Hapus siswa-->
	<form id="add-row-form" action="<?php echo base_url().'index.php/rombel/delete'?>" method="post">
		 <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					 <div class="modal-content">
							 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									 <h4 class="modal-title" id="myModalLabel">Hapus siswa</h4>
							 </div>
							 <div class="modal-body">
											 <input type="hidden" name="siswa_kode" class="form-control" placeholder="siswa ID" required>
											 <strong>Anda yakin mau menghapus record ini?</strong>
							 </div>
							 <div class="modal-footer">
										<button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
										<button type="submit" id="add-row" class="btn btn-success ml-2">Hapus</button>
							 </div>
						</div>
				</div>
		 </div>
 </form>
 <footer class="footer">
		 <div class="container-fluid">
				 <p class="copyright pull-right">
						 
				 </p>
		 </div>
 </footer>
 </div>
 </div>
 </body>
  <!--   Core JS Files    -->
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
 <!-- Material Dashboard dataTables -->
 <script src="<?php echo base_url()?>assets/js/jquery.datatables.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
 <?php
  $message = $this->session->flashdata('message');
  if($message == "suksestambah"){
?>
    <script type="text/javascript">
       $(document).ready(function(){
        $.notify({

        },{
            type: 'success',
            timer: 500,
						template: '<div class="alert alert-success">'+
											'<div class="container-fluid">'+
  										'<div class="alert-icon">'+
											'<i class="material-icons">check</i>'+
  										'</div>'+
  										'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
  										'</button>'+
  										'<b>Berhasil</b>  menambah data siswa'+
											'</div>'+'</div>'

        });

     });
   </script>
<?php
}
elseif($message == "suksesupdate"){
?>
	<script type="text/javascript">
		 $(document).ready(function(){
			$.notify({

			},{
					type: 'success',
					timer: 500,
					template: '<div class="alert alert-success">'+
										'<div class="container-fluid">'+
										'<div class="alert-icon">'+
										'<i class="material-icons">check</i>'+
										'</div>'+
										'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
										'</button>'+
										'<b>Berhasil</b>  mengubah data siswa'+
										'</div>'+'</div>'

			});

	 });
 </script>
<?php
}
elseif($message == "sukseshapus"){
?>
	<script type="text/javascript">
		 $(document).ready(function(){
			$.notify({

			},{
					type: 'success',
					timer: 500,
					template: '<div class="alert alert-success">'+
										'<div class="container-fluid">'+
										'<div class="alert-icon">'+
										'<i class="material-icons">check</i>'+
										'</div>'+
										'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
										'</button>'+
										'<b>Berhasil</b>  menghapus data Siswa'+
										'</div>'+'</div>'

			});

	 });
 </script>
<?php
};
?>
 <script>
 $('.datepicker').datepicker({
 	weekStart:1
 });
 </script>
 <script>
	$(document).ready(function(){
		// Setup datatables
		$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
			 {
					 return {
							 "iStart": oSettings._iDisplayStart,
							 "iEnd": oSettings.fnDisplayEnd(),
							 "iLength": oSettings._iDisplayLength,
							 "iTotal": oSettings.fnRecordsTotal(),
							 "iFilteredTotal": oSettings.fnRecordsDisplay(),
							 "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
							 "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
					 };
			 };


       var table = $("#mytable7a").dataTable({
					 initComplete: function() {
							 var api = this.api();
							 $('#mytable_filter input')
									 .off('.DT')
									 .on('input.DT', function() {
											 api.search(this.value).draw();
							 });
					 },
							 oLanguage: {
							 sProcessing: "loading..."
					 },
							 processing: true,
							 serverSide: true,
							 ajax: {"url": "<?php echo base_url().'index.php/rombel/get_siswa7a_json'?>", "type": "POST"},
									columns: [
												{"data": "siswa_kode"},
												{"data": "siswa_nama"},												
												{"data": "view"}


									 ],
							order: [[1, 'asc']],
					 rowCallback: function(row, data, iDisplayIndex) {
							 var info = this.fnPagingInfo();
							 var page = info.iPage;
							 var length = info.iLength;
							 $('td:eq(0)', row).html();
					 }

			 });
       var table = $("#mytable8a").dataTable({
           initComplete: function() {
               var api = this.api();
               $('#mytable_filter input')
                   .off('.DT')
                   .on('input.DT', function() {
                       api.search(this.value).draw();
               });
           },
               oLanguage: {
               sProcessing: "loading..."
           },
               processing: true,
               serverSide: true,
               ajax: {"url": "<?php echo base_url().'index.php/rombel/get_siswa8a_json'?>", "type": "POST"},
                  columns: [
                        						{"data": "siswa_kode"},
												{"data": "siswa_nama"},												
												{"data": "view"}

                   ],
              order: [[1, 'asc']],
           rowCallback: function(row, data, iDisplayIndex) {
               var info = this.fnPagingInfo();
               var page = info.iPage;
               var length = info.iLength;
               $('td:eq(0)', row).html();
           }

       });
       var table = $("#mytable9a").dataTable({
					 initComplete: function() {
							 var api = this.api();
							 $('#mytable_filter input')
									 .off('.DT')
									 .on('input.DT', function() {
											 api.search(this.value).draw();
							 });
					 },
							 oLanguage: {
							 sProcessing: "loading..."
					 },
							 processing: true,
							 serverSide: true,
							 ajax: {"url": "<?php echo base_url().'index.php/rombel/get_siswa9a_json'?>", "type": "POST"},
									columns: [
												{"data": "siswa_kode"},
												{"data": "siswa_nama"},												
												{"data": "view"}

									 ],
							order: [[1, 'asc']],
					 rowCallback: function(row, data, iDisplayIndex) {
							 var info = this.fnPagingInfo();
							 var page = info.iPage;
							 var length = info.iLength;
							 $('td:eq(0)', row).html();
					 }

			 });
			// end setup datatables
			
			// get View Records
			$('#mytable7a').on('click','.view_record',function(){
							var kode=$(this).data('kode');
						 var agama=$(this).data('agama');
						var indo=$(this).data('indo');
						var ing=$(this).data('ing');
						var ipa=$(this).data('ipa');
						var ips=$(this).data('ips');
						var mtk=$(this).data('mtk');
						var pkn=$(this).data('pkn');
						var tik=$(this).data('tik');
						//show modal start
						 $('#ModalView').modal('show');
						 $('[name="kode_siswa"]').val(kode);
						$('[name="nilai_agama"]').val(agama);
						$('[name="nilai_b_indonesia"]').val(indo);
						$('[name="nilai_b_inggris"]').val(ing);
						$('[name="nilai_IPA"]').val(ipa);
						$('[name="nilai_IPS"]').val(ips);
						$('[name="nilai_matematika"]').val(mtk);
						$('[name="nilai_PKN"]').val(pkn);
						$('[name="nilai_TIK"]').val(tik);

						 });
			$('#mytable8a').on('click','.view_record',function(){
				var kode=$(this).data('kode');
						 var agama=$(this).data('agama');
						var indo=$(this).data('indo');
						var ing=$(this).data('ing');
						var ipa=$(this).data('ipa');
						var ips=$(this).data('ips');
						var mtk=$(this).data('mtk');
						var pkn=$(this).data('pkn');
						var tik=$(this).data('tik');
						//show modal start
						 $('#ModalView').modal('show');
						 $('[name="kode_siswa"]').val(kode);
						$('[name="nilai_agama"]').val(agama);
						$('[name="nilai_b_indonesia"]').val(indo);
						$('[name="nilai_b_inggris"]').val(ing);
						$('[name="nilai_IPA"]').val(ipa);
						$('[name="nilai_IPS"]').val(ips);
						$('[name="nilai_matematika"]').val(mtk);
						$('[name="nilai_PKN"]').val(pkn);
						$('[name="nilai_TIK"]').val(tik);

						 });
			$('#mytable9a').on('click','.view_record',function(){
				var kode=$(this).data('kode');
						 var agama=$(this).data('agama');
						var indo=$(this).data('indo');
						var ing=$(this).data('ing');
						var ipa=$(this).data('ipa');
						var ips=$(this).data('ips');
						var mtk=$(this).data('mtk');
						var pkn=$(this).data('pkn');
						var tik=$(this).data('tik');
						//show modal start
						 $('#ModalView').modal('show');
						 $('[name="kode_siswa"]').val(kode);
						$('[name="nilai_agama"]').val(agama);
						$('[name="nilai_b_indonesia"]').val(indo);
						$('[name="nilai_b_inggris"]').val(ing);
						$('[name="nilai_IPA"]').val(ipa);
						$('[name="nilai_IPS"]').val(ips);
						$('[name="nilai_matematika"]').val(mtk);
						$('[name="nilai_PKN"]').val(pkn);
						$('[name="nilai_TIK"]').val(tik);

						 });




			// End View Records
			// get Edit Records
			$('#mytable7a').on('click','.edit_record',function(){
				var kode=$(this).data('kode');
						 var agama=$(this).data('agama');
						var indo=$(this).data('indo');
						var ing=$(this).data('ing');
						var ipa=$(this).data('ipa');
						var ips=$(this).data('ips');
						var mtk=$(this).data('mtk');
						var pkn=$(this).data('pkn');
						var tik=$(this).data('tik');
						 $('#ModalUpdate').modal('show');
						 $('[name="kode_siswa"]').val(kode);
						 $('[name="nilai_agama"]').val(agama);
						$('[name="nilai_b_indonesia"]').val(indo);
						$('[name="nilai_b_inggris"]').val(ing);
						$('[name="nilai_IPA"]').val(ipa);
						$('[name="nilai_IPS"]').val(ips);
						$('[name="nilai_matematika"]').val(mtk);
						$('[name="nilai_PKN"]').val(pkn);
						$('[name="nilai_TIK"]').val(tik);

			 });
			$('#mytable8a').on('click','.edit_record',function(){
				var kode=$(this).data('kode');
						 var agama=$(this).data('agama');
						var indo=$(this).data('indo');
						var ing=$(this).data('ing');
						var ipa=$(this).data('ipa');
						var ips=$(this).data('ips');
						var mtk=$(this).data('mtk');
						var pkn=$(this).data('pkn');
						var tik=$(this).data('tik');
						 $('#ModalUpdate').modal('show');
						 $('[name="kode_siswa"]').val(kode);
						 $('[name="nilai_agama"]').val(agama);
						$('[name="nilai_b_indonesia"]').val(indo);
						$('[name="nilai_b_inggris"]').val(ing);
						$('[name="nilai_IPA"]').val(ipa);
						$('[name="nilai_IPS"]').val(ips);
						$('[name="nilai_matematika"]').val(mtk);
						$('[name="nilai_PKN"]').val(pkn);
						$('[name="nilai_TIK"]').val(tik);

			 });
			$('#mytable9a').on('click','.edit_record',function(){
				var kode=$(this).data('kode');
						 var agama=$(this).data('agama');
						var indo=$(this).data('indo');
						var ing=$(this).data('ing');
						var ipa=$(this).data('ipa');
						var ips=$(this).data('ips');
						var mtk=$(this).data('mtk');
						var pkn=$(this).data('pkn');
						var tik=$(this).data('tik');
						 $('#ModalUpdate').modal('show');
						 $('[name="kode_siswa"]').val(kode);
						 $('[name="nilai_agama"]').val(agama);
						$('[name="nilai_b_indonesia"]').val(indo);
						$('[name="nilai_b_inggris"]').val(ing);
						$('[name="nilai_IPA"]').val(ipa);
						$('[name="nilai_IPS"]').val(ips);
						$('[name="nilai_matematika"]').val(mtk);
						$('[name="nilai_PKN"]').val(pkn);
						$('[name="nilai_TIK"]').val(tik);

			 });
			// End Edit Records
// get Hapus Records
			$('#mytable7a').on('click','.hapus_record',function(){
						 var kode=$(this).data('kode');
						 $('#ModalHapus').modal('show');
						 $('[name="siswa_kode"]').val(kode);
			 });
			// End Hapus Records

	});
 </script>
 </html>
