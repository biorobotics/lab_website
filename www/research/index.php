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
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="multi-agent") echo " class=\"active\""; ?> 
				href="?sort=multi-agent"><h4>Multi-agent</h4></li></a>
		<li><a <?php if (!empty($_GET) && $_GET["sort"]=="learning") echo " class=\"active\""; ?> 
				href="?sort=learning"><h4>Learning</h4></li></a>
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
			<li class = "manufacturing locomotion">
				<a href="Modularity.php">
					<img src="images/Modularity.png" alt="Modularity"/>
					<div><span>Modularity</span></div>
				</a>
			</li>
			<li class = "manufacturing">
				<a href="HumanRobotCollaboration.php">
					<img src="images/HumanRobotCollaboration.png" alt="HumanRobotCollaboration"/>
					<div><span>Human Robot Collaboration</span></div>
				</a>
			</li>
			<li class = "multi-agent">
				<a href="MRErgodicSearch.php">
					<img src="images/MRErgodicSearch.jpg" alt="MRErgodicSearch"/>
					<div><span>Multi-Robot Ergodic Search</span></div>
				</a>
			</li>
			<li class = "manufacturing multi-agent">
				<a href="MAPathFinding.php">
					<img src="images/MAPathFinding.jpg" alt="MAPathFinding"/>
					<div><span>Multi-Agent Path Finding</span></div>
				</a>
			</li>
			<li class = "manufacturing learning">
				<a href="MRConstruction.php">
					<img src="images/MRConstruction.gif" alt="MRConstruction"/>
					<div><span>Multi-Robot Construction</span></div>
				</a>
			</li>
			<li class = "locomotion learning">
				<a href="Graphicalmodels.php">
					<img src="images/Graphicalmodels.png" alt="Graphicalmodels"/>
					<div><span>Graphical models</span></div>
				</a>
			</li>
			<li class = "locomotion learning">
				<a href="Shakyperception.php">
					<img src="images/Shakyperception.gif" alt="Shakyperception"/>
					<div><span>Shaky perception</span></div>
				</a>
			</li>
			<li class = "locomotion">
				<a href="DRLfordecentralizedcontrol.php">
					<img src="images/DRLfordecentralizedcontrol.gif" alt="DRLfordecentralizedcontrol"/>
					<div><span>Distributed RL for decentralized control</span></div>
				</a>
			</li>
			<li class = "manufacturing">
				<a href="EmbeddedSystemandMechantronicsl.php">
					<img src="images/EmbeddedSystemandMechantronicsl.png" alt="EmbeddedSystemandMechantronicsl"/>
					<div><span>Embedded System and Mechantronics</span></div>
				</a>
			</li>
			<li class = "medical learning">
				<a href="UltrasoundGeneralization.php">
					<img src="images/UltrasoundGeneralization.png" alt="Ultrasound"/>
					<div><span>Ultrasound segmentation</span></div>
				</a>
			</li>
			<li class = "medical manufacturing">
				<a href="Forcesensors.php">
					<img src="images/Forcesensors.png" alt="Forcesensors"/>
					<div><span>Force sensors</span></div>
				</a>
			</li>
			<li class="manufacturing">
				<a href="ConfinedSpaceManipulator.php">
					<img src="images/ConfinedSpaceManipulator.png" alt="ConfinedSpaceManipulator.png" width="100%;">
					<div><span>Confined Space Manipulator</span></div>
				</a>
			</li>
			<li class="medical manufacturing">
				<a href="ConfinedSpacePerception.php">
					<img src="images/ConfinedSpacePerception.png" alt="ConfinedSpacePerception.png" width="100%;">
					<div><span>Confined Space Perception</span></div>
				</a>
			</li>
			<li class="locomotion learning">
				<a href="AGVSLAM.php">
					<img src="images/AGVSLAM.gif" alt="AGVSLAM.png" width="100%;">
					<div><span>AGV SLAM</span></div>
				</a>
			</li>
			<li>
				<a href="NovelMechanismDesign.php">
					<img src="images/NovelMechanismDesign.png" alt="NovelMechanismDesign.png" width="100%;">
					<div><span>Novel Mechanism Design</span></div>
				</a>
			</li>
			<li class = "manufacturing">
				<a href="RIOT.php">
					<img src="images/RIOT.png" alt="RIOT"/>
					<div><span>Robotic Internect of Things</span></div>
				</a>
			</li>
			<li class = "locomotion learning">
				<a href="ISCPG.php">
					<img src="images/ISCPG.jpg" alt="ISCPG"/>
					<div><span>Inertial-stabilized CPG</span></div>
				</a>
			</li>
			<li class = "medical">
				<a href="ARforMedicalSystem.php">
					<img src="images/ARforMedicalSystem.png" alt="ARforMedicalSystem"/>
					<div><span>Augmented reality for medical system</span></div>
				</a>
			</li>
			<li class = "locomotion">
				<a href="MicroScaleLocomotion.php">
					<img src="images/MicroScaleLocomotion.png" alt="MicroScaleLocomotion"/>
					<div><span>Micro Scale Locomotion</span></div>
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
			<li class = "medical">
				<a href="BodySLAM.php">
					<img src="images/BodySLAM.png"alt="Body SLAM"/>
					<div><span>Body SLAM</span></div>
				</a>
			</li>
			<li class = "multi-agent">
				<a href="multi-robot.php">
					<img src="images/multiRobot.png" alt="multi-Agent"/>
					<div><span>Multi-Robot Planning</span></div>
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