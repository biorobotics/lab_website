<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Communication Learning on Discrete Bandwidth-Constrained Networks - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Multi-Agent Planning">
	<meta name="description" content ="Communication Learning on Discrete Bandwidth-Constrained Networks - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.lgmues5wex7g"><b><span class="c15">Multi-Agent Planning</b> - Communication Learning on Discrete Bandwidth-Constrained Networks</span></h3><p class="c18"><span class="c5">Efficient inter-agent communication is an important requirement for both cooperative multi-agent robotics tasks, as well as distributed computing. &nbsp;In both of these domains, the rate at which information can be transferred between robots or computing nodes is a bottleneck. &nbsp;Techniques exist for learning communication protocols in such bandwidth-limited applications, however these approaches tend to converge very slowly, requiring large amounts of computational power and/or data. &nbsp;This project seeks to develop methods for efficient communication learning on discrete, bandwidth-limited, and noisy networks. &nbsp;Our initial work has developed a discrete communication learning approach, which utilizes a stochastic message encoding/decoding procedure to make discrete communication channels mathematically equivalent to an analog channel with additive noise. &nbsp;Gradients can thus be backpropagated through the communication channel, enabling rapid, efficient and robust communication learning. &nbsp;By virtue of using discrete messages, this approach is naturally incorporates bandwidth limitations and is ideally suited to real-world (digital) communication networks. &nbsp;To enable communicating agents to further decrease the amount of information they transmit, we introduce a variable-length message code that provides agents with a means to modulate the number of bits they send to their neighbors, and encourage agents to send short messages when possible. &nbsp;We find that in both tasks, our discrete differentiable communication approach enables communication learning with convergence rates comparable to approaches that allow the transmission of real-valued messages, which have been shown to converge much faster than typical discrete messaging approaches. &nbsp;Additionally, we find that our approach enables comparable levels of task performance with up to 34-fold fewer bits exchanged, compared to an approach in which nodes communicate 32-bit precision messages.</span></p><p class="c21"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 432.00px; height: 432.00px;"><img alt="" src="images/CommunicationLearningonDiscreteBandwidthConstrainedNetworks/image64.png" style="width: 432.00px; height: 432.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 188.00px;"><img alt="" src="images/CommunicationLearningonDiscreteBandwidthConstrainedNetworks/image61.png" style="width: 624.00px; height: 188.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c18"><span class="c5">[1] Freed, Benjamin, et al. &quot;Sparse discrete communication learning for multi-agent cooperation through backpropagation.&quot; 2020 IEEE/RSJ International Conference on Intelligent Robots and Systems (IROS). IEEE, 2020.</span></p><p class="c18"><span class="c5">[2] Freed, Benjamin, et al. &quot;Communication learning via backpropagation in discrete channels with unknown noise.&quot; Proceedings of the AAAI Conference on Artificial Intelligence. Vol. 34. No. 05. 2020.</span></p><p class="c18"><span class="c5">[3] Freed, Benjamin, Guillaume Sartoretti, and Howie Choset. &quot;Simultaneous policy and discrete communication learning for multi-agent cooperation.&quot; IEEE Robotics and Automation Letters 5.2 (2020): 2498-2505.</span></p><!-- <div class="six columns">
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