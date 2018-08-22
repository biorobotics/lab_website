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
			<h3><b>Multi-robot path planning in factory-like environments</b></h3>
			<p>
				Due to the growing popularity of systems with multiple cooperative robots, there is a growing need to solve the problem of multi-agent path planning: determining how a group of robots should optimally reach their respective goals with minimal inter-robot interference. Previous work done in this eld takes too long to plan for real-time systems, especially for complex, obstacle-ridden environments. In an attempt to remedy these problems we propose a new method of multi-agent path planning using distributed deep reinforcement learning where robots collectively learn a single policy for path planning which can then be applied to each robot individually. This approach would advance the state of the art by providing a fast, scalable, and robust method of decentralized multi-agent path planning.
			</p>
			<p>
				<b>People:</b> <a href = "http://guillaume.sartoretti.science">Guillaume Sartoretti</a>, Lenny Zhang, Denise Li, Josh Durham,Justin Kerr
			</p>
		</div>
		<div class="six columns u-pull-right">
			<img src="images/MAPathFinding/fig1.jpg" alt="MAPathFindingF1" width="100%;" style="padding-right:1rem; padding-top:4rem;">
		</div>
	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>