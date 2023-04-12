
<?php
$host="localhost";
$uname='root';
$pass='';
$dbname='imageprocessing';
$connect=mysqli_connect($host,$uname,$pass);
$db_connect=mysqli_select_db($connect,$dbname);
if($db_connect)
{
    //echo "successfull";
}
else
{
    echo 'no connection';
}
?>
