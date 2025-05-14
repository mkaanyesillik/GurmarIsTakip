<html>
<head>
    <style>
        table,thead{
            width:100%;
        }
    th,td{
        
        background-color: #FFF;
        border-bottom: 1px solid black;
    }
    .ucdebir
    {
        width:25% !important;
    }
    </style>
</head>
<body>
    <?php
    if(isset($_GET["talep_id"])!=""){
        require("conn.php");
        $talep_id=$_GET["talep_id"];

        $baglanti = $baglan->query("SELECT * FROM tb_talep WHERE talep_id='$talep_id'");
       while($row=$baglanti->fetch_assoc())
       {
            echo'
     
    <table>
        <thead>
            <tr>
                <th colspan="4"><h2>Gürmar Satınalma Talep Formu</h2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="4">Talep Eden Kişi Bilgileri</th>
            </tr>
            <tr>
                
                <td>Talep Eden Kişi:</td>
                <td colspan="2">'.$row["talep_eden_kisi"].'</td>
            </tr>
            <tr>
                
                <td>Talep Eden Birim:</td>
                <td colspan="2">'.$row["talep_eden_birim"].'</td>
            </tr>
            <tr>
                
                <td>Talep Tarihi:</td>
                <td colspan="2">'.$row["talep_tarihi"].'</td>
            </tr>
            <tr>
            </tr>
            <tr>
            <th colspan="4">Talep Edilen Ürünler ve Nedeni</th>
            </tr>
            <tr style="height:70px">
                <td>Talep Nedeni:</td>
                <td colspan="2">'.$row["talep_nedeni"].'</td>
            </tr>
            <tr style="height:70px">
                <td>Talep Edilen Ürün veya Hizmetler:</td>
                <td colspan="2">'.$row["talep_edilen_urunler"].'</td>
            </tr>
            <tr>
            <th colspan="4">Birim Yöneticisi Onayı</th>
            </tr>
            <tr style="height:70px">
                <td>Onay Veriliş Tarihi : </td>
                <td >'.$row["birim_yonetici_onay_tarihi"].'</td>
                <td rowspan="2" style="border:1px solid" class="ucdebir"></td>

            </tr>
            <tr style="height:70px">
                <td>Onay Veren :</td>
                <td>'.$row["birim_yoneticisi"].'</td>
            </tr>
            <tr>
            <th colspan="4">Satın Alınacak Ürünlerin Toplam Fiyatı</th>
            </tr>
            <tr colspan="2">
                <td>Toplam Tutarı:</td>
                <td colspan="2">'.$row["satinalma_toplam_tutari"].'</td>
            </tr>
            <tr>
            <th colspan="4">Teklifler</th>
            </tr>
            <tr colspan="2">
                <td colspan="2">Teklif Alınan Firma : '.$row["teklif1firma"].'</td>
                <td>Teklif 1 : '.$row["teklif1"].'</td>
            </tr>
            <tr colspan="2">
                <td colspan="2">Teklif Alınan Firma : '.$row["teklif2firma"].'</td>
                <td>Teklif 1 : '.$row["teklif2"].'</td>
            </tr>
            <tr colspan="2">
                <td colspan="2">Teklif Alınan Firma : '.$row["teklif3firma"].'</td>
                <td>Teklif 1 : '.$row["teklif3"].'</td>
            </tr>
            <tr>
            <th colspan="4">Finans Yöneticisi Onayı</th>
            </tr>
            <tr style="height:70px">
                <td>Onay Veriliş Tarihi : </td>
                <td >'.$row["finansman_yonetici_onay_tarihi"].'</td>
                <td rowspan="2" style="border:1px solid" class="ucdebir"></td>

            </tr>
            <tr style="height:70px">
                <td>Onay Veren :</td>
                <td>'.$row["finansman_birim_yoneticisi"].'</td>
            </tr>
            <tr>
            <th colspan="4">Genel Müdür Onayı</th>
            </tr>
            <tr style="height:70px">
                <td>Onay Veriliş Tarihi : </td>
                <td >'.$row["yonetici_onay_tarihi"].'</td>
                <td rowspan="2" style="border:1px solid" class="ucdebir"></td>

            </tr>
            <tr style="height:70px">
                <td>Onay Veren :</td>
                <td>'.$row["yonetim_birim_yoneticisi"].'</td>
            </tr>';
        }
        
    }
  ?>
        </tbody>
    </table>

</body>
</html>