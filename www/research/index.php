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
		<li><h2>Our Research</h2></li>
		<li><a <?php if (empty($_GET)) echo " class=\"active\""; ?> 
				href="?"><h4>All</h4></li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="locomotion") echo " class=\"active\""; ?> 
				href="?sort=locomotion"><h4>Locomotion</h4></li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="Multi-agent") echo " class=\"active\""; ?> 
				href="?sort=Multi-agent"><h4>Multi-agent</h4></li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="Learning") echo " class=\"active\""; ?> 
				href="?sort=Learning"><h4>Learning</h4></li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="medical") echo " class=\"active\""; ?> 
				href="?sort=medical"><h4>Medical</h4></li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="manufacturing") echo " class=\"active\""; ?> 
				href="?sort=manufacturing"><h4>Manufacturing</h4></li></a>
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
				<a href="VirtualChasis.php">
					<img src="images/VirtualChasis.png"alt="VirtualChasis"/>
					<div><span>Virtual Chassis</span></div>
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
					<img src="images/machineLearning.png" alt="Machine Learning for gait discovery"/>
					<div><span> Machine Learning for gait discovery</span></div>
					
				</a>
			</li>
			<li class = "locomotion">
				<a href="geometricMechanics.php">
					<img src="images/geometric.png" alt="Gaits"/>
					<div><span>Geometric Mechanics</font></span></div>
				</a>
			</li>
			<li class = "medical Multi-agent">
				<a href="BodySLAM.php">
					<img src="images/BodySLAM.png"alt="Body SLAM"/>
					<div><span>Body SLAM</span></div>
				</a>
			</li>
			<li class = "Multi-agent">
				<a href="multi-robot.php">
					<img src="images/multiRobot.png" alt="Series Elasticity"/>
					<div><span>Multi-Robot Planning</span></div>
				</a>
			</li>
			<li class = "Multi-agent manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Multi robot search</span></div>					
				</a>
			</li>
			<li class = "Multi-agent manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Shaky perception</span></div>			
				</a>
			</li>
			<li class = "Multi-agent manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Augmented reality for medical system</span></div>
				</a>
			</li>
			<li class = "Multi-agent manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Novel legged locomotion</span></div>	
				</a>
			</li>
			<li class = "Multi-agent manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Graphical models</span></div>	
				</a>
			</li>
			<li class = "Multi-agent manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Force sensors</span></div>
				</a>
			</li>
			<li class = "manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Micro Scale Locomotion</span></div>
				</a>
			</li>
			<li class = "manufacturing">
				<a href="Modularity.php">
					<img src="images/Modularity.png" alt="Modularity"/>
					<div><span>Modularity</span></div>
				</a>
			</li>
			<li class = "manufacturing">
				<a href="coverage.php">
					<img src="images/coverage.png" alt="Coverage"/>
					<div><span>Learning Science</span></div>
				</a>
			</li>
			<li class = "manufacturing">
				<a href="HumanRobotCollaboration.php">
					<img src="images/HumanRobotCollaboration.png" alt="HumanRobotCollaboration"/>
					<div><span>Human Robot Collaboration</span></div>
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