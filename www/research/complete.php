<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Coverage Research	- Biorobotics</title>
	<meta name="Keywords" content="Biorobotics, Coverage Research">
	<meta name="description" content ="Coverage Research - Carnegie Mellon Biorobotics" />
<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
	<div class="row">
		<div class="twelve columns">

			<h3><b>Complete</b> Coverage</h3>
			
			<p>Sensor-based coverage uses sensor information to determine a path that passes
			a detector over all points in an unknown space. The sensor based coverage task
			is useful for many applications such as autonomous lawn mowing, floor scrubbing,
			and snow removal, where the environment may not be known a priori or it is too
			cumbersome to input into the robot. However, the motivating application for this
			work is humanitarian de-mining, whose goal is to find and remove every land mine
			from a target region. Such an application requires provably complete coverage
			so that no land mines are missed.</p>
	
			<h5> Exact Cellular Decompositions in Terms of Critical Points of Morse Functions </h5>
			<div class="four columns u-pull-right">
				<img src="images/coverage/complete/bcd2.jpg" width="100%">
				<p class="caption">
				Exact cellular decomposition using the critical points of the slice function h(x,y)=x^2+y^2.
				</p>
			</div>
			
			<p>
			Our approach to coverage path planning problem makes use of the exact cellular 
			decomposition method. Exact cellular decompositions are structures that globally
			encode the topology of a robot's free space, while locally describing the free
			space's geometry. These structures have been widely used for path planning between
			two points, but can be used for mapping and coverage. We define exact cellular
			decompositions in terms of critical points of Morse functions where critical
			points indicate the location of cell boundaries.
			<a  href="http://mathworld.wolfram.com/MorseTheory.html">Morse theory</a>
			assures that between critical points, the structure of a space is effectively the
			same, so simple control strategies to achieve tasks, such as coverage, are feasible
			within each cell. We introduce a general framework for defining decompositions in 
			terms of critical points that are general in an m-dimensional Euclidean space.
			</p>
			<p>
			When the free space of a robot is not known a priori or it is too cumbersome to input
			into a robot, incremental construction of exact cellular decompositions becomes
			utmost important. The two main issues of incremental construction are
			</p>
			<ul id="bullets">
				<li>
					<p>Critical point sensing and</p>
				</li>
				<li>
					<p>Guaranteeing to 'see' all of them by a robot.</p>
				</li>
			</ul>
			<p>
				We develop a method that uses range sensors to sense critical points. Our method
				is practical to implement on robots that have sensor suits such as sonar rings,
				laser range finders etc.. Completeness of exact cellular decomposition is utmost
				important for applications such as humanitarian de-mining. Our algorithms
				guarantee to encounter all critical points in unknown environments. Therefore
				our incremental construction method is proven to be complete.
			</p>
		</div>
	</div>	
	<div class="row">				   
		<div class="twelve columns" style="text-align:center;">
		<div class="four columns">
			<b> Timelapse of experiment</b>
			<img src="images/coverage/complete/timelapse.jpg" width="100%;">
		</div>	
		<div class= "four columns">
			<b> Figure 1</b>
			<img src="images/coverage/complete/sensor1.jpg" width="100%;">
		</div>
		<div class= "four columns">
			<b> Figure 2</b>
			<img src="images/coverage/complete/sensor2.jpg" width="100%;">
		</div>																							
	</div>
	</div>
	<div class="row">				   
		<div class="twelve columns">			
			<div>
			<p>
			We demonstrate our critical point sensing method and the coverage algorithm
			by performing experiments with a Nomad 200 mobile robot equipped with 16 
			ultrasonic sensors. The sonar measurements are processed using the 
			<a  href="http://www.ri.cmu.edu/pub_files/pub1/choset_howie_1999_1/choset_howie_1999_1.pdf">ATM</a>
			method.	This method improves the angular resolution of the sonar measurements. 
			The	results of experiments performed in rooms with an inter-lap spacing equal
			to the robot's diameter are shown above. We outlined the boundaries of the
			obstacles and cells, and numbered the critical points in the order of appearance.
			The effect the dead reckoning is marked in figure 2.
			</p>		
			
			<h5>Coverage of Unknown Planar Environments with Extended Detector Range </h5>
			</div>
		</div>							
     </div>		
	<div class="row">
		<div class="twelve columns" style="text-align:center;">				  
			<div class="four columns">
				<img src="images/coverage/complete/SensorTri1.svg" width="80%;">
				<p class="caption"> Robot-sized </p>
			</div>
			<div class="four columns">
				<img src="images/coverage/complete/SensorTri2.svg" width="80%;">
				<p class="caption"> Range Extended </p>
			</div>
			<div class="four columns">
				<img src="images/coverage/complete/SensorTri3.svg" width="80%;">
				<p class="caption">Infinite range</p>
			</div>									
		</div>
	</div>										
		
	
	<div class="row">				   
		<div class="twelve columns">	
			<p>Our prior work in coverage prescribed a path for a circular robot of radius
			r to pass over all points in unknown spaces; in this case we set the detector
			range D to be equal to the robot's radius, r. Our prior work in Voronoi
			diagrams prescribed a path for a circular robot with infinite detector range
			delta= infinity to pass its detector over all points in an unknown bounded
			space. This work combines these results to consider ``efficient'' coverage
			with a finite-range detector with r < D < infinity. We define a new hierarchical
			decomposition with two types of cells: VAST and NARROW. In the VAST-cells, we
			treat the circular detector like a robot and re-use our critical point based
			coverage algorithm. In the NARROW-cells, since the obstacles are within the
			detector range, we effectively have an infinite-range detector, so the robot
			simply follows the Voronoi diagram. This work proves that this approach
			ensures complete coverage with extended-range detectors, which includes a
			switching procedure from VAST to NARROW-cells.</p>			
		</div>
	</div>
	
	<div class="row">				   
		<div class="twelve columns">		
			 <div style="text-align:center;">
				<img src="images/coverage/complete/animation.gif" width="50%;">						
			</div>
		</div>	
	</div>	
				<div class="row">				   
					<div class="twelve columns">						
						<p class="caption"><b>Figure 1:</b> Depiction of the stages of the incremental construction
						of the hierarchical decomposition while the robot is covering the
						space. In the graph, gray ellipses depict the VAST-cells that
						contain VAST-subcells represented as solid edges. Each VAST-subcell
						has two associated critical points represented as black dots.
						NARROW-cell is represented by the white ellipse and it contains the
						NARROW-subcells depicted as dashed edges. Hollow dots correspond to
						cusp points and gray dots represent the meet points. Double arrows
						show the links between the NARROW-cells and their neighboring
						VAST-cells.	</p>					
					</div>													
				</div>	
			
	
	<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>