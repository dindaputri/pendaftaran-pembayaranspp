<?php
session_start();
mysql_connect("localhost","root","") or die("Nggak bisa koneksi");
mysql_select_db("dinda_kp");//sesuaikan dengan nama database anda

$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];
	
if($op=="in"){
    $cek = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['username'] = $c['username'];
        $_SESSION['level'] = $c['level'];
		if($c['level']=="SANTRI"){
			echo "<script>alert('Selamat Datang $username'); window.location='index.php'</script>";
		}
		elseif($c['level']=="admin"){
			echo "<script>alert('Selamat Datang $username'); window.location='index.php'</script>";
		}
		elseif($c['level']=="pengasuh"){
			echo "<script>alert('Selamat Datang $username'); window.location='index.php'</script>";
		}
    }else{
         die("password salah <a href=\"javascript:history.back()\">kembali</a>");
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>