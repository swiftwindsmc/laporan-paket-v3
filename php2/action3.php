<?php 
$date = date('d/m');
$fname = $_POST['name'];

//shopee
$shopees = $_POST['shopees'];
$shopeef = $_POST['shopeef'];
$shopeem = $_POST['shopeem'];

if ($shopeef + $shopeem == $shopees){
  $shopeeEq = "%E2%9C%85";
}else{
  $shopeeEq = "%E2%9D%8C";
}


$totalshp = $shopeef+$shopeem;


$phoneNo = "6285717940793";
$url = "https://api.whatsapp.com/send?phone=$phoneNo&text=%2APaket%20Surprice%20Store%20%28$date%29%2A%0AShopee%20Express%3A%20Fisik%20%28$shopeef%29%20%2B%20Manual%20%28$shopeem%29%20%3D%20%28$totalshp%29";

if (isset($_POST['btnSHP'])) {
    header("Location: $url");
  };

session_start();
$_SESSION['shopees'] = $shopees;
$_SESSION['shopeem'] = $shopeem;
$_SESSION['shopeef'] = $shopeef;
$_SESSION['shopeeEq'] = $shopeeEq;
?>