<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Flyped - Biorobotics</title>
	<meta name="Keywords" content="Flyped, Novel wheel-leg hybrid robot, Carnegie Mellon University, robotics">
	<meta name="description" content ="Flyped- Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Flyped</b></h3>
			<h4><b>Flyped</b> - A Flywheel Actuated Biped for Robust and Efficient Robot Locomotion over Varying Terrain</h4> 
			<p>
				We present a novel wheel-leg hybrid robot morphology that uses a wheel as both an inertial actuator during walking and a drive actuator during rolling. This morphology allows the robot, called the Flyped, to demonstrate more versatile and robust behaviors during legged locomotion when compared to a normal bipedal walking system, while also giving the robot the ability to efficiently roll when it encounters flat, structured terrain. To evaluate the feasibility of Flyped and compare it with similar systems, a hierarchical motion planning framework is presented that can generate and track energy-optimal multi- modal locomotion trajectories over varying terrains, and we verify the robot’s ability to execute these trajectories in simulation. We then detail the design and development of a physical prototype Flyped robot and perform experiments that evaluate both the robustness and efficiency of the reaction wheel-leg hybrid morphology. Simulation results demonstrate that the Flyped achieves both significantly improved disturbance rejection during legged locomotion and dramatic efficiency gain through rolling locomotion. These results suggest that a reaction wheel-leg hybrid robot system is a promising robot morphology that improves on the current state-of-the-art in both locomotive efficiency, versatility, and robustness.

			</p>
		</div>
		<div  class="six columns">
			<img src="images/Flyped/fig1.png" alt="FLypedF1" width="100%;" style="padding-left:1rem;">
			<img src="images/Flyped/fig6.gif" alt="FLypedF6" width="80%;" style="padding-left:1rem;">
			</div>
		</div>
	</div>
	<div class="row">
		<div  class="six columns">
			<img src="images/Flyped/fig4.gif" alt="FLypedF4" width="30%;" style="padding-left:1rem;">
			<img src="images/Flyped/fig2.png" alt="FLypedF2" width="65%;" style="padding-left:8rem;">
		</div>
		<div class="six columns u-pull-right">
			<p>
				Legged locomotion is ubiquitous in the animal kingdom because of its versatility and robustness in traversing the unstructured terrains found in nature. While the ability of legged systems to adapt to varying terrains types is impressive, controlling these systems in robotics is difficult to do effectively. Wheeled locomotion, in contrast, is widely utilized by the robotics community due to its high speed and efficiency over smooth human-constructed environments. Although wheeled systems are relatively easy to control and demonstrate excellent power efficiency during locomotion, their limited ability to traverse diverse and unstructured terrain keep them mostly contained to human-made environments. Thus, a wheel-leg hybrid robot with the capability of both efficient rolling mobility in structured environments, as well as robust legged locomotion in unstructured terrains is optimal.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="six columns">
			<p>
				Wheels have also been utilized in the legged locomotion community as inertial actuators to help regulate centroidal angular momentum. Animals carefully regulate their centroidal angular momentum while locomoting to augment their ability to traverse difficult terrain and increase their robustness to disturbances while traversing structured environments. For example, when human walking is perturbed, arm and torso accelerations provide stabilizing torques that help prevent falls and return an individual to steady-state walking. Other examples include squirrels, which flick their tails back and forth to balance themselves on thin branches, or cheetahs that accelerate their tails to achieve rapid turning at high speed [2]. To achieve the type of highly dynamic behaviors observed in biology, robots can also leverage centroidal angular mo- mentum control. While most animals use the sum of the momentum contributions from many individual body segments to achieve stabilizing torques on their body, these individual body segments can be quite limited in their motions (often limited to less than one full rotation). These inherent kinematic and dynamic limitations can severely restrict the level and duration that stabilizing torques can be applied to their body. One alternative is the use of a dedicated reaction wheel to regulate centroidal angular momentum. While mathematically similar in effect to individual link motion, reaction wheels are less constrained by joint limits and, therefore, represent the upper feasibility limit for angular-momentum based inertial actuation. Furthermore, dedicated reaction wheel hardware does not rely on the motion of body links that may be reserved for other tasks.
			</p>
		</div>
		<div  class="six columns">
			<img src="images/Flyped/fig3.png" alt="FLypedF3" width="100%;" style="padding-left:1rem;">
		</div>
	</div>
	<div class="row">
		<div class="six columns">
			<p>
				<ul type="square"><b>CURRENT ROBOT:</b> 
					<li>Balances</li>
				</ul>
				<ul type="square"><b>FUTURE ROBOT:</b> 
					<li>Walking over various terrain with disturbances </li>
					<li>Replanning while walking</li>
				</ul>
				<b>CURRENT TEAM: </b>
				<a href = "mailto:screws@andrew.cmu.edu">Steve Crews</a>, 
				<a href = "mailto:sapana@andrew.cmu.edu">Sapan Agrawal</a>, 
				<a href = "mailto:sapana@andrew.cmu.edu">Sidney “Mickey” Velado</a> <br>
				<b>PAST TEAM MEMBERS:</b> 
				<a href = "mailto:sapana@andrew.cmu.edu">Daniel Piedrahita</a>, 
				<a href = "mailto:sapana@andrew.cmu.edu">Joey Wood</a>

			</p>
		</div>
		<div  class="six columns">
			<img src="images/Flyped/fig5.gif" alt="FlypedF5" width="40%;" style="padding-left:1rem;">
			<img src="images/Flyped/fig7.gif" alt="FlypedF7" width="50%;" style="padding-left:1rem;">
		</div>
	</div>

	

	
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>