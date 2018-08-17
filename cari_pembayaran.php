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
												<form class="form-horizontal" role="form" action="index.php?hal=cari_pembayaran" method="post">
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
												<div class="clearfix form-actions">
										<div class="col-md-offset-2 col-md-9">
											<input type="submit" class="btn btn-info" name="submit" id="submit" value="Lihat Data Pembayaran">
												
										</div>
									</div>
								</form>		
												
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<a href="index.php?hal=tambah_pembayaran"><button class="btn-primary">+ Tambah</button></a>
												<table id="simple-table" class="table  table-bordered table-hover">
												<?php 
												include "config/koneksi.php";
												
												if ((isset($_POST['submit'])) AND ($_POST['kelas'] <> "")) {
												  $kelas = $_POST['kelas'];
												  $sql = mysql_query("select * from data_siswa where 
												  	data_siswa.id_kelas='$kelas'and id_kelas LIKE '%$kelas%'") or die(mysql_error());
												  //menampilkan jumlah hasil pencarian
												  $jumlah = mysql_num_rows($sql); 
												  if ($jumlah > 0) {
													echo '<p>Ada '.$jumlah.' data yang sesuai.</p>';
														$nomor=1;
														
												?>
											<thead>
												<tr>
													<th>No</th>
													<th>NIS</th>
													<th>Pembayaran</th>
													<th>Jumlah Pembayaran</th>
													<th>Waktu Pembayaran</th>
													<th>Bukti Pembayaran</th>
													<th>Keterangan</th>
													<th>Status</th>
												</tr>
											</thead>
											<?php
											$no=1;
											while($data=mysql_fetch_array($sql))
											{
											$id_siswa=$data['id_siswa'];
											$dd=mysql_query("select * from data_pembayaran where id_siswa='$id_siswa'");
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
													if($status_transfer == 'Ada' and $status_bayar == '')
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
								  else {
								   // menampilkan pesan zero data
									echo 'Maaf, hasil pencarian tidak ditemukan.';
								  }
								} 
								else { echo 'Masukkan dulu kata kuncinya';}
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