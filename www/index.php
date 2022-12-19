<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title> Biorobotics Lab </title>
	<meta name="Keywords" content="Snake Robot, snakerobot, snakebot,
	snake bot, robot, robotics, snake, hyper-redundant, hyperredundant,
	hyper redundant, snake robots, snake bots, medical robots, surgical robot, search 
	and rescue, inspection robot, military robot, climbing robot, biorobotics, biological robot, cmu, 
	carnegie mellon, pipe robot, flexible robot">
	<meta name="description" content ="Carnegie Mellon Biorobotics" />

<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
	<style>
		.card {
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		    transition: 0.3s;
		    width: 80%;
		    margin-left: 7rem;
		    margin-right: 10rem;
		    margin-bottom : 8rem;
		}

		.card:hover {
		    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.card a{
			text-align:left;
			color: #000;
			display: block;
			position: relative;
			box-shadow: 0px 3px 8px #ddd;
			overflow:hidden;
		}
		.card a:hover{
			text-decoration: none;
			text-align:left;
			display: block;
			position: relative;
			overflow: hidden;
		}

		.card a:after{
		  position: absolute;
		  content: '';
		  top: 0rem;
		  left: 0rem;
		  bottom: 4rem;
		  right: 0rem;
		  opacity:0;
		  border:.5rem solid #ff8080;
		  border-bottom:none;
		  z-index: 100;
		}

		.card a:hover:after{
			opacity:1;
			border:.5rem solid #ff8080;
			border-bottom:none;
		}

		.span a:hover span{
			background-color:#ff8080;
			color:white;
		}
		
</style>
	<div class="row">

	  <div class="five columns">
			<h3>Our Lab</h3>
			<p>	The Biorobotics Lab reduces complicated high-dimensional problems
			found in robotics to low-dimensional simpler ones for design, analysis,
			and planning.  Often, we look to biology for inspiration and sometimes,
			we return the favor by providing analysis that models biology.</p>
			<p><a href="mission.php">Mission Statement</a></p>
			<p><a href="prospective.php" target="_blank">Prospective
			Students &amp; Post-Docs</a></p>
			<div class="four columns">
				<div class="card">
					<a href="https://www.ri.cmu.edu/ri-faculty/matthew-j-travers/" target="_blank">
	  				<img src="images/MatthewTravers.jpg" alt="MatthewTravers" style="width:100%">
	  					<div class="container">
	    					<span><b>Matthew Travers</b><span>
	  					</div>
	  				</a>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<a href="https://www.ri.cmu.edu/ri-faculty/howie-choset/" target="_blank">
	  				<img src="images/HowieChoset.jpg" alt="HowieChoset" style="width:100%">
	  					<div class="container">
	    					<span><b>Howie Choset</b><span> 
	  					</div>
	  				</a>
				</div>
			</div>
		</div>
		<div class="seven columns">
			<ul style="list-style-type: none;">
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="MedicalRobotics") echo " class=\"active\""; ?>
					href="research/index.php?sort=MedicalRobotics"><h4>Medical Robotics</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="FullStack") echo " class=\"active\""; ?>
					href="research/index.php?sort=FullStack"><h4>Full Stack</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="SpaceRobotics") echo " class=\"active\""; ?>
					href="research/index.php?sort=SpaceRobotics"><h4>Space Robotics</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="UnderwaterRobotics") echo " class=\"active\""; ?>
					href="research/index.php?sort=UnderwaterRobotics"><h4>Underwater Robotics</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="RecyclingRobotics") echo " class=\"active\""; ?>
					href="research/index.php?sort=RecyclingRobotics"><h4>Recycling Robotics</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="ModularRobotics") echo " class=\"active\""; ?>
					href="research/index.php?sort=ModularRobotics"><h4>Modular Robotics</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="MultiAgentPlanning") echo " class=\"active\""; ?>
					href="research/index.php?sort=MultiAgentPlanning"><h4>Multi-Agent Planning</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="Manufacturing") echo " class=\"active\""; ?>
					href="research/index.php?sort=Manufacturing"><h4>Manufacturing</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="LocomotingSystems") echo " class=\"active\""; ?>
					href="research/index.php?sort=LocomotingSystems"><h4>Locomoting Systems</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="ConfinedSpaceRobotics") echo " class=\"active\""; ?>
					href="research/index.php?sort=ConfinedSpaceRobotics"><h4>Confined Space Robotics</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="ExpeditionaryRobotics") echo " class=\"active\""; ?>
					href="research/index.php?sort=ExpeditionaryRobotics"><h4>Expeditionary Robotics</h4></li></a>
				<li><a <?php if (!empty($_GET) && $_GET["sort"]=="SkillLearning") echo " class=\"active\""; ?>
					href="research/index.php?sort=SkillLearning"><h4>Skill Learning</h4></li></a>
			</ul>
		</div>
		
	</div>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>
