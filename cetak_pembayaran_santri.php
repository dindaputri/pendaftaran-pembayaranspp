<?php require_once('config/koneksi.php'); 
include "config/fungsi_rupiah.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PONDOK PESANTREN EL - HUDA</title>
<style type="text/css">
body,td,th {
	font-family: "Courier New", Courier, monospace;
}
</style>
</head>

<body>
<?php
$bln=$_POST['bln'];
$thn=$_POST['thn'];

		if($bln == '01')
											{
												$bulan="Januari";
											}
											elseif($bln == '02')
											{
												$bulan="Februari";
											}
											elseif($bln == '03')
											{
												$bulan="Maret";
											}
											elseif($bln == '04')
											{
												$bulan="April";
											}
											elseif($bln == '05')
											{
												$bulan="Mei";
											}
											elseif($bln == '06')
											{
												$bulan="Juni";
											}
											elseif($bln == '07')
											{
												$bulan="Juli";
											}
											elseif($bln == '08')
											{
												$bulan="Agustus";
											}
											elseif($bln == '09')
											{
												$bulan="September";
											}
											elseif($bln == '10')
											{
												$bulan="Oktober";
											}
											elseif($bln == '11')
											{
												$bulan="November";
											}
											elseif($bln == '12')
											{
												$bulan="Desember";
											}
?>
	<table width="1000" align="center">
  <tr>
    <td><p align="center"><img src="images/elhuda.png" width="50px" height="50px"><br><strong><u>LAPORAN PEMBAYARAN PONDOK PESANTREN EL - HUDA</u></strong><br>
		Perum Graha Prima Jl. Cendana Raya Blok IE. No. 65 Satriajaya <br>
		Tambun Utara Bekasi
		<hr>
        <p>&nbsp;</p>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>  Bulan :<?php echo $bulan;?> 
		 <br>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tahun : <?php echo $thn;?></strong>
		<table border="1" align="center" width="800">
	<?php
		session_start();
		$user=$_SESSION['username'];
		
		$dd=mysql_query("select * from data_siswa where nis='$user'");
		$ff=mysql_fetch_array($dd);
		$hh=$ff['id_siswa'];
		$sql=mysql_query("select * from data_pembayaran,jenis_pembayaran,data_siswa,kelas 
		where data_pembayaran.id_jenis_pembayaran=jenis_pembayaran.id_jenis_pembayaran 
		and data_pembayaran.id_siswa=data_siswa.id_siswa and data_siswa.id_kelas=kelas.id_kelas and bulan='$bln' and tahun='$thn' and data_pembayaran.id_siswa='$hh'");
	?>
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>NAMA LENGKAP</th>
			<th>KELAS</th>
			<th>JUMLAH PEMBAYARAN</th>
		</tr>
		<?php
		$no=1;
		while($data=mysql_fetch_array($sql))
		{
		$top=$data['jumlah_pembayaran'];
		$pop=rupiah($top);
		
		?>
		<tr>	
			<td><?php echo $no;?></td>
			<td><?php echo $data['nis'];?></td>
			<td><?php echo $data['nama_lengkap'];?></td>
			<td><?php echo $data['nama_kelas'];?></td>
			<td><?php echo $pop;?></td>
		</tr>
		<?php
		$no++;
		}
		?>
    </table>  
      <p>&nbsp;</p>
       <table width="100%">
        <tr>
          <td width="68%">&nbsp;</td>
          <td width="32%">Jakarta, <?php echo date("d-M-Y"); ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>ADMIN PONDOK PESANTREN EL - HUDA</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p></td>
  </tr>
</table>
<h2 align="center">&nbsp;</h2>
</body>
</html>
<script>
window.print();
</script>