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
												$user=$_SESSION['username'];
												$sql=mysql_query("select * from data_siswa,kelas where data_siswa.id_kelas=kelas.id_kelas and nis='$user'");
												$data=mysql_fetch_array($sql);
												?>
												<thead>
												<tr>
                                            <th align="center">Foto</th>
                                            <th align="center">Data Diri</th>
                                            <th align="center">Keterangan</th>
										</tr>
										</thead>
										<tbody>
										<tr>
										<td rowspan="11" align="center"><img src="images/<?php echo $data['foto'];?>" width="250" height="300"></td>
										<td>NIS</td>
										<td><?php echo $data['nis'];?></td>
										</tr>
										<tr>
										<td>Nama Lengkap</td>
										<td><?php echo $data['nama_lengkap'];?></td>
										</tr>
										<tr>
										<td>Alamat</td>
										<td><?php echo $data['alamat'];?></td>
										</tr>
										<tr>
										<td>Tempat, Tgl Lahir</td>
										<td><?php echo $data['tempat_lahir'];?>, <?php echo $data['tgl_lahir'];?></td>
										</tr>
										<tr>
										<td>Jenis Kelamin</td>
										<td><?php echo $data['jenis_kelamin'];?></td>
										</tr>
										<tr>
										<td>Kelas</td>
										<td><?php echo $data['nama_kelas'];?></td>
										</tr>
										<tr>
										<td>No Telpon</td>
										<td><?php echo $data['no_telpon'];?></td>
										</tr>
										<tr>
										<td>Nama Ayah</td>
										<td><?php echo $data['nama_ayah'];?></td>
										</tr>
										<tr>
										<td>Pekerjaan Ayah</td>
										<td><?php echo $data['pekerjaan_ayah'];?></td>
										</tr>
										<tr>
										<td>Nama Ibu</td>
										<td><?php echo $data['nama_ibu'];?></td>
										</tr>
										<tr>
										<td>Pekerjaan Ibu</td>
										<td><?php echo $data['pekerjaan_ibu'];?></td>
										</tr>
										
										<tr>
											<td><a href="index.php?hal=edit_data_santri&id=<?php echo $data['id_siswa'];?>"><button>Edit</button></a></td>
										</tr>	
											</tbody>
										</table>

													
												</div>
											</div>
										</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>