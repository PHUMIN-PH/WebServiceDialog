<?php 
$ap_Acc ="";
$ap_MTR_FL2 ="";
$ap_PJH_FL3 ="";
$ap_MNM_FL3 ="";
$ap_Guest ="";
$shareNetwork ="ping -n 3 192.168.0.07";
$log_firewall ="ping -n 3 192.168.0.20";
$nas_Acc = shell_exec("ping -n 3 192.168.0.45");
$nas_Fin =shell_exec("ping -n 3 192.168.0.98");
$printerTKT =shell_exec("ping -n 3 192.168.0.199");
$printerAcc =shell_exec("ping -n 3 192.168.0.204");
$printerHR=shell_exec("ping -n 3 192.168.0.208");
$printerSecy=shell_exec("ping -n 3 192.168.94");

$exe = shell_exec("ping -n 3 $ip");

date_default_timezone_set("Asia/Bangkok");
$date = date("h:i:sa");

if(strrpos($exe,"100% loss") >0){

echo "ไม่สามาถติดต่อได้";


}else{ 
    echo "ติดต่อได้";
    echo "<br>";
    print($exe);}

?>