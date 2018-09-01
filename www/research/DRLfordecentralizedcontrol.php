<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Distributed RL for decentralized control Research- Biorobotics</title>
	<meta name="Keywords" content="Distributed RL for decentralized control, Reinforcement Learning, decentralized control, control, Carnegie Mellon University, Human Robot Collaboration, robotics">
	<meta name="description" content ="Distributed RL for decentralized control Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Deep-RL for compliant control of a series-elastic snake robot</b></h3>
			<p>
				Decentralized control architectures, such as those conventionally defined by central pattern generators, independently coordinate spatially distributed portions of articulated bodies to achieve system-level objectives. State of the art distributed algorithms for reinforcement learning employ a different but conceptually related idea; independent agents simultaneously coordinating their own behaviors in parallel environments while asynchronously updating the policy of a system- or, rather, meta-level agent. This work, to the best of the authors’ knowledge, is the first to explicitly explore the potential relationship between the underlying concepts in homogeneous decentralized control for articulated locomotion and distributed learning. We present an approach that leverages the structure of the asynchronous advantage actor-critic (A3C) algorithm to provide a natural framework for learning decentralized control policies on a single platform. Our primary contribution shows an individual agent in the A3C algorithm can be defined by an independently controlled portion of the robot’s body, thus enabling distributed learning on a single platform for efficient hardware implementation. To this end, we showed how the system is trained offline using hardware experiments implementing an autonomous decentralized compliant control framework. Our experimental results showed that the trained agent outperforms the compliant control baseline by more than $40\%$ in terms of steady progression through a series of randomized, highly cluttered evaluation environments.
			</p>
		</div>
		<div class="six columns">
			<img src="images/DRLfordecentralizedcontrol/fig1.gif" alt="DRLfordecentralizedcontrolF1" width="100%;" style="padding-right:10rem; padding-top:16rem;">
			<ul>
			  <li><a href="/publications/16-ICRA2018_DistributedLearning.pdf">Distributed Learning for the Decentralized Control of Articulated Mobile Robots</a></li>
			  <li><a href="https://github.com/gsartoretti/Deep-SEA-Snake">github public code repository</a></li>
			</ul>
			<b>People:</b> <a href = "http://guillaume.sartoretti.science">Guillaume Sartoretti</a>, <a href = "https://bill.paivine.com/">Bill Paivine</a>,
			Yunfei Shi
		</div>
	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>