<div class="content">
	<style>
.datepicker{z-index:1151 !important;}
</style>
		<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Tabel</h4>
                                    <p class="card-category"> Guru</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="mytable">
                                            <thead class=" text-primary">
                                                <tr>
																<th>Kode</th>
																<th>Nama</th>
																<th>Username</th>
																<th>Alamat</th>
																<th>Telp</th>
																<th>Status</th>
																<th>Action</th>
															</tr>
                                            </thead>
                                         </table>
                                         <button class="btn btn-success ml-2" data-toggle="modal" data-target="#myModalAdd">Add New</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						
				</div>
		</div>
</div>
<!-- Modal Add guru-->
	<form id="add-row-form" action="<?php echo base_url().'index.php/guru/simpan'?>" method="post">
		 <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					 <div class="modal-content">
							 <div class="modal-header" data-background-color="purple">
										 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										 <h4 class="modal-title" id="myModalLabel">Tambah guru</h4>
							 </div>
							 <div class="modal-body">
								 <div class="row">

								 	 <div class="col-md-5"><div class="form-group label-floating">
										 <label for="kode_guru" class="control-label">Kode NUPTK</label>
										 <input type="text" name="kode_guru" class="form-control" placeholder="" required>
						         </div></div>
										 <div class="col-md-5"><div class="form-group label-floating">
											 <label for="nama_guru" class="control-label">Nama Lengkap</label>
											 <input type="text" name="nama_guru" class="form-control" placeholder="" required>
							         </div></div>

											 <div class="col-md-5"><div class="form-group label-floating">
												 <label for="username_guru" class="control-label">Username</label>
												 <input type="text" name="username_guru" class="form-control" placeholder="" required>
								         </div></div>
												 <div class="col-md-5"><div class="form-group label-floating">
													 <label for="password_guru" class="control-label">Password</label>
													 <input type="password" name="password_guru" class="form-control" placeholder="" required>
									         </div></div>
												 <div class="col-md-3"><div class="form-group label-floating">
													 <label for="agama_guru" class="control-label">Agama</label>
													 <input type="text" name="agama_guru" class="form-control" placeholder="">
									         </div></div>
													 <div class="col-md-3"><div class="form-group label-floating">
														 <label for="gender_guru" class="control-label">Gender</label>
														 <select name="gender_guru" class="form-control" placeholder="" required>
															 <option value="Laki">Laki</option>
																<option value="Perempuan">Perempuan</option>

														 </select>	 															</div></div>
														 <div class="col-md-4"><div class="form-group label-floating">
															 <label for="tgllhr_guru" class="control-label">Tanggal lahir</label>
															 <input name="tgllhr_guru"class="datepicker form-control" data-date-format="yyyy-mm-dd" type="text" value="2016-12-01"/>
														 	</div></div>
															<div class="col-md-5"><div class="form-group label-floating">
																<label for="tlp" class="control-label">Telpon</label>
																<input type="text" name="tlp" class="form-control" placeholder="" required>
															 </div></div>


														<div class="col-md-8"><div class="form-group label-floating">
															<label for="alamat_guru" class="control-label">Alamat</label>
															<input type="text" name="alamat_guru" class="form-control" placeholder="" required>
															</div></div>



																
																</div>


							 </div>
							 <div class="modal-footer">
								 		<button type="reset" class="btn btn-warning ml-2">Reset</button>
										<button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
										<button type="submit" id="add-row" class="btn btn-success ml-2">Save</button>
							 </div>
						</div>
				</div>
		 </div>
 </form>
<!-- Modal View guru-->
<form id="add-row-form" action="" method="">
	 <div class="modal fade" id="ModalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				 <div class="modal-content">
						 <div class="modal-header">
								 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								 <h4 class="modal-title" id="myModalLabel">Profil guru</h4>
						 </div>
						 <div class="modal-body">
							 <div class="row">

								 <div class="col-md-5"><div class="form-group">
									 <label for="kode_guru" class="control-label">NUPTK</label>
									 <input type="text" name="kode_guru" class="form-control" placeholder="" readonly>
									 </div></div>
									 <div class="col-md-5"><div class="form-group">
										 <label for="nama_guru" class="control-label">Nama Lengkap</label>
										 <input type="text" name="nama_guru" class="form-control" placeholder="" readonly>
										 </div></div>

										 <div class="col-md-5"><div class="form-group">
											 <label for="username_guru" class="control-label">Username</label>
											 <input type="text" name="username_guru" class="form-control" placeholder="" readonly>
											 </div></div>
											 <div class="col-md-5"><div class="form-group">
												 <label for="password_guru" class="control-label">Password</label>
												 <input type="password" name="password_guru" class="form-control" placeholder="" readonly>
												 </div></div>
											 <div class="col-md-3"><div class="form-group">
												 <label for="agama_guru" class="control-label">Agama</label>
												 <input type="text" name="agama_guru" class="form-control" placeholder="" readonly>
												 </div></div>
												 <div class="col-md-3"><div class="form-group">
													 <label for="gender_guru" class="control-label">Gender</label>
													 <select name="gender_guru" class="form-control" placeholder="" readonly>
														 <option value="Laki">Laki</option>
															<option value="Perempuan">Perempuan</option>

													 </select>	 															</div></div>
													 <div class="col-md-4"><div class="form-group">
														 <label for="tgllhr_guru" class="control-label">Tanggal Lahir</label>
														 <input name="tgllhr_guru"class="datepicker form-control" data-date-format="yyyy-mm-dd" type="text" value="2016-12-01" readonly/>
														</div></div>
														<div class="col-md-5"><div class="form-group">
															<label for="tlp" class="control-label">Telpon</label>
															<input type="text" name="tlp" class="form-control" placeholder="" readonly>
														 </div></div>


													<div class="col-md-5"><div class="form-group">
														<label for="alamat_guru" class="control-label">Alamat</label>
														<input type="text" name="alamat_guru" class="form-control" placeholder="" readonly>
														</div></div>





															</div>

						 </div>
						 <div class="modal-footer">
									<button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
						 </div>
					</div>
			</div>
	 </div>
</form>

 <!-- Modal Update guru-->
	<form id="add-row-form" action="<?php echo base_url().'index.php/guru/update'?>" method="post">
		 <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					 <div class="modal-content">
							 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									 <h4 class="modal-title" id="myModalLabel">Update guru</h4>
							 </div>
							 <div class="modal-body">
								 <div class="row">

								 	 <div class="col-md-5"><div class="form-group">
										 <label for="kode_guru" class="control-label">NUPTK</label>
										 <input type="text" name="kode_guru" class="form-control" placeholder="" required>
						         </div></div>
										 <div class="col-md-5"><div class="form-group ">
											 <label for="nama_guru" class="control-label">Nama Lengkap</label>
											 <input type="text" name="nama_guru" class="form-control" placeholder="" required>
							         </div></div>

											 <div class="col-md-5"><div class="form-group">
												 <label for="username_guru" class="control-label">Username</label>
												 <input type="text" name="username_guru" class="form-control" placeholder="" required>
								         </div></div>
												 <div class="col-md-5"><div class="form-group">
													 <label for="password_guru" class="control-label">Password</label>
													 <input type="password" name="password_guru" class="form-control" placeholder="" required>
									         </div></div>
												 <div class="col-md-3"><div class="form-group">
													 <label for="agama_guru" class="control-label">Agama</label>
													 <input type="text" name="agama_guru" class="form-control" placeholder="">
									         </div></div>
													 <div class="col-md-3"><div class="form-group">
														 <label for="gender_guru" class="control-label">Gender</label>
														 <select name="gender_guru" class="form-control" placeholder="" required>
															 <option value="Laki">Laki</option>
																<option value="Perempuan">Perempuan</option>

														 </select>	 															</div></div>
														 <div class="col-md-4"><div class="form-group">
															 <label for="tgllhr_guru" class="control-label">Tanggal lahir</label>
														 	<input name="tgllhr_guru"class="datepicker form-control" data-date-format="yyyy-mm-dd" type="text" />
														 	</div></div>
															<div class="col-md-5"><div class="form-group">
																<label for="tlp" class="control-label">Telpon</label>
																<input type="text" name="tlp" class="form-control" placeholder="" required>
															 </div></div>


														<div class="col-md-5"><div class="form-group">
															<label for="alamat_guru" class="control-label">Alamat</label>
															<input type="text" name="alamat_guru" class="form-control" placeholder="" required>
															</div></div>



																
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

 <!-- Modal Hapus guru-->
	<form id="add-row-form" action="<?php echo base_url().'index.php/guru/delete'?>" method="post">
		 <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					 <div class="modal-content">
							 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									 <h4 class="modal-title" id="myModalLabel">Hapus guru</h4>
							 </div>
							 <div class="modal-body">
											 <input type="hidden" name="kode_guru" class="form-control" placeholder="Kode guru" required>
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
  										'<b>Berhasil</b>  menambah data Guru'+
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
										'<b>Berhasil</b>  mengubah data Guru'+
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
										'<b>Berhasil</b>  menghapus data Guru'+
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

			 var table = $("#mytable").dataTable({
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
							 ajax: {"url": "<?php echo base_url().'index.php/guru/get_guru_json'?>", "type": "POST"},
									columns: [
												{"data": "guru_kode"},
												{"data": "guru_nama"},
												{"data": "guru_username"},
												{"data": "guru_alamat"},
												{"data": "guru_tlp"},
												 {"data": "role_nama"},
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
			$('#mytable').on('click','.view_record',function(){
						 var kode=$(this).data('kode');
						var nama=$(this).data('nama');
						var username=$(this).data('username');
						var password=$(this).data('password');
						var agama=$(this).data('agama');
						var gender=$(this).data('gender');
						var tgllhr=$(this).data('tgllhr');
						var tlp=$(this).data('tlp');
						var alamat=$(this).data('alamat');
						//show modal start
						 $('#ModalView').modal('show');
						 $('[name="kode_guru"]').val(kode);
						$('[name="nama_guru"]').val(nama);
						$('[name="username_guru"]').val(username);
						$('[name="password_guru"]').val(password);
						$('[name="agama_guru"]').val(agama);
						$('[name="gender_guru"]').val(gender);
						$('[name="tgllhr_guru"]').val(tgllhr);
						$('[name="tlp"]').val(tlp);
						$('[name="alamat_guru"]').val(alamat);
			 });
			// End View Records
			// get Edit Records
			$('#mytable').on('click','.edit_record',function(){
						 var kode=$(this).data('kode');
						var nama=$(this).data('nama');
						var username=$(this).data('username');
						var password=$(this).data('password');
						var agama=$(this).data('agama');
						var gender=$(this).data('gender');
						var tgllhr=$(this).data('tgllhr');
						var tlp=$(this).data('tlp');
						var alamat=$(this).data('alamat');
						var role=$(this).data('role');
						 $('#ModalUpdate').modal('show');
						 $('[name="kode_guru"]').val(kode);
						$('[name="nama_guru"]').val(nama);
						$('[name="username_guru"]').val(username);
						$('[name="password_guru"]').val(password);
						$('[name="agama_guru"]').val(agama);
						$('[name="gender_guru"]').val(gender);
						$('[name="tgllhr_guru"]').val(tgllhr);
						$('[name="tlp"]').val(tlp);
						$('[name="alamat_guru"]').val(alamat);
						$('[name="role"]').val(role);
			 });
			// End Edit Records
			// get Hapus Records
			$('#mytable').on('click','.hapus_record',function(){
						 var kode=$(this).data('kode');
						 $('#ModalHapus').modal('show');
						 $('[name="kode_guru"]').val(kode);
			 });
			// End Hapus Records

	});
 </script>
 </html>
