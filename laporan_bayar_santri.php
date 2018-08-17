<link rel="stylesheet" href="assets/css/chosen.min.css" />
<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-print'></i>
								<a href='#'>Laporan Pembayaran</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					
						
											

										<div class="page-header">
							<h1>
								Laporan Pembayaran
								
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="cetak_pembayaran_santri.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Bulan </label>
															<div class="col-sm-6">	
															<select name="bln" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<option value="01">Januari</option>
																<option value="02">Februari</option>
																<option value="03">Maret</option>
																<option value="04">April</option>
																<option value="05">Mei</option>
																<option value="06">Juni</option>
																<option value="07">Juli</option>
																<option value="08">Agustus</option>
																<option value="09">September</option>
																<option value="10">Oktober</option>
																<option value="11">November</option>
																<option value="12">Desember</option>
																
															</select>
															</div>
														</div>
									<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Tahun </label>
															<div class="col-sm-6">	
															<select name="thn" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<?php
																for($i=2015;$i<=2020;$i++)
																{
																	echo "<option value=$i>$i</option>";	
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