<?php
$zimmetsahibi= addslashes($_POST["zimmetsahibi"]);
$marka= addslashes($_POST["marka"]);
$tip= addslashes($_POST["tip"]);
$seri= addslashes($_POST["seri"]);
$aksesuar= addslashes($_POST["aksesuar"]);
$tarih= date("Y-m-d H:i:s");


require("conn.php");

$sqlekle="INSERT INTO 
tb_zimmet(zimmet_sahibi,zimmet_marka,zimmet_cihaz_model,zimmet_seri,zimmet_aksesuar,zimmet_tarihi)
VALUES 
('$zimmetsahibi', '$marka', '$tip', '$seri','$aksesuar','$tarih');";
$sonuc=mysqli_query($baglan,$sqlekle) or die(mysqli_error($baglan));

header('Location:zimmetekle.php?acildi=1');

//echo $arizadetay."-".$istanim."-".$isaciklama."-".$birim."-".$yeni_adi1."-".$yeni_adi2;


//echo $isimsoyisim."-".$birim."-".$email."-".$obase."-".$vpnvarmi."-".$vpn."-".$rdp."-".$cinsiyet."-".$kullaniciadi."-".$sifre."-".$kayittarihi;

?>