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
		<li><a <?php if (empty($_GET)) echo " class=\"active\""; ?> 
                href="?"><h6>All</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="MedicalRobotics") echo " class=\"active\""; ?>
            href="?sort=MedicalRobotics"><h6>Medical Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="FullStackAutonomy") echo " class=\"active\""; ?>
            href="?sort=FullStackAutonomy"><h6>Full Stack Autonomy</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="SpaceRobotics") echo " class=\"active\""; ?>
            href="?sort=SpaceRobotics"><h6>Space Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="UnderwaterRobotics") echo " class=\"active\""; ?>
            href="?sort=UnderwaterRobotics"><h6>Underwater Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="RecyclingRobotics") echo " class=\"active\""; ?>
            href="?sort=RecyclingRobotics"><h6>Recycling Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ModularRobotics") echo " class=\"active\""; ?>
            href="?sort=ModularRobotics"><h6>Modular Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="MultiAgentPlanning") echo " class=\"active\""; ?>
            href="?sort=MultiAgentPlanning"><h6>Multi-Agent Planning</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="Manufacturing") echo " class=\"active\""; ?>
            href="?sort=Manufacturing"><h6>Manufacturing</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="LocomotingSystems") echo " class=\"active\""; ?>
            href="?sort=LocomotingSystems"><h6>Locomoting Systems</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ConfinedSpaceRobotics") echo " class=\"active\""; ?>
            href="?sort=ConfinedSpaceRobotics"><h6>Confined Space Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ExpeditionaryRobotics") echo " class=\"active\""; ?>
            href="?sort=ExpeditionaryRobotics"><h6>Expeditionary Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="SkillLearning") echo " class=\"active\""; ?>
            href="?sort=SkillLearning"><h6>Skill Learning</h6></li></a></ul>
	<style>
		.grid li:not(.placeholder, .<?php
			if (!empty($_GET)){
				echo htmlspecialchars($_GET["sort"]);
			}
		?>) {
			display:none;
		}
	</style>
	<div class="grid">
		<ul>
            <li class = "MedicalRobotics">
				<a href="AutoNeedleInsertionforVesselAccess.php">
					<img src="images/AutoNeedleInsertionforVesselAccess.png" alt="Needle Insertion for Vascular Access"/>
					<div><span>Needle Insertion</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="TowardPracticalUltrasoundAIAcrossRealWorldPatientDiversity.php">
					<img src="images/TowardPracticalUltrasoundAIAcrossRealWorldPatientDiversity.png" alt="Ultrasound AI"/>
					<div><span>Ultrasound AI</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="AutonomousForceControlledUltrasoundScanning.php">
					<img src="images/AutonomousForceControlledUltrasoundScanning.png" alt="Force-Controlled Ultrasound Scanning"/>
					<div><span>Ultrasound Scanning</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="DeformationModeling.php">
					<img src="images/DeformationModeling.png" alt="Deformation Modeling"/>
					<div><span>Deformation Modeling</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="Robovent.php">
					<img src="images/Robovent.png" alt="Robovent"/>
					<div><span>Robovent</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="SurgicalSnakeRobot.php">
					<img src="images/SurgicalSnakeRobot.png" alt="Surgical Snake Robot"/>
					<div><span>Surgical Snake Robot</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="BodySLAM.php">
					<img src="images/BodySLAM.png" alt="Body SLAM"/>
					<div><span>Body SLAM</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="PunctatePressure.php">
					<img src="images/PunctatePressure.png" alt="Punctate Pressure"/>
					<div><span>Punctate Pressure</span></div>
				</a>
			</li>
            <li class = "FullStackAutonomy">
				<a href="HybridRobotExploration.php">
					<img src="images/HybridRobotExploration.jpg" alt="Hybrid Robot Exploration"/>
					<div><span>Hybrid Robot Exploration</span></div>
				</a>
			</li>
            <li class = "FullStackAutonomy">
				<a href="DARPARACERChallenge.php">
					<img src="images/DARPARACERChallenge.png" alt="DARPA RACER Challenge"/>
					<div><span>DARPA RACER Challenge</span></div>
				</a>
			</li>
            <li class = "SpaceRobotics">
				<a href="SatelliteInspectionandServicing.php">
					<img src="images/SatelliteInspectionandServicing.png" alt="Satellite Inspection and Servicing"/>
					<div><span>Satellite Inspection and Servicing</span></div>
				</a>
			</li>
            <li class = "SpaceRobotics">
				<a href="MechanicalandReflexiveIntelligencefortheExobiologyExtantLifeSurveyorEELS.php">
					<img src="images/MechanicalandReflexiveIntelligencefortheExobiologyExtantLifeSurveyorEELS.png" alt="EELS"/>
					<div><span>EELS</span></div>
				</a>
			</li>
            <li class = "UnderwaterRobotics">
				<a href="UnderwaterConfinedSpaceNavigationandInspectionHUMRS.php">
					<img src="images/UnderwaterConfinedSpaceNavigationandInspectionHUMRS.png" alt="Underwater Inspection (HUMRS)"/>
					<div><span>Underwater Inspection (HUMRS)</span></div>
				</a>
			</li>
            <li class = "RecyclingRobotics">
				<a href="MaterialTrackingonMovingConveyorBelts.php">
					<img src="images/MaterialTrackingonMovingConveyorBelts.png" alt="Material Tracking"/>
					<div><span>Material Tracking</span></div>
				</a>
			</li>
            <li class = "RecyclingRobotics">
				<a href="ElectronicWasteRecycling.php">
					<img src="images/ElectronicWasteRecycling.png" alt="Electronic Waste Recycling"/>
					<div><span>Electronic Waste Recycling</span></div>
				</a>
			</li>
            <li class = "ModularRobotics">
				<a href="MechanismandControlDesign.php">
					<img src="images/MechanismandControlDesign.png" alt="Mechanism and Control Design"/>
					<div><span>Mechanism and Control Design</span></div>
				</a>
			</li>
            <li class = "ModularRobotics">
				<a href="EigenBotsSystemDesign.php">
					<img src="images/EigenBotsSystemDesign.png" alt="EigenBots System Design"/>
					<div><span>EigenBots System Design</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="HeteroAgentMultiObjectiveTravelingSalesmanProblems.php">
					<img src="images/HeteroAgentMultiObjectiveTravelingSalesmanProblems.png" alt="Traveling Salesman Problems"/>
					<div><span>Traveling Salesman Problems</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="MultiAgentHeterogenousErgodicSearch.php">
					<img src="images/MultiAgentHeterogenousErgodicSearch.png" alt="Multi-Agent Ergodic Search"/>
					<div><span>Multi-Agent Ergodic Search</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="DistributedLearningforCollaborativePolicies.php">
					<img src="images/DistributedLearningforCollaborativePolicies.png" alt="Distributed Learning"/>
					<div><span>Distributed Learning</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="MultiAgentDDExploration.php">
					<img src="images/MultiAgentDDExploration.png" alt="Multi-Agent 2D/3D Exploration"/>
					<div><span>Multi-Agent 2D/3D Exploration</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="CommunicationLearningonDiscreteBandwidthConstrainedNetworks.php">
					<img src="images/CommunicationLearningonDiscreteBandwidthConstrainedNetworks.png" alt="Communication Learning"/>
					<div><span>Communication Learning</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="PartialRewardDecouplingforEfficientLargeScaleMultiAgentLearning.php">
					<img src="images/PartialRewardDecouplingforEfficientLargeScaleMultiAgentLearning.png" alt="Partial Reward Decoupling"/>
					<div><span>Partial Reward Decoupling</span></div>
				</a>
			</li>
            <li class = "Manufacturing">
				<a href="SemiSupervisedLearningforDefectDetectioninAdditiveManufacturing.php">
					<img src="images/SemiSupervisedLearningforDefectDetectioninAdditiveManufacturing.png" alt="Defect Detection"/>
					<div><span>Defect Detection</span></div>
				</a>
			</li>
            <li class = "Manufacturing">
				<a href="AirplaneI.php">
					<img src="images/AirplaneI.png" alt="Airplane I"/>
					<div><span>Airplane I</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="GeometricMechanics.php">
					<img src="images/GeometricMechanics.png" alt="Geometric Mechanics"/>
					<div><span>Geometric Mechanics</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="BiologicallyInspiredRobots.php">
					<img src="images/BiologicallyInspiredRobots.png" alt="Biologically Inspired Robots"/>
					<div><span>Biologically Inspired Robots</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="SnakeRobotSystems.php">
					<img src="images/SnakeRobotSystems.png" alt="Snake Robot Systems"/>
					<div><span>Snake Robot Systems</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="VerticalRobotTransportVeRT.php">
					<img src="images/VerticalRobotTransportVeRT.png" alt="Vertical Robot Transport (VeRT)"/>
					<div><span>Vertical Robot Transport (VeRT)</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="ShakeyPerception.php">
					<img src="images/ShakeyPerception.png" alt="Shakey Perception"/>
					<div><span>Shakey Perception</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="MagneticallyControlledMicroLocomotion.php">
					<img src="images/MagneticallyControlledMicroLocomotion.png" alt="Magnetic Locomotion"/>
					<div><span>Magnetic Locomotion</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="TitanLargeSizeSixLeggedRobot.php">
					<img src="images/TitanLargeSizeSixLeggedRobot.png" alt="Titan 6"/>
					<div><span>Titan 6</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="SeriesElasticActuation.php">
					<img src="images/SeriesElasticActuation.png" alt="Series Elastic Actuation"/>
					<div><span>Series Elastic Actuation</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="EdgeSensingandEmbeddedSensors.php">
					<img src="images/EdgeSensingandEmbeddedSensors.png" alt="Edge Sensing and Embedded Sensors"/>
					<div><span>Embedded Sensors</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="PipelineSLAMRobust.php">
					<img src="images/PipelineSLAMRobust.png" alt="Pipeline SLAM - Robust"/>
					<div><span>Pipeline SLAM - Robust</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="InsituPipeRepair.php">
					<img src="images/InsituPipeRepair.png" alt="In-situ Pipe Repair"/>
					<div><span>In-situ Pipe Repair</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="ForcePerception.php">
					<img src="images/ForcePerception.png" alt="Force Perception"/>
					<div><span>Force Perception</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="MobileManipulatorforConfinedSpaces.php">
					<img src="images/MobileManipulatorforConfinedSpaces.png" alt="Confined Space Manipulator"/>
					<div><span>Confined Space Manipulator</span></div>
				</a>
			</li>
            <li class = "ExpeditionaryRobotics">
				<a href="DeployStructuresAnywhereAnytime.php">
					<img src="images/DeployStructuresAnywhereAnytime.png" alt="Deploy Structures Anywhere Anytime"/>
					<div><span>Modular Structures</span></div>
				</a>
			</li>
            <li class = "ExpeditionaryRobotics">
				<a href="ModularMobileRobotsforManufacturing.php">
					<img src="images/ModularMobileRobotsforManufacturing.png" alt="Modular Manufacturing"/>
					<div><span>Modular Manufacturing</span></div>
				</a>
			</li>
            <li class = "SkillLearning">
				<a href="LearningSkillsandTemporallyAbstractWorldModelsfromOfflineDemonstration.php">
					<img src="images/LearningSkillsandTemporallyAbstractWorldModelsfromOfflineDemonstration.png" alt="Learning from Offline Demonstration"/>
					<div><span>Learning from Demonstration</span></div>
				</a>
			</li><!-- <li class = "locomotion">
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
