<?php require_once('config/koneksi.php'); 
include "config/fungsi_rupiah.php";
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
<?php
$kelas=$_POST['kelas'];
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
$lop=mysql_query("select * from kelas where id_kelas='$kelas'");
$lup=mysql_fetch_array($lop);
$foot=$lup['nama_kelas'];

?>
	<table width="1000" align="center">
  <tr>
    <td><p align="center"><img src="images/elhuda.png" width="50px" height="50px"><br><strong><u>LAPORAN PEMBAYARAN PONDOK PESANTREN EL - HUDA</u></strong><br>
		Perum Graha Prima Jl. Cendana Raya Blok IE. No. 65 Satriajaya <br>
		Tambun Utara Bekasi
		<hr>
      <center>
        <p>&nbsp;</p>
		 <p><strong>KELAS <?php echo $foot;?> <?php echo $bulan;?> <?php echo $thn;?></strong>
        </p>
      </center>
		<p>&nbsp;</p>
		<table id="zebra">
	<?php
		$sql=mysql_query("select * from data_pembayaran,jenis_pembayaran,data_siswa 
		where data_pembayaran.id_jenis_pembayaran=jenis_pembayaran.id_jenis_pembayaran and data_pembayaran.id_siswa=data_siswa.id_siswa and id_kelas='$kelas' and bulan='$bln' and tahun='$thn'");
	?>
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>NAMA LENGKAP</th>
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