<?php
include 'config/koneksi.php';

if ($_GET[hal]=='') {
	echo "<div class='main-content-inner'>
					<div class='breadcrumbs ace-save-state' id='breadcrumbs'>
						<ul class='breadcrumb'>
							<li>
								<i class='ace-icon fa fa-home home-icon'></i>
								<a href='#'>Home</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class='page-content'>
						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->
								<div class='widget-box'>
											<div class='widget-header'>
												<h4 class='smaller'>Halaman Home</h4>
											</div>

											<div class='widget-body'>
												<div class='widget-main'>
												<center><img src='images/huda.png' width='400px' height='400px'></center>	
													

												</div>
											</div>
										</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
";
}
elseif ($_GET[hal]=='profil') {
	include "profil.php";
}	
elseif ($_GET[hal]=='galeri') {
	include "galeri.php";
}
elseif ($_GET[hal]=='kontak') {
	include "kontak.php";
}
elseif ($_GET[hal]=='register') {
	include "register.php";
}	
elseif ($_GET[hal]=='syarat') {
	include "syarat.php";
}
elseif ($_GET[hal]=='login') {
	include "login.php";
}
elseif ($_GET[hal]=='daftar_ulang') {
	include "daftar_ulang.php";
}
elseif ($_GET[hal]=='edit_register') {
	include "edit_register.php";
}
elseif ($_GET[hal]=='profil_santri') {
	include "profil_santri.php";
}
elseif ($_GET[hal]=='data_santri') {
	include "data_santri.php";
}
elseif ($_GET[hal]=='data_pembayaran') {
	include "data_pembayaran.php";
}
elseif ($_GET[hal]=='data_pengeluaran') {
	include "data_pengeluaran.php";
}
elseif ($_GET[hal]=='tambah_pengeluaran') {
	include "tambah_pengeluaran.php";
}
elseif ($_GET[hal]=='data_bayar_santri') {
	include "data_bayar_santri.php";
}
elseif ($_GET[hal]=='data_daftar') {
	include "data_daftar.php";
}
elseif ($_GET[hal]=='tambah_pembayaran') {
	include "tambah_pembayaran.php";
}
elseif ($_GET[hal]=='laporan_pembayaran') {
	include "laporan_pembayaran.php";
}
elseif ($_GET[hal]=='tambah_pembayaran_santri') {
	include "tambah_pembayaran_santri.php";
}
elseif ($_GET[hal]=='laporan_bayar_santri') {
	include "laporan_bayar_santri.php";
}
elseif ($_GET[hal]=='data_santri_pengasuh') {
	include "data_santri_pengasuh.php";
}
elseif ($_GET[hal]=='data_pembayaran_pengasuh') {
	include "data_pembayaran_pengasuh.php";
}
elseif ($_GET[hal]=='data_pengeluaran_pengasuh') {
	include "data_pengeluaran_pengasuh.php";
}
elseif ($_GET[hal]=='laporan_pembayaran_pengasuh') {
	include "laporan_pembayaran_pengasuh.php";
}
elseif ($_GET[hal]=='edit_santri') {
	include "edit_santri.php";
}
elseif ($_GET[hal]=='edit_data_santri') {
	include "edit_data_santri.php";
}
elseif ($_GET[hal]=='laporan_pengeluaran') {
	include "laporan_pengeluaran.php";
}
elseif ($_GET[hal]=='laporan_pengeluaran_pengasuh') {
	include "laporan_pengeluaran_pengasuh.php";
}
elseif ($_GET[hal]=='laporan_data_santri') {
	include "laporan_data_santri.php";
}
elseif ($_GET[hal]=='profil_pengasuh') {
	include "profil_pengasuh.php";
}
elseif ($_GET[hal]=='cari_pembayaran') {
	include "cari_pembayaran.php";
}
?>