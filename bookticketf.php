<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'dbtuts');

class bookticket
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }
 
 public function bookticket1($tno,$tname,$date,$fname,$lname,$city,$age,$sex,$pnr)
 {
  $res = mysql_query("INSERT users(train_no,train_name,date,first_name,last_name,user_city,age,sex,pnr) VALUES('$tno','$tname','$date','$fname','$lname','$city','$age','$sex','$pnr')");
  return $res;
 }
 
 public function confirmrequest()
 {
  if($_SERVER["REQUEST_METHOD"]=="POST")
                                {
                                    $pnr=$_POST['pnr'];
                                 }  
  $searchroute="SELECT * FROM users WHERE pnr='$pnr'";
  $res=mysql_query($searchroute);
  
  return $res;
 }
}

?>