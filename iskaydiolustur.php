<?php
$istanim= addslashes($_POST["istanim"]);
$isaciklama= addslashes($_POST["isaciklama"]);
$birim= addslashes($_POST["birim"]);
$magaza= addslashes($_POST["magaza"]);
$fotoyol1= addslashes($_FILES["fotoyol1"]["name"]);
$isacilistarih=date("Y-m-d H:i:s");
$kisi=$_SESION["kullanici"];

if (isset($_FILES['fotoyol1'])) {
    $hata = $_FILES['fotoyol1']['error']; //resim inputundan gönderilen hatayı aldık.
    if ($hata != 0) { // hata kontrolü gerçekleştirdik.
        echo 'Resim gönderilirken bir hata gerçekleşti.';
    } else {
        $resimBoyutu = $_FILES['fotoyol1']['size']; // resim boyutunu öğrendik
        if ($resimBoyutu > (1024 * 1024 * 10)) {
            //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
            //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
            //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

            echo 'Resim 10MB den büyük olamaz.';
        } else {
            $tip = $_FILES['fotoyol1']['type']; //resim tipini öğrendik.
            $resimAdi = $_FILES['fotoyol1']['name']; //resmin adını öğrendik.

            $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
            $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

            $yeni_adi1 = "istakipfotos/" . time() . "." . $uzantisi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
            //yuklenecek_yer/resim_adi.uzantisi

            if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                if (move_uploaded_file($_FILES["fotoyol1"]["tmp_name"], $yeni_adi1  )) {
                    //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                    echo "Resim başarılı bir şekilde yüklendi.";
                } else echo 'Resim yüklenirken bir hata oluştu.';
            } else {
                echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
            }
        }
    }
}

require("conn.php");

 

$sqlekle="INSERT INTO 

tb_acikisler (ariza_tanim,ariza_aciklama,magaza,arizatarihi,birim,arizafoto1,arizafoto2,arizayibildiren)

 VALUES 

 ('$istanim', '$isaciklama','$magaza','$isacilistarih','$birim','$yeni_adi1','$yeni_adi2','$kisi');";

$sonuc=mysqli_query($baglan,$sqlekle) or die(mysqli_error($baglan));

//echo $arizadetay."-".$istanim."-".$isaciklama."-".$birim."-".$yeni_adi1."-".$yeni_adi2;
header('Location:iskayitekrani.php?acildi=1');
?>