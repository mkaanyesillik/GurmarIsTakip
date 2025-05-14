<?php
$eposta= addslashes($_POST["eposta"]);
$sifre= addslashes($_POST["sifre"]);
$adsoyad= addslashes($_POST["adsoyad"]);
$birim= addslashes($_POST["birim"]);
$kayittarihi= date("Y-m-d H:i:s");


require("conn.php");

$sqlekle="INSERT INTO 
tb_users (email,password,fullname,birim_id,lastlogin)
VALUES 
('$eposta', '$sifre', '$adsoyad', '$birim','$kayittarihi');";
$sonuc=mysqli_query($baglan,$sqlekle) or die(mysqli_error($baglan));

header('Location:kullaniciekle.php?acildi=1');

//echo $arizadetay."-".$istanim."-".$isaciklama."-".$birim."-".$yeni_adi1."-".$yeni_adi2;


//echo $isimsoyisim."-".$birim."-".$email."-".$obase."-".$vpnvarmi."-".$vpn."-".$rdp."-".$cinsiyet."-".$kullaniciadi."-".$sifre."-".$kayittarihi;

?>