<link rel="stylesheet" href="assets/css/chosen.min.css" />
<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-laptop'></i>
								<a href='#'>Data Pengeluaran</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					
						
											

										<div class="page-header">
							<h1>
								Tambah Data Pengeluaran
								
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="proses_tambah_pengeluaran.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Jenis Pengeluaran </label>
															<div class="col-sm-6">	
															<select name="jenis" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<option value="Pembangunan">  Pembangunan</option>
																<option value="ATK">  ATK</option>
																<option value="Haflah Akhirusannah"> Haflah Akhirusannah</option>
																
															</select>
															</div>
														</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Biaya Pengeluaran </label>

										<div class="col-sm-6">
											<input type="text" id="form-field-1-1" name="jumlah" placeholder="Biaya Pengeluaran" class="form-control" />
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