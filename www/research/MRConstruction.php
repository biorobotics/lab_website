<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Multi-Agent Path Finding Research- Biorobotics</title>
	<meta name="Keywords" content="Multi-Agent Path Finding, Multi-Agent, Path Finding, Carnegie Mellon University, Human Robot Collaboration, robotics">
	<meta name="description" content ="Multi-Agent Path Finding Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Distributed RL for Collaborative Policies</b></h3>
			<p>
				Recent years have seen massive leaps forward in single-agent artificial intelligence, in particular in deep-reinforcement learning (deep-RL). A large community has been focusing on multi-agent reinforcement learning (MARL), interested in extending these single-agent approaches to multi-agent systems. However, natural extensions of single-agent approaches fail when applied to multi-agent problems. The joint MARL problem can rarely be solved, mainly due to high-dimensional state-action space that has to be explored by agents. In this context, the community has been striving for distributed solutions. In this project, we develop a fully-distributed, scalable learning framework, where multiple agents learn a common, collaborative policy in a shared environment, that can then be deployed on an arbitrary number of agents with little to no extra training.

				We focus on a multi-robot construction problem, inspired by Harvard’s TERMES project, where simple robots must gather, carry and place simple block elements to build a user-specified 3D structure. This problem, cast in the RL framework, is a very difficult game with sparse and delayed rewards, as robots need to build scaffolding to reach the higher levels of the structure to complete construction. We use a fully decentralized architecture, where each agent runs an identical copy of the policy without explicitly communicating with other agents, and yet a common goal is achieved. The policy is learned centrally, meaning that all agents contribute to it during training. Once learned, the policy can be implemented on an arbitrary number of agents, and lets each agent view others as moving features in the system. To this end, we extend the single-agent asynchronous advantage actor-critic (A3C) algorithm to let multiple agents learn a homogeneous, collaborative policy in a shared environment.
			</p>
			<a href="/publications/19-DARS2018_DistributedAssembly.pdf">Distributed Reinforcement Learning for Multi-Robot Decentralized Collective Construction</a>
			<p>
				<b>People:</b> <a href = "http://guillaume.sartoretti.science">Guillaume Sartoretti</a>, <a href = "https://bill.paivine.com/">Bill Paivine</a>
				,Yue (Holmes) Wu, Yunfei Shi
			</p>
		</div>
		<div class="six columns u-pull-right">
			<img src="images/MRConstruction/fig1.gif" alt="MRConstructionF1" width="100%;" style="padding-right:1rem; padding-top:12rem;">
		</div>

	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>