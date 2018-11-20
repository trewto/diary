<?php 


include "dairy.php";
include "backupclass.php";








try {
	$db = new DBBackup();

	$db->table();
	$db->path("./");
	$file_diretory =  $db->backUp();
	$file_diretory ; 
	$db->close();
	echo "Backup is done ... Please encrypt / password protect to the zip And stay secure!";
} catch (Exception $e) {
	die($e->getMessage());
}
//setPassword




$file =$file_diretory;
$filename = str_replace(array(".sql","/","\\","./"),"ex",$file_diretory);
$archive = './backup/'.$filename.'.zip';
$zip  =  new ZipArchive; ;
if (!is_file ($archive)) :
    $result = $zip->open ($archive, ZipArchive::CREATE);
else :
    $result = $zip->open ($archive);
endif;
if ($result === TRUE) :
    if (($zip->addFile ($file, $filename)) === TRUE) :
        $theoreticaly_added = TRUE;
		echo "";
    endif;
    if ((($zip->close ()) === TRUE) && $theoreticaly_added) :
        unlink ($file);
    endif;
endif;
