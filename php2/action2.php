<?php 
$date = date('d/m');

//JNT
$jnts = $_POST['jnts'];
$jntf = $_POST['jntf'];
$jntm = $_POST['jntm'];

if ($jntf + $jntm == $jnts){
  $jntEq = "%E2%9C%85";
}else{
  $jntEq = "%E2%9D%8C";
}

$totaljnt = $jntf+$jntm;


$phoneNo = "6285717940793";
$url = "https://api.whatsapp.com/send?phone=$phoneNo&text=%2APaket%20Surprice%20Store%20%28$date%29%2A%0AJNT%3A%20Fisik%20%28$jntf%29%20%2B%20Manual%20%28$jntm%29%20%3D%20%28$totaljnt%29";

if (isset($_POST['btnJNT'])) {
    header("Location: $url");
  };

  session_start();
  $_SESSION['jnts'] = $jnts;
  $_SESSION['jntm'] = $jntm;
  $_SESSION['jntf'] = $jntf;
  $_SESSION['jntEq'] = $jntEq;


?>