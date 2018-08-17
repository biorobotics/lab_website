<?php
	ini_set('display_errors', 'On');
	// Connect to SQL database
	include('connectSQL.php');

	// Start session if session has not started
	if(session_id() == '') {
	    session_start();
	}
	
	// Paths for file uploading
	// Final upload directory
	$uploadDirectory="../paperUploads/";
	// Temporary upload directory
	$tempUploadDirectory="../paperUploads/temp_paper_upload";
	// String with full html path to paper when uploaded
	$linkDirectory="http://biorobotics.ri.cmu.edu/papers/paperUploads/";

	// Email of website administrator
	$adminEmail = "nzevallo@andrew.cmu.edu";

	// If nothing has been posted and the session is still active, use the name from the session variable
	if(empty($_POST) && isset($_SESSION['oldName'])){
		$result = $mysqli->query("SELECT * FROM Papers WHERE Name ='" . $_SESSION['oldName'] . "'");
		$row = $result->fetch_array(MYSQLI_BOTH);
		$_GET['Edit'] = $row['Name'];
	}
	// Check if url has the title of paper and fill _POST values accordingly
	if(empty($_POST) && isset($_GET['Edit']) && !empty($_GET['Edit'])){
		$result = $mysqli->query("SELECT * FROM Papers WHERE Name ='" . $_GET['Edit'] . "'");
		$row = $result->fetch_array(MYSQLI_BOTH);
		$_POST['formLink'] = $row['Link'];
		$_SESSION['oldLink'] = $row['Link'];
		$_POST['formVideo'] = $row['Video'];
		$_POST['formName'] = $row['Name'];
		$_SESSION['oldName'] = $row['Name'];
		$_POST['formAuthors'] = $row['Authors'];
		$_POST['formPublication'] = $row['Publication'];
		$_POST['formTopic'] = $row['Topic'];
		$_POST['formSubTopic'] = $row['SubTopic'];
		$_POST['formKind'] = $row['Kind'];
		$date_array = date_parse ( $row['Date']);
		$_POST['formYear'] = $date_array['year'];
		$_POST['formMonth'] = $date_array['month'];
		$result->free();
	}

	// If user has just clicked the Submit button
	$postVal = isset($_POST['formSubmit']) ? $_POST['formSubmit'] : '';

	if($postVal == "Submit")
	{
		$errorMessage = checkRequiredFields();
		
		if($errorMessage=="")
		{
			fillVars();
			$prepVarLink = 'DEFAULT';
			//Or if name is not a duplicate, it uploads the file to a temporary directory.
			if($varLink != 'DEFAULT')
			{
				try {
				   
				    // Undefined | Multiple Files | $_FILES Corruption Attack
				    // If this request falls under any of them, treat it invalid.
				    if (
				        !isset($_FILES['formLink']['error']) ||
				        is_array($_FILES['formLink']['error'])
				    ) {
				        throw new RuntimeException('Invalid parameters.');
				    }

				    // Check $_FILES['formLink']['error'] value.
				    switch ($_FILES['formLink']['error']) {
				        case UPLOAD_ERR_OK:
				            break;
				        case UPLOAD_ERR_NO_FILE:
				            throw new RuntimeException('No file sent.');
				        case UPLOAD_ERR_INI_SIZE:
				        case UPLOAD_ERR_FORM_SIZE:
				            throw new RuntimeException('Exceeded filesize limit.');
				        default:
				            throw new RuntimeException('Unknown errors.');
				    }

				    // You should also check filesize here. 
				    if ($_FILES['formLink']['size'] > 50000000) {
				        throw new RuntimeException('Exceeded filesize limit (50 MB). If you need a larger file uploaded, contact a website admin at '. $adminEmail);
				    }

				    // DO NOT TRUST $_FILES['formLink']['mime'] VALUE !!
				    // Check MIME Type by yourself.
				    $finfo = new finfo(FILEINFO_MIME_TYPE);
				    if (false === $ext = array_search(
				        $finfo->file($_FILES['formLink']['tmp_name']),
				        array(
				            'pdf' => 'application/pdf',
				        ),
				        true
				    )) {
				        throw new RuntimeException('Invalid file format. File must be .pdf');
				    }


					$target = $uploadDirectory; 
					$target .= basename( $_FILES['formLink']['name']);
					if(!file_exists ( $target )){     
						$oldmask = umask(0);  // helpful when used in linux server  
						mkdir ($tempUploadDirectory, 744);
						$target = $tempUploadDirectory . "/";
						$target .= basename( $_FILES['formLink']['name']);
						if(!move_uploaded_file($_FILES['formLink']['tmp_name'], $target)) 
						{ 
							throw new RuntimeException('Failed to move uploaded file.');
						}
						$_SESSION['uploadedPaperName'] = basename( $_FILES['formLink']['name']);
					}
					else {
						throw new RuntimeException('File already exists.');
					}
					
					//Tells you the file was uploaded correctly
					echo "<br />The file ". basename( $_FILES['formLink']['name']). " has been uploaded. Press confirm to save it to the directory<br />";


				} catch (RuntimeException $e) {
					//Gives and error if its not 
					$varLink = 'DEFAULT';
				    $errorMessage .= "<li>" . $e->getMessage() . "</li>";
					returnToForm();
				}
				$prepVarLink = PrepSQL($mysqli, $linkDirectory.$varLink);
			}

			// This block of code inserts the data into the database using the variables we defined before. 
			// 4. This is the second required area to update when you revise this form. 
			// When you add any fields to your form, you will need to request that the data be inserted in this code.
			// This part of the form requires two SQL designations updated (form and var).
			
			else{
				$hasOldLink = isset($_SESSION['oldLink']) && !empty($_SESSION['oldLink']);
				$shouldClearLink = isset($_POST['clearLink']) && $_POST['clearLink'] == "Clear Link";
				if($hasOldLink && !$shouldClearLink){
					$varLink = $_SESSION['oldLink'];
					$prepVarLink = PrepSQL($mysqli, $varLink);
				}
			}

			if($varVideo=='DEFAULT')
			{
				$prepVarVideo = 'DEFAULT';
			}
			else
			{
				$prepVarVideo = PrepSQL($mysqli, $varVideo);
			}

			// Make SQL query to insert into database
			if(isset($_SESSION['oldName']) && !empty($_SESSION['oldName'])){
				$sql =  "UPDATE Papers SET " .
						"Name = " . PrepSQL($mysqli, $varName) . ", " .
						"Authors = " . PrepSQL($mysqli, $varAuthors) . ", " .
						"Date = " . "'{$varYear}-{$varMonth}-1', " .
						"Publication = " . PrepSQL($mysqli, $varPublication) . ", " .
						"Link = " . $prepVarLink . ", " .
						"Topic = " . PrepSQL($mysqli, $varTopic) . ", " .
						"SubTopic = " . PrepSQL($mysqli, $varSubTopic) . ", " .
						"Kind = " . PrepSQL($mysqli, $varKind) . ", " .
						"Video = " . $prepVarVideo . ", " .
						"Added = " . $varAdded . " " . 
						"WHERE Name = " . PrepSQL($mysqli, $_SESSION['oldName']) .
						" LIMIT 1";
			}
			else {
				$sql = "INSERT INTO Papers (Name, Authors, Date, Publication, Link, Topic, SubTopic, Kind, Video, Added) VALUES (".
						PrepSQL($mysqli, $varName) . ", " .
						PrepSQL($mysqli, $varAuthors) . ", " .
						"'{$varYear}-{$varMonth}-1', " .
						PrepSQL($mysqli, $varPublication) . ", " .
						$prepVarLink . ", " .
						PrepSQL($mysqli, $varTopic) . ", " .
						PrepSQL($mysqli, $varSubTopic) . ", " .
						PrepSQL($mysqli, $varKind) . ", " .
						$prepVarVideo . ", " .
						$varAdded . ")";
			}


							
			$_SESSION['sqlQuery'] = $sql;
		}

		if($errorMessage == "")
		{
			$hide = "form";
		}

		else{
			cancelInsert();
			returnToForm();
		}

		$_POST['formSubmit'] = "";
	}
	else
	{
		$hide="confirm";
	}

	$postVal = isset($_POST['formConfirm']) ? $_POST['formConfirm'] : '';
	if($postVal == "Confirm")
	{
		fillVars();
		// Add paper to database
		if (!$mysqli->query($_SESSION['sqlQuery'])){
			returnToForm();
			$errorMessage = "<li>SQL ERROR: " . $mysqli->error . "</li>";
		}
		// If query is successful
		else{
			// Move paper from temp directory to upload directory and delete temp directory
			if($_SESSION['uploadedPaperName'] != 'DEFAULT'){
				rename($tempUploadDirectory . "/" . $_SESSION['uploadedPaperName'],
					   $uploadDirectory . "/" . $_SESSION['uploadedPaperName']);
				rmdir($tempUploadDirectory);
				$_SESSION['uploadedPaperName'] = 'DEFAULT';
			}

			// Clear all previous form data
			$_POST = array();
			echo "<p style='color:green; font-weight:bold;'>Paper submitted!</p>";
			
			//This is where the subject of the e-mail is defined. Alter to your need.
			
			$subject = "New Paper Submitted";

			// headers and subject
			// this code should not be changed. 

			$headers  = "MIME-Version: 1.0rn";

			$headers .= "Content-type: text/html; charset=iso-8859-1rn";

			 // The e-mail that gets sent out will include this text in the body of the e-mail. 
					
			$body = "PAPER ENTERED: \r\n \r\n" . $varName . 
									"\r\n" . $varAuthors .
									"\r\n" . $varPublication .
									"\r\n" . $varMonth . "/" . $varYear .
									"\r\n";
			
			if($varLink!="DEFAULT")
				$body .= "\r\n UPLOAD: ".$varLink;
			if($varVideo!="NULL")
				$body .= "\r\n VIDEO: ".$varVideo."\r\n \r\n";
				
			$body .= "Please see database for further details.";	
			
			mail($adminEmail, $subject, $body);
		}
		session_destroy();
	}
	$postVal = isset($_POST['formCancel']) ? $_POST['formCancel'] : '';
	if($postVal == "Cancel")
	{
		fillVars();
		cancelInsert();
	}

	$postVal = isset($_POST['formExit']) ? $_POST['formExit'] : '';
	if($postVal == "Cancel")
	{
		session_destroy();
		header('Location: index.php') ;
	}
	
	// Function that clears SQL query and removes uploaded paper from temporary
	// upload directory
	function cancelInsert(){
		global $tempUploadDirectory;
		// Delete uploaded file
		if($_SESSION['uploadedPaperName'] != 'DEFAULT'){
			unlink($tempUploadDirectory . "/" . $_SESSION['uploadedPaperName']);
			rmdir($tempUploadDirectory);
			$_SESSION['uploadedPaperName'] = 'DEFAULT';
		}
		$_SESSION['sqlQuery'] = '';
		echo "<p style='color:red; font-weight:bold;'>Paper not added to database.</p>";
	}

	// This code returns an error message if the user has not filled out the required fields.
	// If all required fields are filled out, it returns an empty string.
	function checkRequiredFields(){
		$errorMessage = "";
		
		// Check for missing topics etc.

		if(empty($_POST['formTopic']))
		{
			$errorMessage .= "<li>Missing topic.</li>";
		}	
		if(empty($_POST['formSubTopic']))
		{
			$errorMessage .= "<li>Missing subtopic.</li>";
		}	
		if(empty($_POST['formName']))
		{
			$errorMessage .= "<li>Missing name of paper.</li>";
		}
		if(empty($_POST['formAuthors']))
		{
			$errorMessage .= "<li>Missing authors of paper.</li>";
		}
		if(empty($_POST['formMonth']))
		{
			$errorMessage .= "<li>Missing month paper was published.</li>";
		}
		if(empty($_POST['formYear']))
		{
			$errorMessage .= "<li>Missing year paper was published.</li>";
		}
		if(empty($_POST['formPublication']))
		{
			$errorMessage .= "<li>Missing publication in which paper was published.</li>";
		}
		if(empty($_POST['formKind']))
		{
			$errorMessage .= "<li>Missing type of publication.</li>";
		}
		return($errorMessage);
	}

	
	// This block of code defines the variables  
	// 2. This is the first required area to update when you revise this form. 
	// When you add any fields to your form, you will need to define that field here.
	// This part of the form requires two SQL designations updated (form and var)

	function fillVars()
	{
		global $varLink;
		global $varVideo;
		global $varName;
		global $varAuthors;
		global $varMonth;	
		global $varYear;
		global $varPublication;
		global $varTopic;
		global $varSubTopic;
		global $varKind;
		global $varAdded;

		if(empty($_FILES)||$_FILES['formLink']['name']=="")
		{
			$varLink = 'DEFAULT';
		}
		
		else
		{
			$varLink = basename($_FILES['formLink']['name']);
		}

		if(empty($_POST['formVideo']))
		{
			$varVideo = 'DEFAULT';
		}
		
		else
		{
			$varVideo = $_POST['formVideo'];
		}
		//Then fill required fields

		$varName = $_POST['formName'];

		$varAuthors = $_POST['formAuthors'];

		$varMonth = $_POST['formMonth'];
		
		$varYear = $_POST['formYear'];

		$varPublication = $_POST['formPublication'];
		
		$varTopic = $_POST['formTopic'];
		
		$varSubTopic = $_POST['formSubTopic'];
		
		$varKind = $_POST['formKind'];
		
		//varAdded is set to its default, the current timestamp.
		
		$varAdded = 'DEFAULT';
	}
	
	// returns the user to the orignial form, hiding the confirm button
	function returnToForm()
	{
		global $hide;
		$hide = "confirm";
		$_POST['formSubmit'] = "";
	}
	
    // function: PrepSQL($mysqli, $value)
    // It adds stripslashes and mysql_real_escape_string PHP functions
    // This sanitizes the SQL query
    // and inserts single quotes around the string
    function PrepSQL($mysqli, $value)
    {
        // Stripslashes
        if(get_magic_quotes_gpc()) 
        {
            $value = stripslashes($value);
        }
        // Quote
		$value = $mysqli->real_escape_string($value);
		$value = "'" . $value . "'";
        return($value);
    }


	/**********************
	Dropdown form filler
	**********************/
	
	$topicOptions = "<option value=''>-- Select a topic --</option>";
	$getVal = isset($_GET['TopicDropdown']) ? $_GET['TopicDropdown'] : '';
	$postVal = isset($_POST['formTopic']) ? $_POST['formTopic'] : '';
	while($row = $topics->fetch_array(MYSQLI_BOTH)) {
		if($getVal == $row['Topic'] || $postVal == $row['Topic'])
		{
			$topicOptions .="<option value=\"" . $row['Topic'] .
							"\" selected>" . $row['Topic'] . "</option>";
		}
		else{
			$topicOptions .="<option value=\"" . $row['Topic'] . "\">" . $row['Topic'] . "</option>";
		}
	}
	
	$subTopicOptions = "<option value=''>-- Select a sub-topic --</option>";
	$getVal = isset($_GET['TopicDropdown']) ? $_GET['TopicDropdown'] : '';
	if(empty($_POST['formTopic']))
	{
		$subTopics = $mysqli->query("SELECT DISTINCT SubTopic FROM Papers WHERE Topic = \"" . $getVal . "\" ORDER BY SubTopic")  or trigger_error(mysql_error()); 
	}
	
	else
	{
		$subTopics = $mysqli->query("SELECT DISTINCT SubTopic FROM Papers WHERE Topic = \"" . $_POST['formTopic'] . "\" ORDER BY SubTopic")  or trigger_error(mysql_error()); 
	}
	
	if ($mysqli->errno) {
		printf("%s\n", $mysqli->error);
		exit();
	}

	$postVal = isset($_POST['formSubTopic']) ? $_POST['formSubTopic'] : '';
	while($row = $subTopics->fetch_array(MYSQLI_BOTH)) {
		if($postVal == $row['SubTopic']){
			$subTopicOptions .="<option value=\"" . $row['SubTopic'] .
							"\" selected>" . $row['SubTopic'] . "</option>";
		}
		else{
			$subTopicOptions .="<option value=\"" . $row['SubTopic'] . "\">" . $row['SubTopic'] . "</option>";
		}}
		
	$kindOptions = "<option value=''>-- Select Type --</option>";
	$postVal = isset($_POST['formKind']) ? $_POST['formKind'] : '';
	while($row = $kinds->fetch_array(MYSQLI_BOTH)) {
		if($postVal == $row['Kind']){
			$kindOptions .= "<option value=\"" . $row['Kind'] .
							"\" selected>" . $row['Kind'] . "</option>";
		}
		else{
			$kindOptions .="<option value=\"" . $row['Kind'] . "\">" . $row['Kind'] . "</option>";
		}
	}
	
?>

<!-- Begin HTML form -->

<html>

<head>
	
	<title>PAPER EDIT PAGE</title>

	<script type="text/javascript">

		/***********************************************
		* Drop Down Date select script adapted from JavaScriptKit.com
		* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
		***********************************************/

		var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

		function populatedropdown(monthfield, yearfield){
			var today=new Date();
			var monthfield=document.getElementById(monthfield);
			var yearfield=document.getElementById(yearfield);
			monthfield.options[0]=new Option("-- Month --","");
			for (var m=1; m<13; m++)
			{
				monthfield.options[m]=new Option(monthtext[m-1], parseInt(m));
			}
			
			if (!(<?php echo empty($_POST['formMonth']) ? 'true' : 'false';?>))
			{
				var chosenMonth = parseInt(<?php
					$postVal = isset($_POST['formMonth']) ? $_POST['formMonth'] : '';
					echo "\"" . $postVal . "\"";?>);
				monthfield.options[chosenMonth]= new Option(monthtext[chosenMonth-1], <?php echo "\"" . $postVal . "\"";?>, true, true);
				//select POSTed month
			}
			yearfield.options[0]=new Option("-- Year --","")
			var thisyear=today.getFullYear()
			for (var y=0; y<100; y++){
				yearfield.options[y+1]=new Option(thisyear, thisyear);
				thisyear-=1;
			}
			if (!(<?php echo empty($_POST['formYear']) ? 'true' : 'false';?>))
			{
				var chosenYear = parseInt(<?php $postVal = isset($_POST['formYear']) ? $_POST['formYear'] : '';
										 		echo "\"" . $postVal . "\"";?>);
				yearfield.options[today.getFullYear()-chosenYear+1]=new Option(chosenYear, chosenYear, true, true); //select POSTed year
			}
			
		}

	</script>
	
<!-- define some style elements-->
	<style>
		
		<?php
			if($hide=="confirm")
			{
				echo"
					#formHide
					{
						display:block;
					}
					#confirmHide
					{
						display:none;
					}";
			}
			
			else
			{
				echo"
					#formHide
					{
						display:none;
					}
					#confirmHide
					{
						display:block;
					";
			}	
		?>

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

</head>

<body>

<!-- This is where errors are displayed -->

	<?php

		if(!empty($errorMessage)) 

		{

			echo("<p id=errorstyle>There was an error with your form:\n");

			echo("<ul id=errorstyle>" . $errorMessage . "</ul>\n</p>");

		}

    ?>

<!-- PAGE TITLE -->
<p>
	<strong>
		<span class="examplestyle">
			<?php
				if(isset($_SESSION['oldName']) && !empty($_SESSION['oldName'])){
					echo 'Editing <i>' . $_SESSION['oldName'] . '</i>';
				} else{
					echo 'Paper upload page';
				}
			?>
		</span>
    </strong>
</p>


<!-- FORM -->
<form enctype="multipart/form-data" action=<?php echo "\"" . htmlentities($_SERVER['PHP_SELF']) . "\""; ?> method="post">
	<!-- This is the main form section, which is initially shown -->
	<div id="formHide">
		
		<p>
			<label for='formTopic'>Topic of publication</label><br/>
			<select id="TopicDropdown" name="formTopic" onchange="this.form.submit(); return true;">
			<?php echo $topicOptions; ?>
			</select> * <br \>
			<p id="errorstyle"> WARNING: This will reset all other fields, do this first. <br \> </p>
		</p>

		<p>
			<label for='formSubTopic'>Sub-topic of publication</label><br/>
			<select name="formSubTopic">
			<?php echo $subTopicOptions; ?>
			</select> *
		</p>

		<p>
			<label for='formName'>Title of paper</label>
			<br/>
			<input type="text" name="formName" maxlength="200" value=
			<?php 
				$postVal = isset($_POST['formName']) ? $_POST['formName'] : '';
				echo "\"" . $postVal . "\"";
			?>
			/> <br /> E.G. A Unified Non-Holonomic Framework for GPS Localized Cluster Optimization
		</p>

		<p>
			<label for='formAuthors'>Authors of paper</label>
			<br/>
			<input type="text" name="formAuthors" maxlength="200" value=
			<?php 
				$postVal = isset($_POST['formAuthors']) ? $_POST['formAuthors'] : '';
				echo "\"" . $postVal . "\"";
			?>
			/> <br /> E.G. H. Choset, S. Nakey and S. Lithery
		</p>
		
		<p>
			<label for='formDate'>Date of publication</label>
					<br/>
			<select id="monthdropdown" name="formMonth">
			</select> 
			<select id="yeardropdown" name="formYear">
			</select> 
		</p>

		<p>
			<label for='formPublication'>Publication in which paper appears</label>
			<br/>
			<input type="text" name="formPublication" maxlength="200" value=
			<?php 
				$postVal = isset($_POST['formPublication']) ? $_POST['formPublication'] : '';
				echo "\"" . $postVal . "\"";
			?>
			/>  <br /> E.G. Westeros Journal of Robotics Research (WJRR), Vol. 5, No. 3, March 2012
		</p>

		<p>
			<label for='formKind'>Type of publication</label><br/>
			<select name="formKind">
			<?php echo $kindOptions; ?>
			</select> 
		</p>

		<!-- Uploaded paper section. -->
		<!-- Check if oldLink variable exists in session -->
		<?php
			// check if an old link variable exists in the session
			$hasOldLink = isset($_SESSION['oldLink']) && !empty($_SESSION['oldLink']);
			// Link to display
			$oldLink = $hasOldLink ? $_SESSION['oldLink']:'#';
			// If no oldLink exists or if a 'Clear Link' value has been posted, set isLinkCleared to true
			$isLinkCleared = $hasOldLink && isset($_POST['clearLink']) && $_POST['clearLink'] == "Clear Link";
			$clearLinkPersistent = $isLinkCleared;
			if(isset($_POST['setClearLink'])) {
				if($_POST['setClearLink'] == "Clear Link") {
					$clearLinkPersistent = true;
					$isLinkCleared = true;
				}
				else {
					$clearLinkPersistent = false;
					$isLinkCleared = false;
				}
			}
		?>
		<!-- Otherwise display an 'Upload Paper' input -->
		<div style="display: <?php echo $isLinkCleared || !$hasOldLink ? 'block;':'none;'?> ">
			<p >
				<label for="formLink">Upload paper (.pdf)</label>
				<br/>
				<input type="file" name="formLink" id ="formLink" /> <br />
			</p>
			<p " id="errorstyle">
				WARNING: This will reset if the form is reloaded, even when other fields don't reset. <br \>
			</p>
		</div>
		<!-- Hidden form item to make clearing link persistent -->
		<input style="display:none;" type="checkbox" name="clearLink" value="Clear Link"
			<?php echo $clearLinkPersistent ? 'checked':'';?> />
		<!-- If oldLink variable existed, display it with a 'Clear Link' button -->
		<p style="display:<?php echo $hasOldLink ? 'block;':'none;'?>">
			<label style="display:<?php echo $isLinkCleared ? 'none;':'block;'?>">
				Current Link: <a href = <?php echo $oldLink ?> target="_blank"> <?php echo $oldLink ?> </a> &nbsp; 
			</label>
			<input type="submit" name="setClearLink" value=<?php echo $isLinkCleared ? '"Use Old Link"':'"Clear Link"'?> style="width:auto;"/>
		</p>

		<p>
			<label for='formVideo'>Link to video or other media</label>
						<br/>

			<input type="text" name="formVideo" maxlength="200" value=<?php 
				$postVal = isset($_POST['formVideo']) ? $_POST['formVideo'] : '';
				echo "\"" . $postVal . "\"";
			?>/>

	    <p>
	        <input type="submit" name="formSubmit" value="Submit" />
	    </p>
	    <p>
	        <input type="submit" name="formExit" value="Cancel" />
	    </p>
	</div>

	<!-- This is the confirm and cancel button section, which is initially hidden -->
	<div id="confirmHide">
		<p>
			<?php
				$confirmString = $varName . "<br />" . $varAuthors . "<br />" . $varPublication. "<br />" . $varMonth . "/".$varYear . "<br />Topic:" . $varTopic . "<br />Sub topic:" . $varSubTopic;
				if($varLink!="DEFAULT")
				{
					$confirmString .= "<br /><a href=\"". $linkDirectory. $varLink . "\"> Link </a>";
				}
				else
				{
					$confirmString .= "<br /> NO LINK TO PAPER";
				}
				
				if($varVideo!="DEFAULT")
				{
					$confirmString .= "<br /><a href='".$varVideo . "'> Link </a>";
				}
				else
				{
					$confirmString .= "<br />NO LINK TO VIDEO OR OTHER MEDIA <br \>";
				}
				echo $confirmString;
			?>
	        <input type="submit" name="formConfirm" value="Confirm" />
			<input type="submit" name="formCancel" value="Cancel" />

	    </p>
	</div>
</form>


<script type="text/javascript">

	//populatedropdown(id_of_month_select, id_of_year_select)
	window.onload=function(){
	populatedropdown("monthdropdown", "yeardropdown")
	}

	var selectmenu=document.getElementById("TopicDropdown")
	selectmenu.onchange=function(){ //run some code when "onchange" event fires
	 window.location.href = "paper_form.php?TopicDropdown=" + event.target.value; 
	}


</script>

</body>

</html>