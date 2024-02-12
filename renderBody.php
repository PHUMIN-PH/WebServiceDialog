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
function renderBody($no, $ipaddress, $name)
{

    $exec = shell_exec("ping -n 3 " . $ipaddress . "");
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