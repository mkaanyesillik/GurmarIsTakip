<?php
require("conn.php");

if(isset($_GET["talepolustur"])=="1")
{
  $talepedenkisi= $_POST["talepedenkisi"];
$talepedenbirim= $_POST["talepedenbirim"];
$talepneden= $_POST["talepneden"];
$talepedilenurunler= $_POST["talepedilenurunler"];
$acilistarihi=date("Y-m-d H:i:s"); 
  $sql = "INSERT INTO tb_talep(talep_eden_kisi,talep_eden_birim,talep_nedeni,talep_edilen_urunler,talep_tarihi) VALUES ('$talepedenkisi','$talepedenbirim','$talepneden','$talepedilenurunler','$acilistarihi')";
  if ($baglan->query($sql) === TRUE) {
    $talep_id = $baglan->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $talep_id;
  } else {
    echo "Error: " . $sql . "<br>" . $baglan->error;
  }
  header("Location:index.php");
  $baglan->close();
}

if(isset($_GET["talep_id"])!=""&&isset($_GET["birimonay"])=="1"){

  $talep_id=$_GET["talep_id"];
  $birimyoneticisi=$_POST["birimyoneticiadi"];
  $birimonayivarmi=$_POST["birimonaycheck"];
  if(isset($birimonayivarmi)=="on"){$birimonayivarmi="Onaylı";}
  $birimonaytarihi=date("Y-m-d H:i:s");  
  $sql = "UPDATE tb_talep SET birim_yoneticisi='$birimyoneticisi',birim_yonetici_onayi='$birimonayivarmi',birim_yonetici_onay_tarihi='$birimonaytarihi' WHERE talep_id=$talep_id";
  if ($baglan->query($sql) === TRUE) {

  header("Location:talepformu.php?talep_id=$talep_id");
  }
  $baglan->close();
}
if(isset($_GET["talep_id"])!=""&&isset($_GET["toplamtutar"])=="1"){
    $talep_id=$_GET["talep_id"];
    $satinalinacaktoplamtutar=$_POST["satinalinacaktoplamtutar"];
    $sql = "UPDATE tb_talep SET satinalma_toplam_tutari='$satinalinacaktoplamtutar' WHERE talep_id=$talep_id";
    if ($baglan->query($sql) === TRUE) {
    header("Location:talepformu.php?talep_id=$talep_id");
    }
    $baglan->close();
  }
  
  if(isset($_GET["talep_id"])!=""&&isset($_GET["teklifler"])=="1"){
      $talep_id=$_GET["talep_id"];
      $teklif1=$_POST["teklif1"];
      $teklif1firma=$_POST["teklif1firma"];
      $teklif2=$_POST["teklif2"];
      $teklif2firma=$_POST["teklif2firma"];
      $teklif3=$_POST["teklif3"];
      $teklif3firma=$_POST["teklif3firma"];
      $sql = "UPDATE tb_talep SET teklif1='$teklif1',teklif1firma='$teklif1firma',teklif2='$teklif2',teklif2firma='$teklif2firma',teklif3='$teklif3',teklif3firma='$teklif3firma' WHERE talep_id=$talep_id";
      if ($baglan->query($sql) === TRUE) {
      header("Location:talepformu.php?talep_id=$talep_id");
      }
      $baglan->close();
    }

    /*if(isset($_GET["talep_id"])!=""&&isset($_GET["odemekosullari"])=="1"){

    $tl=$_POST["tl"];
    $doviz=$_POST["doviz"];
    $nakit=$_POST["nakit"];
    $kredikarti=$_POST["kredikarti"];
    $cek=$_POST["cek"];
    $tekcekim=$_POST["tekcekim"];
    $taksit=$_POST["taksit"];
      if(isset($tl)){$tl="Geçerli";}else{$tl="Geçersiz";}
      if(isset($doviz)){$doviz="Geçerli";}else{$doviz="Geçersiz";}
      if(isset($nakit)){$nakit="Geçerli";}else{$nakit="Geçersiz";}
      if(isset($kredikarti)){$kredikarti="Geçerli";}else{$kredikarti="Geçersiz";}
      if(isset($cek)){$cek="Geçerli";}else{$cek="Geçersiz";}
      if(isset($tekcekim)){$tekcekim="Geçerli";}else{$tekcekim="Geçersiz";}
      if(isset($taksit)){$taksit="Geçerli";}else{$taksit="Geçersiz";}
      echo $tl."-".$doviz."-".$nakit."-".$kredikarti."-".$cek."-".$tekcekim."-".$taksit;


      $sql = "UPDATE tb_talep SET teklif1='$teklif1',teklif1firma='$teklif1firma',teklif2='$teklif2',teklif2firma='$teklif2firma',teklif3='$teklif3',teklif3firma='$teklif3firma' WHERE talep_id=$talep_id";
      if ($baglan->query($sql) === TRUE) {
      header("Location:talepformu.php?talep_id=$talep_id");
      }
      $baglan->close();
    }*/

    if(isset($_GET["talep_id"])!=""&&isset($_GET["finansonayi"])=="1"){

      $talep_id=$_GET["talep_id"];
      $finansyoneticisi=$_POST["finansyoneticisi"];
      $finansonayvarmi=$_POST["finansonaycheck"];
      if(isset($finansonayvarmi)=="on"){$finansonayvarmi="Onaylı";}
      $finansonaytarihi=date("Y-m-d H:i:s");  
      echo $finansyoneticisi."-".$finansonayvarmi."-".$finansonaytarihi."-".$talep_id;
      $sql = "UPDATE tb_talep SET finansman_birim_yoneticisi='$finansyoneticisi',finansman_yonetici_onayi='$finansonayvarmi',finansman_yonetici_onay_tarihi='$finansonaytarihi' WHERE talep_id=$talep_id";
      if ($baglan->query($sql) === TRUE) {
    
      header("Location:talepformu.php?talep_id=$talep_id");
      }
      $baglan->close();
      
    }

        if(isset($_GET["talep_id"])!=""&&isset($_GET["yoneticionayi"])=="1"){

      $talep_id=$_GET["talep_id"];
      $yoneticiadi=$_POST["yoneticiadi"];
      $yoneticionaycheck=$_POST["yoneticionaycheck"];
      if(isset($yoneticionaycheck)=="on"){$yoneticionaycheck="Onaylı";}
      $yoneticionaytarihi=date("Y-m-d H:i:s");  
      echo $yoneticiadi."-".$yoneticionaycheck."-".$yoneticionaytarihi."-".$talep_id;
      $sql = "UPDATE tb_talep SET yonetim_birim_yoneticisi='$yoneticiadi',yonetim_yonetici_onayi='$yoneticionaycheck',yonetici_onay_tarihi='$yoneticionaytarihi' WHERE talep_id=$talep_id";
      if ($baglan->query($sql) === TRUE) {
    
      header("Location:talepformu.php?talep_id=$talep_id");
      }
      $baglan->close();
      
    }


?>