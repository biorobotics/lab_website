<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Series Elastic Research - Biorobotics</title>
	<meta name="Keywords" content="Biorobotics, snake robot, elastic snake, series elastic, elastic actuator, series elasticity, series elastic snake, spring snake, elastic robot, deformable robot, elastic motor">
	<meta name="description" content ="Series Elastic Research - Carnegie Mellon Biorobotics" />
<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
	<div class="row">
		<div class="twelve columns">
				<h3>  Series <b>Elasticity </b></h3>
				<div style="text-align:center; margin: 15px 0px;">
				<img src="./images/seriesElastic/top.jpg" alt="Snake Estimation" style="width:100%">
				</div>
				<p>
				The small cross section and wide range of motion of our snake robots allow them to navigate many diverse environments,
				such as rough ground, channels, pipes, poles, and trees. This makes them applicable to a diverse set of tasks such as urban
				search and rescue, mine rescue, industrial inspection, and reconnaissance. In all of these situations, the ability to adapt
				and comply to the environment is paramount.
				</p>
				<p>
				Our snake robots are similar to most other mobile robots in that they rely on highly-geared electric motors for actuation,
-				providing large torques at slow speeds. The modules of our latest robot use a brushed DC motor and a 400:1 gear train to
				produce peak torques of over 2.7 N-m (2 ft-lbs) and a maximum speed of 30 rpm. While this design makes the robot extremely
				capable of executing its commanded motions, the stiffness of the actuators makes sensing contact with the environment difficult.
				</p>
				<div  class="five columns u-pull-left">
					<img src="./images/seriesElastic/hysteresis.jpg" alt="Hysteresis" width="100%;">
				</div>
				<p>
				Theoretically, each module can estimate its output torque by measuring the current drawn by its motor, but in practice this is very
				difficult. Nonlinear effects like the friction, stiction, and reflected inertia of the gear train frequently cause the measured current
				to be significantly different from the actual torque at the output hub of the module. Adding series elasticity to our modules has the
				potential to mitigate these problems [1] as well as provide an easy and accurate estimate of the actuator's output torque, assuming the
				actuator has a relatively linear spring constant.
				</p>
				<p>
				However, incorporating series elasticity into such a high-performance robot is not a trivial task. In order to be used in our snake
				robots, the series elastic element needs to have excellent energy storage and ultimate strength, fit in an extremely small design space,
				and be able to be manufactured reliably in large quantities (our lab currently has 60 snake modules). This work details the design,
				fabrication, and modeling of a high-performance series elastic element that torsionally shears rubber between two rigid plates. We show
				that this design meets all of the above design criteria, and that the spring characteristics can be modeled well enough to enable accurate
				torque sensing in future robots. 
				</p>
				<p>
				[1]  G. Pratt and M. Williamson, "Series elastic actuators," Proceedings 1995 IEEE/RSJ International Conference on Intelligent Robots
				and Systems., pp. 399-406, 1995.
				</p>
				<div style="clear:both">
				</div>
        </div> 
	</div>
	
<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>