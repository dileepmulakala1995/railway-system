<?php
include_once 'bookticketf.php';
$con = new bookticket();
$table = "users";
$res=$con->confirmrequest($table);
?>
<html>                    
<head>

   <style>
body {
    background-color: lightgrey;
    background-size: 1350px 700px;
    background-repeat: no-repeat;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TICKET</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>TICKET</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <table align="center">
    
    <tr>
    <th>Train no</th>
    <th>Train Name</th>
    <th>Date of Journey</th>
    <th>Seatno</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Fare</th>
    <th>Pnr No</th>
    </tr>
    <?php

 while($row=mysql_fetch_row($res))
 {
   ?>
            <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[11]; ?></td>
            
            </tr>
            <?php
 }
 ?>
    </table>
    </div>
</div>

<h4>Please keep your pnr no with you till your journey</h4>
<h4>This ticket is invalid without Aadhar card</h4> 

</center>
</body>
</html>