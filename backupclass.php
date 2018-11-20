<?php

class DBBackup
{
  private $con;
  public $tables = array();
  private $path;

  function __construct()
  {
  }


  public function table( $table = 'all' )
  {
    /*
    Get defined tables
    */
  	if( is_array( $table )){
      // Cheque table validity
      foreach($table as $t){
        if(in_array($t , $this->getAllTables())){
          $this->tables[] = $t;
        }
        else{
          throw new Exception("Table `{$t}` not exists in the DB");
        }
      }
  	}
  	elseif( $table == 'all' ){
  		 $this->tables = $this->getAllTables(); 
  	}
  	else{
  		throw new Exception("Please enter tables name as array");
  	}
  }

  public function path($path = '')
  { 
    /*
    Set upload path
    */
    $this->path = $path;
  }

  public function backUp()
  {
    /*
    Done backup
    */
  	$return = '---	Someone lifes ---------------------';
  	foreach($this->tables as $table){
  		$return .= $this->tableStracture($table);

  		foreach ($this->recode($table) as $result) {
  			$return .= $result;
  		}
  	}
	
	 $return ; 
  	
   
    return $this->writeToFile($return);;
  }

  private function getAllTables()
  {
    /*
    Get tables list name from DB
    */
  	$sql = mysql_query("SHOW TABLES");
  	while ($row = mysql_fetch_row($sql) )
    {
      foreach ($row as $key => $value)
      {
        $table[]  = $value;
      }
  	}
	return $table;
  }

  private function tableStracture($table)
  {
    /*
    Get table stracture
    */
  	$return = "\nDROP TABLE IF EXISTS `{$table}`;\n\n";
    $row = ( mysql_fetch_row(mysql_query("SHOW CREATE TABLE {$table}")) );
    $return .= $row[1].";\n\n";
    return $return;
  }

  private function recode($table)
  {
    /*
    Get data recodes
    */
  	$query = mysql_query("SELECT * FROM {$table} LIMIT 0, 1000");
  	$num_fields = mysql_num_fields($query);
  	$num_rows = mysql_num_rows($query);
  	$results = array();
  	if ($num_rows){
  	
  		while($row = mysql_fetch_row($query))
  		{
  			$return= "INSERT INTO {$table} VALUES(";
  			for($i=0; $i<$num_fields; $i++) 
  			{
          $row[$i] = addslashes($row[$i]);
          $row[$i] = str_replace("\n","\\n",$row[$i]);
          $row[$i] = str_replace("\r","\\r",$row[$i]);

  				$return .= ( isset($row[$i]) ) ? "'{$row[$i]}'" : "''";
  				if ($i<($num_fields-1)) { $return.= ','; }
  			}
  			$return.= ");\n";
  			$results[] = $return;
  		}

  	}
  	return $results;
  }

  private function writeToFile($str)
  {
    /*
    Write down backup file
    */
    $path = (isset($this->path))? $this->path : '';
    $backupPath = $path . date('Y-m-d-H-i').'_'.md5(uniqid()).'.sql';
  	if( ! $handle = @fopen( $backupPath ,'w+') ) throw new Exception("Could not save backup file at {$backupPath}");  
    fwrite($handle, $str);
    fclose($handle);
	
	return $backupPath;
  }

  public function close()
  {
    /*
    Close MySQL connection
    */
 
  }
}