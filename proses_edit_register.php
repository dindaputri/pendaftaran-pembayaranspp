<?php
include "config/koneksi.php";
$date=date("d-m-Y");
$bln=date("m");
$thn=date("Y");

$no_register=$_POST['no_register'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kelas=$_POST['kelas'];
$no_telpon=$_POST['no_telpon'];
$foto=$_POST['foto'];
$nama_ayah=$_POST['nama_ayah'];
$nama_ibu=$_POST['nama_ibu'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];

$nis=$_POST['nis'];
$biaya=$_POST['biaya'];
$id_spp=$_POST['id_spp'];
$spp=$_POST['spp'];

$username=$_POST['username'];
$password=$_POST['password'];

mysql_query("insert into data_siswa(id_siswa,nis,nama_lengkap,alamat,tempat_lahir,tgl_lahir,jenis_kelamin,id_kelas,no_telpon,foto,nama_ayah,nama_ibu,pekerjaan_ayah,pekerjaan_ibu) 
values('','$nis','$nama','$alamat','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$kelas','$no_telpon','$foto','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu')");

mysql_query("insert into data_bayar_daftar(id_bayar,biaya_spp,id_jenis_pembayaran,biaya_daftar,nis,tgl_bayar) values('','$spp','$id_spp','$biaya','$nis','$date')");

$sqq=mysql_query("select * from data_siswa where nis='$nis'");
$ddd=mysql_fetch_array($sqq);
$ff=$ddd['id_siswa'];

mysql_query("insert into data_pembayaran(id_pembayaran,id_jenis_pembayaran,jumlah_pembayaran,bukti_transfer,id_siswa,bulan,tahun,tgl_pembayaran,status_bayar,status_transfer,status_pembayaran) 
values('','$id_spp','$spp','','$ff','$bln','$thn','$date','','Cash','Sudah Bayar')");

mysql_query("insert into login(username,password,level) values('$username','$password','SANTRI')");

$ss=mysql_query("select * from data_pemasukkan where id_pemasukkan='1'");
$dd=mysql_fetch_array($ss);
$lop=$dd['jumlah_pemasukkan'];

mysql_query("update register set status_daftar='REGIS' where no_register='$no_register'");

if($lop == '')
{
$jumlah= $spp + $biaya;
mysql_query("insert into data_pemasukkan (id_pemasukkan,jumlah_pemasukkan) values ('','$jumlah')");
}
else
{
mysql_query("update data_pemasukkan set jumlah_pemasukkan='$lop' + $biaya + $spp where id_pemasukkan='1'");
}
echo "<script>alert('Data Berhasil Disimpan'); window.location='index.php?hal=data_santri'</script>";


?>
