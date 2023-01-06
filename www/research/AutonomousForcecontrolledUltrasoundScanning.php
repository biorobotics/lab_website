<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Autonomous Force-Controlled Ultrasound Scanning - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Medical Robotics">
	<meta name="description" content ="Autonomous Force-Controlled Ultrasound Scanning - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.oi7foe6tqqhp"><b><span class="c15">Medical Robotics</b> - Autonomous Force-Controlled Ultrasound Scanning</span></h3><p class="c12"><span class="c4"></span></p><p class="c30"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 300.00px; height: 301.00px;"><img alt="" src="images/AutonomousForceControlledUltrasoundScanning/image81.png" style="width: 300.00px; height: 301.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c12"><span class="c5"></span></p><p class="c30"><span class="c5">In the case of high-tempo, traumatic scenarios on the battlefield, real-time ultrasound (US) imaging serves as an enabler for countless possible robotic interventions. Ultrasound has the benefit of being &nbsp;low-cost, portable, and radiation-free. The problem with ultrasound is that it is often difficult to interpret, therefore making interventions even more difficult, both for human caregivers and medical AI that supports them. This project aims to enable robotic-based ultrasound scanning with minimal human help. The challenge is divided into two parts: </span></p><p class="c12"><span class="c5"></span></p><p class="c30"><span class="c5">1. How to scan a curved/non-flat surface with proper ultrasound contact with the surface? </span></p><p class="c12"><span class="c5"></span></p><p class="c30"><span class="c5">2. How to find the best location/trajectory to scan given the target without human-in-loop? </span></p><p class="c30"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 316.50px; height: 178.28px;"><img alt="" src="images/AutonomousForceControlledUltrasoundScanning/image29.png" style="width: 316.50px; height: 178.28px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c30"><span class="c5">To solve the first question, we are looking to combine the force feedback with the prior knowledge of the surface to maintain maximum acoustic coupling and scan the target. We use commonly used metrics such as image noise and NCC score to quantify the scanning process. &nbsp;For the second part of the problem we are using Bayesian optimization to find the best location/trajectory on &nbsp;an unknown skin surface for needle insertion. Apart from the unknown surface geometry, other challenges in this &nbsp;include keeping the ultrasound normal to the surface to get a good image and using optimal force to press the probe on the surface such that the vessels don&rsquo;t get deformed or injure the soldier. Furthermore, we are also working to create a simulation version of ultrasound scanning where we can test our algorithm in simulation before deploying on the real robot. The steps in this include a 3D volume reconstruction from ultrasound scans as well as pairing it with a physics engine for deformation modeling/control. </span></p><p class="c12"><span class="c5"></span></p><p class="c18"><span class="c38 c13 c50">Relevant Publications:</span></p><p class="c2"><span class="c38 c36 c60"></span></p><p class="c18"><span class="c11 c36">Goel, Raghavv, et al. &quot;Autonomous Ultrasound Scanning using Bayesian Optimization and Hybrid Force Control.&quot; </span><span class="c11 c32 c36">2022 International Conference on Robotics and Automation (ICRA)</span><span class="c11 c36">. IEEE, 2022.</span></p><p class="c2"><span class="c50 c38 c13"></span></p><hr style="page-break-before:always;display:none;"><!-- <div class="six columns">
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