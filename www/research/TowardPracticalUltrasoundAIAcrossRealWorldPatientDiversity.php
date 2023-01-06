<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Toward Practical Ultrasound AI Across Real-World Patient Diversity - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Medical Robotics">
	<meta name="description" content ="Toward Practical Ultrasound AI Across Real-World Patient Diversity - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.rsq3piq24ldu"><span>Medical Robotics</b> - Toward Practical Ultrasound AI Across Real-World Patient Diversity</span></h3><p class="c12"><b><span class="c5"></span></p><p class="c21"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 301.00px; height: 298.00px;"><img alt="" src="images/TowardPracticalUltrasoundAIAcrossRealWorldPatientDiversity/image100.png" style="width: 301.00px; height: 298.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c18"><span class="c5">In the case of high-tempo, traumatic scenarios on the battlefield, real-time ultrasound (US) imaging serves as an enabler for countless possible robotic interventions. Having the ability to automatically segment anatomical landmarks in the body, such as arteries, veins, ligaments, and veins, for percutaneous procedures remains to be a difficult task, even in &ldquo;well-controlled&rdquo; settings such as hospitals where physicians and other caregivers, with considerable training, and therefore such procedures may experience complications. Performing percutaneous procedures outside of the hospital, in the field, presents additional challenges, when considering all the situations in which medical care is being delivered. These situations can be in the aftermath of a natural disaster or in a combat or hostage situation. Our goal is to create AI tools that assist the medical caregiver, either in centers of medical excellence, in rural hospitals, or in the field, deliver medical care in the form of percutaneous interventions.</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">We have chosen ultrasound imaging to assist, really close the loop, for needle insertion in the field because ultrasound is low-cost, portable, and radiation-free. The problem with ultrasound is that it is often difficult to interpret, therefore making percutaneous interventions even more difficult, both for human caregivers and the medical AI that supports them. Therefore, the medical AI tools that we create using ultrasound to close the loop therefore must consider the countless domains across body types, potential traumatic injury scenarios, and imaging artifacts. </span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 252.00px;"><img alt="" src="images/TowardPracticalUltrasoundAIAcrossRealWorldPatientDiversity/image15.png" style="width: 624.00px; height: 252.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c13">For medical AI, we harness the power of deep neural networks because they can learn </span><span class="c1">a more complex, non-linear function and, therefore, given sufficient training data, deep neural networks more easily discriminate among different classes. In other words, they are better function approximators. The drawback of deep neural networks is that they are data hungry, and therefore </span><span class="c5">require significant amounts of diverse datasets. This can be time consuming and expensive, especially when you need a trained profession, like a physician, to label data. </span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">This work proposes a method for enhancing deep learning models&rsquo; capabilities by generating synthetic, or augmented, data which is transformed in a manner designed to account for various body types, injury scenarios, and imaging features. Our goal is to research a learning-based data augmentation method which can adaptively generate augmented images for learning invariances across various anatomical shapes and imaging artifacts. We further explore additional perspectives with which to apply similar ideas, such as transfer learning.</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 138.67px;"><img alt="" src="images/TowardPracticalUltrasoundAIAcrossRealWorldPatientDiversity/image110.png" style="width: 624.00px; height: 138.67px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c0 c51"><span class="c16 c11 c36"></span></p><p class="c2"><span class="c5"></span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c50 c38 c13">Relevant Publications:</span></p><p class="c18"><span class="c5">Wanwen Chen, Kathan Nilesh Mehta, Bhumi Dinesh Bhanushali and John Galeotti, &quot;Ultrasound-Based Tracking Of Partially In-Plane, Curved Needles,&quot; 2021 IEEE 18th International Symposium on Biomedical Imaging (ISBI), 2021</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c13">Alex Ling-Yu Hung, Edward Chen, and John Galeotti, &ldquo;Weakly-and semi-supervised probabilistic segmentation and quantification of ultrasound needle-reverberation artifacts to allow better ai understanding of tissue beneath needles,&rdquo; 2021</span></p><p class="c2"><span class="c50 c52"></span></p><p class="c18"><span class="c5">Edward Chen, Tejas Sudharshan Mathai, Vinit Sarode, Howie Choset, and John Galeotti, &ldquo;A Study of Domain Generalization on Ultrasound-based Multi-Class Segmentation of Arteries, Veins, Ligaments, and Nerves Using Transfer Learning,&rdquo; NeurIPS Machine Learning for Health Workshop (ML4H), 2020</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">Edward Chen, Howie Choset, and John Galeotti, &ldquo;Uncertainty-based Adaptive Data Augmentation for Ultrasound Anatomical Variations,&rdquo; 2021 IEEE 18th International Symposium on Biomedical Imaging (ISBI), 2021 (Accepted as oral presentation)</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">Edward Chen, Howie Choset, and John Galeotti, &ldquo;Ultrasound AI for RoboTRAC in Far-Forward Environments: Live-Pig Identification of Femoral Arteries, Veins, Ligaments, and Nerves,&rdquo; Military Health System Research Symposium (MHSRS), 2020</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">Edward Chen, Abhimanyu, Vinit Sarode, Howie Choset, and John Galeotti, &ldquo;Multi-Class Bayesian Segmentation of Robotically Acquired Ultrasound Enabling 3D Site Selection along Femoral Vessels for Planning Safer Needle Insertion,&rdquo; 2021</span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c5">Edward Chen, Tejas Sudharshan Mathai, Howie Choset, and John Galeotti, &ldquo;Stochastic Temporal Data Augmentation for Adaption to Out-of-Distribution Temporal Features,&rdquo; 2021 </span></p><p class="c2"><span class="c5"></span></p><p class="c18"><span class="c13">Project Page: </span><span class="c29 c13"><a class="c24" href="https://www.google.com/url?q=http://biorobotics.ri.cmu.edu/research/UltrasoundGeneralization.php&amp;sa=D&amp;source=editors&amp;ust=1672867222569483&amp;usg=AOvVaw1yH087liqU9Jfa3Qdd_tBO">http://biorobotics.ri.cmu.edu/research/UltrasoundGeneralization.php</a></span></p><p class="c41 c51"><span class="c16 c11"></span></p><p class="c41 c51"><span class="c16 c11"></span></p><p class="c41 c51"><span class="c16 c11"></span></p><!-- <div class="six columns">
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