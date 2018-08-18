<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->

	<title>Modular Distribution - Biorobotics</title>
	<meta name="Keywords" content="MDMS, Modular Distribution, Snake Robot, snakerobot, snakebot,
	snake bot, robot, robotics, snake, hyper-redundant, hyperredundant,
	hyper redundant, snake robots, snake bots, medical robots, surgical robot, search 
	and rescue, inspection robot, military robot, climbing robot, biorobotics, biological robot, cmu, 
	carnegie mellon, pipe robot, flexible robot">
	<meta name="description" content ="Modular Distribution - Carnegie Mellon Biorobotics" />
	
<!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php"; ?>

<!-- Content - Modular Distribution robot
============================= -->
	<div class="row">
		<h3><b> Distributed Manipulation </b></h3>
		<p>
		We are developing an alternative method for manipulating objects in the plane, where many small
		manipulation cells fixed in a planar array cooperate to handle objects. In our system, each
		cell consists of a pair of actuators whose combined action can effect force in any planar
		direction to a parcel resting on top of the array. Furthermore, each cell contains up to five
		binary sensors which detect the presence of an object. See Figure 1.
		</p>
	</div>
	<div class="row">
		<div class="six columns" style="text-align:center;">
			<img src="images/ModularArray/fig_1.png" alt="Figure 1" style="max-width:100%"/>
			<p><b>Figure 1.</b> A few manipulator cells carrying a parcel.</p>
		</div>
		<div class="six columns" style="text-align:center;">
			<img src="images/ModularArray/fig_2.png" alt="Figure 2" style="max-width:100%"/>
			<p><b>Figure 1.</b> A few manipulator cells carrying a parcel.</p>
		</div>
		<p>
		In our system, the parcels are signifcantly larger than each cell; several cells handle a single
		object. Through proper coordination, parcels which ride on top of the array can be made to
		translate and rotate in the plane. Since sensing and actuation are distributed, each of many
		parcels can be manipulated independently, appearing as if each parcel were carried by a separate
		vehicle (Figure 2). Hence, the name <i>Virtual Vehicle</i>.</p>
		<p>
		For many applications, a dedicated robot or conveyor is the simplest and most appropriate
		solution. There are	cases, however, where features, such as additional flexibility and
		reconfgurability, are required. In these cases, the	Virtual Vehicle possesses many advantages,
		including
		</p>
		<ul>
			<li>
				<b>Flexibility</b>. Since the actuation is distributed, multiple parcels can be manipulated
				independently. This allows for parcels to be sorted, re-ordered, and re-directed quickly.
				Objects of many sizes and shapes can be passed along easily, and multiple object pathways
				can be invoked in parallel.
			</li>
			<li>
				<b>Redundancy</b>. Since the Virtual Vehicle System is a massively parallel array of cells,
				if one cell breaks, the neighboring cells work around the broken cell by either diverting
				parcels around the broken cell or simply passing parcels over it.
			</li>
			<li>
				<b>Modularity/Reconfigurability</b>. Many cells can be produced at a low cost because of
				their small size and relative simplicity. The cells are designed to "snap" together to
				form an array. This modularity allows the cells to be arranged in any confguration. The
				array can be easily reconfigured by moving cells and adding new cells. The modularity also
				enables easy repair because a broken cell is simply replaced.
			</li>
			<li>
				<b>Scalability</b>. Cells can be designed to carry objects of all sizes. For example,
				micromachined actuators can carry near-microscopic objects such as integrated circuit
				components, whereas small plastic wheels can carry suitcases (of many sizes) through
				airports and large truck tires can carry box cars around a ship/train yard.
			</li>
		</ul>
		<p>
		The Virtual Vehicle can be used in conjunction with traditional robots and conveyor belts to form
		hybrid systems. For example, in airport baggage handling, long conveyors can be used to transport
		parcels over long distances while Virtual Vehicle arrays can be installed at conveyor junctions to
		sort and to re-direct parcel traffic. In flexible manufacturing, the Virtual Vehicle can be used to
		transport objects between robot workspaces where simple robots are used for object fixturing.
		</p>
		<p>
		We have built a prototype system consisting of a small array of cells capable of transporting ob jects
		about the size of a bread box. Each cell consists of a pair of orthogonally oriented motorized roller
		wheels (Figures 3 and 4) which are capable of producing a force perpendicular to their axes, while
		allowing free motion parallel to their axes. Each wheel is driven through a gear reduction by a small
		DC motor.
		</p>
	</div>
	<div class="row">
		<div class="six columns" style="text-align:center;">
			<img src="images/ModularArray/fig_3.png" alt="Figure 3" style="max-width:100%"/>
			<p><b>Figure 3.</b> Roller wheel.</p>
		</div>
		<div class="six columns" style="text-align:center;">
			<img src="images/ModularArray/fig_4.png" alt="Figure 4" style="max-width:100%"/>
			<p><b>Figure 4.</b> Prototype cell.</p>
		</div>
	</div>
	<div class="row">
		<div class="six columns" style="text-align:center;">
			<img src="images/ModularArray/fig_5.png" alt="Figure 5" style="max-width:100%"/>
			<p><b>Figure 5.</b> Two-dimensional array of cells.</p>
		</div>
		<div class="six columns" style="text-align:center;">
			<img src="images/ModularArray/fig_6.png" alt="Figure 6" style="max-width:100%"/>
			<p><b>Figure 6.</b> Current experimental setup.</p>
		</div>
		
		<p>
		Each of these cells is connected to a large breadboard style base (Figure 5) to create a regular array
		of manipulators. Currently, we have only 18 cells which can be arranged either in a single 1-D or a 2-D
		grid. A photograph of the experimental setup is shown in Figure 6.
		</p>
		<p>
		<h5> Papers </h5>
		</p>
			
		<ul>
			<li>
				<a href="http://www.ri.cmu.edu/pub_files/pub1/luntz_jon_1999_2/luntz_jon_1999_2.pdf">
				Open Loop Orientability of Objects on Actuator Arrays (1999)</a>
			</li>
			<li>
				<a href="http://www.ri.cmu.edu/pub_files/pub1/luntz_jon_1999_1/luntz_jon_1999_1.pdf">
				Discrete Actuator Array Vectorfield Design for Distributed Manipulation (1999)</a>
			</li>
			<li>
				<a href="http://www.ri.cmu.edu/pub_files/pub1/luntz_jon_1998_1/luntz_jon_1998_1.pdf">
				Stick-Slip Operation of The Modular Distributed Manipulated System (1998)</a>
			</li>
			<li>
				<a href="http://www.ri.cmu.edu/pub_files/pub2/luntz_jon_1998_1/luntz_jon_1998_1.pdf">
				Velocity Field Design for the Modular Distributed Manipulator System (1998)</a>
			</li>
			<li>
				<a href="http://www.ri.cmu.edu/pub_files/pub1/luntz_jonathan_1997_1/luntz_jonathan_1997_1.pdf">
				Virtual Vehicle: Parcel Manipulation and Dynamics with a Distributed Actuator Array (1997)</a>
			</li>
		</ul>
    </div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>