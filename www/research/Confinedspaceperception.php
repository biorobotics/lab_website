<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Confined Space Perception Research - Biorobotics</title>
	<meta name="Keywords" content="Confined Space Perception,
	Space, Perception, Carnegie Mellon University, robotics">
	<meta name="description" content ="Confined Space Perception Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Confined Space 3D Perception</h3> 
			<p>
				Confined space applications require specialized 3D sensors to scan the environment, detect objects, and avoid obstacles. Compared to mainstream sensors being widely used among robotics community, such as Lidar and machine vision cameras, 3D sensors for confined spaces have additional requirements on the miniature size, ultra-short sensing ranges, and high accuracy.

				<br>
 
				There are no COTS solutions available to fulfill the ultra-short-range but high-precision 3D perception challenge. Most of the commercially available sensor systems are bulky, “farsighted”, and require external computers to perform 3D processing. It would be difficult to even obtain and let alone miniaturize an integrated sensor system, and through our work, we have developed a deep insight into creating these sensors and intelligently processing information from these sensors. The Boeing-CMU team has developed several working prototypes of miniature 3D sensors which are well-suited to confined space manufacturing and inspection applications. The job is not done and hence the CMU team is actively working on improving the hardware performance and software efficiency, and aim to make the sensor (Blaser) become the best option for short-range industrial robotic perception solutions for all applications.
				
				<br>
 
				We also must note that most 3D sensors are not robot-ready, they only output raw sensor reading and have no awareness of its host robotic system. In contrast, a robotic enabled sensor should output a command signal to trigger the robot to perform a search or an avoidance maneuver, and simultaneously localize the robot in the environment and generate the 3D map of the surroundings. The Blaser sensor is capable of directly generating and processing 3D point cloud information onboard while providing direct high-level feedback or even command to any ROS-enabled or other robotic systems.
				<br>
			</p>
		</div>
		<div  class="six columns">
			<img src="images/Confinedspaceperception/fig1.png" alt="ConfinedspaceperceptionF1" width="100%;" style="padding-left:2rem; padding-top:5rem;">
		</div>
		<div row = "class">
			<iframe width="605"height="300" src="https://drive.google.com/file/d/1XBK_jUuNg8tLgewcx3wj7nQiMG3YevfS/preview" frameborder="0" style="padding-left: 2rem" ></iframe>
		</div>
	</div>


	
	
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>