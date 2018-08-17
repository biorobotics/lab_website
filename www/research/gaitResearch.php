<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Gait Research - Biorobotics</title>
	<meta name="Keywords" content="snake robot, robot gaits, snake gaits, sidewind, slither, crawl, cyclic gaits, sinusoidal gaits, snake robot gaits, snake locomotion, biological gaits">
	<meta name="description" content ="Gait Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
	<div class="row">
		<div class = "twelve columns">
			<h3><b>Gait</b> Research</h3>
			<img style="width:100%;" src= "images/gaitResearch/gait_montage.jpg" alt="Snake Estimation">
			<p>
			The snake robots' potential to locomote in a variety of terrains suggests a number
			of practical applications. In particular, we have been interested in applying snake
			robots to urban search and rescue, along with industrial inspection and other safety,
			security and response applications. The key to being able to locomote in all these environments
			is the robot's many internal degrees of freedom (DOF) of these mechanisms. These many DOF,
			however, pose deep fundamental research questions, including but not limited to mechanical 
			design, control, and motion planning. 
			</p>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<div  class="six columns u-pull-right">
				<img src= "images/gaitResearch/lat_joint_angs.jpg" alt="Snake Estimation"
				 style="width:100%;">
			</div>
			<p>
			In terms of mechanism design, we have already built a family of 16-DOF 
			<a href="http://www.modsnake.com">Snake Robots</a></li>
			Our design is modular; each module consists of a single rotational DOF performing low-level
			PID control to commanded angular positions. To produce motion in three dimensions, the axes
			of two adjacent modules are offset by 90 degrees. 
			</p>
			<p>
			Much of our lab's research is not in the robot itself, but rather its locomotion.  To simplify 
			control of the snake's many degrees of freedom, cyclic motions, known as gaits, have been developed
			that rely on pre-defined undulations that are passed through the length of the snake. In our case
			we use parameterized sine waves that are based on Hirose's serpenoid curve [Hirose: Biologically
			Inspired Robots], and its 3D extensions.  Since our snake robots consist of modules where the
			joints are alternately oriented in the lateral and dorsal planes of the snake, our framework
			for gaits consists of separate parameterized sine waves that propagate through the lateral
			(even-numbered) and dorsal (odd-numbered) joints. We refer to this framework as the compound 
			serpenoid curve.
			</p>
			<p>
			These gaits enable an intuitive mapping between changes in a handful of parameters and motion of
			the robot through the environment. Over the years, our lab has developed gaits that can traverse a
			variety	of terrains, including flat ground and pipes. Optimizing the parameters of this powerful 
			low-dimensional framework and extending it include a richer of variety of motions is an area of 
			ongoing research.
			</p>
			<h5>Papers</h5>
			<ul>
				<li><a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/ICRA2012_Gong_1.pdf">
					Conical Sidewinding (2012)</a></li>
				<li><a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/IROS2009_Hatton_Choset_Annealed.pdf">
					Generating Gaits for Snake Robots: Annealed Chain Fitting and Keyframe Wave Extraction
					(2010)</a></li>
				<li><a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/ICRA2010_Hatton_Choset_Sidewinding.pdf">
					Sidewinding on Slopes (2010)</a></li>
			</ul>
		</div>
	</div>
<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>