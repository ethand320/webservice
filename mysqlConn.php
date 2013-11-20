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
        $indexer = rand(1,6);
        
                //select whole row based on the index
        $query = 'SELECT * FROM Bar WHERE BarIndex='. $indexer;
          
   	  	//$result =  mysql_query('SELECT * FROM Bar WHERE BarIndex=2');
   	  	$result =  mysql_query($query);
	
	 $array = mysql_fetch_array($result);
   // echo 'before array alloc ';
    
    
    $barDic['Location'] = $array[1];
    $barDic['Name'] = $array[0];
    $barDic['Style'] = $array[2];
    $barDic['Description'] = $array[3];
    $barDic['Ranking'] = $array[4];
    //index 5 is bar index value
    $barDic['ImageUrl'] = $array[6];
    
        
        //$barDic['BarIndex'] = $array[5];	
	//echo 'finished adding array';
	
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
