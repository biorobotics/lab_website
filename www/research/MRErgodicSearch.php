<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Multi-Robot Ergodic Search Research- Biorobotics</title>
	<meta name="Keywords" content="Multi-Robot Ergodic Search, Multi-Robot, Ergodic Search, Search, Carnegie Mellon University, Human Robot Collaboration, robotics">
	<meta name="description" content ="Multi-Robot Ergodic Search Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Heterogeneous multi-agent ergodic search</b></h3>
			<p>
				With the rapid development of affordable robots with embedded sensing and computation capabilities, we are quickly approaching a point at which real-life applications will involve the deployment of hundreds, if not thousands, of robots. Among these applications, significant research effort has been devoted to multi-agent search, where deploying numerous agents can greatly improve the time-efficiency and robustness of search. Motivated by such problems, this project considers the large-scale deployment of heterogeneous robots in time-critical scenarios, where search can be improved by combining the different motion and sensing capabilities of the agents.

				To search a region as quickly as possible, a large number of heterogeneous robots could be deployed, e.g., aerial, ground, and amphibious robots. As is often the case, a central planner, such as a human strategist, might coordinate the search by grouping the robots into teams. By optimizing the number of teams and their capabilities, the strategist could efficiently cover a large area, while managing complexity to allow for rapid, online re-planning as more information is gathered. This work addresses the key question: How should the strategist form and coordinate teams of heterogeneous agents?
			</p>
			<p>
				<b>People:</b> <a href = "http://guillaume.sartoretti.science">Guillaume Sartoretti</a>, Jan Orlowski, Hesper Yin, Yiwei Lyu
						Bobby Zhang
			</p>
		</div>
		<div class="six columns u-pull-right">
			<img src="images/MRErgodicSearch/fig1.jpg" alt="MRErgodicSearchF1" width="90%;" style="padding-left:3rem; padding-top:3rem;">
		</div>
	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>