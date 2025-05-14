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
                                    <form action="kullanicieklekayit.php" method="POST" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">E-Posta</label>
                                                <input type="text" name="eposta" class="form-control" placeholder="Kullanıcı Mail Adresi">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Şifre</label>
                                                <input type="password" name="sifre" class="form-control" placeholder="Kullanıcı Şifre">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Kullanıcı Adı Soyadı</label>
                                                <input type="text" name="adsoyad" class="form-control" placeholder="Kullanıcı İsim Soyisim">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Birimi</label>
                                                <select class="default-select form-control wide mb-3 form-control-md" name="birim">
                                                    <?php
                                                        require("conn.php");
                                                        $baglanti = $baglan->query("SELECT * FROM tb_birim");
                                                       while($row=$baglanti->fetch_assoc())
                                                       {
                                                            echo '<option value="'.$row["birim_id"].'">'.$row["birim_adi"].'</option>';
                                                       }
                                                    ?>
													</select>
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