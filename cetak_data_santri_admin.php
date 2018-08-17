<?php require_once('config/koneksi.php'); 
include "config/fungsi_rupiah.php";
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PONDOK PESANTREN EL - HUDA</title>
<style>
#zebra 
{ 
		width:100%; 
		font: 11px Arial Helvetica, sans-serif; 
		color: #000; 
		border-collapse: collapse; 
		border-spacing: 0; 
		border: 1px solid black;
} 
#zebra th 
{ 
		color: #fff; 
		background-color:#555; 
		font-size:15px; 
		text-align: center;
		padding:2px 5px;
		border: 1px solid black;	
} 
#zebra td
 { 
		font-size: 12px; 
		text-align: center; 
		padding: 2px 5px; 
		background-color: #efe7e7; 
		border: 1px solid black;
} 
#zebra tr:nth-child(odd) td 
{ 
		background-color: #CCE9FD; } /* table */	
</style>
</head>

<body>
	<table width="1000" align="center">
  <tr>
    <td><p align="center"><img src="images/elhuda.png" width="50px" height="50px"><br><strong><u>LAPORAN DATA SANTRI PONDOK PESANTREN EL - HUDA</u></strong><br>
		Perum Graha Prima Jl. Cendana Raya Blok IE. No. 65 Satriajaya <br>
		Tambun Utara Bekasi
		<hr>
		<p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
		$kelas=$_POST['kelas'];
		
		$dd=mysql_query("select * from kelas where id_kelas='$kelas'");
		$ff=mysql_fetch_array($dd);
		$pp=$ff['nama_kelas'];
		
		echo "<strong>Data Kelas $pp</strong>";
		?>
		
		</p>
		<table id="zebra">
	<?php
	include "config/koneksi.php"; 
	$kelas=$_POST['kelas'];
		$sql=mysql_query("select * from data_siswa,kelas where data_siswa.id_kelas=kelas.id_kelas and data_siswa.id_kelas='$kelas'");
	?>
		<tr>
													<th>No</th>
													<th>Foto</th>
													<th>NIS</th>
													<th>Nama Lengkap</th>
													<th>Alamat</th>
													<th>Tempat, Tgl Lahir</th>
													<th>Jenis Kelamin</th>
													<th>Nama Ayah</th>
													<th>Pekerjaan Ayah</th>
													<th>Nama Ibu</th>
													<th>Pekerjaan Ibu</th>
												</tr>
		<?php
											$no=1;
											while($data=mysql_fetch_array($sql))
											{
											
											?>
											<tbody>
												<tr>
													<td><?php echo $no;?></td>
													<td><img src="images/<?php echo $data['foto'];?>" width="100" height="100"></td>
													<td><?php echo $data['nis'];?></td>
													<td><?php echo $data['nama_lengkap'];?></td>
													<td><?php echo $data['alamat'];?></td>
													<td><?php echo $data['tempat_lahir'];?>, <?php echo $data['tgl_lahir'];?></td>
													<td><?php echo $data['jenis_kelamin'];?></td>
													<td><?php echo $data['nama_ayah'];?></td>
													<td><?php echo $data['pekerjaan_ayah'];?></td>
													<td><?php echo $data['nama_ibu'];?></td>
													<td><?php echo $data['pekerjaan_ibu'];?></td>
												</tr>
											</tbody>
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