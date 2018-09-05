<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Confined Space Manipulator Research - Biorobotics</title>
	<meta name="Keywords" content="Confined Space Manipulator, Confined Space,
	manipulators, arm, Carnegie Mellon University, robotics">
	<meta name="description" content ="Confined Space Manipulator Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Confined Space Robotic Manipulator</h3> 
			<p>
				Developing a highly reliable and robust real-time control robotic system for confined space manufacturing application requires a cross-disciplinary knowledge of mechatronics, signal processing, control theory, communication and computer science area. The CMU team has decades of experience in designing and perfecting custom robotic arm, manipulator, sensor, and its control hardware/software for confined space applications. The CMU Biorobotics lab is one of the most active academic groups whose research and practice including hyper-redundant novel mechanism design, real-time embedded electronics, bio-inspired perception & control, path-planning, SLAM and other theoretical research in robotics. 

				<br>

				The CMU biorobotics lab specialized in design and develop the robotic system which combines real-time embedded system and hybrid real-time Linux with interfaces to traditional ROS or ROS-like software stack, that able to closed-loop control a custom designed redundant robotic arm. The ongoing project will keep improving the system performance which enables the non-real-time ROS system to effortlessly interface with high timing critical and low latency hardware.

				<br>

				Currently, we are working on a multi-modal approach of combining high-accuracy dense 3D sensor (Blaser), distributed sparse 1D rangefinder (miniature Time-of-Flight ICs), and joints load proprioception(Motor current and back-EMF feedback), to facilitate obstacle avoidance capability to our confined space robotic arm. Furthermore, obstacle and object information also will be tightly included as part of the SLAM and path planning frameworks, to improve dynamic replanning, and online map update.

				<br>
			</p>
		</div>
		<div  class="six columns">
			<img src="images/ConfinedSpaceManipulator/fig1.png" alt="ConfinedSpaceManipulatorF1" width="100%;" style="padding-left:2rem; padding-top:5rem;">
			<iframe width="605"height="300" src="https://drive.google.com/file/d/0B2LF_3WEQeImczJkTi1vV0VLMnM/preview" frameborder="0" style="padding-left: 2rem" ></iframe>
		</div>
	</div>


	
	
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>