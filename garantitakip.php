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
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects task-table">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Garanti Takip Ekranı</h4>
									</div>
									<table id="empoloyeestbl2" class="table">
										<thead>
											<tr>
												<th><input type="checkbox" class="form-check-input" id="checkAll" required="">
												</th>
												<th>Ürün Id</th>
												<th>Ürün Açıklaması</th>
												<th>Durum</th>
												<th>Alım Tarihi</th>
												<th>Garanti Bitiş Tarihi</th>
												<th>Lokasyon</th>
												
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox1" required>
														<label class="form-check-label" for="customCheckBox1"></label>
													</div>
												</td>
												<td><span>01</span></td>
												<td>
													<div class="products">
														<div>
															<h6>Güvenlik Kamerası</h6>
															<span>Pronet</span>
														</div>	
													</div>
												</td>
												<td>
													<select class="default-select status-select">
														<option value="complete">Garantili</option>
													</select>
												</td>
												<td><span>14.05.2024</span></td>
												<td>
													<span>14.05.2025</span>
												</td>
												<td>
													Kazımdirik Mağazası
												</td>	
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required>
														<label class="form-check-label" for="customCheckBox2"></label>
													</div>
												</td>
												<td><span>02</span></td>
												<td>
													<div class="products">
														<div>
															<h6>NCR Kasa 5 Adet</h6>
															<span>Enesil</span>
														</div>	
													</div>
												</td>
												<td>
													<select class="default-select status-select">
														<option value="complete">Garantili</option>
													</select>
												</td>
												<td><span>15 Nis 2023</span></td>
												<td>
													<span>15 Nis 2025</span>
												</td>
												<td>
													Yeni Girne Mağazası
												</td>	
											</tr>
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