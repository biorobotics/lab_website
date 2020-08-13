<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Micro Scale Locomotion Research - Biorobotics</title>
	<meta name="Keywords" content="Registration, Point Cloud, Machine Learning, Neural Network, Deep Learning, Carnegie Mellon University, robotics">
	<meta name="description" content ="Point cloud registration with neural networks - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
	<style type="text/css">
		.masknet {
			text-align:center;
			margin:8% 5%;
			padding:2%;
			width:90%;
			border:2px #ccc dashed;
			border-radius: 10%;
		}
		.masknet p {
			margin:0;
		}
		.arrows {
			width:20%;
		}
		.arrows img {
			transform: rotate(90deg) translate(0, -120%) scale(2,2);
			margin-left:-50%;
		}
		.imageholder {
			text-align: center;
			display:inline-block;
			width:30%;
			font-size: 3vw;
			height:30vw;
			border:2px #ccc dashed;
			border-radius: 10%;
			margin:2px;
		}
		.imageholder img {
			width:100%;
		}
		.imageholder p {
			margin:0;
		}
		@media (min-width: 550px) {
			.hiddenText {
				display:none;
			}
			.imageholder {
				text-align: center;
				width:100%;
				font-size: 1rem;
				height:auto;
			}
			.imageholder img {
				width:70%;
			}
			.arrows {
				width:80%;
				margin:8% 0;
			}
			.arrows img {
				transform: scale(1.75,.9) translate(5%, 0%);
				margin-left:0;
			}
		}
		@media (min-width: 800px) {
		}
		@media (min-width: 1000px) {
			.imageholder {
				font-size: 1.5rem;
			}
		}
	</style>
	<div class="row">
		<h3>Point cloud registration with neural networks</h3>
	</div>
	<div class="row">
		<div class="six columns">
			<div class="masknet">
				<img src="images/MLRegistration/masknet.png" alt="Mask net schematic" width="100%;" style="">
				<p>Schematic representation</p>
			</div>
		</div>
		<div class="three columns">
			<div class="arrows">
				<img src="images/MLRegistration/arrows.png" alt="arrows" width="100%" style="">
			</div>
		</div>
		<div class="three columns">
			<div class="imageholder">
			<img src="images/MLRegistration/inliers.png" alt="Inlier detection example">
			<p>Inlier Detection</p>
			<p class="hiddenText"><br /></p>
			</div>
			<div class="imageholder">
			<img src="images/MLRegistration/alignment.gif" alt="Alignment example">
			<p>Alignment / Registration</p>
			</div>
			<div class="imageholder">
			<img src="images/MLRegistration/denoising.png" alt="Denoising example">
			<p>Denoising</p>
			<p class="hiddenText"><br /></p>
			</div>
		</div>
	</div>
	<div class="row">
		<p>Point clouds are unordered sets of points in 3D space, usually describing the surface of an object or a scene. Often, point clouds describe only parts of the object/scene that are visible to the sensor and not covered by occlusions. In addition, sensor noise, reflective surfaces, or other artifacts can sometimes produce points in the point cloud which do not correspond to any surface on the object or in the scene. Point clouds with missing data as well as those having extraneous points pose challenges to point cloud processing algorithms such as registration and tracking. As a result, it is important to identify which points need to be considered ‘inliers’ and which points need to be discarded and deemed as ‘outliers’. We leverage recent advancements in deep learning-based point cloud representations, to perform learning-based inlier estimation. Given a template point cloud and a source point cloud, we create a network that is trained to identify which points from the template are inliers, so that these points closely describe the same part of the object/scene geometry as the source point cloud (the blue points in the figure are the inliers). In other words, the network learns to ‘mask-out’ outliers from the template point cloud, hence we call our approach MaskNet.  This method can be used to augment existing registration algorithms to handle partial point clouds as well as be used to remove extraneous points from point cloud data</p>
	</div>
	<div class="row">
		<p><a href="#video">Video</a> | <a href="#paper">Paper</a></p>
	</div>
	<div class="row">
		<div class="three columns"><br /></div>
		<div class="six columns"><img src="images/MLRegistration/registration.gif" width="100%"></div>
		<div class="three columns"><br /></div>
	</div>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>