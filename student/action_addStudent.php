<?php
//连接数据库

include 'conn.php';
 $link->query("SET NAMES 'UTF8'");

// 获取增加的学生信息
$id = $_POST['id'];
$class = $_POST['class'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$school = $_POST['school'];
$edu = $_POST['edu'];
$city = $_POST['city'];

$insert_sql = "insert into student values('$id','$class','$name', '$sex', '$age','$school','$edu','$city')";

$insert_result = $link->query(iconv('UTF-8', 'UTF-8', $insert_sql));


if($insert_result!="") {
echo "<script>alert('Add successful!');location.href='index.php';</script>";
}else
echo "<script> alert('Failed to add. Please check the input information!'); location.href='index.php';</script>";

?>


  

