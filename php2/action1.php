<?php 
$date = date('d/m');
$fname = $_POST['name'];

//sicepat
$sicepats = $_POST['sicepats'];
$sicepatf = $_POST['sicepatf'];
$sicepatm = $_POST['sicepatm'];

if ($sicepatf + $sicepatm == $sicepats){
  $sicepatEq = "%E2%9C%85";
}else{
  $sicepatEq = "%E2%9D%8C";
}

//jne
$jnes = $_POST['jnes'];
$jnef = $_POST['jnef'];
$jnem = $_POST['jnem'];

if ($jnef + $jnem == $jnes){
  $jneEq = "%E2%9C%85";
}else{
  $jneEq = "%E2%9D%8C";
}

//anter
$anterajas = $_POST['anterajas'];
$anterajaf = $_POST['anterajaf'];
$anterajam = $_POST['anterajam'];

if ($anterajaf + $anterajam == $anterajas){
  $anterajaEq = "%E2%9C%85";
}else{
  $anterajaEq = "%E2%9D%8C";
}

$totalsc = $sicepatf+$sicepatm;
$totalaj = $anterajaf+$anterajam;
$totaljne = $jnef+$jnem;

$phoneNo = "6285717940793";
$url = "https://api.whatsapp.com/send?phone=$phoneNo&text=%2APaket%20Surprice%20Store%20%28$date%29%2A%0AAnteraja%3A%20Fisik%20%28$anterajaf%29%20%2B%20Manual%20%28$anterajam%29%20%3D%20%28$totalaj%29%0ASicepat%3A%20Fisik%20%28$sicepatf%29%20%2B%20Manual%20%28$sicepatm%29%20%3D%20%28$totalsc%29%0AJNE%3AFisik%20%28$jnef%29%20%2B%20Manual%20%28$jnem%29%20%3D%20%28$totaljne%29";

if (isset($_POST['btnAJS'])) {
    header("Location: $url");
  };

session_start();
$_SESSION['fname'] = $fname;
$_SESSION['sicepats'] = $sicepats;
$_SESSION['sicepatm'] = $sicepatm;
$_SESSION['sicepatf'] = $sicepatf; 
$_SESSION['sicepatEq'] = $sicepatEq;

$_SESSION['jnes'] = $jnes;
$_SESSION['jnem'] = $jnem;
$_SESSION['jnef'] = $jnef;
$_SESSION['jneEq'] = $jneEq;

$_SESSION['anterajas'] = $anterajas;
$_SESSION['anterajam'] = $anterajam;
$_SESSION['anterajaf'] = $anterajaf;
$_SESSION['anterajaEq'] = $anterajaEq;


?>

