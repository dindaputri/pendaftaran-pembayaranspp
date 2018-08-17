<?php
include "config/koneksi.php";
include "config/fungsi_thumb.php";

$no_register=$_POST['no_register'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kelas=$_POST['kelas'];
$no_telpon=$_POST['no_telpon'];

$nama_ayah=$_POST['nama_ayah'];
$nama_ibu=$_POST['nama_ibu'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];

$lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
if (!empty($lokasi_file)){
    UploadBanner($nama_file);

mysql_query("insert into register(id_register,no_register,nama_lengkap,alamat,tempat_lahir,tgl_lahir,jenis_kelamin,id_kelas,no_telpon,foto,nama_ayah,nama_ibu,pekerjaan_ayah,pekerjaan_ibu) 
values('','$no_register','$nama','$alamat','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$kelas','$no_telpon','$nama_file','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu')");
echo "<script>alert('Data Berhasil Disimpan'); window.location='index.php'</script>";
}

?>