<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
<title> Biorobotics Research </title>
<meta name="Keywords" content="Biorobotics, Research, research topics, gaits, snake robot, control, coverages, mechanics, machine learning, biologically inspired">
<meta name="description" content ="Biorobotics Research - Carnegie Mellon Biorobotics" />

<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php"; ?>


<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!-- Content - Gallery of the lab's research
============================= -->
<div class="row">	
	<ul class="sub-categories">
		<li><h2>Our Research</h2></li>
		<li><a <?php if (empty($_GET)) echo " class=\"active\""; ?> 
                href="?"><h4>All</h4></li></a>
        [TEMPLATE_CATEGORIES]
	</ul>
	<style>
		.grid li:not(.<?php
			if (!empty($_GET)){
				echo htmlspecialchars($_GET["sort"]);
			}
		?>) {
			display:none;
		}
	</style>
	<div class="grid">
		<ul>
            [TEMPLATE_GRID]
			<!-- <li class = "locomotion">
				<a href="seriesElastic.php">
					<img src="images/seriesElastic.png" alt="Series Elasticity"/>
					<div><span>Series Elasticity</span></div>
				</a>
			</li> -->
			<li class="placeholder"></li>
			<li class="placeholder"></li>
			<li class="placeholder"></li>
			<li class="placeholder"></li>
		</ul>
	</div>
</div>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>