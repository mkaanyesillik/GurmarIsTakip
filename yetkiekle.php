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
				
                <!-- row -->
                <div class="row">
					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Yetki Tanımlama Ekranı</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Yetki Adı</label>
                                                <input type="text" class="form-control" placeholder="Kullanıcı İsim Soyisim">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Görebildiği Ekranlar</label>
                                                <input type="text" class="form-control" placeholder="Cihaz Marka ve Model">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Kaydet</button>
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