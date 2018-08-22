<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Magnetic Swimmer - Biorobotics</title>
	<meta name="Keywords" content="Magnetic Swimmer, Microrobots, Carnegie Mellon University, robotics">
	<meta name="description" content ="Magnetic Swimmer- Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Magnetic Swimmer</b> and 3D Swimmer</h3> 
			<p>
				Microrobots have the potential to impact many areas of medicine such as microsurgery, targeted drug delivery and minimally invasive sensing. Just like microorganisms themselves, microrobots developed for these applications need to swim in a low-Reynolds number regime which warrants locomotive strategies that differ from their macroscopic counterparts. To this end, Purcell’s three-link planar swimmer has served as an iconic model of a simple mechanism that can navigate this regime by leveraging internal actuation using analytically computed strokes. We consider two different versions of this swimmer in this project. In the first class, we develop a novel three-dimensional counterpart to this swimmer and describe how enabling yaw-pitch movements at the two actuated joints as opposed to the conventional yaw-yaw movements allow it to navigate a three-dimensional environment. Using analytical tools from geometric mechanics, we design gaits that enable this swimmer to reorient itself and swim along canonical directions in the inertial frame. We validate these results on a hardware prototype and reproduce the simulated trajectories on the robot executing these gaits. <br>

				While the 3D swimmer is actuated internally, we next consider a second class of swimmers that are fabricated with elastomagnetic filaments and locomote in response to external magnetic fields. We demonstrate how the special case of a two link elastomagnetic swimmer is amenable for control synthesis using similar geometric arguments that apply to internally actuated swimmers. Additionally, we compute optimum internal magnetization distributions for a three-link swimmer that maximize its displacement per cycle and develop a principled approach to encode these distributions in millimeter-scale elastomagnetic filaments. We verify this procedure experimentally and finally demonstrate translation and turn-in-place locomotion in these swimmers.
			</p>
		</div>
		<div  class="six columns">
			<img src="images/MagneticSwimmer/fig1.png" alt="MagneticSwimmerF1" width="100%;" style="padding-left:1rem; padding-top:10rem;">
			<img src="images/MagneticSwimmer/fig4.png" alt="MagneticSwimmerF1" width="40%;" style="padding-left:1rem; padding-top:3rem;">
			<img src="images/MagneticSwimmer/fig5.png" alt="MagneticSwimmerF1" width="40%;" style="padding-left:50px; padding-top:3rem; padding-bottom: 3rem">
		</div>

	</div>
	<div class="row">
		<div  class="six columns">
			<img src="images/MagneticSwimmer/fig2.png" alt="MagneticSwimmerF1" width="100%;" style="padding-left:1rem;">
		</div>
		<div  class="six columns">
			<img src="images/MagneticSwimmer/fig3.png" alt="MagneticSwimmerF1" width="100%;" style="padding-left:1rem;">
		</div>
	</div>

	
	
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>