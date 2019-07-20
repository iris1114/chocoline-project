<?php
session_start();
unset($_SESSION["mem_no"]);
unset($_SESSION["mem_id"]);
unset($_SESSION["mem_name"]);
unset($_SESSION["mem_psw"]);
unset($_SESSION["mem_email"]);
unset($_SESSION["mem_birth"]);
unset($_SESSION["mem_tel"]);
unset($_SESSION["mem_credit"]);
unset($_SESSION["mem_address"]);
unset($_SESSION["mem_point"]);
unset($_SESSION["mem_status"]);
unset($_SESSION["mem_headshot"]);
session_destroy();

header("location:../../index/index.php");

echo 'success';
?>
<!--  -->