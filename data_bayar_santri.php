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
												<a href="index.php?hal=tambah_pembayaran_santri"><button class="btn-success">+ Tambah</button></a>
												<table id="simple-table" class="table  table-bordered table-hover">
												<?php 
												include "config/koneksi.php";
												$user=$_SESSION['username'];
												$dd=mysql_query("select * from data_siswa where nis='$user'");
												$ff=mysql_fetch_array($dd);
												$bb=$ff['id_siswa'];
												$sql=mysql_query("select * from data_pembayaran,data_siswa,jenis_pembayaran 
												where data_pembayaran.id_jenis_pembayaran=jenis_pembayaran.id_jenis_pembayaran and data_siswa.id_siswa=data_pembayaran.id_siswa and data_pembayaran.id_siswa='$bb'");
												?>
											<thead>
												<tr>
													<th>No</th>
													<th>Jenis Pembayaran</th>
													<th>Bulan Bayar</th>
													<th>Jumlah Bayar</th>
													<th>Bukti Pembayaran</th>
													<th>Keterangan</th>
												</tr>
											</thead>
											<?php
											$no=1;
											while($data=mysql_fetch_array($sql))
											{
											$jm=$data['jumlah_pembayaran'];
											$jumlah=rupiah($jm);
											
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
											
											$status_bayar=$data['status_bayar'];
											$status_transfer=$data['status_transfer'];
											?>
											<tbody>
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $data['nama_pembayaran'];?></td>
													<td><?php echo $bulan; $data['tahun'];?></td>
													<td><?php echo $jumlah;?></td>
													<td><a href="images/<?php echo $data['bukti_transfer'];?>"><img src="images/<?php echo $data['bukti_transfer'];?>" width="50" height="50"></a></td>
													<td><?php
													if($status_transfer == '')
													{
													echo "Tidak Transfer";
													}
													elseif($status_bayar == 'Telah Diterima' and $status_transfer == 'Ada')
													{
													?>
													Telah Diterima
													<?php
													}
													?>
													</td>
												</tr>
											</tbody>
											<?php
											$no++;
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