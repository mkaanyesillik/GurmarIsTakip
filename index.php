<!DOCTYPE html>
<html lang="en">

<?php
require("header.php");
require("sidebar.php");

?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
							<div class="col-xl-6 col-sm-6">
								<div class="card ds-2">
									<div class="card-body">
										<div class="">
											<h3>20</h3>
											<h6>Bekleyen İş Sayısı</h6>
										</div>	
										<div class="progress-box">
											<div class="d-flex justify-content-between mb-2">
												<p class="mb-0">Tamamlanan İş Sayısı</p>
												<p class="mb-0">20/28</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-white" style="width:82%; height:5px; border-radius:4px;" role="progressbar"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="ds-head">
											<h3 class="d-flex align-items-center justify-content-between">58<span class="badge badge-success light ms-2"><i class="fa-solid fa-arrow-up me-2"></i>
												</span></h3>
											<h6>Açık İş</h6>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<div id="AllProject_rate"></div>
												<ul class="project-list">
													<li><h6>Tüm Açık İşler</h6></li>
													<li>
														<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="10" height="10" rx="3" fill="#3AC977"/>
														</svg>
														Teknik
													</li>
													<li>
														<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="10" height="10" rx="3" fill="var(--primary)"/>
														</svg>
														Bilgi İşlem
													</li>
													<li>
														<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="10" height="10" rx="3" fill="var(--secondary)"/>
														</svg>
														Diğer
													</li>
												</ul>
											</div>
											<ul class="ds-prise">
												<li>17</li>
												<li>20</li>
												<li>21</li>
											</ul>
											
										</div>	
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="ds-head">
											<img src="images/uidesgn.png" alt="">
										</div>
										<div class="">
											<h6>Satınalma Talep Formu</h6>
											<p>Satın almaya iletmek istediğiniz ürün veya hizmetleri onaya göndermek için lütfen butona tıklayınız.</p>
											<a href="talepformu.php" class="btn btn-primary btn-sm">Satın Alma Talep Formu</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="ds-head">
											<img src="images/uidesgn.png" alt="">
										</div>
										<div class="">
											<h6>İş Kaydı Aç</h6>
											<p>Yeni bir arıza ya da problem bildirmek için lütfen butona tıklayın.</p>
											<a href="iskayitekrani.php" class="btn btn-primary btn-sm">İş kaydı aç</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-xxl-12 bst-seller">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Açık Talepler</h4>
										<div>
											<a class="btn btn-primary btn-sm me-2" href="talepformu.php" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Talep Ekle</a>
										</div>
									</div>
									<table id="empoloyees-tbl3" class="table">
										<thead>
                                            <tr>
												<th>Talep Id</th>
												<th>Talep Eden Kişi</th>
												<th>Talep Eden Birim</th>
												<th>Talep Tarihi</th>
												<th>Talep Edilen Ürünler</th>
												<th>Talep Nedeni</th>
                                            </tr>
                                        </thead>
										<?php
                                                        require("conn.php");
                                                        $baglanti = $baglan->query("SELECT * FROM tb_talep");
                                                       while($row=$baglanti->fetch_assoc())
                                                       {
                                                        if($row["finansman_yonetici_onay_tarihi"]=="")
                                                        {
                                                               echo '
															   <tr>
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
														    <td>'.$row["talep_edilen_urunler"].'</td>
														    <td>'.$row["talep_nedeni"].'</td>';
																
                                                        }
                                                        else{
                                                           
                                                        }
                                                        echo '
															   
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

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
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
	<script src="vendor/chart-js/chart.bundle.min.js"></script>
	<script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/apexchart/apexchart.js"></script>
	
	 <script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-2.js"></script>

	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="vendor/datatables/js/jszip.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
   
   <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
	
	
</body>

<!-- Mirrored from yashadmin.dexignzone.com/xhtml/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2024 07:38:11 GMT -->
</html>