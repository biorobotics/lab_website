<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>da Vinci Research Kit - Biorobotics</title>
    <meta name="Keywords" content="da Vinci, dvrk, da Vinci research kit, minimally invasive surgery,
    complementary situational awareness, csa, da Vinci robot, robot, robotics, snake, hyper-redundant, hyperredundant,
	hyper redundant, snake robots, snake bots, medical robots, surgical robot, biorobotics, biological robot, cmu, 
	carnegie mellon">
	<meta name="description" content ="da Vinci Robot - Carnegie Mellon Biorobotics" />

<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>da Vinci</b> Research Kit</h3>
			<p>The da Vinci is a telerobotic surgical research system assembled using the da Vinci Research Kit (dVRK), a collection of robotic components from the first-generation da Vinci Surgical System provided by Intuitive Surgical. With controllers developed at Johns Hopkins University and Worcester Polytechnic Institute, and software developed at John Hopkins University. The da Vinci is being used to investigate compliance mapping and filtering as part of the Complementary Situational Awareness framework.

			<br>

			A few important challenges that one faces while using these robots for minimally invasive surgeries, include lack of sensory feedback and availability of only a direct line of sight visualization. A lot of the work that we have been pursuing include fusing information available prior to the surgery from CT/MRI scans with information obtained during the surgery from contact sensing, stereo cameras and structured light sensors to develop a geometric and mechanical model of the anatomy. The robot is then localized to this model and the surgeon is provided a real time visual overlay on the 3D stereo-viewer. 

			<br>

			We have been actively pursuing force-controlled palpation of tissues for tumor localization, augmented reality, virtual fixtures and automation of surgical sub-tasks. In the future we plan to develop more sensing modalities, perform real time trajectory planning and control for the robot tools and using machine learning techniques to automate surgical sub-tasks such as suturing, tissue dissection, ablation, intraoperative ultrasound scanning etc. We also plan to apply learning techniques to characterise the task performance of an amateur versus expert and study the improvement in the performance of amateurs over time and develop techniques to potentially improve the performance rate. 

			</p>
			<h5> Papers</h5>
			<ul id="bullets">
				<li>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/main_paper_v11.pdf">
					“A Real-time Augmented Reality Surgical System for Overlaying Stiffness Information”</a>, in proceedings of RSS 2018.
				</li>
				<li>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/PID5204525%20(1).pdf">
					“A surgical system for automatic registration, stiffness mapping and dynamic image overlay”</a>, in proceedings of ISMR 2018 <font color="red"><b>(Best paper finalist)</b></font>

				</li>
				<li>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/8359-1135.pdf">
					Development of an Inexpensive Tri-axial Force Sensor for Minimally Invasive Surgery”</a>, In proceedings of IROS 2017.

				</li>
			</ul>
		</div>
		<div  class="six columns">
			<div class="video-container">
				<iframe src="http://www.youtube.com/embed/NYPnCTcOMDI?rel=0&showinfo=0&autohide=1" frameborder="0"></iframe>
			</div>
			<div class="grid gallery small">
				<ul id="demo-test-gallery" class="demo-gallery">
					<li><a href="images/daVinci/daVinciConsole.JPG" data-size="2232x3968" data-med="images/daVinci/daVinciConsole-med.jpg" data-med-size="720x1280">
							<img class="portrait" src="images/daVinci/daVinciConsole-small.JPG" alt="Console"/>
					</a></a></li>
					<li><a id="gallery-style" href="images/daVinci/daVinciFoot.JPG" data-size="3968x2232" data-med="images/daVinci/daVinciFoot-med.jpg" data-med-size="1280x720">
							<img src="images/daVinci/daVinciFoot-small.JPG" alt="Foot pedal tray"/>
					</a></li>
					<li><a id="gallery-style" href="images/daVinci/daVinciP.JPG" data-size="3968x2232" data-size="3968x2232" data-med="images/daVinci/daVinciP-med.jpg" data-med-size="1280x720">
							<img src="images/daVinci/daVinciP-small.JPG" alt="Patient Side Manipulators"/>
					</a></li>
					<li><a id="gallery-style" href="images/daVinci/daVinciMaster.JPG" data-size="3968x2232" data-med="images/daVinci/daVinciMaster-med.jpg" data-med-size="1280x720">
							<img src="images/daVinci/daVinciMaster-small.JPG" alt="Master Teleop Manipulators"/>
					</a></li>
					<li><a id="gallery-style" href="images/daVinci/daVinciMP.JPG" data-size="3968x2232" data-med="images/daVinci/daVinciMP-med.jpg" data-med-size="1280x720">
						<img src="images/daVinci/daVinciMP-small.JPG" alt="Patient and Master arms"/>
					</a></li>
					<li><a id="gallery-style" href="images/daVinci/rvizDaVinci.png" data-size="3968x2232">
						<img src="images/daVinci/rvizDaVinci-small.png" alt="3D visualization of da Vinci"/>
					</a></li>
					<li class="placeholder"></li>
					<li class="placeholder"></li>
					<li class="placeholder"></li>
					<li class="placeholder"></li>
					<li class="placeholder"></li>
				</ul>
			</div>
			<ul id="bullets" style = "padding-top: 1rem;">
				<li>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/main_ICRA2018.pdf">
					“Trajectory-Optimized Sensing for Active Search of Tissue Abnormalities in Robotic Surgery”</a>, In proceedings of ICRA 2018.

				</li>
				<li>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/Arun_IJRR_Bingham_2018.pdf">
					“Probabilistic pose estimation using a Bingham distribution-based linear filter ”</a>, IJRR 2018.
				</li>
			</ul>
		</div>
    </div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>