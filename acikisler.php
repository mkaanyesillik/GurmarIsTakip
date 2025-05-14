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
							<div class="card-body">
								<div class="row task">
									<div class="col-xl-6 col-sm-6 col-6">
										<div class="task-summary">
											<div class="d-flex align-items-baseline">
												<h2 class="text-primary count"><?php echo $atanmamisis;?></h2> 
												<span>Ataması Yapılmayan</span>
											</div>
											<p>Görev</p>
										</div>
									</div>
									<div class="col-xl-6 col-sm-6 col-6">
										<div class="task-summary task-sven">
											<div class="d-flex align-items-baseline">
												<h2 class="text-purple count"><?php echo $ataliis;?></h2>
												<span>Atanmış</span>
											</div>	
											<p>Görev</p>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects task-table">
									<div class="tbl-caption">
										<h4 class="heading mb-0">İşler</h4>
									</div>
									<table id="empoloyeestbl2" class="table">
										<thead>
											<tr>
												<th>İş Id</th>
												<th>İş Tanımı</th>
												<th>İş Açıklaması</th>
												<th>İşi Açan Mağaza</th>
												<th>Açılış Tarihi</th>
												<th>İşi Açan Personel</th>
												<th>Birim</th>
												<th>Bildiri Fotosu</th>
											</tr>
										</thead>
										<tbody>

											
											<?php
                                                        require("conn.php");
                                                        $baglanti = $baglan->query("SELECT *
FROM tb_acikisler
INNER JOIN tb_magaza ON tb_acikisler.magaza = tb_magaza.magaza_id");
                                                       while($row=$baglanti->fetch_assoc())
                                                       {
                                                               echo '
															   <tr>

															  
															   <td><span>'.$row["acikis_id"].'</span></td>
															
															   <td>
																   <div class="products">
																	   <div>
																		   <h6>'.$row["ariza_tanim"].'</h6>
																		   <span></span>
																	   </div>	
																   </div>
															   </td>
															   <td>
															   <span>'.$row["ariza_aciklama"].'</span>
														   </td>
															   <td>
																  '.$row["magaza_adi"].'
															   </td>
															   <td><span>'.$row["arizatarihi"].'</span></td>
															   
															   <td>
																  '.$row["arizayibildiren"].'
															   </td>	
															   <td>';

															   if($row["birim"]=="it")
															   {
																echo 'Bilgi İşlem';
															   }
															   if($row["birim"]=="teknik")
															   {
																echo 'Teknik Destek';
															   }
															   
															   echo'
															   </td>
															   <td class="text-end">';
															   if($row["arizafoto1"]!="")
															   {
																echo '<a href="'.$row["arizafoto1"].'" target="_blank"><svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M4.46814 17.5319C5.62291 19.7154 7.92876 20.5 12 20.5C17.6255 20.5 19.8804 19.002 20.3853 14.3853M4.46814 17.5319C3.77924 16.2292 3.5 14.4288 3.5 12C3.5 5.5 5.5 3.5 12 3.5C18.5 3.5 20.5 5.5 20.5 12C20.5 12.8745 20.4638 13.6676 20.3853 14.3853M4.46814 17.5319L7.58579 14.4142C8.36684 13.6332 9.63317 13.6332 10.4142 14.4142L10.5858 14.5858C11.3668 15.3668 12.6332 15.3668 13.4142 14.5858L15.5858 12.4142C16.3668 11.6332 17.6332 11.6332 18.4142 12.4142L20.3853 14.3853M10.691 8.846C10.691 9.865 9.864 10.692 8.845 10.692C7.827 10.692 7 9.865 7 8.846C7 7.827 7.827 7 8.845 7C9.864 7 10.691 7.827 10.691 8.846Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																</svg></a>';
															   }
															   echo'
															   
															   
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