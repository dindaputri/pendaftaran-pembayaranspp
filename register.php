<?php
include "fungsi.php";
$getID=autonumber("register","no_register",3,"2018REG");
?>
<link rel="stylesheet" href="assets/css/chosen.min.css" />
<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-desktop desktop-icon'></i>
								<a href='#'>Register</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					
						
											

										<div class="page-header">
							<h1>
								Pendaftaran Santri Baru
								
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="proses_register.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> No Register </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1" class="form-control" name="no_register" value="<?php echo $getID;?>" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Lengkap </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama" placeholder="Nama Lengkap" class="form-control" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Alamat </label>

										<div class="col-sm-6">
											<textarea class="form-control" id="form-field-1-1" name="alamat" placeholder="Alamat Sesuai KTP"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tempat Lahir </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tgl Lahir </label>
										
										<div class="col-sm-6">
											<input class="form-control date-picker" name="tgl_lahir" id="form-field-1-1" type="text" data-date-format="dd-mm-yyyy" />
											
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Jenis Kelamin </label>
										
										<div class="col-sm-6">
											<label>
														<input name="jenis_kelamin" type="radio" class="ace" value="Laki-Laki" />
														<span class="lbl"> Laki-Laki</span>
													</label>
													
											<label>
														<input name="jenis_kelamin" type="radio" class="ace" value="Perempuan"/>
														<span class="lbl"> Perempuan</span>
													</label>		
										</div>
									</div>
									<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Kelas </label>
															<div class="col-sm-6">	
															<select name="kelas" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<?php
																include "config/koneksi.php";
																$sql=mysql_query("select * from kelas");
																while($data=mysql_fetch_array($sql))
																{
																	echo "<option value=$data[id_kelas]>$data[nama_kelas]</option>";
																}
																?>
															</select>
															</div>
														</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> No Telpon </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="no_telpon" placeholder="No Telpon" class="form-control" />
										</div>
									</div>	
									
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Ayah </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama_ayah" class="form-control" />
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Ibu </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama_ibu" class="form-control" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Pekerjaan Ayah </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="pekerjaan_ayah" class="form-control" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Pekerjaan Ibu </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="pekerjaan_ibu" class="form-control" />
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Foto </label>

										<div class="col-sm-6">
											<input type="file" id="form-field-1-1" name="fupload" class="form-control" />
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