<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Trunk Snake - Biorobotics</title>
	<meta name="Keywords" content="trunk robot, elephant trunk robot, trunk snake, trunk snake robot, Snake Robot, snakerobot, snakebot, articulated arm, snake bot, robot, robotics, snake, hyper-redundant, hyperredundant,
	hyper redundant, snake robots, snake bots, medical robots, surgical robot, search 
	and rescue, inspection robot, military robot, climbing robot, biorobotics, biological robot, cmu, carnegie mellon, pipe robot, flexible robot">
	<meta name="description" content ="Trunk Snake - Carnegie Mellon Biorobotics" />

	<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row">
		<div class="six columns">
			<h3><b>Trunk Snake Robot</b></h3>
			<p>
			The main challenge in designing snake robots deals with putting actuated
			joints in a tight volume where we minimize the length and cross sectional 
			areas of the links between the joints. The main concept of our design, as 
			well as many others, is to stack two degree-of-freedom joints on top of each 
			other, forming a snake robot. There are three main schools of designs for 
			these kinds of robots: actuated universal joints, angular swivel joints and
			angular bevel joints.
			</p>
			<h5> Actuated Universal Joints</h5>
			<div class="five columns u-pull-left">
				<image src="images/trunkSnake/body/fig1.jpg" alt="Double revolute joint" width = "100%">
				<p> <b> Figure 1: Double orthogonal revelute joint.</b></p>
			</div>
			<p>The simplest design that first comes to mind is stacking simple 
			revolute joints as close as possible to each other and this led to the 
			actuated universal joint design. As the name suggests, he design incorporates
			a universal joint with two motor to actuate each of the two degrees of 
			freedom of the universal joint. There are many variations of this design: The
			simplest of which is just stacking revolute joint orthogonally and as close 
			to each other as possible, as seen in <b>Figure 1</b>. These kinds of designs tend to be bulky and slow, hence not appropriate for many snake robot applications.
			</p>
			<p>
			Another variation of this design approach is by using bevel or worm	gear trains as seen in <b>Figure 2</b> or using push-pull rods, as seen in <b>Figure 3</b>. 
			</p>
		</div>
		<div  class="six columns">
			<img src="images/trunkSnake/hires/snoopyCity.jpg" alt="snoopy robot" style="width:100%;"/>
			<div class="grid gallery small">
				<ul id="demo-test-gallery" class="demo-gallery">
				<li><a href="images/trunkSnake/hires/snoopy.jpg" data-size="2048x1536" data-med="images/trunkSnake/medres/snoopy.jpg" data-med-size="800x600">
					<img src="images/trunkSnake/thumbs/snoopy.jpg" alt="snoopy robot"/>
				</a></li>
				<li><a href="images/trunkSnake/hires/snoopyOffRoad2.jpg" data-size="2048x1536" data-med="images/trunkSnake/medres/snoopyOffRoad2.jpg" data-med-size="800x600">
					<img src="images/trunkSnake/thumbs/snoopyOffRoad.jpg" alt="snoopy robot"/>
				</a></li>
				<li><a href="images/trunkSnake/hires/snoopyCity2.jpg" data-size="800x600">
					<img src="images/trunkSnake/thumbs/snoopyCity2.jpg" alt="snoopy robot"/>
				</a></li>				
				<li><a href="images/trunkSnake/hires/snoopyRubble1.jpg" data-size="641x428">
					<img src="images/trunkSnake/thumbs/snoopyRubble1.jpg" alt="snoopy robot"/>
				</a></li>
				
				<li><a href="images/trunkSnake/hires/snoopyRubble2.jpg" data-size="713x476">
					<img src="images/trunkSnake/thumbs/snoopyRubble2.jpg" alt="snoopy robot"/>
				</a></li>
				<li><a href="images/trunkSnake/hires/snoopyJoint.jpg" data-size="800x600">
					<img src="images/trunkSnake/thumbs/snoopyJoint.jpg" alt="snoopy robot"/>
				</a></li>
				<li><a href="images/trunkSnake/hires/angBevel.jpg" data-size="535x321">
					<img src="images/trunkSnake/thumbs/angBevel.jpg" alt="angular bevel"/>
				</a></li>
				<li><a href="images/trunkSnake/hires/angGearless.jpg" data-size="800x494">
					<img src="images/trunkSnake/thumbs/angGearless.jpg" alt="gearless"/>
				</a></li>
				
				<li class="placeholder"></li>
				<li class="placeholder"></li>
				<li class="placeholder"></li>
				<li class="placeholder"></li>
				<li class="placeholder"></li>

				</ul>
			</div>
		</div>
    </div>
	<div class="row">
		<div class="twelve columns">
			<p>
			The main challenge in this design approach is to make the joint as compact as possible, yet strong enough and with appreciable bending range. One of the main benefits of this design is that you need only one motor to actuate one degree of freedom as opposed to the rest of the designs described here where two motors are actuated at all times. However, the torques transferred to the motor are relatively larger hence the need of higher reduction. Usually the high reduction is done by using power screws of worm gears hence the slowness of the mechanism.
			</p>
	</div>
	<div class="row">
		<div class="four columns" style="text-align:center;">
			<image src = "images/trunkSnake/body/fig2.jpg" alt = "Worm gear joint" style="max-width:100%;">
			<p><b>Figure 2: Using worm gears.</b></p>
		</div>
		<div class="eight columns"  style="text-align:center;">
			<image src = "images/trunkSnake/body/fig3.jpg" alt = "Push-pull joint" style="max-width:100%;">
			<p><b>Figure 3: Push-pull design approach used in EOD snake robot.</b></p>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<h5>Angular Swivel Joint Design</h5>
			<div style="float:right">
				<img src="images/trunkSnake/body/AngSwivelBall.jpg" alt="ball swivel joint" style="padding:20px">
				<img src="images/trunkSnake/body/angBevelSnake.jpg" alt="ball swivel joint" style="padding:20px">
			</div>
			<p>
			The second design that evolved was the angular swivel joint, which is present
			in the JPL Snake Robot. These are much more compact two DOF joints. The design
			is simple: starting with a sphere, then slicing the sphere into two parts such
			that the slice plane is transversal to the south-north pole axis of the sphere.
			Now rotate one half sphere with respect to the other and notice the motion of 
			the north pole as it traverses a cone of revolution. Connecting two adjacent 
			snake bays via a passive universal joint and then by coordinating the rotation 
			of the two spherical cups generated two degrees of freedom: In-plane bending
			and orientation. This is the most compact joint design till now. However here
			we are trying to develop a new compact two DOF joints.
			</p>
			<h5>Angular Bevel Joint Designs</h5>
			<p>
			Here we are trying to develop a new compact two DOF joints. We work on 
			optimizing the size, strength, reachability and flexibility of these joints. 
			So far we have designed three new types of joints. We have already designed and 
			built many prototypes:
			</p>
		</div>
	</div>
	<div class="row">
		<div class="three columns" style="text-align:center;">
			<image src="images/trunkSnake/body/bevel.jpg" alt="" style="max-width:100%">
			<p><b>Angular Bevel</b></p>
		</div>
		<div class="three columns" style="text-align:center;">
			<image src="images/trunkSnake/body/orientation.jpg" alt="" style="max-width:100%">
			<p><b>Orientation Preserving</b></p>
		</div>
		<div class="three columns" style="text-align:center;">
			<image src="images/trunkSnake/body/gearless.jpg" alt="" style="max-width:100%">
			<p><b>Gearless</b></p>
		</div>
		<div class="three columns" style="text-align:center;">
			<image src="images/trunkSnake/body/link2.jpg" alt="" style="max-width:100%">
			<p><b>Double Angular Bevel</b></p>
		</div>
	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>