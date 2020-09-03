<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Efficient Generalization of Ultrasound Imaging for Medical Robotics</title>
	<meta name="Keywords" content="Ultrasound domain generalization
, Deep learning , medical, medical imaging, medical robotics, Carnegie Mellon University, computer vision, robotics">
	<meta name="description" content ="Ultrasound Efficient Domain Generalization Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="eight columns">
			<h3><b>Efficient Generalization of Ultrasound Imaging for Medical Robotics</b></h3>
			<p>
				Ultrasound is small, cost-effective, and portable, but to be useful in clinical scenarios, such technology must be accurate and robust to variations in unseen domains, such as anatomical variations, different scanners and imaging settings, external artifacts, probe position etc. As such, using ultrasound to automatically identify classes such as arteries, veins, ligaments, and nerves would be useful in providing diagnostic measures (ex. intima-media thickness), catheter placement, and in robot-assisted interventions.  The caveat is that such performance is too often only applicable to a single domain. Especially within the field of medical imaging, a major hurdle in applicability to real clinical scenarios requires that the model be able to achieve superior performance on as many different scenarios as possible. Standard approaches that use a single-distribution training dataset will often produce good inference results only on a test set drawn from a similar or equivalent distribution. A theoretical brute-force approach would be to create a training dataset consisting of all possible distributions, but present methods are far from even beginning to approach this seemingly unbounded very high dimensional space in which every patient is unique. When coupled with the extensive time and medical expertise often required for gathering labelled data, achieving appropriate generalization capabilities by merely obtaining massive amounts of labelled data becomes prohibitive. Therefore, our ultimate goal is to be able to achieve little to no performance degradation on unseen ultrasound image domains in as much of a time and data efficient manner as possible.

				<br>

				To accomplish such a task, we are exploring and have made scientific advancements in transfer learning, data augmentation, next-best-view, and noisy image/label handling. 
				Since current understanding of transfer learning for ultrasound imaging is extremely limited, we have explored several different combinations of transfer learning techniques to illustrate how generalization and data efficiency can be improved with existing datasets. We are also working to create novel methods for enhancing the performance benefits of transfer learning, with regards to not just the target dataset but also to unseen ones. Data augmentation, on the other hand, proves to be an inexpensive method for obtaining larger datasets, albeit with synthetic data. We are actively developing new methods for enhancing domain generalization using data augmentation in an online, adaptive manner. 


				<br>

				With the goal being to embed this work within the medical robotics space, we are also actively exploring methods for using the computer-vision based results to inform robot mechanical motion during ultrasound scanning – a form of active vision recognition. In doing so, we aim to develop methods for more efficiently and actively training and enhancing model generalization along with intelligently searching for health-critical points on the subject. Along with the success of this work, similar concepts can be utilized in all other areas of medical imaging to advance the state of AI-enabled health care.
			</p> 
		</div>
		<div class="four columns">
			<img src="images/UltrasoundGeneralization/robot-4.jpg" alt="UltrasoundGeneralizationF2" width="100%;" style="">
			<img src="images/UltrasoundGeneralization/vessels-1.png" alt="UltrasoundGeneralizationF3" width="49.5%;" style="">
			<img src="images/UltrasoundGeneralization/vessels-2.png" alt="UltrasoundGeneralizationF4" width="49.5%;" style="">
			<img src="images/UltrasoundGeneralization/vessels-3.png" alt="UltrasoundGeneralizationF5" width="49.5%;" style="">
			<img src="images/UltrasoundGeneralization/vessels-4.png" alt="UltrasoundGeneralizationF6" width="49.5%;" style="">
			</div>

		</div>
	</div>
	<div class="row" style= "padding-top: 3rem;">
		<center>
			<iframe width="800" height="500" src="https://www.youtube.com/embed/y8yLE6jScnY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</center>
	</div>

<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>
