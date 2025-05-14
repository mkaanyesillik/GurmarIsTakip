<!DOCTYPE html>
<html lang="en">
	<?php
	require("header.php");
	require("sidebar.php");
	require("conn.php");
	$baglanti = $baglan->query("SELECT COUNT(*) FROM tb_acikisler WHERE atananpersonel!=''");
   while($row=$baglanti->fetch_assoc())
   {
	$ataliis=$row["COUNT(*)"];
   }

   $baglanti = $baglan->query("SELECT COUNT(*) FROM tb_acikisler WHERE atananpersonel=''");
   while($row=$baglanti->fetch_assoc())
   {
	$atanmamisis=$row["COUNT(*)"];
   }
	?>
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects task-table">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Talepler</h4>
									</div>
									<table id="empoloyeestbl2" class="table">
										<thead>
											<tr>
                                                <th>Talep Onayı</th>
												<th>Talep Id</th>
												<th>Talep Eden Kişi</th>
												<th>Talep Eden Birim</th>
												<th>Talep Tarihi</th>
												<th>Talep Nedeni</th>
												<th>Talep Edilen Ürünler</th>
												<th>Birim Yöneticisi</th>
												<th>Birim Yönetici Onayı</th>
												<th>Birim Yönetici Onay Tarihi</th>
												<th>Satın Alım Toplam Tutarı</th>
												<th>Teklif Alınan Firma</th>
												<th>Teklif Tutarları</th>
												<th>Ödeme Koşulları</th>
												<th>Finansman Birim Yöneticisi</th>
												<th>Finansman Yönetici Onayı</th>
												<th>Finansman Yönetici Onay Tarihi</th>
												<th>Genel Müdür</th>
												<th>Genel Müdür Onayı</th>
												<th>Genel Müdür Onay Tarihi</th>
												
											</tr>
										</thead>
										<tbody>

											
											<?php
                                                        require("conn.php");
														$yoneticisi=$_SESSION["birimyonetici"];
														$kullanici=$_SESSION['kullanici'];
														if($kullanici==$yoneticisi)
														{
															$baglanti = $baglan->query("SELECT * FROM tb_talep");
															
														}
														else{
															$baglanti = $baglan->query("SELECT * FROM tb_talep WHERE talep_eden_kisi='$kullanici'");
														}
                                                       while($row=$baglanti->fetch_assoc())
                                                       {
                                                        if($row["finansman_yonetici_onay_tarihi"]=="")
                                                        {
															$baglanti2 = $baglan->query("SELECT tb_birim.birim_yoneticisi,
															tb_birim.birim_adi,tb_talep.talep_eden_birim 
															FROM tb_birim INNER JOIN tb_talep ON tb_talep.talep_eden_birim=tb_birim.birim_adi 
															WHERE tb_talep.talep_id=".$row["talep_id"]);
															while($row2=$baglanti2->fetch_assoc())
														{
															if($row2["birim_yoneticisi"]==$kullanici)
															{
																echo '
																<tr>
																 <td>
																 <a href="talepformu.php?talep_id='.$row["talep_id"].'" target="_blank">
																	 <span class="badge badge-primary light border-0">Onayınızı<br>Bekliyor</span>
																 </a>
																 </td>';
															}
															else{
																echo '
																<tr>
																 <td>
																	 <span class="badge badge-warning light border-0">Yönetici<br>Onayı<br>Bekliyor</span>
																 </td>';
															}
														}
                                                               
                                                        }
                                                        else{
                                                            echo '
                                                            <tr>
                                                             <td>
                                                             <a href="taleprapor.php?talep_id='.$row["talep_id"].'" target="_blank">
																<span class="badge badge-success light border-0">Onaylandı<br>Çıktı Al</span>
															 </a>
                                                             </td>';
                                                        }
                                                        echo '
															   <td><span>'.$row["talep_id"].'</span></td>
															   <td>
															   '.$row["talep_eden_kisi"].'
															   </td>
															   <td>
															   '.$row["talep_eden_birim"].'
															   </td>
															   <td>
															   <span>'.$row["talep_tarihi"].'</span>
														   </td>
															   <td>
																  '.$row["talep_nedeni"].'
															   </td>
															   <td><span>'.$row["talep_edilen_urunler"].'</span></td>
															   
															   <td>
																  '.$row["birim_yoneticisi"].'
															   </td>	
															   <td>
																  '.$row["birim_yonetici_onayi"].'
															   </td>	
															    <td>
																  '.$row["birim_yonetici_onay_tarihi"].'
															   </td>	
                                                                <td>
																  '.$row["satinalma_toplam_tutari"].'
															   </td>	
                                                                <td>
																  '.$row["teklif1firma"].'<br>
                                                                  '.$row["teklif2firma"].'<br>
                                                                  '.$row["teklif3firma"].'<br>
															   </td>	
                                                                <td>
																  '.$row["teklif1"].'<br>
                                                                  '.$row["teklif2"].'<br>
                                                                  '.$row["teklif3"].'<br>
															   </td>
                                                                <td>
																  '.$row["odeme_kosullariDT"].'<br>
																  '.$row["odeme_kosullariNKC"].'<br>
																  '.$row["odeme_kosullariTEKTAK"].'<br>
															   </td>	
                                                                <td>
																  '.$row["finansman_birim_yoneticisi"].'
															   </td>
                                                                <td>
																  '.$row["finansman_yonetici_onayi"].'
															   </td>
                                                                <td>
																  '.$row["finansman_yonetici_onay_tarihi"].'
															   </td>
                                                                <td>
																  '.$row["yonetim_birim_yoneticisi"].'
															   </td>
                                                                <td>
																  '.$row["yonetim_yonetici_onayi"].'
															   </td>
                                                                <td>
																  '.$row["yonetici_onay_tarihi"].'
															   </td>
														   </tr>  
															 
															 
															 
															   ';
                                                       }
                                                    ?>
										</tbody>
									</table>
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
<?php
require("footer.php");
?>