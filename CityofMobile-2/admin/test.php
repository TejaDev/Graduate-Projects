 <head>
      <title>Paging Using PHP</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost:3036';					// Replace the 'localhost:3036'with our dbhost details
         $dbuser = 'root';						// Replace the dbuser with our dbuser details
         $dbpass = 'rootpassword';					// replace the dbpass with our dbpass(Password) details
         
         $rec_limit = 10;						// This command is used to Limitising the numbers of results per page
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);		// This command is used for establishing connection with the provided db details
         
         if(! $conn ) {							 
            die('Could not connect: ' . mysql_error());			// This is to display when we fail to connect My_Sql server from PHP
         }
         mysql_select_db('test_db');			// Once the connection is established we select the particular database from the server to get the data 
         
         /* Get total number of records */
         $sql = "SELECT count(dat_id) FROM cal_dates "; // This is an sql injection that stores the count of results that are needed to display per page 
         $retval = mysql_query( $sql, $conn );	       // If the query is successful it the $retval contains value '0' or it holds non zero value 
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());  // If the query is unsuccessful it shows this message
         }
         $row = mysql_fetch_array($retval, MYSQL_NUM );   // It is used as an array and it fetches the row as an associative array or as numeric arrary or as both 
         $rec_count = $row[0];				  // This is a variable and used for setting row count to initial position of the array 
         
         if( isset($_GET{'page'} ) ) {		// This is  used to get post value in pagination
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;  // It is used to limit records per page( As we have set the $rec_limit = 10 in the above and 
						multiplied with the current page is the number of records displayed per page 
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT emp_id, emp_name, emp_salary ". // This is an sql injection that stores the details need to be displyed for every 
								record and limits once reaches to 10 records per page 
            "FROM employee ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysql_query( $sql, $conn );		// If the query is successful it the $retval contains value '0' or it holds non zero value 
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());  // If the query is unsuccessful it shows this message
         }
         
         while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {    // If the data is fetched into $row as arrays then they are printed as the result using echo
            echo "EMP ID :{$row['emp_id']}  <br> ".
               "EMP NAME : {$row['emp_name']} <br> ".			// echo and print are more or less the same 
               EMP SALARY : {$row['emp_salary']} <br> ".
               "--------------------------------<br>";
         }
         
         if( $page > 0 ) {             //
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";    // It is used to diaply as a link to view the records in next pages 
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";   // It prints the message "Last 10 Records" in the form of link using Html Tags
											to navigate to the next page 
         }
         
         mysql_close($conn);     // Closing the SQL connection 
      ?>
      
   </body>
</html>