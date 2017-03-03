<?php
class Database {
	public $db;
	public function __construct($host,$user,$pass,$db){
		$this->db=mysql_connect($host,$user,$pass);
		if (!$this->db){
		exit('no conect');}
		if (!mysql_select_db($db,$this->db)){
			exit('no table');
		}
	
		mysql_query('SET NAMES UTF8');
		return $this->db;	}
		
	public function get_all_db(){
		$sql="SELECT id,title,discrept FROM statja limit 10";
		$res=mysql_query($sql);
		if (!res){
			return false;
		}
	
		for($i=0;$i<mysql_num_rows($res);$i++){
			$row[]= mysql_fetch_array($res,MYSQL_ASSOC);
			}
				return $row;
		
	}
	public function get_one_db($id){
	$sql="SELECT id,title,text FROM statja WHERE id='$id'";
	
		$res=mysql_query($sql);
	
		if (!res){
			return false;
		}
	
					$row= mysql_fetch_array($res,MYSQL_ASSOC);
												return $row;	
		
	}
}

?>