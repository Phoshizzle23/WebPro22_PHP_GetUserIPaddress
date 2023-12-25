<?php 
require('Backend_IPaddress.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP ADDRESS ANS SYSTEM INFO</title>

        <style>
            table {
                margin-top: 15px;
                font-family: arial,sans-serif;
                border-collapse:collapse;
                width:100; 
            }
            td,th {
                border: 2px solid black;
                text-align: center;
                padding: 8px;
            }
            tr:nth-child(even) {
                background-color: lightcyan;
            }
            h2{
                font-family: sans-serif,'helvetica';
            }
        </style>
</head>
<body>
    <center><h1>IP ADDRESS ANS SYSTEM INFO</h1>
    <table>
        <tr>
            <th>IP</th>
            <th>Window Info (OS)</th>
            <th>Browser Info</th>
        </tr>
        
        <tr>
            <td><?=IPADDRESS::get_ip();?></td>
            <td><?=IPADDRESS::get_os();?></td>
            <td><?=IPADDRESS::get_browser();?></td>
        </tr>
        
    </table>
    </center>
</body>
</html>