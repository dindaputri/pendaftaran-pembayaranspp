<?php
include "config/koneksi.php";
include "config/fungsi_thumb.php";

$id_siswa=$_POST['id_siswa'];
$nis=$_POST['nis'];
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

mysql_query("update data_siswa set nis='$nis', nama_lengkap='$nama', alamat='$alamat', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', id_kelas='$kelas', no_telpon='$no_telpon', foto='$nama_file', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu' where id_siswa='$id_siswa'");
}
else
{
mysql_query("update data_siswa set nis='$nis', nama_lengkap='$nama', alamat='$alamat', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', id_kelas='$kelas', no_telpon='$no_telpon', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu' where id_siswa='$id_siswa'");
}
echo "<script>alert('Data Berhasil DiUpdate'); window.location='index.php?hal=data_santri'</script>";

?>
