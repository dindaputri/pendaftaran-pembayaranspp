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

mysql_query("insert into data_pembayaran(id_pembayaran,id_jenis_pembayaran,jumlah_pembayaran,bukti_transfer,id_siswa,bulan,tahun,tgl_pembayaran,status_bayar,status_transfer,status_pembayaran) 
values('','$id_spp','$biaya','','$ss','$bln','$thn','$date','','Cash','Sudah Bayar')");

$dd=mysql_query("select * from data_pemasukkan where id_pemasukkan='1'");
$ff=mysql_fetch_array($dd);
$bb=$ff['jumlah_pemasukkan'];
mysql_query("update data_pemasukkan set jumlah_pemasukkan='$bb' + $biaya where id_pemasukkan='1'");
echo "<script>alert('Data Berhasil Disimpan'); window.location='index.php?hal=data_pembayaran'</script>";
?>


