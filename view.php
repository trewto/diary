<?php
require('dairy.php');

if(isset($_GET['id']) && !empty($_GET['id'])){

		$hashcode =  x012x29($_GET['id'],date('d m y'));
		
		
	$query = mysql_query("SELECT * FROM note WHERE id='{$hashcode}'");
	$number = mysql_num_rows($query);
	if($number==1){
		$row = mysql_fetch_array($query);
		?>
	<!--	<br>		<center>	Diary of <?php echo $row['time']; ?></center>-->	<br>
			<?php 
				$s = the_time($row['time'],'d M ,Y রোজ:   D ');
				 $t =  bn_date($s);;
				
			/* $year =  substr($t,0,4);
			 $month =  substr($t,5,2);
			 $day =  substr($t,8,2);
			*/
			?>
		<div class='container view' style=''>
			<?php echo $t ; ?>  <br>
			<?php echo nl2br(htmlspecialchars(x012x29($row['note'],$_SESSION['temp']))) ; ?>
				</div></body>
				<?php
	}else{
		die('---::---');
	}
}else{
	die('-_-');
}



?>
