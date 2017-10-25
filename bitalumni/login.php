<?php

@$name = $_POST['username'];
@$pass = $_POST['pass1'];

if($name=="admin"AND$pass=="1234")
{
	echo "ยินดีต้อนรับ คุณ <font color='red'> โกวิท เอกสุภาพันธ์ </font> ผู้ดูแลระบบ Admin <br>";
	echo "<a href='admin/index.php'>ไปที่หน้า Backend </a>";
	
}
else if($name=="taaok"AND$pass=="1234")
{
	echo "ยินดีต้อนรับ คุณ <font color='red'> $name </font> คุณคือสมาชิกชมรม <br>";
	echo "<a href='home/index.php'>ไปที่หน้า Frontend </a>";
	
}else
{
	echo"ยินดีต้อนรับ คุณ$name คือผู้ใช้งาน<br>";
	echo "<a href='../'>ไปที่หน้า User (myproject) </a>";
	
}
?>