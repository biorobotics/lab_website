<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Medical Applications - Biorobotics</title>
	<meta name="Keywords" content="Snake Robot, snake robots, medicine robot, medical robot, surgery robot, surgical robot, minimally invasive surgery, minimally invasive surgery robot, medrobotics, cardiac robot, surgery tool">
	<meta name="description" content ="Medical Applications - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Medical Snake Robot</b></h3>
			<p>
			When compared to conventional procedures, minimally invasive surgeries (MIS) have potential benefits including “reduced-pain”, minimal “blood-loss”, faster healing and reduced tissue disruption. To further improve upon MIS, our group, along with others have been developing highly articulated snake-like robots to provide deeper access to the anatomy with fewer incisions. The articulation allows a surgeon to insert the robot through a single incision or through a natural orifice and navigate through tightly packed volumes without disturbing the surrounding tissues and organs. This capability however, comes at the cost of limited sensory feedback and reduced situational awareness. In addition, the articulation poses challenges in estimation of the shape configuration of the robot, which is necessary to avoid interfering with organs. 

			<br>

			One of the research directions that we are actively pursuing involves using images obtained from a camera at the head of the robot, to perform monocular SLAM. The goal of our Medical SLAM project is to improve the accuracy and efficacy of the surgery through the adoption of mobile robot simultaneous localization and mapping (SLAM) algorithms to the medical field. SLAM is the problem of estimating an environment map with a mobile robot while simultaneously estimating the pose of the robot in the incrementally constructed map. The advantages of using SLAM for surgery are
			<ol>
				<li>the potential improvement in accuracy</li>
				<li>he estimation of dynamic information</li> 
				<li>the inference of deformation and stiffness</li>
			</ol>
			
			<br>

			We are also actively developing a controller for the robot that can be controlled directly from MATLAB. This would allow more ease of programming and controlling the robot for various tasks. Some example tasks that we plan to pursue include: vision-based control of the robot, motion planning under uncertainty, force-controlled tissue-palpation, etc. There is also work on developing miniature sensors that can be mounted on the robot to improve the robots perception of the environment. These sensors include force sensors, Laser scanners, miniature stereo cameras, etc.

			<br>

			</p>
			<p>
			<a href="http://www.medrobotics.com"> Medrobotics website</a>
			</p>

			<p>
			<h5> Papers </h5>
			<ul id="bullets">
				<li >
					<p>				
					<a href="https://ieeexplore.ieee.org/document/4649903/">
					CHighly Articulated Robotic Probe for Minimally Invasive Surgery.</a>
					. Proc. 2012 IEEE International Conference on Robotics and Automation (ICRA), May, 2012. 
					</p>
				</li>
				<li >
					<p>
					<a href="https://www.ri.cmu.edu/pub_files/pub4/degani_amir_2006_3/degani_amir_2006_3.pdf">
					Inequality Constrained Kalman Filtering for the Localization and Registration of
					a Surgical Robot</a>. Proc. of 30th Annual International IEEE EMBS Conference Vancouver, British Columbia, Canada, August 20-24, 2008 
					</p>
				</li>
				<li >
					<p>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/iros11snakeEstimation.pdf">
					Percutaneous Intrapericardial Interventions Using a Highly Articulated Robotic Probe.</a> Innovations (Philadelphia, Pa.) 1, no. 6 (2006): 335. 
					</p>
				</li>
			</ul>
		</div>
		<div  class="six columns">
			<image src = "images/medSnake/fig1.png" alt="medSnakeF1" width="100%;"
			style = "padding-top: 8rem">
			<image src = "images/medSnake/fig2.png" alt="medSnakeF2" width="100%;"
			style = "padding-top: 12rem">	
		</div>
    </div>
	
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>