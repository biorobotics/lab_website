<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Series Elastic Actuation - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Locomoting Systems">
	<meta name="description" content ="Series Elastic Actuation - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.6jf5w38exja3"><b><span class="c15">Locomoting Systems</b> - Series Elastic Actuation</span></h3><p class="c30"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 240.00px; height: 240.00px;"><img alt="" src="images/SeriesElasticActuation/image52.png" style="width: 240.00px; height: 240.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 405.00px; height: 181.00px;"><img alt="" src="images/SeriesElasticActuation/image43.png" style="width: 405.00px; height: 181.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c9"><span class="c16 c59">The small cross section and wide range of motion of our snake robots allow them to navigate many diverse environments, such as rough ground, channels, pipes, poles, and trees. This makes them applicable to a diverse set of tasks such as urban search and rescue, mine rescue, industrial inspection, and reconnaissance. In all of these situations, the ability to adapt and comply to the environment is paramount.</span></p><p class="c9"><span class="c16 c59">Our snake robots are similar to most other mobile robots in that they rely on highly-geared electric motors for actuation, - providing large torques at slow speeds. The modules of our latest robot use a brushed DC motor and a 400:1 gear train to produce peak torques of over 2.7 N-m (2 ft-lbs) and a maximum speed of 30 rpm. While this design makes the robot extremely capable of executing its commanded motions, the stiffness of the actuators makes sensing contact with the environment difficult.</span></p><p class="c30 c90"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 500.00px; height: 394.00px;"><img alt="Hysteresis" src="images/SeriesElasticActuation/image83.jpg" style="width: 500.00px; height: 394.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c9"><span class="c59">Theoretically, each module can estimate its output torque by measuring the current drawn by its motor, but in practice this is very difficult. Nonlinear effects like the friction, stiction, and reflected inertia of the gear train frequently cause the measured current to be significantly different from the actual torque at the output hub of the module. Adding series elasticity to our modules has the potential to mitigate these problems [1] as well as provide an easy and accurate estimate of the actuator&#39;s output torque, assuming the actuator has a relatively linear spring constant.</span></p><p class="c9"><span class="c16 c59">However, incorporating series elasticity into such a high-performance robot is not a trivial task. In order to be used in our snake robots, the series elastic element needs to have excellent energy storage and ultimate strength, fit in an extremely small design space, and be able to be manufactured reliably in large quantities (our lab currently has 60 snake modules). This work details the design, fabrication, and modeling of a high-performance series elastic element that torsionally shears rubber between two rigid plates. We show that this design meets all of the above design criteria, and that the spring characteristics can be modeled well enough to enable accurate torque sensing in future robots.</span></p><p class="c9"><span class="c8">[1] G. Pratt and M. Williamson, &quot;Series elastic actuators,&quot; Proceedings 1995 IEEE/RSJ International Conference on Intelligent Robots and Systems., pp. 399-406, 1995.</span></p><hr style="page-break-before:always;display:none;"><p class="c12"><span class="c4"></span></p><p class="c10"><span class="c29"><a class="c24" href="#h.jpmbcvqkcs3b">[Home]</a></span></p><!-- <div class="six columns">
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