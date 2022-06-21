<?php
//连接数据库
include 'conn.php';

// 获取修改后的学生信息
$id = $_POST['id'];
$class = $_POST['class'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$school = $_POST['school'];
$edu = $_POST['edu'];
$city = $_POST['city'];

	
$edit_sql = "update student set class='$class',name='$name',sex ='$sex', age= '$age',school ='$school', edu = '$edu', city = '$city' where id ='$id'";


$edit_result = $link->query(iconv('UTF-8', 'UTF-8', $edit_sql));


if($edit_result!="") {
echo "<script>alert('Update successful!');location.href='index.php';</script>";
}else
echo "<script> alert('Failed to update!'); location.href='index.php';</script>";
?>

