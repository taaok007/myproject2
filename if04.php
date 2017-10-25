<!doctype html>
 <body>
  <form method="post" action="if04.php">
	คะแนน: <input type="text" name="num">
	</br>
	<input type="submit">
  </form>
 </body>
</html>
<?php
$score=$_POST['num'];
if( $score >= 80 ){
     echo "คุณได้เกรด A";
}else if( $score >= 70){
     echo "คุณได้เกรด B";
}else if( $score >= 60){
     echo "คุณได้เกรด C";
}else if( $score >= 50 ){
     echo "คุณได้เกรด D"; 
}else if( $score < 50 ){
     echo "ขอแสดงความดีใจกับคุณด้วยคุณได้ <font color='red'>F</font>"; 
}else{
     echo "การุณาใส่คะแนน";
}
?>
