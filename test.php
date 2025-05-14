<?php
   require("conn.php");
   $baglanti = $baglan->query("SELECT * FROM db_arizadetay");
  while($row=$baglanti->fetch_assoc())
  {
          echo $row["ariza_adi"];
  }
?>