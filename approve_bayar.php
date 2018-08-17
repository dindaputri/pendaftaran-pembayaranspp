<?php
include "config/koneksi.php";

$id=$_GET['id'];

mysql_query("update data_pembayaran set status_bayar='Telah Diterima' where id_pembayaran='$id'");
echo "<script>alert('Data Berhasil DiUpdate'); window.location='index.php?hal=data_pembayaran'</script>";
?>