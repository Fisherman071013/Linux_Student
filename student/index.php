<?php
//连接数据库
include 'conn.php';

//编写查询sql语句
$sql = 'SELECT * FROM `student`';
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}
#$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

$data = array();
while($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}
//编写查询数量sql语句
$sql = 'SELECT COUNT(*) FROM `student`';
//执行查询操作、处理结果集
$n = mysqli_query($link, $sql);
if (!$n) {
    exit('查询数量sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}
$num = mysqli_fetch_assoc($n);
//将一维数组的值转换为一个字符串
$num = implode($num);


?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>学生信息管理系统</title>
	</head>
	<style type="text/css">
		body {
			background-image: url(student.jpg);
			background-size: 100%;
		}

		.wrapper {
			width: 1000px;
			margin: 20px auto;
		}

		h1 {
			text-align: center;
		}

		.add {
			margin-bottom: 20px;
		}

		.add a {
			text-decoration: none;
			color: #fff;
			background-color: #00CCFF;
			padding: 6px;
			border-radius: 5px;
		}

		td {
			text-align: center;
		}
	</style>
	<body>
		<div class="wrapper">
			<h1>学生信息管理系统</h1>
			<div class="add">
				<a href="addStudent.html">添加学生</a>&nbsp;&nbsp;&nbsp;共
				<?php echo $num; ?>个学生&nbsp;&nbsp;&nbsp;
				<a href="searchStudent.html">查找学生</a>
			</div>
			<table width="960" border="1">
				<tr>
					<th>学号</th>
					<th>班级</th>
					<th>姓名</th>
					<th>性别</th>
					<th>年龄</th>
                    <th>学校</th>
					<th>学历</th>
					<th>籍贯</th>
					<th>操作</th>
				</tr>
				<?php
				
	
				foreach ($data as $key => $value) {
  					foreach ($value as $k => $v) {
    					$arr[$k] = $v;
  					}
  				echo "<tr>";
				echo "<td>{$arr['id']}</td>";
                echo "<td>{$arr['class']}</td>";
				echo "<td>{$arr['name']}</td>";
				echo "<td>{$arr['sex']}</td>";
				echo "<td>{$arr['age']}</td>";
                echo "<td>{$arr['school']}</td>";
				echo "<td>{$arr['edu']}</td>";
				echo "<td>{$arr['city']}</td>";
				echo "<td>
							<a href='javascript:del({$arr['id']})'>删除</a>
							<a href='editStudent.php?id={$arr['id']}'>修改</a>
					  </td>";
				echo "</tr>";
  				// echo "<pre>";
 				// print_r($arr);
  				// echo "</pre>";
  				
  				
				}
				// 关闭连接
				mysqli_close($link);
			

				
				
			?>

			</table>
		</div>

		<script type="text/javascript">
			function del(id) {
				if (confirm("Are you sure to delete this student？")) {
					window.location = "action_del.php?id=" + id;
				}
			}
		</script>



	</body>
</html>




