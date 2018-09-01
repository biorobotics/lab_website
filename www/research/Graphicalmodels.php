<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Graphical models Research - Biorobotics</title>
	<meta name="Keywords" content="Biorobotics, Graphical models, Generalized Learning ,Inference Based Graphical Models,Carnegie Mellon University, coordinating stable locomotion ">
	<meta name="description" content ="Graphical models Research - Carnegie Mellon Biorobotics" />
<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    <div class="row">
		<div class="twelve columns">       
			<h3>Generalized Learning using Inference Based Graphical Models.</h3>
		</div>	
	</div>
	<div class="row">
		<div class="twelve columns">	
			<p style="text-align:justify;">
			This project addresses the challenge of coordinating stable locomotion in a modular underactuated robot while facing an unstructured, dynamically changing environment or the robot morphology. The goal is thus to develop a new framework that reasons over and reactively adapts the behaviors of articulated robots based on imperfect models of the environment and the desired task objectives. Specifically, we aim to learn probabilistic models that infer distributions of parameterized behaviors that will be used to select, combine, and transfer useful motions between different platforms based on data collected over multiple time scales. 

			<br>

			The proposed framework can be used as a generalized tool for a variety of robotic applications. Our milestones are:
	
			</p>
		</div>
	</div>
	<div class="row">
		<ol>
			<div class="six columns" class="u-pull-left">
				<li>
					<p>Using the Inference Model approach for online automated gait transition in an unknown environment.</p>
					
					<image src = "images/Graphicalmodels/fig1.png" alt="GraphicalmodelsF1" width="70%;">

					<p>For example: Transition between walk in place ( top row ) and a walk forward ( bottom row ) gait. </p>
				</li>
			</div>
			<div class="six columns" class="u-pull-right">
				<li>
					<p>Using the Graphical Model to infer behaviour parameters across different platforms in order to generalize learning. In other words, we can transfer the learned parameters across robots of different kinematic configurations. </p>
					
					<image src = "images/Graphicalmodels/fig2.png" alt="GraphicalmodelsF2" width="40%;">

					<p>A simple architecture is shown above where we ‘Learn’ a model for the snake Monster and use a graphical model to infer the parameters for a humanoid for performing the same task.</p>
				</li>
			</div>
		<div class="row">
			<div class="seven columns" class="u-pull-left">
				<li>
					<p>Using the Inference Model to infer the environmental constraints and plan its trajectory.</p>
					
					<image src = "images/Graphicalmodels/fig3.png" alt="GraphicalmodelsF3" width="40%;">

					<p>This is a collaborative project between Dr Matthew Travers (Carnegie Mellon University) and Dr Tom Howard (University of Rochester).  </p>
				</li>
			</div>
			<div class="five columns" style="padding-top: 10rem; padding-right: 10rem;">
				<b>Research Team:</b> <a href="mailto:rchavali@andrew.cmu.edu">Raghu Aditya Kiran Chavali</a> (CMU),<a href="mailto:rNkent2@cs.rochester.edu"> Nathan kent</a> (UR), <a href="mailto:mnapoli5588@gmail.com ">Mike Napoli</a> (UR)
			</div>
		</ol>
		</div>
	</div>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>		                        