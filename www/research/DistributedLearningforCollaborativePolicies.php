<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Distributed Learning for Collaborative Policies - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Multi-Agent Planning">
	<meta name="description" content ="Distributed Learning for Collaborative Policies - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.vwrb8vfqrqa6"><span>Multi-Agent Planning</b> - Distributed Learning for Collaborative Policies</span></h3><p class="c41"><b><span class="c16 c11">Recent years have seen massive leaps forward in single-agent artificial intelligence, in particular in deep-reinforcement learning (deep-RL). A large community has been focusing on multi-agent reinforcement learning (MARL), interested in extending these single-agent approaches to multi-agent systems. However, natural extensions of single-agent approaches fail when applied to multi-agent problems. The joint MARL problem can rarely be solved, mainly due to the high-dimensional state-action space that has to be explored by agents. In this context, the community has been striving for distributed solutions. In this project, we develop a fully-distributed, scalable learning framework, where multiple agents learn a common, collaborative policy in a shared environment, that can then be deployed on an arbitrary number of agents with little to no extra training. We focus on a multi-robot construction problem, inspired by Harvard&rsquo;s TERMES project, where simple robots must gather, carry and place simple block elements to build a user-specified 3D structure. This problem, cast in the RL framework, is a very difficult game with sparse and delayed rewards, as robots need to build scaffolding to reach the higher levels of the structure to complete construction. We use a fully decentralized architecture, where each agent runs an identical copy of the policy without explicitly communicating with other agents, and yet a common goal is achieved. The policy is learned centrally, meaning that all agents contribute to it during training. Once learned, the policy can be implemented on an arbitrary number of agents, and lets each agent view others as moving features in the system. To this end, we extend the single-agent asynchronous advantage actor-critic (A3C) algorithm to let multiple agents learn a homogeneous, collaborative policy in a shared environment.</span></p><p class="c41"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 240.00px; height: 240.00px;"><img alt="" src="images/DistributedLearningforCollaborativePolicies/image97.png" style="width: 240.00px; height: 240.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c41"><span class="c11">See </span><span class="c29 c13"><a class="c24" href="https://www.google.com/url?q=https://akshayaks.github.io/&amp;sa=D&amp;source=editors&amp;ust=1672867222594797&amp;usg=AOvVaw2Uiwp-dxHgD3wdCCPWribU">https://akshayaks.github.io/</a></span><span class="c16 c11">&nbsp;for baseline videos</span></p><!-- <div class="six columns">
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