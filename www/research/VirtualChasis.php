<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Virtual Chasis - Biorobotics</title>
	<meta name="Keywords" content="Biorobotics, snake robot, robot control, snake control, gaits, snake gaits, robot gaits, gait parameters, snake feedback, robot feedback, sensor feedback, virtual chassis, body frame, robot frame, state estimation">
	<meta name="description" content ="Virtual Chasis Research - Carnegie Mellon Biorobotics" />
<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
                <p>
				<h3> <b> VirtualChasis </b></h3>
				</p>
				<div style="text-align:center">
				<img  src="images/VirtualChasis/fig_1.png" alt="Snake Estimation" width="75%;">
				</div>
				<p>
				The goal of this project is to use the sensors in our snake robots to better estimate their state. By
				'state' we mean their pose in the world (position and orientation) and parameters that describe their
				shape or internal configuration (gait parameters and/or joint angles). This is an important step towards
				making the snakes autonomous and towards providing better feedback information to a remote operator.
				The work so far has focused mainly on estimating the robot's orientation in the world by fusing data
				from the joint encoders, accelerometers and gyros in each module of the snake.
				</p>
				<p>
				 Overall, there are two big themes to this work:
				
				<ul id="bullets">
					<li>
						<p>
						Using the <b>virtual chassis</b> as the body frame for the snake lets us use really simple models to
						accurately describe the motion of the snake over time.
						</p>
					</li>
					<li>
						<p>
						Using <b>gait parameters</b> as the state of the robot:
						</p>
						<ol>
						<li>
							Reducing the size of the state, letting the filter run faster.
						</li>
						<li>
							Providing feedback in the same intuitive framework that we use for control. For example we
							don't really care what our 16 joint angles are. We care more about what the macroscopic 
							amplitude and spatial frequency of the robot is.
						</li>
						</ol>
					</li>
				</ul>
				</p>
				
				<p>			
				<h5> Virtual Chassis </h5>			
				<p>
			
				A significant challenge with snake robots involves repre- senting motion. In particular, defining a body
				frame in which to intuitively model external motion in the world is difficult. Since the internal shape
				changes that a snake robot uses to locomote involve the entire body, no coordinate frame that is static
				with respect to a single point on the robot intuitively represents position and orientation of the 
				entire robot throughout a complete gait cycle.
				</p>
				<div style="text-align:center;">
				<img  src="images/VirtualChasis/fig_2.png" alt="Bicycle Example" width="75%;">
				</div>
				<p>
				To illustrate this problem, consider a simple two-wheeled differential drive robot with a body frame fixed
				at the center of the chassis. Remotely operating such a device is an easy task because the controls, which
				are provided in the body coordinate frame, map intuitively into a world frame. In the case of highly
				articulated mechanisms like the snakes, an operator can still control the snakes with a sense of the 
				robot's position and orientation. However, the intuition for this frame lies solely with the operator, and
				is drawn from observing the system as a whole rather than a single module. Similarly, we would like to
				formally define a body frame that is based on the configuration of the entire system rather than one that
				is fixed to some point. Additionally, the separation of the robot's internal shape changes from its
				external motions made possible by this body frame can allow much simpler motion models to accurately
				describe the robot's motion in the world.
				
				</p>
			<div class="row">
				<div class="twelve columns">	
				<div class="four columns">
				<img src="images/VirtualChasis/fig_3.png" alt="Virtual Chassis" width="100%;">
				</div>
				<p>
				The overall method of deriving the virtual chassis can be thought of as performing
				<a href="http://en.wikipedia.org/wiki/Principle_component_analysis"> principal component analysis (PCA) </a>
				on zero-mean data. Specifically, this is done by taking the
				<a href="http://en.wikipedia.org/wiki/Singular_value_decomposition">singular value decomposition (SVD) </a>
				of the positions of all of the robot's modules with respect to the center of mass. Note that this body frame
				will be different with respect to the frame of the head module (and any other module in the snake) at every
				point in the gait cycle. What we gain in exchange for this complexity is a body frame that is instead
				consistent with respect to the overall shape snake across all positions of a gait cycle.
				</p>
				</div>
			</div>							
				<p style="text-align:center;">
				<h5>Gait Parameters</h5>
				</p>
		<div class="row">		
			<div class="twelve columns">	
			
				<div class="five columns">
				<img  src="images/VirtualChasis/fig_4.png" alt="Virtual Chassis" width="100%:">
				</div>
				
				<p>				
				The parameterized gaits that we use with our snake robots enable an intuitive mapping between changes in
				a handful of parameters and motion of the robot through the environment. Despite having this powerful
				low-dimensional control framework for commanding motions for our snake robots, closing the loop using
				this framework has proved to be difficult.  To generate motions for the robot, at each timestep in the
				controller gait parameters are dictated, from which the desired joint angles are generated for the
				n-modules of the robot.  Each module in the robot contains a low-level controller that tries to drive
				its joint angle to the desired angle, and provides feedback on the module's actual joint angle.			
				</p>
				
				<p>
				The challenge comes in finding an intuitive way to incorporate this low-level feedback into our high-level
				gait-based control.  In a sense, we need to find a way in which the low-level errors of individual joints
				can 'complain' in a meaningful way to a high-level controller built around gait parameters that specify
				whole-body motions.  Essentially, our work closes the loop by running gait functions the other way - given
				a set of joint angles, we fit a parameterized gait function that best describes the shape of the robot.
				We fit gait parameters to the robot's feedback joint angles at each timestep using an
				<a href="http://en.wikipedia.org/wiki/Extended_Kalman_filter"> extended Kalman filter (EKF)</a>. Doing
				this allows the controller to know the state of the snake in a language that it (and the operator)
				understands: gait parameters.
				</p>
				</div>
				</div>
			
	
				<p>						
				<h5> Videos</h5>
				</p>
	<div class="row">		
		<div class="twelve columns">		
				<div class="six columns">
                    <div class="video-container">
                    <iframe width="100%;" src="http://www.youtube.com/embed/N13NstB5pVc?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
				<div class="six columns">
                    <div class="video-container">
                    <iframe width="100%;" src="http://www.youtube.com/embed/XdWe9NvTVog?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
		</div>
	</div>
	<div class="row">		
		<div class="twelve columns">
				<p>
				<h5> Papers</h5>
				</p>
				<ul id="bullets">
				<li>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/ICRA2012_Enner.pdf">
					Simplified Motion Modeling for Snake Robots (2012)</a>
				</li>
				<li>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/iros2011_rollinson_1.pdf">
					Virtual Chassis for Snake Robots (2011)</a>
				</li>
				<li>
					<a href="http://biorobotics.ri.cmu.edu/papers/paperUploads/iros2011_rollinson_2.pdf">
					State Estimation for Snake Robots (2011)</a>
				</li>
			</ul>
		</div>
	</div>			
    <!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>                       