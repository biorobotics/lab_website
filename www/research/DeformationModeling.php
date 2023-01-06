<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Deformation Modeling - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Medical Robotics">
	<meta name="description" content ="Deformation Modeling - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.x69r2uwyjwv"><b><span class="c15">Medical Robotics</b> - Deformation Modeling</span></h3><p class="c30"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 298.00px; height: 297.00px;"><img alt="" src="images/DeformationModeling/image46.png" style="width: 298.00px; height: 297.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c30"><span class="c50 c52">While the human body is rigid to a certain degree based on the skeleton, soft tissue is</span></p><p class="c61"><span class="c5">deformable in a way that does not conform to any rigid approximation, and most time soft tissues are often the target of medical interest. &nbsp;Predicting the deformation of soft tissue is a non-trivial task and thus a discipline of active research.</span></p><p class="c22"><span class="c5"></span></p><p class="c61"><span class="c5">To make this problem more challenging, we want to predict deformation in ultrasound images and use it to create synthetic data to train other machine learning techniques for tasks such as segmentation, labeling, etc.. </span></p><p class="c22"><span class="c5"></span></p><p class="c61"><span class="c5">In our current dataset to train a &nbsp;segmentation model for segmenting vessels, we probe the subject with a fixed force, thus collecting our ultrasound images at one single force value. This biases our segmentation model to segment vessels at one force value. But in the case of high-tempo, traumatic scenarios on the battlefield, the ultrasound scanning might be done at higher/lower force values, thus deforming the vessels and thus failing the current segmentation model. To alleviate this problem, we propose to augment our dataset with synthetic ultrasound images at multiple locations of the subject at multiple ultrasound probe forces.</span></p><p class="c22"><span class="c5"></span></p><p class="c61"><span class="c5">We plan to solve this problem by predicting the ultrasound image deformation/warping function which will be used to generate synthetic images. We will start by using B-Spline curves as the basis function to model the image warping function and use an iterative optimization problem, to find the location of the control points of the B-spline for the deformed image. Once we have the optimal B-spline curve as a function of the force applied, we will use that to create synthetic images at multiple force values and scanning locations. However, the true challenge of this work will lie in determining the true basis functions, beyond B-splines, that most accurately model the tissue deformation.</span></p><p class="c22"><span class="c5"></span></p><p class="c22"><span class="c5"></span></p><hr style="page-break-before:always;display:none;"><!-- <div class="six columns">
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