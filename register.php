<?php
include("config.php");
$link=$db;
//check connection
if ($link==false){
  die ("ERROR: could not correct.".mysqli_connect_error());
}
$username=$_post['username'];
$cn=$_post['college name'];
$deg=$_post['degree'];
$reppas=$_post['repeat password'];
$eml=$_post['email'];
$bra=$_post['brach'];
$pst=$_post[password'];
//attemt insert guery execution.
$sql="INSERT INTO register('username','collegename','degree','repeat password'','email','bracnch','password',)VALUES
   values($name,$cn,$deg,$repas,$emi,$bra,$pad);
if (mysqli_query($db,$sql))
   echo"Records adder successfully:";
}else{
   echo"ERROR:could not able to execute
$sql.".mysqli_error($link);
}
//close connection
mysqli_close($link)
?>
