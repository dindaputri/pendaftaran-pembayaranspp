<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-list'></i>
								<a href='#'>Data Biaya Pendaftaran</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class='page-content'>
						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->
								<div class='widget-box'>
											<div class='widget-header'>
												<h4 class='smaller'>Halaman Data Biaya Pendaftaran</h4>
											</div>

											<div class='widget-body'>
												<div class='widget-main'>
												<table id="simple-table" class="table  table-bordered table-hover">
												<?php 
												include "config/koneksi.php";
												$sql=mysql_query("select * from data_bayar_daftar,data_siswa,kelas,jenis_pembayaran 
												where data_siswa.nis=data_bayar_daftar.nis and data_siswa.id_kelas=kelas.id_kelas and data_bayar_daftar.id_jenis_pembayaran=jenis_pembayaran.id_jenis_pembayaran");
												?>
											<thead>
												<tr>
													<th>NIS</th>
													<th>Kelas</th>
													<th>Biaya Daftar</th>
													<th>Jenis Pembayaran</th>
													<th>Jumlah Pembayaran</th>
													<th>Tools</th>
												</tr>
											</thead>
											<?php
											while($data=mysql_fetch_array($sql))
											{
											$top=$data['biaya_daftar'];
												$pop=rupiah($top);
												
												
												$spp=$data['biaya_spp'];
												$biaya_spp=rupiah($spp);

											$jml=$top + $spp;
											$jumlah= rupiah($jml);
											?>
											<tbody>
												<tr>
													<td><?php echo $data['nis'];?></td>
													<td><?php echo $data['nama_kelas'];?></td>
													<td><?php echo $pop;?></td>
													<td><?php echo $data['nama_pembayaran'];?>, <?php echo $biaya_spp;?></td>
													<td><?php echo $jumlah;?></td>
													<td><a href="cetak_detail_daftar.php?nis=<?php echo $data['nis'];?>"><button class="btn-primary">Cetak</button></a></td>
													</tr>
											</tbody>
											<?php
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