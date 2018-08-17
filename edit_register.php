
<?php
include "fungsi.php";
$getID=autonumber("data_siswa","nis",3,"01804");
?>
<link rel="stylesheet" href="assets/css/chosen.min.css" />
<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-desktop desktop-icon'></i>
								<a href='#'>Daftar Ulang</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					
						
											

										<div class="page-header">
							<h1>
								Pendaftaran Ulang Santri Baru
								
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="proses_edit_register.php" method="post" enctype="multipart/form-data">
								<?php
								include "config/koneksi";
								$id=$_GET['id'];
								$sql=mysql_query("select * from register,kelas where register.id_kelas=kelas.id_kelas and id_register='$id'");
								while($data=mysql_fetch_array($sql))
								{
								?>
								<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> No Register </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1" class="form-control" name="no_register" value="<?php echo $data['no_register'];?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Lengkap </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama" class="form-control" value="<?php echo $data['nama_lengkap'];?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Alamat </label>

										<div class="col-sm-6">
											<textarea class="form-control" id="form-field-1-1" name="alamat" readonly><?php echo $data['alamat'];?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tempat Lahir </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir'];?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tgl Lahir </label>
										
										<div class="col-sm-6">
											<input class="form-control date-picker" name="tgl_lahir" id="form-field-1-1" type="text" value="<?php echo $data['tgl_lahir'];?>" readonly>
											
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Jenis Kelamin </label>
										
										<div class="col-sm-6">
											<label>
														<input name="jenis_kelamin" type="radio" class="ace" value="Laki-laki""<?php echo $data['jenis_kelamin'];?>" />
														<span class="lbl"> Laki-Laki</span>
													</label>
													
											<label>
														<input name="jenis_kelamin" type="radio" class="ace" value="Perempuan""<?php echo $data['jenis_kelamin'];?>"/>
														<span class="lbl"> Perempuan</span>
													</label>		
										</div>
									</div>
									<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Kelas </label>
															<div class="col-sm-6">	
															<input class="form-control date-picker" name="kelas" id="form-field-1-1" type="hidden" value="<?php echo $data['id_kelas'];?>">
															<input class="form-control date-picker" name="nama_kelas" id="form-field-1-1" type="text" value="<?php echo $data['nama_kelas'];?>" readonly>
									
															</div>
														</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> No Telpon </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="no_telpon" placeholder="No Telpon" class="form-control" value="<?php echo $data['no_telpon'];?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Foto </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="foto" class="form-control" value="<?php echo $data['foto'];?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> No Telpon </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="no_telpon" placeholder="No Telpon" class="form-control" value="<?php echo $data['no_telpon'];?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Ayah </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama_ayah" placeholder="Nama Ayah" class="form-control" value="<?php echo $data['nama_ayah'];?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Ibu </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama_ibu" placeholder="Nama Ibu" class="form-control" value="<?php echo $data['nama_ibu'];?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Pekerjaan Ayah </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" class="form-control" value="<?php echo $data['pekerjaan_ayah'];?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Pekerjaan Ibu </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" class="form-control" value="<?php echo $data['pekerjaan_ibu'];?>" readonly>
										</div>
									</div>	
									<?php
									}
									?>
									<hr>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> NIS </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nis" class="form-control" value="<?php echo $getID?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Biaya Pendaftaran </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="biaya" class="form-control" value="200000" readonly>
										</div>
									</div>
									<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Ukuran Seragam </label>
															<div class="col-sm-6">	
															<select name="seragam" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<option value="S">S</option>
																<option value="M">M</option>
																<option value="L">L</option>
																<option value="XL">XL</option>
																<option value="XXL">XXL</option>
															</select>
															</div>
														</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> SPP </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="spp" class="form-control" value="50000" readonly>
											<input type="hidden" id="form-field-1-1" name="id_spp" class="form-control" value="1">
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Username </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="username" class="form-control" value="<?php echo $getID;?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Password </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="password" class="form-control">
										</div>
									</div>					
									<div class="clearfix form-actions">
										<div class="col-md-offset-2 col-md-9">
											<input type="submit" class="btn btn-info" value="Simpan">
												
										</div>
									</div>
								</form>
								
										
						</div>		
					</div>	
						
						
						
						<!-- /.page-header -->
										
								<!-- PAGE CONTENT ENDS -->
							
						
				</div>