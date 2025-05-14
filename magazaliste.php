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
										<h4 class="heading mb-0">Zimmet Listesi</h4>
									</div>
									<table id="empoloyeestbl2" class="table">
										<thead>
											<tr>
												
												<th>Mağaza ID</th>
												<th>Mağaza Adı</th>
												<th>Mağaza Telefonu</th>
												<th>Mağaza E-mail</th>
												<th>Kasa Sayısı</th>
												<th>RF Sayısı</th>
												<th>IP Bloğu</th>
                                                
											</tr>
										</thead>
										<tbody>
										<?php
                                                        require("conn.php");
                                                        $baglanti = $baglan->query("SELECT * FROM tb_magaza");
                                                       while($row=$baglanti->fetch_assoc())
                                                       {
                                                               echo '
															   <tr>

															  
															   <td><span>'.$row["magaza_id"].'</span></td>
															<td>
															   <span>'.$row["magaza_adi"].'</span>
														   </td>
														   <td>
															   <span>'.$row["magaza_tel"].'</span>
														   </td>
															   <td>
																   <div class="products">
																	   <div>
																		   <h6><a href="mailto:'.$row["magaza_mail"].'">'.$row["magaza_mail"].'</a></h6>
																		   <span></span>
																	   </div>	
																   </div>
															   </td>
															   
															   <td>
																  '.$row["magaza_kasa_sayisi"].'
															   </td>
															   	<td>
																  '.$row["magaza_rf_sayisi"].'
															   </td>
															   <td>
																  '.$row["magaza_ip_blogu"].'
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