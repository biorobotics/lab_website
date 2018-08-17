<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>
<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
<title> Biorobotics Papers </title>
<meta name="Keywords" content="Biorobotics, biorobotics lab, papers, journal papers, conference papers">
<meta name="description" content ="Papers - Carnegie Mellon Biorobotics" />
<link rel="stylesheet" href="/css/forms.css">
<style>

a.edit{
	color: red;
	font-style: bold;
}

</style>
</head>
<body>
<div class='container'>
<div class='content'>
	<h1>Choose a paper to edit</h1><br />
<!-- Content - Papers
============================= -->
<?php
ini_set('display_errors', 'On');
// Connect to SQL database
include('connectSQL.php');

//POPULATE DROP DOWN MENUS AS HTML

$topicOptions = "";

while($row = $topics->fetch_array(MYSQLI_BOTH)) {
	if(!empty($_GET) && $_GET['Topic'] == $row['Topic']){
		$topicOptions .="<option value=\"" . $row['Topic'] .
						"\" selected>" . $row['Topic'] . "</option>";
	}
	else{
		$topicOptions .="<option value=\"" . $row['Topic'] . "\">" . $row['Topic'] . "</option>";
	}}
	
$kindOptions = "";

while($row = $kinds->fetch_array(MYSQLI_BOTH)) {
	if(!empty($_GET) && $_GET['Kind'] == $row['Kind']){
		$kindOptions .= "<option value=\"" . $row['Kind'] .
						"\" selected>" . $row['Kind'] . "</option>";
	}
	else{
		$kindOptions .="<option value=\"" . $row['Kind'] . "\">" . $row['Kind'] . "</option>";
	}
}

$sortingOptions = "";

if(!empty($_GET) && $_GET['Sort'] == "date"){
	$sortingOptions .="<option value='type'> Type</option>
					   <option value='date' selected> Date</option>";
}

else{
	$sortingOptions .="<option value='type' selected> Type</option>
					   <option value='date'> Date</option>";
}

if(!empty($_GET)) $search=$_GET['Search'];
else $search="";

//CREATE HTML CODE FOR FULL MENU FORM
$menu="	<div class='row'>
		<form id='Topic' name='Topic' action='' method='get'>
		<div class='twelve columns'>
		<div class='form-grid'>
		<ul>
		<li>
			<!--TOPIC OF PAPER (topic) DROPDOWN-->
			<p>Topic<br><br>
			<select class='u-full-width' name='Topic' id='Topic'>
					<option value='*'>All</option>
					" . $topicOptions . "
			</select></p>
		</li>
		<li>
			<!--TYPE OF PUBLICATION (kind) DROPDOWN-->
			<p>Type of Publication<br><br>
			<select class='u-full-width' name='Kind' id='Kind'>
				<option value='*'>All</option>
				" . $kindOptions . "
			</select>
			</p>
		</li>
		<li>
			<!--SEARCH BAR (search)-->
			<p>Search<br><br>
			<input class='u-full-width' type='text' name='Search' id='Search' value='" . $search . "'>
			</p>
		</li>
		<li>
			<!--SORTING (sort) DROPDOWN-->
			<p>Sort By<br><br>
			<select class='u-full-width' name='Sort' id='Sort'>
				" . $sortingOptions . "
			</select>
			</p>
		<li>
			<p>
			<br><br>
			<input class='u-full-width' type='submit' value='Submit'>
			</p>
		</li>
		</ul>
		</div>
		</div>		
		</form>
		</div>";
		

//DISPLAY MENU

echo $menu;

//DEFAULT QUERY SELECTS ALL PAPERS AND ORDERS BY TOPIC

if (empty($_GET)) {
	$result = $mysqli->query("SELECT * FROM Papers
							ORDER BY Topic, SubTopic, Kind, Date DESC");
	displayByType($result);
}

//USES RESULTS FROM DROP DOWN MENUS ($_GET) TO AFFECT HOW PAPERS ARE SELECTED

else {
    //VARIABLE DEFAULTS SHOULD RPODUCE A SELECT ALL QUERY
	$filterQuery="";
	$searchQuery="Papers";
	$topicQuery="";
    //SEARCH IF THERE IS INPUT  
	if(!empty($_GET['Search'])){
	    $find = strtoupper($_GET['Search']); 
		$find = strip_tags($find); 
		$find = trim ($find);
		if($find != ""){
			$searchQuery = " (SELECT * FROM Papers WHERE Topic LIKE '%" . $find . "%'
											OR Name LIKE '%" . $find . "%'
											OR Authors LIKE '%" . $find . "%'
											OR SubTopic LIKE '%" . $find . "%'
											OR Publication LIKE '%". $find . "%') search ";
		}
	}				  
	if((strcmp($_GET['Topic'],"*")!=0)&&(strcmp($_GET['Kind'],"*")!=0)){
		$topicQuery = " WHERE Topic='" . $_GET['Topic'] . "' AND Kind='" . $_GET['Kind'] . "'";
	} 
	elseif(strcmp($_GET['Topic'],"*")!=0){
		$topicQuery = " WHERE Topic='" . $_GET['Topic'] . "'";
	} elseif(strcmp($_GET['Kind'],"*")!=0){
		$topicQuery = " WHERE Kind='" . $_GET['Kind'] . "'";
	}
	//SORTS BY EITHER DATE OR TYPE, AND USES THE CORRESPONDING displayBy___() FUNCTION

	if($_GET['Sort'] != "date"){
		$result = $mysqli->query("SELECT * FROM " . $searchQuery . $topicQuery  . "
							ORDER BY Topic, SubTopic, Kind, Date DESC");
	    //displayNoResult($result);
		displayByType($result);
	}
	else{
		$result = $mysqli->query("SELECT * FROM " . $searchQuery . $topicQuery . " ORDER BY Date DESC");
		//displayNoResult($result);
		displayByDate($result);
	}
}

//UTILITY FUNCTIONS

function displayNoResult($inputResult){
	$num_results = mysql_num_rows($inputResult); 
	if ($num_results == 0){
		echo "<p> No results </p>";
		exit();
	}
}

function displayByType($filteredTable){
	$topic = "";
	$subTopic = "";
	$kind = "";
	echo"<p>";
	while($row = $filteredTable->fetch_array(MYSQLI_BOTH)){
		if(strcmp($row['Topic'],$topic)!=0){
			echo "<a name=\"" . $row['Topic'] . "\"></a>" . "<h3><b>" . $row['Topic'] . "</b> </h3>";
			$topic = $row['Topic'];
		}
		if(strcmp($row['SubTopic'],$subTopic)!=0){
			echo "<h4>" . $row['SubTopic'] . "</h4>";
			echo "<p><b>" . $row['Kind'] . "</b></p>";
			$kind = $row['Kind'];
			$subTopic = $row['SubTopic'];
		}
		if(strcmp($row['Kind'],$kind)!=0){
			echo "<p><b>" . $row['Kind'] . "</b></p>";
			$kind = $row['Kind'];
		}
		echo "<p>";
		echo "<i>" . $row['Name'] . "</i>";
		// Edit button
		echo "&nbsp; &nbsp; &nbsp; <a class=\"edit\" href=\"paper_form.php?Edit=" . $row['Name'] . "\">EDIT</a>";
		echo "<br />" . $row['Authors'];
		echo "<br />" . $row['Publication'];
		if($row['Link']!=null){
			echo "<br /> <a href=\"" . $row['Link'] . "\" > Link </a>";
		}
		if($row['Video']!=null){
			echo " / <a href=\"" . $row['Video'] . "\" > Video </a>";
		}
		echo "</p>";
	}
}

function displayByDate($filteredTable){
	$year = "";
	$newYear = "";
	while($row = $filteredTable->fetch_array(MYSQLI_BOTH)){
		$newYear = substr( $row['Date'], 0 , 4);
		if($newYear!=$year){
			echo "<h2><b>" . $newYear . "</b></h2><br />";
			$year = $newYear;
		}
		echo "<i>" . $row['Name']."</i>";
		// Edit button
		echo "&nbsp; &nbsp; &nbsp; <a class=\"edit\" href=\"paper_form.php?Edit=" . $row['Name'] . "\">EDIT</a>";
		echo "<br />" . $row['Authors'];
		echo "<br />" . $row['Publication'];
		if($row['Link']!=null){
			echo "<br /> <a href=\"" . $row['Link'] . "\" > Link </a>";
		}
		if($row['Video']!=null){
			echo " / <a href=\"" . $row['Video'] . "\" > Video </a>";
		}
		echo "<br /><br />";
	}
}

//CLOSE CONNECTION AND FREE ARRAYS

$result->free();
$topics->free();
$kinds->free();

$mysqli->close();
exit();
?>
</div>
</div>
</body>
</html>