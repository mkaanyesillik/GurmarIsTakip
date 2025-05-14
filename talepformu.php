<!DOCTYPE html>
<html lang="en">
	<?php
    require("conn.php");
    require("header.php");
    require("sidebar.php");
    $talep_id=$_GET["talep_id"];
    $url=$_SERVER["QUERY_STRING"];
    //$url =explode("&",$url);
    parse_str($url,$urlArray);
    $talepedenkisi=$_SESSION["kullanici"];
        $talepedenbirim=$_SESSION["birim"];
        if($talep_id=="")
        {
            $talepnedeni="";
            $talepedilenurunler="";
        }
    $birimyoneticisi;
    $birimyoneticisionayi;
    $birimyoneticisionaytarihi;
    $satinalmatoplamtutari;
    $teklif1;
    $teklif1firma;
    $teklif2;
    $teklif2firma;
    $teklif3;
    $teklif3firma;
    $odemekosullariDT;
    $odemekosullariNKC;
    $odemekosullariTEKTAK;
    $finansmanbirimyoneticisi;
    $finansmanyoneticionayi;
    $yonetimbirimyoneticisi;
    $yonetimyoneticionayi;
    


    if(isset($talep_id)){
        $baglanti = $baglan->query("SELECT * FROM tb_talep WHERE talep_id='$talep_id'");
        $row = mysqli_fetch_array($baglanti);
        $baglanti2 = $baglan->query("SELECT * FROM tb_birim WHERE birim_id=2");
        $row2 = mysqli_fetch_array($baglanti2);
        $baglanti3 = $baglan->query("SELECT * FROM tb_birim WHERE birim_id=1");
        $row3 = mysqli_fetch_array($baglanti3);

        $talepedenkisi = $row["talep_eden_kisi"];
        $talepedenbirim = $row["talep_eden_birim"];
        $talepnedeni = $row["talep_nedeni"];
        $talepedilenurunler = $row["talep_edilen_urunler"];
        $acilistarihi = $row["talep_tarihi"];
        $birimyoneticisi = $row["birim_yoneticisi"];
        $birimyoneticisionayi = $row["birim_yonetici_onayi"];
        $birimyoneticisionaytarihi = $row["birim_yonetici_onay_tarihi"];
        $satinalmatoplamtutari = $row["satinalma_toplam_tutari"];
        $teklif1 = $row["teklif1"];
        $teklif1firma = $row["teklif1firma"];
        $teklif2 = $row["teklif2"];
        $teklif2firma = $row["teklif2firma"];
        $teklif3 = $row["teklif3"];
        $teklif3firma = $row["teklif3firma"];
        $odemekosullariDT = $row["odeme_kosullariDT"];
        $odemekosullariNKC = $row["odeme_kosullariNKC"];
        $odemekosullariTEKTAK = $row["odeme_kosullariTEKTAK"];
        $finansmanbirimyoneticisi = $row2["birim_yoneticisi"];
        $finansmanyoneticionayi = $row["finansman_yonetici_onayi"];
        $finansmanonaytarihi = $row["finansman_yonetici_onay_tarihi"];
        $yonetimonaytarihi = $row["yonetici_onay_tarihi"];
        $yonetimbirimyoneticisi = $row3["birim_yoneticisi"];
        $yonetimyoneticionayi = $row["yonetim_yonetici_onayi"];
    }

	?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
                <!-- row -->
                <div class="row">
					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ürün Talep Formu</h4>
                                <h4>Form Tarihi : <?php if(isset($acilistarihi)){echo $acilistarihi;}else{echo date('d/m/Y');} ?></h4>
                            </div>
                        </div>
					</div>
                    <div class="row">
                        <!-- Talep Eden Kişi Bilgileri -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Talep Eden Kişi Bilgileri</h4>
                            </div>
                            <div class="card-body">
                            <form action="talepgonder.php?talepolustur=1" method="POST">
                                    <div class="row">
                                            <div class="mb-12 col-md-12">
                                                <label class="form-label">Talep Eden Kişi</label>
                                                <input type="text" class="form-control" name="talepedenkisi" value="<?php echo $talepedenkisi; ?>" placeholder="<?php echo $talepedenkisi; ?>" <?php if(isset($talep_id)){echo "disabled";}?>>
                                            </div>
                                            <div class="mb-12 col-md-12">
                                                <label class="form-label">Talep Eden Birim</label>
                                                <input type="text" class="form-control" name="talepedenbirim"  value="<?php echo $talepedenbirim; ?>" placeholder="<?php echo $talepedenbirim; ?>"<?php if(isset($talep_id)){echo "disabled";}?>>
                                            </div>
                                            <input type="hidden" name="acilistarihi" value="acilistarihi">
                                        </div>
                            </div>
                        </div>
					</div>
                        <!-- Talep Nedeni ve Ürünler -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Talep Neden Detayı</h4>
                            </div>
                            <div class="card-body">
                                
                                <div class="basic-form">
                                        <div class="mb-3">
                                        <label class="form-label">Talep Nedeni</label>
                                            <input class="form-control" type="text" name="talepneden"  value="<?php echo $talepnedeni; ?>" placeholder="<?php echo $talepnedeni; ?>"<?php if(isset($talep_id)){echo "disabled";}?>>
                                        </div>
                                        <div class="mb-3">
                                        <label class="form-label">Talep Edilen Ürünler</label>

                                            <textarea class="form-txtarea form-control" name="talepedilenurunler" rows="8" id="comment"<?php if(isset($talep_id)){echo "disabled";}?>><?php echo $talepedilenurunler; ?></textarea>
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary" <?php if(isset($talep_id)){echo "disabled";}?>>Gönder</button>    
                            </form>
                            </div>
                        </div>
					</div>
                        <!-- Birim Yönetici Onayı -->
					<div class="col-xl-12 col-lg-12" <?php if(isset($talep_id)==""){echo "hidden";} ?>>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Birim Yönetici Onayı</h4>
                            </div>
                            <div class="card-body">
                                <form action="talepgonder.php?talep_id=<?php echo $talep_id; ?>&birimonay=1" method="post">
								<div class="row">
									<div class="col-xl-6 col-xxl-6 col-6">
										<div class="form-check custom-checkbox mb-3" style="float:left !important" >
											<input type="checkbox" class="form-check-input" name="birimonaycheck" required="" checked<?php if(isset($birimyoneticisionayi)=="Onaylandı"){echo " disabled";}?>>
											<label class="form-check-label" for="customCheckBox1">Onay Verilmiştir.<?php if(isset($birimyoneticisionaytarihi)!=""){echo " Onay Tarihi : ".$birimyoneticisionaytarihi;}?></label>
										</div>
									</div>
                                    <div  class="col-xl-6 col-xxl-6 col-6" style="float:right !important" >
                                    <input type="text" class="form-control" name="birimyoneticiadi"  value="<?php echo $birimyonetici; ?>" placeholder="<?php echo $birimyonetici; ?> required="" <?php if(isset($birimyoneticisionayi)=="Onaylandı"){echo " disabled";}?>>
                                    </div>
								</div>
                                <button type="submit" class="btn btn-primary" <?php if(isset($birimyoneticisionayi)=="Onaylandı"){echo " disabled";}?>>Onayla</button>    
                                </form>
                            </div>
                        </div>
					</div>
                        <!-- Satın Alıncak Ürünler Toplamı  -->
                    <div class="col-xl-12 col-lg-12" <?php if(isset($birimyoneticisionayi)==""){echo "hidden";} ?>>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Satın Alınacak Ürünler Toplam Tutarı</h4>
                            </div>
                            <div class="card-body">
                                <form action="talepgonder.php?talep_id=<?php echo $talep_id; ?>&toplamtutar=1" method="POST">
                                <div class="basic-form">
                                        <div class="mb-3">
                                        <label class="form-label">Toplam Tutarı</label>
                                            <input class="form-control" name="satinalinacaktoplamtutar" type="text" value="<?php echo $satinalmatoplamtutari; ?>" placeholder="Toplam Tutar"<?php if(isset($satinalmatoplamtutari)){echo "disabled";}?>>
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary" <?php if(isset($satinalmatoplamtutari)){echo "disabled";}?>>Gönder</button>    

                            </form>
                            </div>
                        </div>
					</div>
                    <!-- Teklifler  -->
					<div class="col-xl-12 col-lg-12"<?php if(isset($satinalmatoplamtutari)==""){echo "hidden";} ?>>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Teklifler</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form action="talepgonder.php?talep_id=<?php echo $talep_id; ?>&teklifler=1" method="POST">
                                    <div class="row">
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Teklif 1</label>
                                                <input type="text" class="form-control" name="teklif1" value="<?php echo $teklif1; ?>" placeholder="Teklif 1 Tutar"<?php if(isset($teklif1)){echo "disabled";}?>>
                                            </div>
                                            <div class="mb-3 col-md-9">
                                                <label class="form-label">Teklif 1 Firma</label>
                                                <input type="text" class="form-control" name="teklif1firma" value="<?php echo $teklif1firma; ?>" placeholder="Teklif 1 Firma"<?php if(isset($teklif1)){echo "disabled";}?>>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Teklif 2</label>
                                                <input type="text" class="form-control" name="teklif2" value="<?php echo $teklif2; ?>" placeholder="Teklif 2 Tutar"<?php if(isset($teklif1)){echo "disabled";}?>>
                                            </div>
                                            <div class="mb-3 col-md-9">
                                            <label class="form-label">Teklif 2 Firma</label>
                                            <input type="text" class="form-control" name="teklif2firma" value="<?php echo $teklif2firma; ?>" placeholder="Teklif 2 Firma"<?php if(isset($teklif1)){echo "disabled";}?>>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">Teklif 3</label>
                                                <input type="text" class="form-control" name="teklif3" value="<?php echo $teklif3; ?>" placeholder="Teklif 3 Tutar"<?php if(isset($teklif1)){echo "disabled";}?>>
                                            </div>
                                            <div class="mb-3 col-md-9">
                                                <label class="form-label">Teklif 3 Firma</label>
                                                <input type="text" class="form-control" name="teklif3firma" value="<?php echo $teklif3firma; ?>" placeholder="Teklif 3 Firma"<?php if(isset($teklif1)){echo "disabled";}?>>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" <?php if(isset($teklif1)){echo "disabled";}?>>Gönder</button>    
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
                	<!--<div class="col-xl-12 col-lg-12"<?php //if(isset($teklif1)==""){echo "hidden";} ?>>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ödeme Koşulları</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form action="talepgonder.php?talep_id=<?php //echo $talep_id; ?>&odemekosullari=1" method="POST">
                                        <div class="row">
											<div class="col-xl-4 col-xxl-6 col-6">
												<div class="form-check custom-checkbox mb-3 checkbox-primary">
													<input type="radio" class="form-check-input" id="customRadioBox1" name="tl"<?php //if(isset($odemekosullariDT)){echo "checked";}?>>
													<label class="form-check-label" for="customRadioBox1">TL</label>
												</div>
											</div>
											<div class="col-xl-4 col-xxl-6 col-6">
												<div class="form-check custom-checkbox mb-3 checkbox-secondary">
													<input type="radio" class="form-check-input" id="customRadioBox2" name="doviz"<?php //if(isset($odemekosullariDT)){echo "checked";}?>>
													<label class="form-check-label" for="customRadioBox2">Döviz</label>
												</div>
											</div>
                                        </div>
                                        <div class="row">
											<div class="col-xl-4 col-xxl-6 col-6">
												<div class="form-check custom-checkbox mb-3 checkbox-primary">
													<input type="radio" class="form-check-input" id="customRadioBox1" name="nakit" <?php //if(isset($odemekosullariDT)==){echo "checked";}?>>
													<label class="form-check-label" for="customRadioBox1">Nakit</label>
												</div>
											</div>
											<div class="col-xl-4 col-xxl-6 col-6">
												<div class="form-check custom-checkbox mb-3 checkbox-secondary">
													<input type="radio" class="form-check-input" id="customRadioBox2" name="kredikarti" <?php //if(isset($odemekosullariDT)){echo "checked";}?>>
													<label class="form-check-label" for="customRadioBox2">Kredi Kartı</label>
												</div>
											</div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
												<div class="form-check custom-checkbox mb-3 checkbox-error">
													<input type="radio" class="form-check-input" id="customRadioBox3" name="cek" <?php //if(isset($odemekosullariDT)){echo "checked";}?>>
													<label class="form-check-label" for="customRadioBox3">Çek</label>
												</div>
											</div>
                                        <div class="row">
											<div class="col-xl-4 col-xxl-6 col-6">
												<div class="form-check custom-checkbox mb-3 checkbox-primary">
													<input type="radio" class="form-check-input" id="customRadioBox1" name="tekcekim" <?php //if(isset($odemekosullariDT)){echo "checked";}?>>
													<label class="form-check-label" for="customRadioBox1">Tek Çekim</label>
												</div>
											</div>
											<div class="col-xl-4 col-xxl-6 col-6">
												<div class="form-check custom-checkbox mb-3 checkbox-secondary">
													<input type="radio" class="form-check-input" id="customRadioBox2" name="taksit" <?php //if(isset($odemekosullariDT)){echo "checked";}?>>
													<label class="form-check-label" for="customRadioBox2">Taksit</label>
												</div>
											</div>
                                        </div>
                                        </div>
                                    <button type="submit" class="btn btn-primary" <?php //if(isset($odemekosullariDT)){echo "disabled";}?>>Gönder</button>    
                                </form>
                                </div>
                            </div>
                        </div>
					</div>-->

                    <div class="col-xl-12 col-lg-12"<?php if(isset($teklif1)==""){echo "hidden";} ?>>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Finansman Onayı</h4>
                            </div>
                            <div class="card-body">
                            <form action="talepgonder.php?talep_id=<?php echo $talep_id; ?>&finansonayi=1" method="POST">
								<div class="row">
									<div class="col-xl-6 col-xxl-6 col-6">
										<div class="form-check custom-checkbox mb-3" style="float:left !important" >
											<input type="checkbox" class="form-check-input" name="finansonaycheck" id="customCheckBox1" required="" checked <?php if(isset($finansmanyoneticionayi)){echo "disabled";}?>>
											<label class="form-check-label" for="customCheckBox1">Onay Verilmiştir.<?php if(isset($finansmanonaytarihi)!=""){echo " Onay Tarihi : ".$finansmanonaytarihi;}?></label>
										</div>
									</div>
                                    <div  class="col-xl-6 col-xxl-6 col-6" style="float:right !important" >
                                    <input type="text" class="form-control" name="finansyoneticisi" value="<?php echo $finansmanbirimyoneticisi; ?>" placeholder="Onay Veren Kişi" required=""<?php if(isset($finansmanbirimyoneticisi)){echo "disabled";}?>>
                                    </div>
								</div>
                                <button type="submit" class="btn btn-primary" <?php if(isset($finansmanyoneticionayi)){echo "disabled";}?>>Gönder</button>    
                            </form>
                            </div>
                        </div>
					</div>
                    <div class="col-xl-12 col-lg-12"<?php if(isset($finansmanyoneticionayi)==""){echo "hidden";} ?>>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Yönetici Onayı</h4>
                            </div>
                            <div class="card-body">
                            <form action="talepgonder.php?talep_id=<?php echo $talep_id; ?>&yoneticionayi=1" method="POST">
								<div class="row">
									<div class="col-xl-6 col-xxl-6 col-6">
										<div class="form-check custom-checkbox mb-3" style="float:left !important" >
											<input type="checkbox" class="form-check-input" name="yoneticionaycheck" id="customCheckBox1" required="" checked <?php if(isset($yonetimyoneticionayi)){echo "disabled";}?>>
											<label class="form-check-label" for="customCheckBox1">Onay Verilmiştir.<?php if(isset($yonetimonaytarihi)!=""){echo " Onay Tarihi : ".$yonetimonaytarihi;}?></label>
										</div>
									</div>
                                    <div  class="col-xl-6 col-xxl-6 col-6" style="float:right !important" >
                                    <input type="text" class="form-control" name="yoneticiadi" value="<?php echo $yonetimbirimyoneticisi; ?>" placeholder="Onay Veren Kişi" required=""<?php if(isset($yoneticibirimyoneticisi)){echo "disabled";}?>>
                                    </div>
								</div>
                                <button type="submit" class="btn btn-primary" <?php if(isset($yonetimyoneticionayi)){echo "disabled";}?>>Gönder</button>    
                            </form>
                            </div>
                        </div>
					</div>
                </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p style="font-size:7px">Lisanslıdır © Geliştirme İşlemi Kaan Yeşillik Tarafından Yapılmıştır. <span class="current-year">2024</span></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->



	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="vendor/datatables/js/jszip.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>

	<!-- Vectormap -->
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	<script>
		$(document).ready(function() {

		  var counters = $(".count");
		  var countersQuantity = counters.length;
		  var counter = [];

		  for (i = 0; i < countersQuantity; i++) {
			counter[i] = parseInt(counters[i].innerHTML);
		  }

		  var count = function(start, value, id) {
			var localStart = start;
			setInterval(function() {
			  if (localStart < value) {
				localStart++;
				counters[id].innerHTML = localStart;
			  }
			}, 500);
		  }

		  for (j = 0; j < countersQuantity; j++) {
			count(0, counter[j], j);
		  }

		  
		});	
		

		
	</script>
	
	
</body>

</html>