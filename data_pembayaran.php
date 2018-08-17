<link rel="stylesheet" href="assets/css/chosen.min.css" />
<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-laptop'></i>
								<a href='#'>Data Pembayaran</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class='page-content'>
						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->
								<div class='widget-box'>
											<div class='widget-header'>
												<h4 class='smaller'>Halaman Data Pembayaran</h4>
											</div>

											<div class='widget-body'>
												<div class='widget-main'>
												<form class="form-horizontal" role="form" action="" method="post">
												<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Kelas </label>
															<div class="col-sm-6">	
															<select name="kelas" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<?php
																$tt=mysql_query("select * from kelas");
																while($dd=mysql_fetch_array($tt))
																{
																echo "<option value=$dd[id_kelas]>$dd[nama_kelas]</option>";
																}
																?>
															</select>
															</div>
														</div>
												<div class="form-group">
															<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Bulan </label>
															<div class="col-sm-6">	
															<select name="bulan" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<option value="01">Januari</option>
																<option value="02">Februari</option>
																<option value="03">Mret</option>
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
															<select name="tahun" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
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
											<input type="submit" class="btn btn-info" name="lihat" value="Lihat Data Pembayaran">
												
										</div>
									</div>
								</form>		
												<?php 
												if(ISSET($_POST['lihat'])){
												$xx=$_POST['kelas'];
												$bb=mysql_query("select * from kelas where id_kelas='$xx'");
												$mm=mysql_fetch_array($bb);
												$gg=$mm['nama_kelas'];
												
												echo "<strong>Data Kelas $gg</strong>";
												}
												?>			
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<a href="index.php?hal=tambah_pembayaran"><button class="btn-primary">+ Tambah</button></a>
												<table id="simple-table" class="table  table-bordered table-hover">
												<?php 
												include "config/koneksi.php";
												if(ISSET($_POST['lihat'])){
												$kl=$_POST['kelas'];
												
												$sql=mysql_query("select * from data_siswa where data_siswa.id_kelas='$kl'");
												?>
											<thead>
												<tr>
													<th>No</th>
													<th>NIS</th>
													<th>Pembayaran</th>
													<th>Jumlah Pembayaran</th>
													<th>Waktu Pembayaran</th>
													<th>Bukti Transfer</th>
													<th>Keterangan</th>
												</tr>
											</thead>
											<?php
											$no=1;
											while($data=mysql_fetch_array($sql))
											{
											$id_siswa=$data['id_siswa'];
											
											$mm=$_POST['bulan'];
											$pp=$_POST['tahun'];
											
											
											$dd=mysql_query("select * from data_pembayaran where id_siswa='$id_siswa' and bulan='$mm' and tahun='$pp'");
											$gg=mysql_fetch_array($dd);
											
											
											$hh=$gg['id_jenis_pembayaran'];
											$lop=mysql_query("select * from jenis_pembayaran where id_jenis_pembayaran='$hh'");
											$cop=mysql_fetch_array($lop);
											
											$jml=$gg['jumlah_pembayaran'];
											$jumlah=rupiah($jml);
											
											$bln=$gg['bulan'];
											
											if($bln == '')
											{
												$bulan="";
											}
											elseif($bln == '01')
											{
												$bulan="Januari";
											}
											elseif($bln == '02')
											{
												$bulan="Februari";
											}
											elseif($bln == '03')
											{
												$bulan="Maret";
											}
											elseif($bln == '04')
											{
												$bulan="April";
											}
											elseif($bln == '05')
											{
												$bulan="Mei";
											}
											elseif($bln == '06')
											{
												$bulan="Juni";
											}
											elseif($bln == '07')
											{
												$bulan="Juli";
											}
											elseif($bln == '08')
											{
												$bulan="Agustus";
											}
											elseif($bln == '09')
											{
												$bulan="September";
											}
											elseif($bln == '10')
											{
												$bulan="Oktober";
											}
											elseif($bln == '11')
											{
												$bulan="November";
											}
											elseif($bln == '12')
											{
												$bulan="Desember";
											}
											
											$status_transfer=$gg['status_transfer'];
											$status_bayar=$gg['status_bayar'];
											?>
											<tbody>
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $data['nis'];?></td>
													<td><?php echo $cop['nama_pembayaran'];?></td>
													<td><?php echo $jumlah;?></td>
													<td><?php echo $bulan;?>, <?php echo $gg['tahun'];?></td>
													<td><img src="images/<?php echo $gg['bukti_transfer'];?>" width="50" height="50"></td>
													<td><?php
													if($status_transfer == 'Transfer' and $status_bayar == '')
													{
														
													?>
														<a href="approve_bayar.php?id=<?php echo $gg['id_pembayaran'];?>"><button class="btn btn-info">Konfirmasi</button></a>
													<?php
													}
													elseif($status_transfer == '')
													{
													echo "";
													}
													elseif($status_transfer == 'Cash')
													{
														echo "Cash";
													}
													elseif($status_transfer == 'Transfer')
													{
														echo "Transfer";
													}
													elseif($status_bayar == 'Telah Diterima' and $status_transfer == 'Transfer')
													{
													?>
													Telah Diterima
													<?php
													}
													?>
													</td>
													<td>
													<?php
													
														$cc=$gg['status_pembayaran'];
														if($cc == '')
														{
															echo "Belum Bayar";
														}	
														else
														{
															echo "Sudah Bayar"; 
														}
													?>	
													</td>
												</tr>
											</tbody>
											<?php
											$no++;
											}
											}
											?>
										</table>

													
												</div>
											</div>
										</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>