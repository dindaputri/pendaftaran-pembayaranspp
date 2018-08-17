<?php
include "config/koneksi.php";

$jenis=$_POST['jenis'];
$jumlah=$_POST['jumlah'];
$date=date("d-m-Y");

$bulan=date("m");
$tahun=date("Y");
mysql_query("insert into data_pengeluaran(id_pengeluaran,nama_pengeluaran,jumlah_pengeluaran,tgl_pengeluaran,bulan,tahun) values('','$jenis','$jumlah','$date','$bulan','$tahun')");

$dd=mysql_query("select * from data_pemasukkan");
$gg=mysql_fetch_array($dd);
$ss=$gg['jumlah_pemasukkan'];
mysql_query("update data_pemasukkan set jumlah_pemasukkan=$ss - $jumlah where id_pemasukkan='1'");
echo "<script>alert('Data Berhasil Disimpan'); window.location='index.php?hal=data_pengeluaran'</script>";
?>