<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Magnetically Controlled Micro Locomotion - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Locomoting Systems">
	<meta name="description" content ="Magnetically Controlled Micro Locomotion - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.hu4f6cn7q7pw"><b><span class="c15">Locomoting Systems</b> - Magnetically Controlled Micro Locomotion</span></h3><p class="c41"><span class="c16 c11">Microrobots have the potential to impact many areas of medicine such as microsurgery, targeted drug delivery and minimally invasive sensing. Just like microorganisms themselves, microrobots developed for these applications need to swim in a low-Reynolds number regime which warrants locomotive strategies that differ from their macroscopic counterparts. To this end, Purcell&rsquo;s three-link planar swimmer has served as an iconic model of a simple mechanism that can navigate this regime by leveraging internal actuation using analytically computed strokes. We consider two different versions of this swimmer in this project. In the first class, we develop a novel three-dimensional counterpart to this swimmer and describe how enabling yaw-pitch movements at the two actuated joints as opposed to the conventional yaw-yaw movements allow it to navigate a three-dimensional environment. Using analytical tools from geometric mechanics, we design gaits that enable this swimmer to reorient itself and swim along canonical directions in the inertial frame. We validate these results on a hardware prototype and reproduce the simulated trajectories on the robot executing these gaits.</span></p><p class="c41"><span class="c16 c11">While the 3D swimmer is actuated internally, we next consider a second class of swimmers that are fabricated with elastomagnetic filaments and locomote in response to external magnetic fields. We demonstrate how the special case of a two link elastomagnetic swimmer is amenable for control synthesis using similar geometric arguments that apply to internally actuated swimmers. Additionally, we compute optimum internal magnetization distributions for a three-link swimmer that maximize its displacement per cycle and develop a principled approach to encode these distributions in millimeter-scale elastomagnetic filaments. We verify this procedure experimentally and finally demonstrate translation and turn-in-place locomotion in these swimmers.</span></p><p class="c18"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 240.00px; height: 240.00px;"><img alt="MicroScaleLocomotionF4" src="images/MagneticallyControlledMicroLocomotion/image65.png" style="width: 240.00px; height: 240.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 357.33px;"><img alt="MicroScaleLocomotionF1" src="images/MagneticallyControlledMicroLocomotion/image111.png" style="width: 624.00px; height: 357.33px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span><span class="c28">&nbsp; </span><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 341.33px;"><img alt="MicroScaleLocomotionF5" src="images/MagneticallyControlledMicroLocomotion/image36.png" style="width: 624.00px; height: 341.33px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c18"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 414.67px;"><img alt="MicroScaleLocomotionF2" src="images/MagneticallyControlledMicroLocomotion/image17.png" style="width: 624.00px; height: 414.67px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c18 c93"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 414.67px;"><img alt="MicroScaleLocomotionF3" src="images/MagneticallyControlledMicroLocomotion/image80.png" style="width: 624.00px; height: 414.67px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c2"><span class="c50 c52"></span></p><!-- <div class="six columns">
			<h3><b>Modularity</b> - Modular manipulators</h3>
			<p>
				<b>Modular robotic systems</b> have the potential to be adapted to varying tasks using a single set of reconfigurable hardware, enabling customizable robots to be developed faster and more economically than conventional robots. Currently, even with the engineering experience, calculations and intuitions, it is not immediately evident how to construct and program a modular robot for a task. We research methods to automatically synthesize the design and controllers for modular robot arms.
			</p>
			<div class="eleven columns u-pull-left">
				<img src="images/Modularity/fig2.png" alt="ModularityF2" width="100%;" style="padding-left:1rem;">
				<p class="caption"> Figure2 : A prototype of a robot arm made from HEBI modular actuators.
				</p>
		</div>
		</div>
		<div class="five columns u-pull-right">
			<img src="images/Modularity/fig1.png" alt="ModularityF1" width="100%;" style="padding-left:1rem;">
			<p class="caption"> Figure 1:  Supernumerary arm implemented in hardware, reaching  one  of  the  targets  on  the  overhead  workpiece.  The  end
			effector  is  a  flat  rubberized  plate  with  spring-loaded  hinge.
			The  arm,  attached  to  a  backpack  control  and  power  pack,
			lends the user a helping hand
			</p>
		</div> -->
	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>