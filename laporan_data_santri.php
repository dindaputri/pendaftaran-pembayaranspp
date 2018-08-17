<link rel="stylesheet" href="assets/css/chosen.min.css" />
<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-print'></i>
								<a href='#'>Laporan Data Santri</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					
						
											

										<div class="page-header">
							<h1>
								Laporan Data Santri
								
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="cetak_data_santri_admin.php" method="post" enctype="multipart/form-data">
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
									<div class="clearfix form-actions">
										<div class="col-md-offset-2 col-md-9">
											<input type="submit" class="btn btn-info" value="Cetak">
												
										</div>
									</div>
								</form>
						</div>		
					</div>	
						
						
						
						<!-- /.page-header -->
										
								<!-- PAGE CONTENT ENDS -->
							
						
				</div>