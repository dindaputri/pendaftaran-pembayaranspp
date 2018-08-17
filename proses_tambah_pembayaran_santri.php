<?php
include "config/koneksi.php";
include "config/fungsi_thumb.php";

$nis=$_POST['nis'];
$id_spp=$_POST['id_spp'];
$biaya=$_POST['biaya'];
$date=date("d-m-Y");
$bln=$_POST['bln'];
$thn=$_POST['thn'];

$dd=mysql_query("select * from data_siswa where nis='$nis'");
$gg=mysql_fetch_array($dd);
$ss=$gg['id_siswa'];

$lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
if (!empty($lokasi_file)){
    UploadBanner($nama_file);

mysql_query("insert into data_pembayaran(id_pembayaran,id_jenis_pembayaran,jumlah_pembayaran,bukti_transfer,id_siswa,bulan,tahun,tgl_pembayaran,status_bayar,status_transfer,status_pembayaran) 
values('','$id_spp','$biaya','$nama_file','$ss','$bln','$thn','$date','','Transfer','Sudah Bayar')");
}
else
{
 mysql_query("insert into data_pembayaran(id_pembayaran,id_jenis_pembayaran,jumlah_pembayaran,id_siswa,bulan,tahun,tgl_pembayaran,status_bayar,status_transfer,status_pembayaran) 
	values('','$id_spp','$biaya','$ss','$bln','$thn','$date','','Transfer','Sudah Bayar')");
}
$lfc=mysql_query("select * from data_pemasukkan");
$red=mysql_fetch_array($lfc);
$ger=$red['jumlah_pemasukkan'];
mysql_query("update data_pemasukkan set jumlah_pemasukkan=$ger + $biaya where id_pemasukkan='1'");
echo "<script>alert('Data Berhasil Disimpan'); window.location='index.php?hal=data_bayar_santri'</script>";
?>