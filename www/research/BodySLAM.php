<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Body SLAM - Biorobotics</title>
	<meta name="Keywords" content="Biorobotics, SLAM, Medical robot, surgical robot, medical slam, localization, mapping, simultaneous localization, minimally invasive surgery, surgery robot, HARP, extended kalman filter, kalman filter">
	<meta name="description" content ="Body SLAM - Carnegie Mellon Biorobotics" />
<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    <div class="row">
		<div class="twelve columns">       
			<h3>Body<b> SLAM </b></h3>
		</div>	
	</div>
	<div class="row">
		<div class="twelve columns">	
			<image src="images/BodySLAM/Heart1.png" alt="Heart rendering" width="100%;">
			<p style="text-align:justify;">
			Minimally invasive surgery (MIS) has been shown to reduce patient trauma
			and shorten hospitalization stays, but when operating through a small incision,
			a surgeon loses the "bird's eye view" of the operation that he or she is
			accustomed to with open surgery. A recent approach to surgical guidance, called
			image-guidance, combines tool tracking with patient specific rendered organ
			models to display a detailed computer generated 3D rendered visualization
			that the surgeon can rotate the 3D rendered models on the computer screen to
			gain a better spatial understanding of where the tool or robot is located with
			respect to an anatomical target (see above).
		
			Current image-guidance systems are limited to only specific surgeries, can be
			inaccurate, and do convey all available information. The goal of our Medical
			SLAM project is to improve the accuracy and efficacy of IGS through the adoption
			of mobile robot simultaneous localization and mapping (SLAM) algorithms to the
			medical field. SLAM is the problem of estimating an environment map with a mobile
			robot while simultaneously estimating the pose of the robot in the incrementally
			constructed map. The advantages of using SLAM for surgery are 1) the potential
			improvement in accuracy, 2) the estimation of dynamic information, and 3) the
			inference of deformation and stiffness.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns" >
		<div class="five columns" class="u-pull-left">
		<image src = "images/BodySLAM/Heart2.jpg" alt="Snake Estimation" width="100%;">
		</div>
		
		<p>Another sub-topic of our Medical SLAM project is constrained filtering for registering
		a tool to the surface models. The registration problem involves aligning the coordinate
		frame of the tool to the coordinate frame of a preoperative surface model.
		Conventionally, to register a surgical tool to medical images, the iterative closest
		point (ICP) algorithm is used. This works by touching the tool to many locations on the
		surface of an anatomical structure and then aligning the resulting point cloud with a
		point cloud extracted from the preoperative models.</p>
	
		We have developed a novel method for registration using constrained Kalman filtering.
		The technique we introduced estimates parameters for the registration problem with a
		Kalman filter. When the uncertainty of the Kalman filter reduces to a small region, the
		registration problem is solved. The filter gains information by recognizing when the
		tool/robot is in an infeasible state. To incorporate this information, we have developed
		a new method for constrained filtering called uncertainty projection. We have been able
		to demonstrate the feasibility of our constrained filtering approach with data collected
		from an experiment involving a surgical robot navigating on the epicardial surface of a
		porcine heart (see above).
		</div>
	</div>
	<h5> Papers </h5>
	<ul id="bullets">
		<li >
			<p>				
			<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/paperv7.pdf">
			Using Lie Algebra to estimate the shape of medical snake robots.</a> In the proceedings of the 27th IEEE/RSJ International Conference on Intelligent Robots and Systems (IROS), Chicago, USA, September 2014
			</p>
		</li>
		<li >
			<p>				
			<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/ICRA2012_Tully.pdf">
			Constrained Filtering with Contact Detection Data for the Localization 
			and Registration of Continuum Robots in Flexible Environments</a>
			. Proc. 2012 IEEE International Conference on Robotics and Automation (ICRA), May, 2012. 
			</p>
		</li>
		<li >
			<p>
			<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/iros11constrained.pdf">
			Inequality Constrained Kalman Filtering for the Localization and Registration of
			a Surgical Robot</a>. Proc. 2011 IEEE International Conference on Intelligent
			Robots and Systems (IROS), Sept, 2011.  
			</p>
		</li>
		<li >
			<p>
			<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/iros11snakeEstimation.pdf">
			Constrained Filtering with Contact Detection Data for the Localization 
			and Registration of Continuum Robots in Flexible Environments</a>. Proc. 2011 IEEE
			International Conference on Intelligent Robots and Systems (IROS), Sept, 2011. 
			</p>
		</li>
	</ul>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>		                        