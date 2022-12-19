<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Auto. Needle Insertion for Vessel Access - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Medical Robotics">
	<meta name="description" content ="Auto. Needle Insertion for Vessel Access - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c27" id="h.pt7h16nlp9lr"><b><span class="c16">Medical Robotics</b> - Auto. Needle Insertion for Vessel Access</span></h3><p class="c10"><span class="c28 c1 c56">&nbsp;</span><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 250.83px; height: 238.15px;"><img alt="" src="images/AutoNeedleInsertionforVesselAccess/image79.png" style="width: 250.83px; height: 238.15px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c29"><span class="c3 c1">The most important component in case of high-tempo, traumatic scenarios on the battlefield is inserting a needle in the vessel of the patient autonomously, as there is no professional medical person present. One challenge in this problem is how to model the needle dynamics and kinematics as it shifts through different scenarios: outside the skin, in contact with the skin surface and inside the skin surface. The needle will behave differently in different scenarios. Furthermore, other challenges are the constant movement of the skin surface of insertion due to heavy breathing of the patient, needle passing through the vessel due to excess force applied, needle slipping off the vessel due to which the vessel can form a haematoma. Moreover, the exact location of the needle tip is also not accurate. To counter these problems, we are designing a control law which takes force measurement at the needle tip as feedback and will be modeling the needle dynamics based on different scenarios. Furthermore, we&rsquo;ll also model the approximate behavior of the needle when it contacts a vessel and how we can exploit the geometry of the vessel to ensure guarantee in needle insertion. Finally, we are developing a roboto module that uses optical sensors and pressure sensors to detect and confirm successful insertion into the vessel. </span></p><p class="c0"><span class="c25 c1">Relevant Publications:</span></p><p class="c0 c13"><span class="c38 c19 c28 c42 c21 c58"></span></p><p class="c0"><span class="c5 c1 c21">Zevallos, Nico, et al. &quot;Toward robotically automated femoral vascular access.&quot; 2021 International Symposium on Medical Robotics (ISMR). IEEE, 2021.</span></p><p class="c0 c13"><span class="c5 c1 c21"></span></p><!-- <div class="six columns">
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