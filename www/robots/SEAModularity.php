<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>SEA Modularity - Biorobotics</title>
	<meta name="Keywords" content="Biorobotics, SEA modularity, modular robots, snake monster"> 
	<meta name="description" content=" SEA Modularity - Carnagie Mellon Biorobotics" />
	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->

<h3><b>SEA</b> Modularity</h3>
	
		<div class="row">
			<div class="twelve columns">
			
		
		<div class='six columns'>
		<p>We present a set of modular series-elastic actuators
				(SEAs) that allow rapid and robust prototyping of mobile
				legged robots. The SEA modules were originally developed for
				a snake robot, SEA Snake, and have recently been reconfigured
				into Snake Monster, a multi-modal walking robot that can be
				easily adapted to hexapod, quadruped, and biped configurations.
				The use of SEAs allows the implementation of a compliant
				hybrid controller using both position and force-based walking.
				This paper presents the mechanical design, control architecture,
				and initial locomotion experiments using the Snake Monster
				platform. Additionally, we discuss the enhanced capabilities,
				pertaining particularly to search and rescue applications, enabled
				by the use of our modular hardware. Finally, we highlight
				how these modules provide a powerful tool for both field
				deployment requiring locomotion and manipulation tasks. </p>
		
		
		
		<p> The Snake Monster robot is a reconfigurable 
		search and rescue robot built with reliable
		field-tested hardware. By using parallel position and
		force control, Snake Monster is able to actively and passively
		conform its footsteps to traverse unmodelled terrain with
		relative ease and minimal computation. Using the mechanical
		spring compliance built into each joint, Snake Monster conforms
		to uneven terrain rather than explicitly planning
		and optimizing footholds and step locations</p>
	</div>
<div class="six columns">
		<div class="video-container">
			<iframe src="http://www.youtube.com/embed/AMVO6rI5mL4?rel=0&showinfo=0&autohide=1" frameborder="0"></iframe>
		</div>
		<div class="grid gallery small">
			<ul id="demo-test-gallery" class="demo-gallery">
			<li><a href="images/SEAModularity/SEAModularity.png" data-size="1020x760" data-med="images/SEAModularity/SEAModularity-med.png" data-med-size="1280x720">
				<img class="portriat" src="images/SEAModularity/SEAModularity-med.png" alt="Modules"/>
			</li></a>	
			<li><a href="images/SEAModularity/SEAModules2.png" data-size="1017x728" data-med="images/SEAModularity/SEAModules2-med.png" data-med-size="1280x720">
				<img class="portriat" src="images/SEAModularity/SEAModules2-med.png" alt="Biped Modules"/>
			</li></a>
			</ul>
		</div>
		</div>
	<div class='row'>	
		<div class='twelve coulumns'>
<h5>Modular Design</h5>

<p> The SEA Snake and Snake Monster robots consist of
actuated, 1-DoF modules shown in Figure 1. Each module is a 
self-contained joint allowing for 180 degrees of rotation.
The modules have distinct proximal and distal electromechanical,
intermodule interfaces which are used to fasten
two adjacent modules. Modules are mechanically connected
by a simple threaded collar which is hand tightened to the
female threads on the adjacent module. Dowel pins and
matching recesses ensure the modules are mated and clocked
correctly. Electrical connections between modules are made
using spring-pin connectors and conductive target areas. This
design enables modules to be connected and disconnected
quickly and repeatedly.</p>


		
		
<div class="four columns u-pull-left">
<img src="images/SEAModularity/SEAModules.png" alt="Modules" width="100%;">
<p class="caption"> Figure 1: Modular Electro-mechanical interfaces </p>
</div>

<p>The intelligent, building-block, modules can be rapidly
configured to suit a desired task. In this study Snake
Monster was configured into an 18-DoF Hexapod, a 16-
DoF quadruped roller-walker, and a 14-DoF Biped. Initial
locomotion and balancing experiments were conducted on
each legged platform.</p>

<h5>Configuration</h5>

<p>The quadruped is configured to have four legs - 2 on
either side of the same body box. Each of the four legs are
augmented with an additional degree of freedom at the ankle
for orientation of the foot. Inspiration for this configuration
was derived from Hirose's Roller-Walker robot which also
had 4-DoF limbs and could orient the ankle joint to toggle
between multiple modes of mobility: walking and rolling. 
Each of the 4 foot modules was modified with an
external thin-section ball bearing whose inner race is press
fit to the outer diameter of the foot module. A rubber oring
tire is installed around a machined aluminum rim. The
bearing introduces a passive torsional degree of freedom at
the end-effector. With this modified foot module and ankle
joint, Snake Monster can change the effective ground contact
element between its static rubber foot or its passive wheel.</p>

<div class="five columns u-pull-right">
<img src="images/SEAModularity/snakeMonster2.png" alt="Roller-Walker" width="100%;" style="padding-left:1rem;">
<p class="caption"> Figure 2:  Snake Monster is reconfigured into a quadruped with 4-DOF limbs,
using the ankle joints to orient the end-effector to be a foot (left) or a passive
skating wheel (right).</p>
</div>

<p>The hexapod is configured with three legs on opposite
sides of a rectangular aluminum body box. The quadruped is configured to have four legs - 2 on
either side of the same body box. In addition to the hexapod and quadruped configurations, a
biped is also constructed. The biped is kinematically
configured to have 5-DoF legs and 2-DoF arms.</p>

<p> The hexapod's high-level controller first initializes and sets
the low-level cascade PID gains for position, velocity, and
torque loops. To achieve a compliant stance sensitive to the
environment and external disturbances, the position gains are
set relatively low in comparison to the torque gains. This gain
scheme achieves compliance by emphasizing joint torques
that support the weight of the body in stance rather than
joint positions which merely command the foot to a specific
position. This loose position servoing enables the body to be
pushed or pulled in any direction relative to stationary stance
feet.</p>



<p>Initial roller-skating locomotion demonstrated maximum
speeds of up to 0.5 m/s. In rolling mode the minimum turning
radius was estimated to be 0.5 meters. With optimization of
the gait parameters, higher speed, increased stability, and a
reduced turn radius is certainly feasible.</p>

<p>The quadruped, roller-walker, achieves its multi-modal
mobility by being able to walk or roll on passive wheels.
Multi-modal mobility offers advantages in terrain navigation
by adjusting or adapting gait to best suit a given terrain. On
rough terrains Snake Monster Roller-Walker can use a wave
gait to prioritize stability and navigability. On flat ground or
paved surfaces the quadruped can switch to roll mode which
prioritizes energy efficiency and reduces cost of transport (Figure 2).</p>

<p>To achieve robust active balancing and walking an accurate
knowledge of the biped's state variables must be estimated.
Snake Monster biped uses the same complimentary filter
as the hexapod to determine gravitational orientation of the
body. In the case of the biped only 4 redundant IMU's are
used. The 4 IMUs are located in the most proximal joint of
each limb which is rigidly connected to the body.</p>

<p>After implementing each incremental strategy of the balancing
controller a series of experiments were conducted
to test the ability of the biped to recover from externally
applied disturbances. The experiments focused primarily on
longitudinal stability and ignored active lateral stabilization
because the support polygon is inherently larger in the lateral
direction than the longitudinal direction.</p>
</div>
	</div>
<div class="five columns">
<img src="images/SEAModularity/snakeMonsterKick.png" alt="Snake Monster Kick" width="100%;">
<p class="caption">  Figure 3:  Snake Monster Biped using ankle torque strategy and arm control
to recover its balance from a kick.</p>
</div>
<div class="six columns">
		<div class="video-container">
			<iframe src="http://www.youtube.com/embed/7CciHJ6SP_o?rel=0&showinfo=0&autohide=1" frameborder="0"></iframe>
		</div>
		<p class="caption" style="text-align:center;"> Snake Monster Biped balancing experiments</p>

</div>
</div>
</div>

<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>