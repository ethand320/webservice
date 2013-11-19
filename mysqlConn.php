<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



class mysqlConn {


private $conn;
private $hostname = '216.231.132.54';
private $username = 'bar';
private $password = 'drower4';
private $db_name = 'bar_app_db';


    public  function mysqlConn(){
    	//echo 'called';
    
      //  $conn = mysql_connect($hostname, $username, $password);
        $conn = mysql_connect("216.231.132.54", "bar", "drower4");
      if (!$conn) die ('Could not connect to database:'   . mysql_errno());    
	mysql_select_db("bar_app_db");
//echo 'passed selectdb';

   //	$result =  mysql_query('SELECT * FROM Bar WHERE BarIndex=1');
	
	 //$array = mysql_fetch_array($result);
        //        echo $array[0];
                

	
        
   }
    
    function getBar($barIndex){
	//echo 'get bar called';
        
        //select whole row based on the index
   	  	$result =  mysql_query('SELECT * FROM Bar WHERE BarIndex=2');
	
	 $array = mysql_fetch_array($result);
    
    $barDic['Location'] = $array[1];
    $barDic['Name'] = $array[0];
    $barDic['Style'] = $array[2];
    $barDic['Description'] = $array[3];
    $barDic['Ranking'] = $array[4];		
     $barDic['BarIndex'] = $array[5];	
	
//	echo '</br> new line space </br>';
	
				
				return $barDic;
				
//	 $array =$mysqli_fetch_array($result);
  //              echo $array[0];
                
    }
	
	function closeConn(){
		
	mysql_close($this->conn);
   }
    
}


?>
