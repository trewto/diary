<?php

require('dairy.php');

if(isset($_POST['today'])){
	mysql_query("INSERT INTO `notereview` (
	`id` ,
	`time` ,
	`note`
	)
	VALUES (
	NULL ,
	CURRENT_TIMESTAMP , '".mysql_real_escape_string(x0012x9($_POST['today'],$_SESSION['temp']))."'
	);
	");
}


 $currentyear = date('Y');
 $currentd = date('d');
 $currentm = date('m');

$query = mysql_query("SELECT * FROM note WHERE ( ( YEAR( time ) = $currentyear AND MONTH( time ) = $currentm ) AND DAY(time)=$currentd ) ");

$count =  mysql_num_rows($query);

if($count == 1){
		//update the value
		if(isset($_POST['today'])){
			$text = mysql_real_escape_string(x0012x9($_POST['today'],$_SESSION['temp']));
			mysql_query("UPDATE `note` SET `note` = '$text'  WHERE ( ( YEAR( time ) = $currentyear AND MONTH( time ) = $currentm ) AND DAY(time)=$currentd );");
			echo '<script>alert("Updated");</script>'; 
		}
		
$query = mysql_query("SELECT * FROM note WHERE ( ( YEAR( time ) = $currentyear AND MONTH( time ) = $currentm ) AND DAY(time)=$currentd ) ");

		$row = mysql_fetch_array($query);
		$text = x012x29($row['note'],$_SESSION['temp']);
}else{
	$text = "";
	if(isset($_POST['today'])){
		$text = mysql_real_escape_string(x0012x9($_POST['today'],$_SESSION['temp']));
		mysql_query("INSERT INTO `note` (`id`, `time`, `note`) VALUES (NULL, CURRENT_TIMESTAMP, '$text');");
		echo '<script>alert("Updated");</script>'; 
		$text = $_POST['today'];
	}
}
?><script>
function s(){
 var myTextField = document.getElementById('info');
 var answer = confirm('Are you sure to update this ?@@-be sure --@@ No Undo is possible , Be sure and check again');
	if (answer) 
	  {
	  
	  }
	else {
		myTextField.focus();
		return false
	}
	
}


  var popit = true;
     window.onbeforeunload = function() { 
      if(popit == true) {
           popit = true;
           return "Are you sure you want to leave?"; 
      }
 }
 
 function unhook() {
        popit=false;
      } 
</script>
<div class='container' style='bsackground:#FEFCF5'>

			<form method='post' action='' style='margin:0 auto;text-align:Center'>
				<label for='info'>Write Today dairy</label><br>
				<textarea name="today" id="info" style="max-width: 100%; width: 750px; height: 600px;"><?php echo htmlspecialchars( $text );?></textarea>
				<br>
				<br>
					<input type='submit' name='submit' class='btn btn-primary' onclick="return s()" value="স্মৃতি সংরক্ষন করুন" />

				
			</form></div>
				
				
</body>