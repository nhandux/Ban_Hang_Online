<?php
 $host="localhost";
 $tk="root";
 $mk="";
 $datname="ban_hang_online";
 $connect = mysql_connect($host,$tk,$mk) or die('không thể kết nối vào database');
	$select  = mysql_select_db($datname,$connect) or die('không thể kết nối vào database');
	$lang    = mysql_query("set names 'utf8'");
 ?>
<?php 
 
   

/* class data
 {
    function data()
	  {
	   $this->_connection = mysql_connect("localhost","root","") ;
	   $lang = mysql_query("set names 'utf8'");
	     if(!$this->_connection)
		    die("Không thể kết nối vào host của bạn xin hảy kiểm tra lại");
		$db = "ban_hang_online";
		if($db != "" && !mysql_select_db($db,$this->_connection))
		  die("Không thể kết nối vào $db hảy thử lại "); 	
	  }
	 function sql($sql)
	  {
	   $this->_sql = $sql;
	  }
	function loadAllRow()
	  {
	   if(!($cursor = $this->query()))
	      return null;
		 $array = array();
		 while($row = mysql_fetch_object($cursor))
		    {
			   $array[] = $row;
			} 
		 return $array;	
			
	  }   
	function query()
	  {
	  $this->_cursor = mysql_query($this->_sql,$this->_connection);
	   return $this->_cursor;
	  }
}*/

 ?>