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

<style>
.categories li {
	background-color:#CCC;
	text-decoration:none;
	display:inline-block;
	padding-top:2rem;
	width:30%;
	text-align:center;
	margin:1%;
}

/* For Mobile */
@media screen and (max-width: 540px) {
    .categories li {
        width: 100%;
    }
}
</style>

<div class="row">	
	<ul class="categories">
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="MedicalRobotics") echo " class=\"active\""; ?>
            href="index.php?sort=MedicalRobotics"><h6>Medical Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="FullStackAutonomy") echo " class=\"active\""; ?>
            href="index.php?sort=FullStackAutonomy"><h6>Full Stack Autonomy</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="SpaceRobotics") echo " class=\"active\""; ?>
            href="index.php?sort=SpaceRobotics"><h6>Space Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="UnderwaterRobotics") echo " class=\"active\""; ?>
            href="index.php?sort=UnderwaterRobotics"><h6>Underwater Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="RecyclingRobotics") echo " class=\"active\""; ?>
            href="index.php?sort=RecyclingRobotics"><h6>Recycling Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ModularRobotics") echo " class=\"active\""; ?>
            href="index.php?sort=ModularRobotics"><h6>Modular Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="MultiAgentPlanning") echo " class=\"active\""; ?>
            href="index.php?sort=MultiAgentPlanning"><h6>Multi-Agent Planning</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="Manufacturing") echo " class=\"active\""; ?>
            href="index.php?sort=Manufacturing"><h6>Manufacturing</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="LocomotingSystems") echo " class=\"active\""; ?>
            href="index.php?sort=LocomotingSystems"><h6>Locomoting Systems</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ConfinedSpaceRobotics") echo " class=\"active\""; ?>
            href="index.php?sort=ConfinedSpaceRobotics"><h6>Confined Space Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="ExpeditionaryRobotics") echo " class=\"active\""; ?>
            href="index.php?sort=ExpeditionaryRobotics"><h6>Expeditionary Robotics</h6></li></a>
        <li><a <?php if (!empty($_GET) && $_GET["sort"]=="SkillLearning") echo " class=\"active\""; ?>
            href="index.php?sort=SkillLearning"><h6>Skill Learning</h6></li></a></ul>
	<style>
		.grid li:not(.<?php
			if (!empty($_GET)){
				echo htmlspecialchars($_GET["sort"]);
			}
		?>) {
			display:none;
		}
	</style>
</div>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>
