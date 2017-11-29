<?php
			//			PREDEFINED FUNCTIONS IN PHP
			
			
/**       CONNECTING TO THE DATABASE SEVER               ***/  
	 //  mysql_connect('localhost','root','');    FOR OLDER VERSIONS
	 $conn=@mysqli_connect('localhost:8080','root','');		//  FOR RECENT VERSIONS
	 
	 ///   $conn is refered as connection handler
	 
	// $conn=@mysql_pconnect('localhost','root','');
	 echo '<h2>The database got connected</h2>';
	//////////////////////////////////////////////////////////////////////////////////////////////
/**   SELECTING THE DATABASE IN THE SERVER **/ 
     //    FOR OLDER VERSOINS mysql_select_db('db_practice');  //db_practice is the name of the database
     @mysqli_select_db($conn,'db_practice');
	 //  here $conn is the connection link to the database server
     echo '<h2>database got selected</h2>'; 
	 /////////////////////////////////////////////////////////////////////////////////////////
/**   FOR EXECUTING THE QUERY   **/
     $sql='SELECT * FROM user_p;';
	 
	 // $res=mysql_query($sql); FOR SQL QUERIES IN OLDER VERSIONS
	 $res=@mysqli_query($conn,$sql);
	 echo '<h2>executing the query </h2>';
	 
/**   ERROR HANDLING IN DATABASES    **/	 
     echo @mysqli_connect_error($conn);
     echo @mysql_error($res);
     echo '<h2>error handling in the databases</h2>';
	////////////////////////////////////////////////////////////////////////////////////
/** calculating the no of rows in the table**/	
	 echo mysqli_num_rows($res),'5';
/**		CLOSING THE SERVER **/ 
	 @mysql_close($conn);
	 echo '<h2>The database connection got closed</h2>';
?>
