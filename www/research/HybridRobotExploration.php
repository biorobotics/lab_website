<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Hybrid Robot Exploration - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Full Stack Autonomy">
	<meta name="description" content ="Hybrid Robot Exploration - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.6rjh1wkiw4o"><b><span class="c15">Full Stack Autonomy</b> - Hybrid Robot Exploration</span></h3><p class="c18"><span class="c53 c13 c56">This project seeks novel approaches to rapidly map, navigate, and search environments for situational awareness during time-sensitive combat operations. This project focuses on fast moving autonomous vehicles designed for multi-modal exploration across various terrains and environments. To do this we integrate and iterate upon previously designed algorithms for exploration, finding areas where common algorithms fail when used on high-speed ugv&rsquo;s and creating novel solutions to push the boundaries of what these vehicles are capable of. In addition, our system boasts a heterogeneous robot setup via legged robots that can aid exploration between multiple floors. </span></p><p class="c21"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 50%;"><img alt="" src="images/HybridRobotExploration/image102.jpg" style="width: 100%; margin-left: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c21"><span class="c53 c56 c89">Fig: Hybrid agent system with three RC cars (UGVs) and two Spots (legged robots)</span></p><p class="c18"><span class="c53 c56 c13">The current design combines a viewpoint based exploration planner, trajectory libraries for rapid elimination of paths intersecting with obstacles, and a low level planner capable of following paths at a high speed. An important aspect of the software architecture is its hierarchical design which allows the operator of the UGV to insert human feedback at any stage of the process. Specifically this allows the operator to bias the exploration planner, give direct waypoint input, operate in a smart joystick mode (which follows the operators input while avoiding obstacles), or directly follow user input. The stack is then able to optimize the exploration process by utilizing different levels of autonomy to flexibly perform what the operator desires. </span></p><p class="c2"><span class="c53 c56 c13"></span></p><p class="c21"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 443.50px; height: 249.47px;"><img alt="" src="images/HybridRobotExploration/image28.png" style="width: 443.50px; height: 249.47px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c21"><span class="c87 c89">Fig: The third RC car in the convoy peels off to explore unknown passage on the right</span></p><p class="c18"><span class="c87 c13">Our recent efforts involved creating a convoy of wheeled robots that could operate at higher speeds in both indoor and outdoor environments. We extended this capability to hybrid agents involving the Spot robots and illustrated that our optimal control algorithms are vehicle agnostic. Further, an explicit peel off behavior was designed to ensure the trail vehicles could peel off from the convoy and act as radio beacons for the lead vehicles. In some scenarios, peeling off a part of the convoy to explore unknown terrains when there is a fork in the road has proven to be extremely helpful for hybrid agent exploration. Once again, the hierarchical design allows the operator to provide feedback mid-exploration and one of our new feature includes bringing in new operators to handle peeled off robots for a different mission. </span></p><!-- <div class="six columns">
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
