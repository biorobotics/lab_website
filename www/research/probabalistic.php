<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Coverage Research	- Biorobotics</title>
	<meta name="Keywords" content="Biorobotics, Coverage Research">
	<meta name="description" content ="Coverage Research - Carnegie Mellon Biorobotics" />
<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->

			<h3><b>Probabalistic</b> Coverage</h3>
			<div class="row">
				<div class="twelve columns">
				<div class="five columns">
			<img alt="Offset for a three dimensional object" 
			src="images/coverage/probabalistic/pattern.jpg" 
			style="text-align:center;" width="100%;">
				</div>
				
			<p>Probabilistic planner technology can significantly extend the capabilities of current sensors. In many situations
			time may not permit covering a target environment completely. However, if the planner has access to a probabilistic
			map of mine locations, it can guide opportunistically the robot. For example, the planner might direct the robot to
			sweep first the region most likely to contain mines. After reaching a time limit without encountering a mine, the
			planner could then postulate that the cell is mine-free and direct the robot to another cell. Using a priori
			information can also solve the dual problem -- lane clearing. So, instead of finding regions of high mine
			concentrations, this method could find sparsely mined regions that allow safe passage. </p>
						
			<p>Our initial work focuses on a particular minefield pattern, selected from Field Manual 20-32 of the Department of
			the Army. This is a row minefield in which every other row is offset slightly by nu from the rows above and below it.
			We pose the problem of estimating the scale of the minefield (both c_1, the space between mines in each row, and c_2,
			the space between rows) during the mine search and choosing the path adaptively, based on the estimated scale. However
			estimating c_1, c_2, and nu are not by themselves enough. We also must determine the orientation and the origin of
			the minefield as well. </p>
	
			<p>We develop an algorithm that decodes a minefield, i.e., determines the parameters c_1, c_2, nu, the orientation and
			the origin of the minefield. The search algorithm estimates the probable locations of remaining mines in order to 
			determine where the search should proceed. This work also answers a simple question: given a path that the robot has
			traversed, what are the probabilities of all the possible mine arrangements that may exist in the minefield? </p>
				
			<p>We assume that mines cannot be closer together than some fixed value, and that there should be at least two mines in
			each direction. As soon as the robot begins to gather sensor information, and at any point during the search, this 
			knowledge about c_1 and c_2 can be refined. We update the distributions of c_1 and c_2 when 1) the robot detects a mine,
			2) it reaches a location in which it expects (but fails) to find a mine, and 3) the search is complete. Finally, our
			approach handles either missing mines or false negatives, the mine was present but the detector missed it. </p> 
			</div>
		</div>	

		<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>
	<script type="text/javascript">	

	 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-38719346-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>


</html>