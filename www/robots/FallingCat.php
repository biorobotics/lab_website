<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>FallingCat - Biorobotics</title>
	<meta name="Keywords" content="FallingCat, nonholonomic motion planning
, Carnegie Mellon University, robotics">
	<meta name="description" content ="FallingCat- Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>FallingCat</b></h3>
			<h4><b>CatAstroФ</b> - Inertial reorientation of a freely falling cat using nonholonomic motion planning</h4> 
			<p>
				Cats fall, by God’s grace. They are clumsy creatures that jump off tables without thinking. We as humans find that cute and want to study it.<br>

				This project involves the design, build, and control of an inertial-reorienting robot, mimicking the cat-righting reflex of our furry feline friends. We constrained the problem to the drop height of a typical room, a cat’s normal domain or cat space, which requires full reorientation in less than 1 second. This consists of a full 180 degree reorientation landing on its feet. We designed and built a two degree of freedom system consisting of two revolute joints at perpendicular offset to accomplish this.<br>

				When falling, a cat has an innate ability to reorient mid-air to land on its feet, known as the cat-righting reflex. The purpose of this project was to replicate this biological prodigy by designing and building a robot that can reorient mid-air and land on its feet. Much like a parallel-parking car, the system is nonholonomic and the solution is not a simple step trajectory. To complicate this problem further, the falling cat must reorient very quickly and the dynamics are entangled with inertial coupling. While a cat’s spine has many degrees of freedom and leg movement allows for variable inertia, we simplified the problem to a two degree of freedom model with constant inertia. <br>

				<ul type="square"><b>CURRENT ROBOT:</b> 
					<li>Open loop trajectory with IMU sensor</li>
				</ul>
				<ul type="square"><b>FUTURE ROBOT:</b> 
					<li>Stabilizing feedback (almost there)</li>
					<li>Replanning while falling</li>
				</ul>
			</p>
		</div>
			<div class="three columns">
				<img src="images/FallingCat/fig2.png" alt="FallingCatF2" width="100%;" style="padding-left:1rem; padding-top: 24rem">
				<img src="images/FallingCat/fig3.png" alt="FallingCatF3" width="100%;" style="padding-left:1rem; padding-top: 5rem; padding-bottom: 10rem">
				<p>
					<b>CURRENT TEAM: </b>
					<a href = "mailto:screws@andrew.cmu.edu">Steve Crews</a>, 
					<a href = "mailto:sapana@andrew.cmu.edu">Sapan Agrawal</a>, 
					<a href = "mailto:sapana@andrew.cmu.edu">Sidney “Mickey” Velado</a> <br>
					<b>PAST TEAM MEMBERS:</b> 
					<a href = "mailto:sapana@andrew.cmu.edu">Daniel Piedrahita</a>, 
					<a href = "mailto:sapana@andrew.cmu.edu">Joey Wood</a>
				</p>
			</div>
			<div  class="three columns">
				<img src="images/FallingCat/fig1.png" alt="FallingCatF1" width="80%;" style="padding-left:1rem; padding-top: 5rem;">
			</div>
		</div>
	</div>
	<div class="row" style= "padding-top: 3rem;">
		<center>
			<iframe width="800" height="500" src="https://www.youtube.com/embed/rq2wpRNUbDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</center>
	</div>

	
	
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>