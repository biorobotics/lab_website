<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Deploy Structures Anywhere Anytime - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Expeditionary Robotics">
	<meta name="description" content ="Deploy Structures Anywhere Anytime - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c27" id="h.z3jzdvv4q1i0"><b><span class="c56">Expeditionary Robotics</b> - Deploy Structures Anywhere Anytime</span></h3><p class="c10"><span class="c2">Choset&rsquo;s goal to democratize the delivery of medical care to anyone, anywhere and at any time, One of the lessons that the general public learned is that rural areas lacked the necessary medical resources to support infected patients, and even urban centers, such as New York City, lacked the infrastructure to handle surges in the disease. Certainly, the military knew of this, as many military missions support humanitarian assistance and disaster relief (HADR). Many HADR missions require the rapid set up and staffing of field hospitals to deliver care to those affected by natural disasters or internal conflicts. </span></p><p class="c10 c13"><span class="c2"></span></p><p class="c10"><span class="c2">The problem is that these portable medical structures require considerable effort and man-power to assemble, and perhaps not in the best conditions. During the pandemic, it took over three days for volunteers, some of whom contracted Covid during the process, to erect field hospitals. Certainly, in a conflict, personnel assembling a medical facility faces potential dangers. </span></p><p class="c10 c13"><span class="c2"></span></p><p class="c49"><span>This work focuses on rapid construction of hospital modules to provide advanced healthcare facilities in remote locations. We leverage our prior work on </span><span class="c28">modularity </span><span>to design hospital sections, or really hospital modules, which can be assembled and reassembled to form different structures. We term these modules as Container Modular Units (CMUs) and these CMUs are specifically designed so they can easily be adapted to multiple use cases, including an Operation Room (OR), an Intensive Care Unit (ICU), a general ward, etc. We then utilize our </span><span class="c28">multi-objective</span><span>&nbsp;optimization algorithms to identify an optimal structure for the hospital modules. Using our state-of-the-art </span><span class="c28">multiagent planning</span><span>&nbsp;algorithms, we aid hospital construction in a dynamic environment. Finally, the construction of the CMUs is out of scope for this project, we illustrate the efficacy of our approach using a </span><span class="c28">multiagent construction gantry</span><span class="c2">, an indigenous robotic testbed, in our lab. Once this work is completed, we will have a system we can show potential users, and hopefully investors and funding agents, to create this system at scale.</span></p><p class="c49"><span class="c2">We should note that we are creating a comprehensive program around the development of the CMU-based system and its deployment. We are also putting together a multidisciplinary team, which includes a former medic from the US Special Forces. The rest of this document is dedicated to both explaining the concept and providing information about the CMU-Technion progress. We start with the physical design of the modules and then talk about their assembly and earth preparation, thereafter.</span></p><p class="c49"><span class="c28">Design Concept:</span><span class="c2">&nbsp;An illustration of a Container Modular Unit (CMU) is presented below. The openings on each of these units act as a point of connection for adjacent units and sliding doors are installed for each opening to create or close an opening. Accordian style covers are used to extend the connections between units with a pre-installed fold-down gangway for passage. Electrical connections and HVAC ducts are installed in each unit to facilitate quick reallocation of modules owing to changes in objectives.</span></p><p class="c70"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 286.67px;"><img alt="" src="images/DeployStructuresAnywhereAnytime/image64.png" style="width: 624.00px; height: 286.67px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span><span class="c2">Modular design for hospitals</span></p><p class="c49"><span class="c2">&nbsp;</span></p><p class="c70"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 412.50px; height: 179.15px;"><img alt="" src="images/DeployStructuresAnywhereAnytime/image2.png" style="width: 412.50px; height: 179.15px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c70"><span class="c2">Container Modular Unit</span></p><p class="c10 c13"><span class="c2"></span></p><!-- <div class="six columns">
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