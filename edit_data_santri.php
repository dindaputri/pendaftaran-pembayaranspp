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
								<a href='#'>Edit Data Santri</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					
						
											

										<div class="page-header">
							<h1>
								Edit Data Santri
								
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="proses_edit_data_santri.php" method="post" enctype="multipart/form-data">
								<?php
								include "config/koneksi";
								$id=$_GET['id'];
								$sql=mysql_query("select * from data_siswa,kelas where data_siswa.id_kelas=kelas.id_kelas and id_siswa='$id'");
								while($data=mysql_fetch_array($sql))
								{
								$id_kelas=$data['id_kelas'];
								?>
								<input type="hidden" id="form-field-1-1" name="id_siswa" class="form-control" value="<?php echo $data['id_siswa'];?>">
								<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> NIS </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nis" class="form-control" value="<?php echo $data['nis'];?>" readonly>
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Lengkap </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama" class="form-control" value="<?php echo $data['nama_lengkap'];?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Alamat </label>

										<div class="col-sm-6">
											<textarea class="form-control" id="form-field-1-1" name="alamat"><?php echo $data['alamat'];?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tempat Lahir </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir'];?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tgl Lahir </label>
										
										<div class="col-sm-6">
											<input class="form-control date-picker" name="tgl_lahir" id="form-field-1-1" type="text" value="<?php echo $data['tgl_lahir'];?>">
											
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
															<select name="kelas" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<?php
																$lop=mysql_query("select * from kelas");
																while($crot=mysql_fetch_array($lop))
																{
																	if ($crot['id_kelas']==$id_kelas)
																	{
																		$slc=" selected=selected";
																	}
																	else
																	{
																		$slc="";
																	}
																	echo "<option value='".$crot['id_kelas']."' $slc>".$crot['nama_kelas']."</option>";
																}
																?>
															</select>
															</div>
														</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> No Telpon </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="no_telpon" class="form-control" value="<?php echo $data['no_telpon'];?>">
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Ayah </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama_ayah" class="form-control" value="<?php echo $data['nama_ayah'];?>">
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama Ibu </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="nama_ibu" class="form-control" value="<?php echo $data['nama_ibu'];?>">
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Pekerjaan Ayah </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="pekerjaan_ayah" class="form-control" value="<?php echo $data['pekerjaan_ayah'];?>">
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Pekerjaan Ibu </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="pekerjaan_ibu" class="form-control" value="<?php echo $data['pekerjaan_ibu'];?>">
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Foto </label>

										<div class="col-sm-6">
											<input type="file" id="form-field-1-1" name="fupload" class="form-control">
										</div>
									</div>
									<?php
									}
									?>			
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