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
                                <h4 class="card-title">Kullanıcı Ekleme Ekranı</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form action="magazakaydet.php" method="POST">

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Mağaza Adı</label>
                                                <input type="text" name="magazaadi" class="form-control" placeholder="Mağaza Adı">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Mağaza Telefonu</label>
                                                <input type="text" name="magazatel" class="form-control" placeholder="Telefonu">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Mağaza Mail Adresi</label>
                                                <input type="text" name="magazamail" class="form-control" placeholder="Mail Adresi">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Mağaza Kasa Sayısı</label>
                                                <input type="text" name="magazakasa" class="form-control" placeholder="Kasa Sayısı">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Mağaza El Terminali Sayısı</label>
                                                <input type="text" name="magazarf" class="form-control" placeholder="El Terminali">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Mağaza Ip Bloğu</label>
                                                <input type="text" name="magazaip" class="form-control" placeholder="Ip Bloğu">
                                            </div>
                                          
                                           
                                            
                                        </div>
                                        <div class="row">
                                         
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