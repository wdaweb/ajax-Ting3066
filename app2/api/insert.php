<?php
//處理新增資料的請求
include_once "../base.php";

$stu->save($_POST);

to("../index.php");


?>
