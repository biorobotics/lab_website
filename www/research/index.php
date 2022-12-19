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
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="MedicalRobotics") echo " class=\"active\""; ?>
            href="?sort=MedicalRobotics"><h4>Medical Robotics</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="FullStack") echo " class=\"active\""; ?>
            href="?sort=FullStack"><h4>Full Stack</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="SpaceRobotics") echo " class=\"active\""; ?>
            href="?sort=SpaceRobotics"><h4>Space Robotics</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="UnderwaterRobotics") echo " class=\"active\""; ?>
            href="?sort=UnderwaterRobotics"><h4>Underwater Robotics</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="RecyclingRobotics") echo " class=\"active\""; ?>
            href="?sort=RecyclingRobotics"><h4>Recycling Robotics</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ModularRobotics") echo " class=\"active\""; ?>
            href="?sort=ModularRobotics"><h4>Modular Robotics</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="MultiAgentPlanning") echo " class=\"active\""; ?>
            href="?sort=MultiAgentPlanning"><h4>Multi-Agent Planning</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="Manufacturing") echo " class=\"active\""; ?>
            href="?sort=Manufacturing"><h4>Manufacturing</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="LocomotingSystems") echo " class=\"active\""; ?>
            href="?sort=LocomotingSystems"><h4>Locomoting Systems</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ConfinedSpaceRobotics") echo " class=\"active\""; ?>
            href="?sort=ConfinedSpaceRobotics"><h4>Confined Space Robotics</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ExpeditionaryRobotics") echo " class=\"active\""; ?>
            href="?sort=ExpeditionaryRobotics"><h4>Expeditionary Robotics</h4></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="SkillLearning") echo " class=\"active\""; ?>
            href="?sort=SkillLearning"><h4>Skill Learning</h4></li></a></ul>
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
            <li class = "MedicalRobotics">
				<a href="AutoNeedleInsertionforVesselAccess.php">
					<img src="images/AutoNeedleInsertionforVesselAccess.png" alt="Auto. Needle Insertion for Vessel Access"/>
					<div><span>Auto. Needle Insertion for Vessel Access</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="TowardPracticalUltrasoundAIAcrossRealWorldPatientDiversity.php">
					<img src="images/TowardPracticalUltrasoundAIAcrossRealWorldPatientDiversity.png" alt="Toward Practical Ultrasound AI Across Real-World Patient Diversity"/>
					<div><span>Toward Practical Ultrasound AI Across Real-World Patient Diversity</span></div>
				</a>
			</li>
            <li class = "MedicalRobotics">
				<a href="AutonomousForcecontrolledUltrasoundScanning.php">
					<img src="images/AutonomousForcecontrolledUltrasoundScanning.png" alt="Autonomous Force-controlled Ultrasound Scanning"/>
					<div><span>Autonomous Force-controlled Ultrasound Scanning</span></div>
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
					<img src="images/SurgicalSnakeRobot.jpg" alt="Surgical Snake Robot"/>
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
            <li class = "FullStack">
				<a href="HybridRobotExploration.php">
					<img src="images/HybridRobotExploration.jpg" alt="Hybrid Robot Exploration"/>
					<div><span>Hybrid Robot Exploration</span></div>
				</a>
			</li>
            <li class = "FullStack">
				<a href="DARPARACERCHALLENGE.php">
					<img src="images/DARPARACERCHALLENGE.png" alt="DARPA RACER CHALLENGE"/>
					<div><span>DARPA RACER CHALLENGE</span></div>
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
					<img src="images/MechanicalandReflexiveIntelligencefortheExobiologyExtantLifeSurveyorEELS.png" alt="Mechanical and Reflexive Intelligence for the Exobiology Extant Life Surveyor (EELS)"/>
					<div><span>Mechanical and Reflexive Intelligence for the Exobiology Extant Life Surveyor (EELS)</span></div>
				</a>
			</li>
            <li class = "UnderwaterRobotics">
				<a href="UnderwaterConfinedSpaceNavigationandInspectionHUMRS.php">
					<img src="images/UnderwaterConfinedSpaceNavigationandInspectionHUMRS.jpg" alt="Underwater Confined Space Navigation and Inspection (HUMRS)"/>
					<div><span>Underwater Confined Space Navigation and Inspection (HUMRS)</span></div>
				</a>
			</li>
            <li class = "RecyclingRobotics">
				<a href="MaterialTrackingonmovingConveyorbelts.php">
					<img src="images/MaterialTrackingonmovingConveyorbelts.png" alt="Material Tracking on moving Conveyor belts"/>
					<div><span>Material Tracking on moving Conveyor belts</span></div>
				</a>
			</li>
            <li class = "RecyclingRobotics">
				<a href="Electronicswasterecycling.php">
					<img src="images/Electronicswasterecycling.png" alt="Electronics waste recycling"/>
					<div><span>Electronics waste recycling</span></div>
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
					<img src="images/HeteroAgentMultiObjectiveTravelingSalesmanProblems.png" alt="Hetero-Agent, Multi-Objective, Traveling Salesman Problems"/>
					<div><span>Hetero-Agent, Multi-Objective, Traveling Salesman Problems</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="MultiAgentHeterogenousErgodicSearch.php">
					<img src="images/MultiAgentHeterogenousErgodicSearch.png" alt="Multi-Agent Heterogenous Ergodic Search"/>
					<div><span>Multi-Agent Heterogenous Ergodic Search</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="DistributedLearningforCollaborativePolicies.php">
					<img src="images/DistributedLearningforCollaborativePolicies.png" alt="Distributed Learning for Collaborative Policies"/>
					<div><span>Distributed Learning for Collaborative Policies</span></div>
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
					<img src="images/CommunicationLearningonDiscreteBandwidthConstrainedNetworks.png" alt="Communication Learning on Discrete Bandwidth-Constrained Networks"/>
					<div><span>Communication Learning on Discrete Bandwidth-Constrained Networks</span></div>
				</a>
			</li>
            <li class = "MultiAgentPlanning">
				<a href="AssigningCreditwithPartialRewardDecouplingforEfficientLargeScaleMultiAgentLearning.php">
					<img src="images/AssigningCreditwithPartialRewardDecouplingforEfficientLargeScaleMultiAgentLearning.png" alt="Assigning Credit with Partial Reward Decoupling for Efficient Large-Scale Multi-Agent Learning"/>
					<div><span>Assigning Credit with Partial Reward Decoupling for Efficient Large-Scale Multi-Agent Learning</span></div>
				</a>
			</li>
            <li class = "Manufacturing">
				<a href="SemiSupervisedLearningforDefectDetectioninAdditiveManufacturing.php">
					<img src="images/SemiSupervisedLearningforDefectDetectioninAdditiveManufacturing.png" alt="Semi-Supervised Learning for Defect Detection in Additive Manufacturing"/>
					<div><span>Semi-Supervised Learning for Defect Detection in Additive Manufacturing</span></div>
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
					<img src="images/MagneticallyControlledMicroLocomotion.png" alt="Magnetically Controlled Micro Locomotion"/>
					<div><span>Magnetically Controlled Micro Locomotion</span></div>
				</a>
			</li>
            <li class = "LocomotingSystems">
				<a href="TitanLargeSizeSixLeggedRobot.php">
					<img src="images/TitanLargeSizeSixLeggedRobot.png" alt="Titan 6 - Large Size Six-Legged Robot"/>
					<div><span>Titan 6 - Large Size Six-Legged Robot</span></div>
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
					<div><span>Edge Sensing and Embedded Sensors</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="PipelineSLAMRobustmappinginconfinedspaces.php">
					<img src="images/PipelineSLAMRobustmappinginconfinedspaces.png" alt="Pipeline SLAM - Robust mapping in confined spaces"/>
					<div><span>Pipeline SLAM - Robust mapping in confined spaces</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="InsituPipeRepair.php">
					<img src="images/InsituPipeRepair.gif" alt="In-situ Pipe Repair"/>
					<div><span>In-situ Pipe Repair</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="ForcePerceptionLuLi.php">
					<img src="images/ForcePerceptionLuLi.png" alt="Force Perception (Lu Li)"/>
					<div><span>Force Perception (Lu Li)</span></div>
				</a>
			</li>
            <li class = "ConfinedSpaceRobotics">
				<a href="MobileManipulatorforConfinedSpaces.php">
					<img src="images/MobileManipulatorforConfinedSpaces.png" alt="Mobile Manipulator for Confined Spaces"/>
					<div><span>Mobile Manipulator for Confined Spaces</span></div>
				</a>
			</li>
            <li class = "ExpeditionaryRobotics">
				<a href="DeployStructuresAnywhereAnytime.php">
					<img src="images/DeployStructuresAnywhereAnytime.png" alt="Deploy Structures Anywhere Anytime"/>
					<div><span>Deploy Structures Anywhere Anytime</span></div>
				</a>
			</li>
            <li class = "ExpeditionaryRobotics">
				<a href="ModularMobileRobotsforManufacturing.php">
					<img src="images/ModularMobileRobotsforManufacturing.png" alt="Modular Mobile Robots for Manufacturing"/>
					<div><span>Modular Mobile Robots for Manufacturing</span></div>
				</a>
			</li>
            <li class = "SkillLearning">
				<a href="LearningSkillsandTemporallyAbstractWorldModelsfromOfflineDemonstrationData.php">
					<img src="images/LearningSkillsandTemporallyAbstractWorldModelsfromOfflineDemonstrationData.png" alt="Learning Skills and Temporally Abstract World Models from Offline Demonstration Data"/>
					<div><span>Learning Skills and Temporally Abstract World Models from Offline Demonstration Data</span></div>
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