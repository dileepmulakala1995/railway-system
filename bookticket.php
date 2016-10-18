<?php

$digits_needed=8;

$random_number='';

$count=0;

while ( $count < $digits_needed ) {
         $random_digit =mt_rand(0, 9);

         $random_number .=$random_digit;
         $count++;
  }

echo "Your PNR no is $random_number";

?><?php
include_once 'bookticketf.php';
$con = new bookticket();


if(isset($_POST['btn-save']))
{
 $tno = $_POST['train_no'];
 $tname = $_POST['train_name'];
 $date = $_POST['date'];
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $city = $_POST['city_name'];
 $age = $_POST['age'];
 $sex = $_POST['sex'];
 $pnr = $_POST['pnr'];
 
 $con->bookticket1($tno,$tname,$date,$fname,$lname,$city,$age,$sex,$pnr);
 $con->confirmrequest($pnr);
 header("Location: bookticket2.php");
}


?>
<html>
<head>

   <style>
body {
    background-image: url("rail1.jpg");
    background-size: 1350px 700px;
    background-repeat: no-repeat;
}
</style>
<body>
<form method="post">
    <center><h2>BOOK A TICKET<h2><center>
    <table align="center">
    <tr>
    <td><input type="text" name="train_no" placeholder="Train no" /></td>
    </tr>
    <tr>
    <td><input type="text" name="train_name" placeholder="Train Name" /></td>
    </tr>
    <tr>
    <td><h4>Date of Journey</h4><input type="date" name="date" placeholder="Date of Journey" /></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" /></td>
    </tr>
    <tr>
    <td><input type="text" name="age" placeholder="age" /></td>
    </tr>
    <tr>
    <td><input type="text" name="sex" placeholder="sex" /></td>
    </tr>
    <tr>
    <td><input type="text" name="pnr" placeholder="pnr no" /></td>
    </tr>
    <tr>
    <td><input type="text" name="creditcard" placeholder="credit card no" /></td>
    </tr>
    <tr>
    <td>
   
    <button type="submit" name="btn-save" ><strong>BOOK</strong></button></td>
    </tr>
    </table>
</form>
</body>
</html>