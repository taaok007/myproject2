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

//--switch01.php
$pass = $_POST['pas'];
$id = $_POST['username'];
switch( $id ){

	case 'manager' : 
		echo "ยินดีต้อนรับ คุณ <font color='red'> $pass </font> คือผู้จัดการ $name <br>";
		echo "<a href='http://www.arnut.com'>ไปที่หน้า </a>";
 break;
	case 'admin' : 
		echo "ยินดีต้อนรับ คุณ <font color='green'> $pass </font> คือผู้ดูแลระบบ $name <br>";
		echo "<a href='https://www.rmutsb.ac.th'>ไปที่หน้า </a>";
 break;
	case 'webmaster' : 
		echo "ยินดีต้อนรับ คุณ <font color='#CCCC66'> $pass </font>คือผู้ดูแลเว็บไชต $name <br>";
		echo "<a href='https://www.rmutsb.ac.th'>ไปที่หน้า </a>";
 break;
 default : 
		echo"ยินดีต้อนรับ คุณ$pass คือผู้ใช้งาน";
 break;

}
?>