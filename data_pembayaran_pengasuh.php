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
												<table id="simple-table" class="table  table-bordered table-hover">
												<?php 
												include "config/koneksi.php";
												if(ISSET($_POST['lihat'])){
												$kl=$_POST['kelas'];
												
												$sql=mysql_query("select * from data_pembayaran,data_siswa,kelas,jenis_pembayaran 
												where data_siswa.id_siswa=data_pembayaran.id_siswa and data_siswa.id_kelas=kelas.id_kelas 
												and data_pembayaran.id_jenis_pembayaran=data_pembayaran.id_jenis_pembayaran and data_siswa.id_kelas='$kl'");
												?>
											<thead>
												<tr>
													<th>No</th>
													<th>NIS</th>
													<th>Kelas</th>
													<th>Pembayaran</th>
													<th>Jumlah Pembayaran</th>
													<th>Waktu Pembayaran</th>
													<th>Bukti Pembayaran</th>
												</tr>
											</thead>
											<?php
											$no=1;
											while($data=mysql_fetch_array($sql))
											{
											$jml=$data['jumlah_pembayaran'];
											$jumlah=rupiah($jml);
											
											$bln=$data['bulan'];
											
											if($bln == '01')
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
											?>
											<tbody>
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $data['nis'];?></td>
													<td><?php echo $data['nama_kelas'];?></td>
													<td><?php echo $data['nama_pembayaran'];?></td>
													<td><?php echo $jumlah;?></td>
													<td><?php echo $bulan;?>, <?php echo $data['tahun'];?></td>
													<td><a href="images/<?php echo $data['bukti_transfer'];?>"><img src="images/<?php echo $data['bukti_transfer'];?>" width="50" height="50"></a></td>
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