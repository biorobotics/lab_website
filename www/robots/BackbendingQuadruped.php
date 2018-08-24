<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Back-bending Quadruped - Biorobotics</title>
	<meta name="Keywords" content="Back-bending Quadruped, Quadruped, Back-bending,
	,locomtion, Carnegie Mellon University, Modularity, robotics">
	<meta name="description" content ="Back-bending Quadruped - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Back-bending Quadruped</b></h3>
			<p>
			The robot is built by a series of dynamixel servos. We have “Salamander” for locomotion on granular surface like sand and “Baximander” for locomotion on flat hard ground. 
			
			<br>

			<b>Back Bending:</b> we seek to show that salamanders and other quadrupeds use this internal degree of freedom to optimize performance, especially in heterogeneous terrains;

			<b>Footfall Shape Space:</b> we continue the investigation of using the combined geometric mechanics-Hildebrand diagram approach to both prescribe robotic gaits and investigate biological systems;
			
			<br>

			<b>Learning for Template Discovery:</b> we can discover templates for alternative behaviors, like in-place turning. Such toolset can search for alternative formulations where contact sequences and timing emerge as a result of a template which permits varying contact modes.
			
			<br>

			<b>Tail for Gait Balance:</b> we can use an actuated tail to improve the stability of the unbalanced gait, in order to achieve fast but also stable locomotion gait.

			</p>
		</div>
		<div class="three columns">
			<img src="images/BackbendingQuadruped/fig1.png" alt="BackbendingQuadrupedF1" width="100%;" style="padding-left:1rem;padding-top: 4rem">
			<p class="caption">Salamander</p>
		</div>
		<div class="three columns">
			<img src="images/BackbendingQuadruped/fig2.png" alt="BackbendingQuadrupedF2" width="100%;" style="padding-left:1rem;padding-top: 4rem">
			<p class="caption">Baximander</p>
		</div>
	</div>
	<div class="row" style= "padding-top: 3rem;">
		<center>
			<iframe width="800" height="500"src="https://www.youtube.com/embed/JhrD-FdhN_I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</center>
	</div>
	
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>