<?php
	// Include backup function
	include('backup.php');
	include('connectSQL.php');
	global $hide;
	if($_POST['formSubmit'] == "Confirm Backup")
	{
		backup_tables();
		$page = "successful_backup.html";
		header("Location: " . $page, true, 303);
		exit;
	}
	else{
		$hide = "confirm";
	}
?>
<html>
<head>
	<title>PAPER BACKUP PAGE</title>
	<style>		
		label,a 
		{
			font-family : Arial, Helvetica, sans-serif;
			font-size : 15px; 
		}
		
		p, li
		{
			font-family : Arial, Helvetica, sans-serif;
			font-size : 12px; 
		}
		
		input
		{
			width: 75%;
		}
		
		.examplerule {
			font-family: Verdana, Geneva, sans-serif;
			font-size: 10px;
			font-style: normal;
		}
		.examplestyle {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 18px;
		}
		
		#errorstyle{
			color:red;
			font-weight:bold;
		}
		
	</style>
	<script type="text/javascript">
	function ConfirmBackup(node) {
		return confirm("This will restore from backup and erase any changes. If you are not sure if changes have been made to the database, make a new backup first. Press OK to continue.");
	}
	</script>
</head>
<body>
	<h1><a href="paper_form.php">Upload new Paper</a></h1>
	<h1><a href="edit_paper.php">Edit existing paper</a></h1>
	<h1>Backups</h1>
	<h2>Make new backup</h2>
	<form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<div id="formHide">
		<?php
			if(!empty($errorMessage)) 
			{
				echo("<p id=errorstyle>There was an error:\n");
				echo("<ul id=errorstyle>" . $errorMessage . "</ul>\n</p>");
			}
		?>
		<input type="submit" name="formSubmit" value="Confirm Backup" />
	</div>		
	<h2>Click the links to revert to a previous backup</h2> 
	<p>
	<?php
		$dir = "./backups";
		$backups =  scandir ($dir);
		foreach ($backups as &$value) {
			$needle = ".php";
			if(strpos($value, $needle) !== False){
				$text = substr($value,9,26);
				$count = (int)substr($value,37,5);
				echo("<a href=\"backups/" . $value . "\"");
				echo("onclick=\"return ConfirmBackup(this);\">" . $text . "</a> with " . $count . " entries.<br \>");
			}
		}
	?>
	</p>
	<p>Current number of entries: <?php echo($numEntries);?></p>
</html>
