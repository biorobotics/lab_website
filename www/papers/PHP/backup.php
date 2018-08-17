<?php
	/* backup the db OR just a table */
	function backup_tables($host = 'webdb.srv.cs.cmu.edu',$user = 'bioroboticsuser',$pass = 'gaVec5S7',$name = 'biorobotics', $tables = 'Papers')
	{
		
		$link = mysql_connect($host,$user,$pass);
		mysql_select_db($name,$link);
			
		//get all of the tables
		if($tables == '*')
		{
			$tables = array();
			$result = mysql_query('SHOW TABLES');
			while($row = mysql_fetch_row($result))
			{
				$tables[] = $row[0];
			}
		}
		else
		{
			$tables = is_array($tables) ? $tables : explode(',',$tables);
		}
		$count = 0;
		//cycle through
		foreach($tables as $table)
		{
			$result = mysql_query('SELECT COUNT(*) FROM ' . $table);
			$count = $count + mysql_result($result, 0);
			$result = mysql_query('SELECT * FROM ' . $table);
			$num_fields = mysql_num_fields($result);
			
			$return .= "<?php \r\n //CONNECT TO DATABASE. CHANGE HERE IF THE DATABASE HAS MOVED. \r\n";
			$return .= "\$mysqli = new mysqli('webdb.srv.cs.cmu.edu','bioroboticsadmin','2u5i7e4I');\r\n";
			$return .= "if (\$mysqli->connect_errno) { \r\n";
			$return .= "	printf('Connect failed: %s\\n', \$mysqli->connect_error);\r\n";
			$return .= "	exit(); \r\n";
			$return .= "} \r\n";
			$return .= "else{ printf('Connect success');\r\n";
			$return .= "} \r\n \r\n";
			$return .= "if (!\$mysqli->select_db('".$name."')){\r\n";
			$return .= "	printf('Errormessage: %s\\n', \$mysqli->error);\r\n";
			$return .= "}\r\n";
			$return .= "if (!\$mysqli->query(\"DROP TABLE ".$table."\")){\r\n";
			$return .= "	printf('Errormessage: %s\\n', \$mysqli->error);\r\n";
			$return .= "}\r\n \r\n";
			
			$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
			$return .= "if (!\$mysqli->query(\"".$row2[1]."\")){\r\n";
			$return .= "	printf('Errormessage: %s\\n', \$mysqli->error);\r\n";
			$return .= "}\r\n \r\n";
			$return .= "if (!\$mysqli->query(\"\nINSERT INTO `".$table."` VALUES \r\n";
			for ($i = 0; $i < $num_fields; $i++) 
			{
				$row_num = 1;
				while($row = mysql_fetch_row($result))
				{
					$return .= "(";
					for($j=0; $j<$num_fields; $j++) 
					{
						$row[$j] = addslashes($row[$j]);
						$row[$j] = ereg_replace("\n","\\n",$row[$j]);
						if (isset($row[$j])) { $return.= "'".$row[$j]."'" ; } else { $return.= '""'; }
						if ($j<($num_fields-1)) { $return.= ','; }
					}
					if ($row_num == mysql_num_rows($result)){
						$return .= ");\n";
					}
					else {
					$return .= "),\n";
					}
					$row_num++;
				}
			}
			$return .= "\"\n";
			$return .= ")){\n";
			$return .= "	printf('Errormessage: %s\\n', \$mysqli->error);\r\n";
			$return .= "}\r\n";
			$return .= "else{ printf('<br \> Backup restoration success');\r\n";
			$return .= "} \r\n \r\n";
			$return .= "?>";
			$return .= "\n\n\n";
		}
		if(!empty($errorMessage)) {
			printf("Error Message: %s\n", $mysqli->error, "\n");
		}
		else {
			//save file
			$handle = fopen('backups/paper-db-backup_'.date('Y-m-d_H\hi\ms\s',time())."_".str_pad($count, 5, '0', STR_PAD_LEFT).'.php','w+');
			fwrite($handle,$return);
			fclose($handle);
		}
	}
?>