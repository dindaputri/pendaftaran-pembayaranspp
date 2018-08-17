<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-key'></i>
								<a href='#'>Daftar Ulang</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class='page-content'>
						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->
								<div class='widget-box'>
											<div class='widget-header'>
												<h4 class='smaller'>Halaman Daftar Ulang</h4>
											</div>

											<div class='widget-body'>
												<div class='widget-main'>
												<table id="simple-table" class="table  table-bordered table-hover">
												<?php 
												include "config/koneksi.php";
												$sql=mysql_query("select * from register,kelas where register.id_kelas=kelas.id_kelas and status_daftar=''");
												?>
											<thead>
												<tr>
													<th>No Register</th>
													<th>Nama Lengkap</th>
													<th>Alamat</th>
													<th>Tempat Lahir, Tgl Lahir</th>
													<th>Jenis Kelamin</th>
													<th>Kelas</th>
													<th>No Telpon</th>
													<th>Foto</th>
													<th>Tools</th>
												</tr>
											</thead>
											<?php
											while($data=mysql_fetch_array($sql))
											{
											?>
											<tbody>
												<tr>
													<td><?php echo $data['no_register'];?></td>
													<td><?php echo $data['nama_lengkap'];?></td>
													<td><?php echo $data['alamat'];?></td>
													<td><?php echo $data['tempat_lahir'];?>, <?php echo $data['tgl_lahir'];?></td>
													<td><?php echo $data['jenis_kelamin'];?></td>
													<td><?php echo $data['nama_kelas'];?></td>
													<td><?php echo $data['no_telpon'];?></td>
													<td><img src="images/<?php echo $data['foto'];?>" width="50" height="50"></td>
													<td><a href="index.php?hal=edit_register&id=<?php echo $data['id_register'];?>"><button class="btn-primary">Ubah</button></a></td>
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