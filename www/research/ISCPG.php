<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Inertial-stabilized CPG Research- Biorobotics</title>
	<meta name="Keywords" content="Inertial-stabilized CPG,CPG, control, Carnegie Mellon University, Human Robot Collaboration, robotics">
	<meta name="description" content ="Inertial-stabilized CPG Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Inertial-stabilized CPG</b> for climbing in rough terrain</h3>
			<p>
				Inspired by the locomotor nervous system of vertebrates, central pattern generator (CPG) models can be used to design gaits for articulated robots, such as crawling, swimming or legged robots.Incorporating sensory feedback for gait adaptation in these models can improve the locomotive performance of such robots in challenging terrain.However, many CPG models to date have been developed exclusively for open-loop gait generation for traversing level terrain.In this paper, we present a novel approach for incorporating inertial feedback into the CPG framework for the control of body posture during legged locomotion on steep, unstructured terrain.That is, we adapt the limit cycle of each leg of the robot with time to simultaneously produce locomotion and body posture control.We experimentally validate our approach on a hexapod robot, locomoting in a variety of steep, challenging terrains (grass, rocky slide, stairs).We show how our approach can be used to level the robot’s body, allowing it to locomote at a relatively constant speed, even as terrain steepness and complexity prevents the use of an open-loop control strategy. Incorporating sensory feedback for gait adaptation in these models can improve the locomotive performance of such robots in challenging terrain. However, many CPG models to date have been developed exclusively for open-loop gait generation for traversing level terrain. In this paper, we present a novel approach for incorporating inertial feedback into the CPG framework for the control of body posture during legged locomotion on steep, unstructured terrain. That is, we adapt the limit cycle of each leg of the robot with time to simultaneously produce locomotion and body posture control. We experimentally validated our approach on a hexapod robot, locomoting in a variety of steep, challenging terrains (grass, rocky slide, stairs). We showed how our approach can be used to level the robot’s body, allowing it to locomote at a relatively constant speed, even as terrain steepness and complexity prevents the use of an open-loop control strategy.
			</p>
			<a href="/publications/17-ICRA2018_InertialCPG.pdf">Central Pattern Generator with Inertial Feedback for Stable Locomotion and Climbing in Unstructured Terrain</a>
		</div>
		<div class="six columns">
			<img src="images/ISCPG/fig1.jpg" alt="ISCPGF1" width="100%;" style="padding-right:10rem; padding-top:16rem;">
			<b>People:</b> <a href = "http://guillaume.sartoretti.science">Guillaume Sartoretti</a>, Katie Lam, Samuel Shaw, Natalie Fang
		</div>
	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>