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
                                <h4 class="card-title">Yeni İş Kaydı Ekranı</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="iskaydiolustur.php" method="POST" enctype="multipart/form-data">

                                        <div class="row">
                                      
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Mağaza</label>
                                                <select class="default-select form-control wide mb-3 form-control-md" name="magaza">
                                                    <?php
                                                        require("conn.php");
                                                        $baglanti = $baglan->query("SELECT * FROM tb_magaza");
                                                       while($row=$baglanti->fetch_assoc())
                                                       {
                                                               echo '<option value="'.$row["magaza_id"].'">'.$row["magaza_adi"].'</option>';
                                                       }
                                                    ?>
														
													</select>
                                            </div>
                                                    
                                                     <div class="mb-3 col-md-6">
                                                <label class="form-label">İş Açılacak Birim</label>
                                                <select class="default-select form-control wide mb-3 form-control-md" name="birim">
														<option value="teknik">Teknik Departman</option>
														<option value="it">Bilgi İşlem</option>
													</select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">İş Tanımı</label>
                                                <input type="text" name="istanim" class="form-control" placeholder="İş Tanımı Giriniz.">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">İş Açıklaması</label>
                                                <input type="text" name="isaciklama" class="form-control" placeholder="İş Açıklaması Giriniz.">
                                            </div>
                                           
                                            <div class="mb-3 col-md-6">
                                                <label for="formFile" class="form-label">Dosya Yükle</label>
								                <input class="form-control" type="file" name="fotoyol1" id="formFile1">
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
<?php
require("footer.php");
?>
		
     