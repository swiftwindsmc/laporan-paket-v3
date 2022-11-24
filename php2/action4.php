<?php 
$date = date('d/m');

session_start();
$fname1 = $_SESSION['fname'];

$sicepats1 = $_SESSION['sicepats'];
$sicepatf1 = $_SESSION['sicepatf'] + $_SESSION['sicepatm'];
$sicepatEq1 = $_SESSION['sicepatEq'];

$jnts1 = $_SESSION['jnts'];
$jntf1 = $_SESSION['jntf'] + $_SESSION['jntm'];
$jntEq1 = $_SESSION['jntEq'];

$jnes1 = $_SESSION['jnes'];
$jnef1 = $_SESSION['jnef'] + $_SESSION['jnem'];
$jneEq1 = $_SESSION['jneEq'];

$shopees1 = $_SESSION['shopees'];
$shopeef1 = $_SESSION['shopeef'] + $_SESSION['shopeem'];
$shopeeEq1 = $_SESSION['shopeeEq'];

$anterajas1 = $_SESSION['anterajas'];
$anterajaf1 = $_SESSION['anterajaf'] + $_SESSION['anterajam'];
$anterajaEq1 = $_SESSION['anterajaEq'];

$phoneNo = "6285717940793";

$url = "https://api.whatsapp.com/send?phone=$phoneNo&text=%2ALaporan%20Outbound%20%28$date%29%2A%0APIC%20%3A%20$fname1%0ASicepat%20Fisik%20%28$sicepatf1%29%20%3D%20Sistem%20%28$sicepats1%29%20%7C%20$sicepatEq1%0AJNT%20Fisik%20%28$jntf1%29%20%3D%20Sistem%20%28$jnts1%29%20%7C%20$jntEq1%0AShopee%20Fisik%20%28$shopeef1%29%20%3D%20Sistem%20%28$shopees1%29%20%7C%20$shopeeEq1%0AJNE%20Fisik%20%28$jnef1%29%20%3D%20Sistem%20%28$jnes1%29%20%7C%20$jneEq1%0AAnteraja%20Fisik%20%28$anterajaf1%29%20%3D%20Sistem%20%28$anterajas1%29%20%7C%20$anterajaEq1";
header("Location: $url");

?>





