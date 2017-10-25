<?php



@$name = $_POST['username'];
@$pass = $_POST['pass1'];

if($name=="admin")
{
	echo "ยินดีต้อนรับ คุณ <font color='red'> โกวิท เอกสุภาพันธ์ </font> ผู้ดูแลระบบ Admin <br>";
	echo "<a href='admin/index.php'>ไปที่หน้า </a>";
	
}
else
{
	echo"ยินดีต้อนรับ คุณ$name คือผู้ใช้งาน";
	echo "<a href='home/index.php'>ไปที่หน้า </a>";
	
}


?>