<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Geometric Mechanics - Biorobotics</title>
	<meta name="Keywords" content="geometric mechanics, holonomic constraints, internal shape change, robot locomotion, robot control, locomotion, gait, differential geometry, vector field, underactuated systems, body velocity">
	<meta name="description" content ="Geometric Mechanics - Carnegie Mellon Biorobotics" />
	
<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
	<div class="row">
		<div class="twelve columns">
            <h3><b>Geometric Mechanics </b> of Locomotion</h3>
			<div class="four columns">
			<img src="images/geometricMechanics/kinsnakemodel.png" alt="" width="100%;">
			</div>
			<p><b>Locomotion</b>
			is the means by which systems use internal shape changes to move 
			through the world, and is one of the most fundamental actions performed 
			by robots and living organisms.</p>
			<p><b>Geometric mechanics</b>
			 is the application of differential geometry to problems in classical 
			mechanics. By studying locomotion with geometric tools, we can make 
			rigorous statements about systems' motion capabilities.</p>
			<p> The <span  style="font-style : italic;">three-link kinematic snake</span>
			shown above propels itself by using shape changes (changes to the 
			internal joint angles) to push against the passive wheels on the links. 
			These wheels act as <span style="font-style:italic;">nonholonomic constraints 
			</span>that prevent lateral translation while allowing free longitudinal and rotational 
			motion of each link. Using the framework of geometric mechanics, this 
			locomotory effect can be quantified and qualified, leading to the 
			identification of patterns of motion that produce a desired net 
			displacement.</p>
	</div>
		</div>
			<p>This research focuses on two aspects of geometric mechanics in locomotion: improving
			<span  style="font-style : italic;"> approachability</span> of the material to non-specialists and
			<span  style="font-style : italic;">optimally choosing the coordinates</span> used in these analyses.</p>
		
			<h5>Approachability</h5>
	<div class="row">
		<div class="twelve columns">	
			<p>Geometric locomotion 
			studies have produced powerful tools for system analysis. Unfortunately,
			the inherent basis of these studies in differential geometry often acts
			as a barrier to entry for non-specialists who otherwise might benefit 
			from applying the resulting tools to a broader set of systems. In many 
			cases, however, the largest barrier is one of language rather than 
			concept, in that the differential geometric terms in which the results 
			are presented have dual concepts in vector calculus. <br></p>
			
			<p>In my thesis work I 
			emphasize these more familiar vector-calculus terms wherever possible, 
			noting the more formal nomenclature but keeping it out of the main 
			development if a simpler description will suffice. Some of these 
			simplified developments also lead to novel graphical representations of 
			system kinematics. For instance, a <span style="font-style:italic;"> one-form</span>
			is a structure commonly encountered in differential geometry, defined 
			as a "linear map from vectors to scalars." This structure is 
			functionally equivalent to the more familiar concept of a vector field 
			with a dot product, and thinking in such vector terms provides an avenue
			for a newcomer to the field to draw on prior knowledge and intuition. 
			Making this vector analogy led us to develop the <span style="font-style:italic;"> connection
			vector field</span> as an illustration of the <span style="font-style:italic;"> local connection</span>,
			a set of one-forms used in geometric mechanics to describe the 
			relationship between shape velocities and the position velocities they 
			induce.</p>
			</div>
		</div>
			
			<div style="text-align:center">				
			<img src="images/geometricMechanics/vecfieldsannotated-eps-converted-to.png" alt="" width="75%;">
			</div>				
				
		<div class="row">
			<div class="twelve columns">			
			<p>The connection vector 
			fields for the three-link system at the top of this page are shown 
			above. Each of the longitudinal, lateral, and rotational components of 
			the position velocity has a corresponding vector field defined over the 
			shape space (the space of joint angles), and the velocity produced by a 
			given input shape velocity is found by taking its dot product with each 
			field.&nbsp; Here, the vector <b>a </b>is aligned 
			with the longitudinal field and orthogonal to the rotational field, so 
			it produces a pure positive longitudinal translation. In contrast, the 
			vector <b>b</b> is orthogonal to the longitudinal 
			field and anti-aligned with the rotational field, so it produces a pure 
			negative rotation with no translation. The field for lateral motion has 
			zero magnitude because the lateral direction of the body frame is&nbsp; 
			always aligned with the constraint on the middle link.
			
			<h5>Optimal Coordinates</h5></p>
	
			<p>As in many other areas of 
			math and engineering, differential geometry makes heavy use of 
			coordinate invariance - the idea that structures exist independently of 
			the coordinates used to describe them and are unaltered by a change of 
			coordinates.&nbsp; What is less well recognized, however, is that 
			coordinate invariance is in many cases an inherently <span style="font-style:italic;"> local</span>
			property, and that the choice of coordinates can play an important role
			in analysis of systems' macroscopic behavior. A primary result in my 
			thesis is finding optimal coordinates for locomotion study.
		
			<p>Locomotion is often accomplished by <span style="font-style:italic;"> gaits</span>, cyclic shape changes with
			characteristic net displacements.<span style="font-style:italic;">  Lie bracket averaging </span> is
			a powerful technique for finding gaits that produce desired net 
			displacements without simulating each one individually. In vector 
			calculus terms, the Lie bracket is a set of functions over the shape 
			space that are related to the curls of the connection vector fields. The
			average position velocity of the system produced by a differential 
			oscillation (small-amplitude gaits) in the shape corresponds to the 
			magnitudes of these functions at the center of the oscillation - each 
			function corresponding to one direction in the body frame.
		
			<p>For larger, non-differential gaits, which are closed curves in the shape 
			space, the average velocity (or net displacement over each cycle) can be
			 approximated by integrating the Lie bracket over the area of the shape 
			space enclosed by the gait. This principle is closely related to 
			Stokes's theorem, which equates the line integral of a vector field 
			along a closed curve to the area integral of the curl of the vector 
			field over the area bounded by the curve. The quality of this 
			approximation is inversely proportional to the amount the system rotates
			 during the gait, which until recently was regarded as a property of the
			 system and the gait.
		
			<p>In my
			 research, I have found that the choice of body frame also affects the 
			amount of intermediate rotation and that this choice can be 
			systematically optimized to minimize the rotation. For instance, 
			consider two choices of body frame, one taken from the middle link of 
			the system and one based on its medial line (and center of mass):</p>
			</div>
			</div>
		<div class="row">
			<div class="twelve columns">	
				<div style="text-align:center">				
					<div class="six columns">
					<img src="images/geometricMechanics/originaltheta0_flat.png" alt="" width="50%;">
					</div>		
					<div class="six columns">	
					<img src="images/geometricMechanics/meantheta0_flat.png" alt="" width="50%;">
					</div>
				</div>
	
			<p> In 
			each figure, the three-link system is shown with &Theta; = 0 for different 
			shapes. At a basic level, the medial-line coordinates on the right 
			provide a more intuitive representation of the system's position, with 
			the head-to-tail relationship much more consistent across the shapes 
			than it is with the middle-link coordinates on the left.</p>
		
			<p>The 
			medial line also rotates much less than the middle link in response to 
			shape changes. Qualitatively, the middle link generally counter-rotates 
			with respect to the outer links when the joints are moved; the medial 
			line counter-rotates to the middle link, and so ends up rotating very 
			little as the system changes shape. Consequently, the Lie bracket 
			approximation techniques work significantly better when used with the 
			medial line coordinates rather than the link-based coordinates.<br></p>
		
			<p>Medial
			lines for a three-link system are weighted averages of the orientations
			of the three links. To find the best set of weights, or to choose 
			coordinates for other systems, I have developed a quantitative means of 
			optimizing the coordinates. This approach is based on the 
			Hodge-Helmholtz decomposition of a vector field (or one-form) into a divergence-free
			field that is the vector field with smallest mean squared magnitude that has the same
			curl as the original field and a curl-free field that is the
			conservative (gradient) field that best approximates the original field.</p>
		
			<p>When 
			this decomposition is applied to the connection vector field for 
			rotation in arbitrarily chosen coordinates, the divergence-free 
			component is the smallest-possible rotation connection vector field for 
			the system (producing the least-possible rotations), and the curl-free 
			component is the gradient of the coordinate change with respect to the 
			system's shape:</p>
			</div>
			</div>
			<div class="row">
			<div class="twelve columns">	
			<div style="text-align:center">
						<img src="images/geometricMechanics/droppedImage.png" alt="" width="50%;">
					</div>
				</div>
			</div>
			
			<h5>Further Reading</h5>
			
				<ul id="bullets">
				  <li style="line-height:22px; padding-left: 18px; text-indent: -18px; " value="1">
					<p style="text-indent: -18px; ">1) R.&nbsp;L. Hatton and H.&nbsp;Choset. <a class="class1" title="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=5509876" href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=5509876">Optimizing Coordinate Choice for Locomoting Systems</a>. In the Proceedings of the IEEE International Conference on Robotics and Automation, May 2010. <a title="http://biorobotics.org/papers/ICRA2010_Hatton_Choset_Coordinates.pdf" href="http://biorobotics.org/papers/ICRA2010_Hatton_Choset_Coordinates.pdf">PDF</a> <br></p>
				  </li>
				  <br />
				  <li style="line-height:22px; padding-left: 18px; text-indent: -18px; " value="2">
					<p style="text-indent: -18px; " >2)<span style="width: 4px; " class="inline-block"></span>R.&nbsp;L. Hatton and H.&nbsp;Choset. <a title="http://www.roboticsproceedings.org/rss05/p6.pdf" href="http://www.roboticsproceedings.org/rss05/p6.pdf">Approximating Displacement with the Body Velocity Integral</a>. In the Proceedings of Robotics: Science and Systems, Seattle, USA, June 2009. <a title="http://biorobotics.org/papers/2009RSS_Hatton_Choset_BVI.pdf" href="http://biorobotics.org/papers/2009RSS_Hatton_Choset_BVI.pdf">PDF</a><br></p>
				  </li>
				  <br />
				  <li style="line-height:22px; padding-left: 18px; text-indent: -18px; " value="3">
					<p style="text-indent: -18px; ">3) R.&nbsp;L. Hatton and H.&nbsp;Choset. <a title="http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&amp;arnumber=4762831" href="http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&amp;arnumber=4762831">Connection Vector Fields for Underactuated Systems</a>. In the Proceedings of the IEEE BioRobotics Conference, October 2008. <a title="http://biorobotics.org/papers/2008BioRob_Hatton_Choset_ConnVecFields.pdf" href="http://biorobotics.org/papers/2008BioRob_Hatton_Choset_ConnVecFields.pdf">PDF</a></p>
				  </li>
				</ul>
		
		
<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>