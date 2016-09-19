<?php
ob_start();
$in = $_POST['in'];
$out = $_POST['out'];
header('Location: https://gc.synxis.com/rez.aspx?Hotel=44858&Chain=1854&arrive='.$in.'&depart='.$out);
exit;
?>