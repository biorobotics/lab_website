<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Machine Learning Research - Biorobotics</title>
	<meta name="Keywords" content="Biorobotics, machine learning research, parameter optimization, gait optimization, snake learning, snake robot, bayesian optimization, system model">
	<meta name="description" content ="Fullabot - Carnegie Mellon Biorobotics" />

<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
	<div class="row">
		<div class="twelve columns">
			<h3><b>Machine Learning</b> for Locomotion</h3>
		</div>
	</div>
	<div class="row">
		<div class = "four columns">
			<img src= "images/machineLearning/top1.jpg" alt="Snake Estimation" style="width:100%">
		</div>
		<div class = "four columns">
			<img src= "images/machineLearning/top2.png" alt="Snake Estimation" style="width:100%">
		</div>
		<div class = "four columns">
			<img src= "images/machineLearning/top3.jpg" alt="Snake Estimation" style="width:100%">
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p>
			One of the central goals of the lab's research is improving the
			locomotive capabilities of the snake robots -- or more generally,
			improving the performance of teleoperated systems with complex,
			difficult to model dynamics.  One approach is to use human intuition
			to modify the control of the robot, but this can be limited as the
			complexity of the system and environment grows.  Furthermore, the
			snake robots have no analytic motion model that generalized well to
			all terrains, which prevents the straightforward application of many
			traditional robotic planning techniques and rigorous theoretic
			approaches such as geometric mechanics.

			Instead, we look to the successes in the field of machine learning to
			help tune our existing controllers and develop new ones.  In doing so,
			we build off many of the core ideas and lessons learned from parallel
			research within our lab as well as others -- the virtual chassis for
			improved processing of feedback, insights about the need for
			gait-based approaches from geometric mechanics, and our extensions of
			the serpenoid-curve gait model from Hirose's pioneering work.
			</p>
			<h5>Expensive Optimization</h5>
			<div  class="five columns u-pull-right">
				<img src= "images/machineLearning/fig1.png"
					 alt="Robot Speed vs Parameter Value" width="100%;">

			</div>
			<p>
			When optimizing the performance (speed, efficiency, robustness, etc.)
			of difficult-to-model systems such as the snake robot, sometimes the
			only method to test a set of control parameters  is to evaluate the
			parameters on the real robot. Unfortunately, each of these evaluations
			can take considerable time, which can be limited when working with a
			physical robot. Therefore, this optimization must be performed with
			consideration for the limited number of available evaluations.
			</p>
			<p>
			Furthermore, many traditional optimization methods (such as gradient
			ascent) assume that any objective function evaluation is paired with
			the value of the gradient at that point, whereas evaluations of
			physical systems or large simulations often do not provide this
			information.
			</p>
			<p>
			We use principles from the field of Bayesian Optimization to
			sequentially optimize the locomotive performance of the snake robots.
			Rather than quickly choosing the next experiment parameters to test on
			the robot, all previous data is used to make a careful, statistical
			tradeoff between exploring unknown parameters and tuning
			well-performing parameters. Whereas typical non-expensive optimization
			approaches only take microseconds to choose parameters,  but require
			many evaluations on the robot to find the best parameters; expensive
			optimization methods can take a few seconds to select these parameters
			but result in drastically fewer robot experiments to converge to the
			best parameters.
			</p>
			<p>
			These methods consider all previous experimental data in the
			optimization by building a global approximation of the system's
			performance.  This approximation includes both the expected value of
			the system performance as well as uncertainty in that estimate.  For
			the subsequent tests on the robot, the paramter value which maximizes
			a statistical tradeoff such as Expected Improvement is chosen.
			</p>
			<h5>Improving Robot Performance</h5>
			<p>
			By applying these machine learning techniques to the robot, we are
			able to successfully optimize the performance of our existing gaits
			for various tasks, such as sidewinding locomotion up a steep slope.
			We have also used extensions of our work to tackle more complex
			challenges, such as optimizing an controller that can adapt to varying
			environmental conditions, and finding the Pareto optimal solutions for
			the multi-objective task of maximizing head stability while
			simultaneously maximizing locomotive speed.
			</p>
		</div>
	</div>
	<div class="row">
		<div  class="six columns">
			<img src= "images/machineLearning/fig2.png" alt="Snake Estimation"
				style="width: 100%">
		</div>
		<div  class="six columns" style="text-align:center">
			<img src= "images/machineLearning/fig3.jpg" alt="Snake Estimation"
				 style="margin-left:2rem; width:50%;">
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<h5> Papers</h5>
			<ul id="bullets">
				<li>
					<a href="http://www.cs.cmu.edu/~mtesch/publications/IROS2011a.pdf">
					Using Response Surfaces and Expected Improvement to Optimize Snake Robot Gait Parameters  (2011)</a>
				</li>
				<li>
					<a href="http://www.cs.cmu.edu/~mtesch/publications/IROS2011b.pdf">
					Adapting Control Policies for Expensive Systems to Changing Environments (2011)</a>
				</li>
				<li>
					<a href="http://www.cs.cmu.edu/~mtesch/publications/NIPS2012-paper.pdf">
					Expensive Multiobjective Optimization and Validation with a Robotics Application (2012)</a>
				</li>
			</ul>
		</div>
	</div>
	
<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>