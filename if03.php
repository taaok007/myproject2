<!doctype html>
 <body>
  <form method="post" action="if03.php">
	ID : <input type="text" name="username">
	<br>
	ชื่อ: <input type="text" name="pas">
	</br>
	<input type="submit">
  </form>
 </body>
</html>

<?php
//--if03.php
$name = $_POST['username'];
$pass = $_POST['pas'];
//$name="Kowin";
if($name=="manager")
{
	echo "ยินดีต้อนรับ คุณ <font color='red'> $pass </font> คือผู้จัดการ $name <br>";
	echo "<a href='http://www.arnut.com'>ไปที่หน้า </a>";
	
}
elseif($name=="admin")
{
	echo "ยินดีต้อนรับ คุณ <font color='green'> $pass </font> คือผู้ดูแลระบบ $name <br>";
	echo "<a href='https://www.rmutsb.ac.th'>ไปที่หน้า </a>";
}
elseif($name=="webmaster")
{
	echo "ยินดีต้อนรับ คุณ <font color='#CCCC66'> $pass </font>คือผู้ดูแลเว็บไชต $name <br>";
	echo "<a href='https://www.rmutsb.ac.th'>ไปที่หน้า </a>";
}
else
{
	echo"ยินดีต้อนรับ คุณ$pass คือผู้ใช้งาน";
	
}
?>