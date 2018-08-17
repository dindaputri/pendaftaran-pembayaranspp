<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-key'></i>
								<a href='#'>Data Pengeluaran</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class='page-content'>
						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->
								<div class='widget-box'>
											<div class='widget-header'>
												<h4 class='smaller'>Halaman Data Pengeluaran</h4>
											</div>

											<div class='widget-body'>
												<div class='widget-main'>
												<table id="simple-table" class="table  table-bordered table-hover">
												<?php 
												include "config/koneksi.php";
												$sql=mysql_query("select * from data_pengeluaran");
												?>
											<thead>
												<tr>
													<th>No</th>
													<th>Jenis Pengeluaran</th>
													<th>Tgl Pengeluaran</th>
													<th>Jumlah Pengeluaran</th>
												</tr>
											</thead>
											<?php
											$no=1;
											while($data=mysql_fetch_array($sql))
											{
											$kl=$data['jumlah_pengeluaran'];
											$keluar=rupiah($kl);
											
											$mm+=$data['jumlah_pengeluaran'];
											
											
											?>
											<tbody>
												<tr>
													<td><?php echo $no;?></td>
													<td><?php echo $data['nama_pengeluaran'];?></td>
													<td><?php echo $data['tgl_pengeluaran'];?>
													<td><?php echo $keluar;?></td>
												</tr>
											</tbody>
											<?php
											$no++;
											}
											?>
											<tr>
												<td colspan="3">Total Pengeluaran</td>
												<td><?php 
												$dd=rupiah($mm);
												
												echo $dd;
												?></td>
												</tr>
											<tr>
												<td colspan="3">Total Pemasukkan Sekarang</td>
												<td><?php 
												$ft=mysql_query("select * from data_pemasukkan");
												$dt=mysql_fetch_array($ft);
												$sd=$dt['jumlah_pemasukkan'];
												
												$fh=rupiah($sd);
												echo $fh;
												?></td>
												</tr>	
										</table>

													
												</div>
											</div>
										</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>