<?php
include '../config.php';
$qry = $conn->query("SELECT * FROM teacher where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_teacher.php';
?>