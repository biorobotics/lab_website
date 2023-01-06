<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Edge Sensing and Embedded Sensors - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Confined Space Robotics">
	<meta name="description" content ="Edge Sensing and Embedded Sensors - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.xd55dffb80qi"><b><span class="c15">Confined Space Robotics</b> - Edge Sensing and Embedded Sensors </span></h3><p class="c2"><span class="c5"></span></p><p class="c18"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 240.00px; height: 240.00px;"><img alt="" src="images/EdgeSensingandEmbeddedSensors/image96.png" style="width: 240.00px; height: 240.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c18"><span class="c5">Confined space applications require specialized 3D sensors to scan the environment, detect objects, and avoid obstacles. Compared to mainstream sensors being widely used among the robotics community, such as Lidar and machine vision cameras, 3D sensors for confined spaces have additional requirements on the miniature size, ultra-short sensing ranges, and high accuracy.</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">There are no COTS solutions available to fulfill the ultra-short-range but high-precision 3D perception challenge. Most of the commercially available sensor systems are bulky, &ldquo;farsighted&rdquo;, and require external computers to perform 3D processing. It would be difficult to even obtain and let alone miniaturize an integrated sensor system, and through our work, we have developed a deep insight into creating these sensors and intelligently processing information from these sensors. The Boeing-CMU team has developed several working prototypes of miniature 3D sensors which are well-suited to confined space manufacturing and inspection applications. The job is not done and hence the CMU team is actively working on improving the hardware performance and software efficiency, and aim to make the sensor (Blaser) become the best option for short-range industrial robotic perception solutions for all applications.</span></p><p class="c18"><span class="c5">We also must note that most 3D sensors are not robot-ready, they only output raw sensor reading and have no awareness of its host robotic system. In contrast, a robotic enabled sensor should output a command signal to trigger the robot to perform a search or an avoidance maneuver, and simultaneously localize the robot in the environment and generate the 3D map of the surroundings. The Blaser sensor is capable of directly generating and processing 3D point cloud information onboard while providing direct high-level feedback or even command to any ROS-enabled or other robotic systems.</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">Publication:</span></p><p class="c18"><span class="c5">D. Cheng, H. Shi, A. Xu, M. Schwerin, M. Crivella, L Li, H. Choset, Visual-Laser-Inertial SLAM Using a Compact 3D Scanner for Confined Space. Conference Paper, IEEE ICRA 2021 Conference, May 2021</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">D. Cheng, H. Shi, M. Schwerin, M. Crivella, L. Li, and H. Choset, A Compact and Infrastructure-free Confined Space Sensor for 3D Scanning and SLAM. Conference Paper, IEEE SENSOR 2020 Conference, Oct 2020</span></p><p class="c2"><span class="c5"></span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 334.67px;"><img alt="" src="images/EdgeSensingandEmbeddedSensors/image77.png" style="width: 624.00px; height: 334.67px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c18"><span class="c29 c13"><a class="c24" href="https://www.google.com/url?q=https://drive.google.com/file/d/1XBK_jUuNg8tLgewcx3wj7nQiMG3YevfS/view&amp;sa=D&amp;source=editors&amp;ust=1672867222615944&amp;usg=AOvVaw3WVfP_PUioUvh25sERL3EE">https://drive.google.com/file/d/1XBK_jUuNg8tLgewcx3wj7nQiMG3YevfS/view</a></span></p><p class="c2"><span class="c5"></span></p><hr style="page-break-before:always;display:none;"><!-- <div class="six columns">
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