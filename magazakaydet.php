<?php
$magazaadi= addslashes($_POST["magazaadi"]);
$magazatel= addslashes($_POST["magazatel"]);
$magazamail= addslashes($_POST["magazamail"]);
$magazakasa= addslashes($_POST["magazakasa"]);
$magazarf= addslashes($_POST["magazarf"]);
$magazaip= addslashes($_POST["magazaip"]);
//echo $magazaadi.'.'.$magazatel.'.'.$magazamail.'.'.$magazakasa.'.'.$magazarf.'.'.$magazaip;


require("conn.php");

$sqlekle="INSERT INTO 
tb_magaza (magaza_adi,magaza_tel,magaza_mail,magaza_kasa_sayisi,magaza_rf_sayisi,magaza_ip_blogu)
VALUES 
('$magazaadi', '$magazatel', '$magazamail', '$magazakasa','$magazarf','$magazaip');";
$sonuc=mysqli_query($baglan,$sqlekle) or die(mysqli_error($baglan));

header('Location:magazaekle.php?acildi=1');

//echo $arizadetay."-".$istanim."-".$isaciklama."-".$birim."-".$yeni_adi1."-".$yeni_adi2;


//echo $isimsoyisim."-".$birim."-".$email."-".$obase."-".$vpnvarmi."-".$vpn."-".$rdp."-".$cinsiyet."-".$kullaniciadi."-".$sifre."-".$kayittarihi;

?>