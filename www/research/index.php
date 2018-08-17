<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
<title> Biorobotics Research </title>
<meta name="Keywords" content="Biorobotics, Research, research topics, gaits, snake robot, control, coverages, mechanics, machine learning, biologically inspired">
<meta name="description" content ="Biorobotics Research - Carnegie Mellon Biorobotics" />

<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php"; ?>

<!-- Content - Gallery of the lab's research
============================= -->
<div class="row">
	
	<ul class="sub-categories">
		<li><h3>Our Research</h3></li>
		<li><a <?php if (empty($_GET)) echo " class=\"active\""; ?> 
				href="?">All</li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="locomotion") echo " class=\"active\""; ?> 
				href="?sort=locomotion">Locomotion</li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="pathplanning") echo " class=\"active\""; ?> 
				href="?sort=pathplanning">Path Planning</li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="medical") echo " class=\"active\""; ?> 
				href="?sort=medical">Medical</li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="manufacturing") echo " class=\"active\""; ?> 
				href="?sort=manufacturing">Manufacturing</li></a>
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
			<li class = "locomotion">
				<a href="seriesElastic.php">
					<img src="images/seriesElastic.png" alt="Series Elasticity"/>
					<div><span>Series Elasticity</span></div>
				</a>
			</li>
			<li class = "locomotion">
				<a href="snakeRobotControl.php">
					<img src="images/VirtualChasis.png"alt="SnakeRobotControl"/>
					<div><span> Snake Robot Control</span></div>
				</a>
			</li>
			<li class = "locomotion">
				<a href="gaitResearch.php">
					<img src="images/gait.png"alt="Gait research"/>
					<div><span> Gait Research</span></div>
				</a>
			</li>
			<li class = "locomotion">
				<a href="machineLearning.php">
					<img src="images/machineLearning.png" alt="Machine Learning"/>
					<div><span>Machine Learning</span></div>
					
				</a>
			</li>
			
			
			<li class = "locomotion">
				<a href="geometricMechanics.php">
					<img src="images/geometric.png" alt="Gaits"/>
					<div><span>Geometric Mechanics</font></span></div>
				</a>
			</li>
			<li class = "medical pathplanning">
				<a href="medicalSLAM.php">
					<img src="images/medical.png"alt="Medical SLAM"/>
					<div><span>Medical SLAM</span></div>
				</a>
			</li>
			<li class = "pathplanning">
				<a href="multi-robot.php">
					<img src="images/multiRobot.png" alt="Series Elasticity"/>
					<div><span>Multi-Robot Planning</span></div>
					
				</a>
			</li>
			<li class = "pathplanning manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Coverage</span></div>
					
				</a>
			</li>
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