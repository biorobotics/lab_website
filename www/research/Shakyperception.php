<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Shaky perception Research- Biorobotics</title>
	<meta name="Keywords" content="Shaky perception, perception, CPG, hexapod, Carnegie Mellon University, Human Robot Collaboration, robotics">
	<meta name="description" content ="Shaky perception Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Task-space CPG for composed motions on a hexapod robot</b></h3>
			<p>
				In this project, we develop the locomotive capabilities needed to tackle various active perception problem. As a first example, consider a specific active perception problem, where a vision system is rigidly fixed onto the body of a legged mobile robot.During an autonomous deployment, the robot can use visual feedback to estimate its motion and complete its task, but needs to be able to control the gaze of the camera (e.g., to track features of interest in its surrounding). Without additional degrees-of-freedom to articulate the vision system, the problem becomes one of independently controlling the orientation of the robot’s body and its translation. To these ends, we present a new approach for generating omnidirectional motion using a workspace central pattern generator to develop open-loop end-effector trajectories. We then expand on this approach by coupling it with a posture control mechanism that allows us to direct the robot’s gaze independently from its locomotion. By doing so, we are able to concurrently control the translational and angular velocities of the robot, as well as the posture of its body, e.g., to ensure a feature of interest remains within the gaze of the vision system during locomotion. We validate our approach on a hexapod robot that locomotes relative to environmental landmarks – either by orbiting around them or moving linearly relative to them. Our experimental results demonstrate how our control approach can leverage the unused functionality of the locomotive degrees-of-freedom on an over-actuated robot to simultaneously obtain directed vision and precise locomotion.
			</p>
			<b>People:</b> <a href = "http://guillaume.sartoretti.science">Guillaume Sartoretti</a>, Samuel Shaw
		</div>
		<div class="six columns">
			<img src="images/Shakyperception/fig1.gif" alt="ShakyperceptionF1" width="110%;" style="padding-right:10rem; padding-top:16rem;">
		</div>
	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>