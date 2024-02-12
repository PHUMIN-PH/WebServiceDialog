<?php

renderBody('01','192.168.0.20','Log Firewall');
renderBody('01','192.168.0.7','TKT Share Networks');
renderBody('01','192.168.0.45','NAS ACCOUNT');
renderBody('02','192.168.0.98','NAS FINANCE');
renderBody('03','192.168.0.199','PRINTER TKT');
renderBody('04','192.168.0.204','PRINTER ACCOUNT');
renderBody('04','192.168.0.208','PRINTER HR');
renderBody('04','192.168.0.94','PRINTER SECRETARY');
renderBody('04','192.168.0.204','PRINTER ACCOUNT');

function cctvLoader(){
        renderBody('01','192.168.0.60','CCTV01');
        renderBody('02','192.168.0.61','CCTV02');
        renderBody('03','192.168.0.62','CCTV03');
        renderBody('04','192.168.0.63','CCTV04');
        renderBody('05','192.168.0.64','CCTV05');
        renderBody('06','192.168.0.65','CCTV06');
        renderBody('Recp','192.168.0.88','CCTV-RECEPTION');
        renderBody('CCTV07','192.168.0.124','CCTV07');
        renderBody('CCTV08','192.168.0.125','CCTV08');
}


// $cctv = [renderBody('01','192.168.0.60','CCTV01'),
//         renderBody('02','192.168.0.61','CCTV02'),
//         renderBody('03','192.168.0.62','CCTV03'),
//         renderBody('04','192.168.0.63','CCTV04',),
//         renderBody('05','192.168.0.64','CCTV05')];
function renderBody($no, $ipaddress, $name)
{

    $exec = shell_exec("ping -n 2 " . $ipaddress . "");
    date_default_timezone_set("Asia/Bangkok");
    $date = date("h:i:sa");

    if (strrpos($exec, "100% loss") > 0) {

        $status = "OFFLINE";
    } else {
        $status = "ONLINE";
    }

    if($status = "ONLINE"){
        $TypeStatus = '<td class="text-light fw-bold bg-success"> '. $status .'</td>';
    }else{
        $TypeStatus = '<td class="text-light fw-bold bg-danger">'. $status .'</td>';
    }

    echo '<tr>
            <td>' . $no . '</td>
            <td>' . $ipaddress . ' </td>
            <td>' . $name . ' </td>
            '.$TypeStatus .'
            <td>'.$date.' </td>
        </tr>';
}
?>