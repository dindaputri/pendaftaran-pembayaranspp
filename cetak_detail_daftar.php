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
	<table width="1000" align="center">
  <tr>
    <td><h2 align="center"><strong><u>LAPORAN PEMBAYARAN PENDAFTARAN SANTRI</u></strong></h2>
      <center>
        <p><strong>PONDOK PESANTREN EL - HUDA </strong>
        </p>
		<hr>
        <p>&nbsp;</p>
      </center>
       <table width="900">
	  <?php
	  $nis=$_GET['nis'];
		$sql=mysql_query("select * from data_siswa,kelas where data_siswa.id_kelas=kelas.id_kelas and nis='$nis'");
		while($data=mysql_fetch_array($sql))
		{
		?>
        <tr>
          <td width="137">Foto</td>
          <td width="351"><img src="images/<?php echo $data['foto'];?>" width="100" height="100"></td>
        </tr>
		 <tr>
          <td>NIS</td>
          <td><strong> : <?php echo $data['nis']; ?></strong></td>
        </tr>
		 <tr>
          <td>Nama Lengkap</td>
          <td><strong> : <?php echo $data['nama_lengkap']; ?></strong></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><strong> : <?php echo $data['alamat']; ?></strong></td>
        </tr>
		   <tr>
          <td>Tempat, Tgl Lahir</td>
          <td><strong>: <?php echo $data['tempat_lahir']; ?></strong>, <strong> <?php echo $data['tgl_lahir']; ?></strong></td>
        </tr>       
        <tr>
          <td>Jenis Kelamin</td>
          <td><strong>: <?php echo $data['jenis_kelamin']; ?></strong></td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>: <strong><?php echo $data['nama_kelas']; ?></strong></td>
        </tr>
		 <tr>
          <td>No Telpon</td>
          <td>: <strong><?php echo $data['no_telpon']; ?></strong></td>
        </tr>
		</table>
		<?php
		}
		?>
		<p>&nbsp;</p>
		<table border="1" align="center" width="800">
	<?php
		$id=$_GET['nis'];
		$sql=mysql_query("select * from data_bayar_daftar,jenis_pembayaran where data_bayar_daftar.id_jenis_pembayaran=jenis_pembayaran.id_jenis_pembayaran and nis='$id'");
	?>
		<tr>
			<th>No</th>
			<th>Biaya Pendaftaran</th>
			<th>Pembayaran</th>
			<th>Jumlah Pembayaran</th>
		</tr>
		<?php
		$no=1;
		while($data=mysql_fetch_array($sql))
		{
		$top=$data['biaya_daftar'];
		$pop=rupiah($top);
		
		
		$spp=$data['biaya_spp'];
		$biaya_spp=rupiah($spp);

    $jml=$top + $spp;
    $jumlah= rupiah($jml);
		?>
		<tr>	
			<td><?php echo $no;?></td>
			<td><?php echo $pop;?></td>
			<td><?php echo $data['nama_pembayaran'];?> <?php echo $biaya_spp;?></td>
			<td><?php echo $jumlah;?></td>
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