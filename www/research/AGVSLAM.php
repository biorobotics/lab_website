<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>AGV SLAM Research - Biorobotics</title>
	<meta name="Keywords" content="AGV SLAM, SLAM, Simultaneous Localization and Mapping, Carnegie Mellon University, robotics">
	<meta name="description" content ="AGV SLAM  Research - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>AGV SLAM</b></h3> 
			<p>
				Simultaneous Localization and Mapping (SLAM) is a well-studied area during the past 20 years, yet there is no efficient method for large-scale and long-term indoor/outdoor application.

				<br>

				The robust and efficient feature is very necessary for visual place recognition (VPR). We apply an unsupervised feature learning method, where the raw image is converted into a lower dimension code for place encoding and fast retrieval. The Major challenge for Visual Place Recognition: 

				<br>
				<ol>
					<li>
						In the real word, appearance are variant and some of them are very similar;
					</li>
					<li>
						The same place may have variant appearance under different conditions;
					</li>
					<li>
						Dynamic Objects add additional noise for place recognition;
					</li>
					<li>
						No label for Visual Place Recognition.
					</li>
				</ol>
			</p>
		</div>
		<div  class="six columns">
			<img src="images/AGVSLAM/fig1.png" alt="AGVSLAMF1" width="100%;" style="padding-left:2rem; padding-top:3rem;">
		</div>
	</div>
	<div class="row">
		<div class="six columns">
			We apply a CapsuleNet based encoder module, which has an efficient dynamic routing mechanism. As you can see in the left figure, the first several convolution layers extract out 4 properties for N local descriptors. In the Dynamic Routing step, the N local descriptors are clustered into lower dimension M descriptors (N>>M) via an Expectation-Maximum like method. And the M descriptors are actually the local feature description for the scene.

			<br>

			The module framework is an Autoencoder-GAN like framework. The CapsuleNet based Encoder is applied to extract the visual features. The Generative neural networks (GAN) is applied to ensure visual features can capture enough geometry detail to generate realistic images.

		</div>
		<div class="six columns">
			<img src="images/AGVSLAM/fig2.png" alt="AGVSLAMF2" width="100%;" style="padding-left:2rem;">
		</div>
	</div>
	<div class="row">
		<div class="six columns">
			<caption>Place Recognition under variant conditions</caption>
			<img src="images/AGVSLAM/fig5.gif" alt="AGVSLAMF5" width="100%;" style="padding-top:2rem;">
			<img src="images/AGVSLAM/fig6.gif" alt="AGVSLAMF6" width="100%;" style="padding-top:2rem;">
			<img src="images/AGVSLAM/fig7.gif" alt="AGVSLAMF7" width="100%;" style="padding-top:2rem;">
			<caption>Place Recognition under variant conditions</caption>
			<img src="images/AGVSLAM/fig3.gif" alt="AGVSLAMF3" width="100%;" style="padding-top:2rem;">
			<img src="images/AGVSLAM/fig4.gif" alt="AGVSLAMF4" width="100%;" style="padding-top:2rem;">
		</div>
		<div class="six columns">
			<caption>Scene Reconstruction from the extracted place features.</caption>
			<img src="images/AGVSLAM/fig8.gif" alt="AGVSLAMF8" width="100%;" style="padding-top:2rem;">
			<img src="images/AGVSLAM/fig9.gif" alt="AGVSLAMF9" width="100%;" style="padding-top:2rem;">
			<img src="images/AGVSLAM/fig10.gif" alt="AGVSLAMF10" width="100%;" style="padding-top:2rem;">
			<iframe width="605"height="362" src="https://drive.google.com/file/d/1kFE3Cvoc6sJdCX4BtM1Ls9QxJfLxh8v2/preview" frameborder="0" style="padding-top: 3rem" ></iframe>
		</div>
	</div>

	
	
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>