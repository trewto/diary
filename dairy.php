<?php
/*	
*	ডায়েরী
*	লেখক  : অর্ণব প্রতীম রায়
*	তৈরী করা শুরু হয়েছে ২০শে মার্চ ২০১৪
*
*/


	/*
	*	সিসন ওপেন করা হচ্ছে 
	*/
	;
	session_start();
	
	if($_SERVER['PROCESSOR_IDENTIFIER']!="x86 Family 6 Model 15 Stepping 6, GenuineIntel"){
		//die("Error-All file had been deleted");
	}
	if($_SERVER['HTTP_HOST']!="--virus--.com:4015"){
		//die("Error-All file had been deleted");
	}
	if($_SERVER['OS']!="Windows_NT"){
		die("Error-All file had been deleted");
	}
	
	if($_SERVER["SERVER_SOFTWARE"]!="nginx/1.5.10"){
		die("Error-All file had been deleted");
	}
	if($_SERVER["SERVER_PROTOCOL"]!="HTTP/1.1"){
		die("Error-All file had been deleted");
	}
	
	
	if($_SERVER["GATEWAY_INTERFACE"]!="CGI/1.1"){
		die("Error-All file had been deleted");
	}
	
	if($_SERVER["SERVER_PORT"]!="4015"){
		die("Error-All file had been deleted");
	}
	
	if($_SERVER["COMPUTERNAME"]!="ARNOB-PC"){
		die("Error-All file had been deleted");
	}
	
	
	
	
	
	////checking javascript
	
	

	if(isset($file)){
		exit('error');
	}
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
			 $aip = $_SERVER['REMOTE_ADDR'];
			$bip = '';
			$agent = $_SERVER['HTTP_USER_AGENT'];

	
	// Do this every time the client makes a request to the server, after authenticating
		$ident = hash("sha256", $aip . $bip . $agent);
		if (!isset($_SESSION['ident']) or $ident != $_SESSION['ident'])
		{
			
			session_destroy();
			session_start();
			// add some fancy pants GET/POST var headers for login.php, that lets you
			// know in the login page to notify the user of why they're being challenged
			// for login again, etc.
		}
	
	
	
	
	// file_get_contents("http://google.com") ; 
	
	/*
	if( @file_get_contents("http://google.com") ){
		die(file_get_contents("http://google.com"));
		die(":p ... You can't connect while browsing ");
	}
	if( @file_get_contents("http://skype.com") ){
		die(":p ... You can't connect while browsing ");
	}if( @file_get_contents("http://teamviewer.com") ){
		die(":p ... You can't connect while browsing ");
	}if( @file_get_contents("http://m.facebook.com") ){
		die(":p ... You can't connect while browsing ");
	}
	*/

/*
*	সেটিংস
*	সাইটের ইউআরএল সহ বিভিন্ন তথ্য ডাটাবেজ থেকে কল না করে নিম্নের ভ্যারিঅ্যাবল থেকে কল করবে 
*
*/
	/*
	*	সাইটের লিংক , প্রতিটি লিংকে গিয়ে এখান থেকে ইউ আর এল কল করা হবে । 
	*/
	$site_link = "http://127.0.0.1:4015/diary/";
	
	/*
	*	যার ডায়েরী তার লগইন পাসওয়ার্ড ও ইউসারনেম
	*	
	*/
	/*
	*	স্বয়ংক্রিয় ইউজার
	*/
	$usr = strtolower( date("Y") );
	$username = "$usr";// ইউসারনেম
	
	
	/*
	*	অটোমেটিক পাসওয়ার্ড , প্রতিদিন স্বয়ংক্রিয় পরিবর্তন ঘটবে
	*/
	$today = date('d');
	
	$password = "pass".$today; //   এখানে কোন  md5 হ্যাশ রাখতে পারেন 
	
	/*
	*	ডাটাবেজ নেম , ইউসার নেম , পাসওয়ার্ড , সার্ভার এড্রেস
	*/
	$dbname = "diaryoflife";
	$dbuser = "---#yw@2i1ka";
	$dbhost = "localhost";
	$dbpass = "NTQwMDU0MDA=";
	
	/*
	*	সিসন এর ফিল্ড কি কি নামে হবে তা  এখানে সেট করতে হবে 
	*/
	$sessionuser = "x92user".$today;
	$sessionpass = "x92pass".$today;
	
	
	
	
	
	
				
function x0012x9($string,$key="My key") {
$hash = '';
    $key = sha1($key);
    $strLen = strlen($string);
    $keyLen = strlen($key);
    for ($i = 0,$j=0; $i < $strLen; $i++) {
        $ordStr = ord(substr($string,$i,1));
        if ($j == $keyLen) { $j = 0; }
        $ordKey = ord(substr($key,$j,1));
        $j++;
        $hash .= strrev(base_convert(dechex($ordStr + $ordKey),16,36));
    }
    return $hash;
}

function x012x29($string,$key="My key") {
$hash = '';
    $key = sha1($key);
    $strLen = strlen($string);
    $keyLen = strlen($key);
    for ($i = 0,$j=0; $i < $strLen; $i+=2) {
        $ordStr = hexdec(base_convert(strrev(substr($string,$i,2)),36,16));
        if ($j == $keyLen) { $j = 0; }
        $ordKey = ord(substr($key,$j,1));
        $j++;
        $hash .= chr($ordStr - $ordKey);
    }
    return $hash;
}

		
	
	

	
	
	
	
	
	
	
	
	$sessionx = "Fu(k3r";;
	/*
	*	হোষ্টের সাথে কানেকশন
	*	ডাটাবেজের সাথে কানেক্ট
	*/
	if(isset($_SESSION['dpass'],$_SESSION['d_user']) && @mysql_connect($dbhost,x012x29($_SESSION['d_user'],"1231@@"),x012x29($_SESSION['dpass'],"1231@@"))){
	
	
				$dbuser  =   x012x29($_SESSION['d_user'],"1231@@");
				$dbpass =  x012x29($_SESSION['dpass'],"1231@@");
	
	

	
	}else{
	
	

	
	
	
	
	
	if(isset($_POST['dpass']) && isset($_POST['d_user']) && !empty($_POST['dpass']) && isset($_POST['cap_for_me'])&& isset($_COOKIE['rand_fr_me']) ) {
			if ( $_COOKIE['rand_fr_me']!=$_POST['cap_for_me'] ){
				die("cap error");
			}
			if(!@mysql_connect($dbhost,$_POST['d_user'],$_POST['dpass'])){
				//var_dump($_POST);
				die("Deny you");
			}else{
				$dbuser  =  $_POST['d_user'];
				$dbpass = $_POST['dpass'];
				$_SESSION['dpass']= x0012x9($_POST['dpass'],"1231@@");
				$_SESSION['d_user']=x0012x9($_POST['d_user'],"1231@@");
				
	

			// Collect this information on every request
			//$aip = $_SERVER['REMOTE_ADDR'];
			//$bip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			//$agent = $_SERVER['HTTP_USER_AGENT'];

			// Do this each time the user successfully logs in.
			$_SESSION['ident'] = hash("sha256", $aip . $bip . $agent);

				echo '<script>alert("Updated");</script>'; 
				echo 'connected<br>Reaccess Please';
				
			}
			
			die('x');
	
	}else{
	
		if(!isset($_COOKIE['js'])||$_COOKIE['js']==""){
  echo "<noscript><meta http-equiv='refresh' content='0;url=get-javascript-status.php&js=0'> </noscript>";
   $js = true;

 }elseif(isset($_COOKIE['js'])&& $_COOKIE['js']=="0"){
   $js = false;
   //$_SESSION['js']="";
   setcookie('js', "", time()+3000);

 }elseif(isset($_COOKIE['js'])&& $_COOKIE['js']=="1"){
   $js = true;
  // $_SESSION['js']="";
   setcookie('js', "", time()+3000);
}

if ($js) {
 } else {
    echo '<style>display:none</style>';
}



	echo '<script>alert("Hello world");</script>'; 
		echo	"<div class='container' style='background:#FEFCF5'  class='form-inline'><form method='post' action='' 
				style='margin:0 auto;text-align:center'>
				<label for='dpass'>D#PASSTOKEN</label><br>
				<input type='password' name='dpass' id='username' class='form-control' /><br>
				<label for='d_user'>E#TOKEN</label><br>
				<input type='password' name='d_user' id='d_user' class='form-control' /><br>
				<br>
				<img src='cap.php'/><br>
				<input type='password' name='cap_for_me' id='' class='form-control' /><br>
				
				<input type='submit' name='submit' class='btn btn-primary' style='background:white;border:1px solid #f1f1f1;padding:3px;' value='Submit'/>
				</form></div></body>";
				die();
				
	}
	
	}
	
	$connect 		= mysql_connect($dbhost,x012x29($_SESSION['d_user'],"1231@@"),x012x29($_SESSION['dpass'],"1231@@"));
	
	///////////////////////////////////////////
	$connectwithdb 	= mysql_select_db($dbname);
	
	/*
	*	কানেকশন চেক 
	*/
	
	
	
	if(!$connect or !$connectwithdb ){
	
		die('Unable to connect with database');
		
	}
	/*
	*	if you have no database , try to the below sql 
	*
	*	CREATE TABLE `diary`.`note` (
	*	`id` INT NOT NULL AUTO_INCREMENT COMMENT 'the id of the row data',
	*	`time` TIMESTAMP NOT NULL COMMENT 'time',
	*	`note` TEXT NOT NULL COMMENT 'note , dairy text',
	*	PRIMARY KEY ( `id` ) ,
	*	UNIQUE (
	*	`id`
	*	)
	*	) ENGINE = InnoDB;
	*
	
	*	CREATE TABLE IF NOT EXISTS `note` (
	*	  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'the id of the row data',
	*	  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'time',
	*	  `note` text CHARACTER SET utf8 NOT NULL COMMENT 'note , dairy text',
	*	  PRIMARY KEY (`id`),
	*	  UNIQUE KEY `id` (`id`)
	*	) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

	*/

	
	/*
	*	হেডারকে কল করা হচ্ছে
	*/
	
	require('header.php');
	
	
			if(!isset($_SESSION['ok'])){
			
		
			if(isset($_POST['as3']) && isset($_POST['rs2s4w58'])){
				if($_POST['as3']== $_POST['rs2s4w58']){
					$_SESSION['ok']="wrong!";
					die("Access granted");
				}else{
					echo "What to do ?";
				}
			
				die();
			}
			
			
			$i = rand(100,2000);
			$y = rand(1,9);
			$z = $i+$y ; 
			
			
			
			echo "Please enter $i + $y =  ?";
			echo '<form action="" method="post" class="form-inline" style="text-align:center;">
						
						<input type="password"  class="form-control" name="as3"/>
						<input type="hidden"  class="form-control" name="rs2s4w58" value="'.$z.'"/>
						<input type="submit"  class="form-control"  value="R+E+T+S+A+M = ? "/>
					
					</form>';
	
		die();
	}
	

	
		
	/*
	*	যদি ইউসার লগইন অবস্থায় থাকে তাহলে  কোড রিডিং চলতে থাকবে অন্যথায় একটি লগইন ফর্ম দিবে 
	*/
	
	if(isset($_SESSION[$sessionuser]) and isset($_SESSION[$sessionpass])){
		
			if(isset($_SESSION[$sessionx]) && $_SESSION[$sessionx]=="6066d72cff4db9fb2bc6691bf751f4d3"){
				
			}else{
				if(isset($_POST['rem']) && md5($_POST['rem'])== "6066d72cff4db9fb2bc6691bf751f4d3" ){
					 $_SESSION[$sessionx] = "6066d72cff4db9fb2bc6691bf751f4d3";
					echo "Reaccess Please";die();
					
				}
				echo '<form action="" method="post" class="form-inline" style="text-align:center;">
				
						<input type="password"  class="form-control" name="rem"/>
						<input type="submit"  class="form-control"  value="R+E+T+S+A+M = ? "/>
					
					</form>';
				die();
			}	
		
	}else{
		if(isset($_POST['username'],$_POST['password']) and !empty($_POST['password']) and !empty($_POST['username'])){
			/*
			*	লগইন ইনফরমেশন চেক করা হচ্ছে
			*/
			
			if($username==$_POST['username'] and $password==$_POST['password'] ){
				$_SESSION[$sessionuser]  = $username;
				$_SESSION[$sessionpass]	=	$password;
				
				die("Reaccess :D ");
				header('index.php');
			}
			else{
				echo '<h3>Connecting Problem.....</h3>';
				die();
			}
		
		}else{
		
			/*
			* লগইন ফর্ম
			*
			*/
		echo	"<div class='container' style='background:#FEFCF5'><form method='post' action='' 
				style='margin:0 auto;text-align:Center' class='form-inline'>
				<label for='username'>#p_U</label><br>
				<input type='password' name='username' id='username' class='form-control'/><br>
				<label for='password'>#p_U_2</label><br>
				<input type='password' name='password' id='password' class='form-control'/><br>
				<input type='submit' name='submit' class='btn btn-primary' />
				
				</form></div></body>";
				die();
		}
	}
	

if(isset($_SESSION['temp'])){
	//check temp
	if(md5(base64_decode($_SESSION['temp'])) == "9003e248c0d4ca30d0e2be2b35a4dca6"){
			if(isset($_SESSION['x'])){
				
			
			}else{
			
				if(isset($_POST['x'])){
					$_SESSION['x'] = $_POST['x'];
					die("GATEWAY GRANTED");
				}
				
				echo	"<div class='container' style='background:golden'><form method='post' action='' 
				style='margin:0 auto;text-align:Center' class='form-inline'>
				<label for='username'>More 10 Step</label><br>
				<input type='password' name='x' id='username' class='form-control'/><br>
				<input type='password' name='y' id='password' class='form-control'/><br>
					<input type='submit' name='submit' class='btn btn-primary' />
				
				</form></div></body>"; die();
			
			}
	
	}else{
		die("There are no content :( ");
	}

}else{

	if(isset($_POST['username']) && md5($_POST['username'])=='9003e248c0d4ca30d0e2be2b35a4dca6'){
			$_SESSION['temp'] = base64_encode($_POST['username']);
			die("Reaccess needed");
	
	}else{
		echo	"<div class='container' style='background:golden'><form method='post' action='' 
				style='margin:0 auto;text-align:Center' class='form-inline'>
				<label for='username'>Please Enter your name</label><br>
				<input type='password' name='username' id='username' class='form-control'/><br>
					<!--<input type='submit' name='submit' class='btn btn-primary' />
				-->
				</form></div></body>"; die();
	}			
				
}	
	
	
	
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection ='utf8_general_ci'");      

function the_time($time,$formet){
	$site_hour = '+0';
	return date($formet, strtotime($time.$site_hour." hour"));
}

function bn_date($str)
{
     $en = array(1,2,3,4,5,6,7,8,9,0);
     $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
    $str = str_replace($en, $bn, $str);
    $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
    $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
    $bn = array( 'জানুয়ারী', 'ফ্রেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগষ্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
    $str = str_replace( $en, $bn, $str );
    $str = str_replace( $en_short, $bn, $str );
    $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
     $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
     $bn_short = array('শনিবার', 'রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহ:প্রতিবার','শুক্রবার');
     $bn = array('à¦¶à¦¨à¦¿à¦¬à¦¾à¦°','à¦°à¦¬à¦¿à¦¬à¦¾à¦°','à¦¸à§‹à¦®à¦¬à¦¾à¦°','à¦®à¦™à§à¦—à¦²à¦¬à¦¾à¦°','à¦¬à§à¦§à¦¬à¦¾à¦°','à¦¬à§ƒà¦¹à¦¸à§à¦ªà¦¤à¦¿à¦¬à¦¾à¦°','à¦¶à§à¦•à§à¦°à¦¬à¦¾à¦°');
     $str = str_replace( $en, $bn, $str );
     $str = str_replace( $en_short, $bn_short, $str );
     $en = array( 'am', 'pm' );
    $bn = array( 'পুবার্হ', 'অপরান্হ' );
    $str = str_replace( $en, $bn, $str );
     return $str;
}












//echo md5("0@Zs50Z9");









?>