<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Satellite Inspection and Servicing - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Space Robotics">
	<meta name="description" content ="Satellite Inspection and Servicing - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c20" id="h.r2ii9lhsunq3"><b><span class="c15">Space Robotics</b> - Satellite Inspection and Servicing</span></h3><p class="c17"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 240.00px; height: 240.00px;"><img alt="" src="images/SatelliteInspectionandServicing/image16.png" style="width: 240.00px; height: 240.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c17"><span class="c5">Satellites are uniquely alone in their environment. They are launched with everything they need for their entire mission, from initial operational capability (IOC) to end-of-life. Government and commercial satellite operators are beginning to recognize that their current fleets last longer than their anticipated &ldquo;design life.&rdquo; With some minimum exceptions, the ability to physically upgrade, refuel, or repair satellites once they are on-orbit does not currently exist; little manufacturing is done in space as well. On-Orbit Servicing, Assembly, and Manufacturing (OSAM) activities - up-close inspection, intentional and beneficial changes to resident space objects, and manufacturing on orbit - can have significant implications on many aspects of current satellites and the way future satellites are designed and operated.</span></p><p class="c17"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 1.00px solid #ffffff; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 380.50px; height: 212.50px;"><img alt="" src="images/SatelliteInspectionandServicing/image34.png" style="width: 429.20px; height: 244.56px; margin-left: -23.78px; margin-top: -15.55px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c17"><span class="c68 c38 c13">Intelligent Inspection</span><span class="c38 c13">&nbsp;</span><span class="c5">addresses a key knowledge gap in satellite servicing: what is wrong with the satellite? At present many satellite failures go unexplained due to limited onboard sensing and a near-total lack of inspection capabilities on-orbit. It is critical that a robotic servicer fully characterize the status of a client satellite before attempting repairs; the servicer must determine both which parts have malfunctioned and which components are still working (and so should not be interfered with). Classic robotic inspection tends to be a passive task where a sensor passes over all (or at least as many as possible) points on a target surface. This is an &ldquo;uninformed&rdquo; process. An informed approach can enhance situational awareness and allow our limited resources to focus on the more critical areas associated with an inspection process. Drawing from the multi-objective optimization community, our work advances the state of the art in robotic search by including multiple, and perhaps competing, search criteria, such as different types of defects, energy used to search, etc. Moreover, our approach to search pushes interactive inspection to the limit by not only &ldquo;looking&rdquo; but also &ldquo;touching,&rdquo; when necessary to assess system status. Finally, all of this is done in the context of assured safety of the client satellite&rsquo;s components and system, at large.</span></p><p class="c17"><span class="c5">This work embraces a form of multi-agent search called ergodic coverage. A path has a higher measure of ergodicity if the amount of time spent in a region is proportional to the likelihood of finding a target, such as a defect, in that region. By regulating the paths that a multi-agent system can take, one can increase the ergodicity and hence the quality of the inspection. Note that information, in this case, is modeled by an information map, encoded as a distribution. Likewise, the paths the robot takes can also be encoded by a distribution. By forcing the difference of these distributions to zero, one can maximize ergodicity. Prior work in this area was limited to simple robots operating on the plane, with simple sensor models, and all robots were the same - they were homogenous. The current effort relaxes all these assumptions: we consider robots operating in a full 6 degree of freedom configuration space, possessing manipulators capable of interacting with the client, and subject to orbital mechanics and the multiple competing objectives of safety, information gain, time, and delta-V expenditure.</span></p><p class="c17"><span class="c5">A particularly common and potentially catastrophic failure for satellites is the malfunction of a deployment mechanism such as a solar array mast or an antenna boom. The loss of power or communication bandwidth that results from such failures can be mission-ending. To support efforts to rectify such failures, we are developing a planning, perception, and execution pipeline to interact with malfunctioned spacecraft deployment mechanisms to ascertain where and how the mechanism has failed. A nominal parametric model is used to optimize an interaction between the servicer&rsquo;s manipulator and the mechanism for information gain; force sensing and vision are then fused via Bayesian filtering to update the parametric model based on the mechanism&rsquo;s response. This process iterates until the estimator has converged, at which point the difference between the estimate of the mechanism as built and the mechanism as designed indicates the failure mode. The improved parametric model can also be used during the repair process.</span></p><p class="c17"><span class="c68 c38 c13">Dexterous On-Orbit Maintenance</span><span class="c13 c38">&nbsp;</span><span class="c13">utilizes innovative concepts from robotic motion planning and control to perform mechanical repair, replacements and enhancements for on-orbit vehicles (i.e. client satellites), </span><span class="c13">whose</span><span class="c5">&nbsp;onboard enabling functions - propellants, pressurants or coolants, etc. - naturally deplete or whose subcomponents fail or require upgrade. Performing these operations in space requires safe rendezvous and precise docking of a mobile robot platform onto a client satellite without disturbing its operations. Therefore, a key requirement is minimizing the imparted contact force on the client satellite during repair operations. However, estimating the pose of the client satellite during repair is made challenging when visual feeds are occluded and poor lighting conditions coupled with delayed measurements exacerbates the problem. We draw parallels between the satellite rendezvous problem and classical manipulation problem where we extend existing techniques to on-orbit conditions. Our goal is to develop a multi-modal control approach where control of the mobile robot platform is tightly coupled with estimation from visual and force sensory feedback that enables successful servicing of satellites on-orbit. </span></p><p class="c17"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 498.71px; height: 278.50px;"><img alt="" src="images/SatelliteInspectionandServicing/image74.png" style="width: 498.71px; height: 278.50px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c17"><span class="c5">In order to enable our dextrous in-orbit maintenance missions, we have implemented a state-of-the-art feedback control system specifically designed for floating base robotic systems. In the literature, our controller is described as an &lsquo;operational space controller&rsquo;, as our controller commands joint torques to achieve an objective in an operational (or task) space. We can achieve our control objectives in the operational space by applying the following controller to our dynamical system:</span><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 441.50px; height: 215.55px;"><img alt="" src="images/SatelliteInspectionandServicing/image89.png" style="width: 441.50px; height: 215.55px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c17"><span class="c5">Equation (1) represents the dynamic equations of motion of our mobile space robot platform. Equation (2) is our operational space controller. We derive our controller by transforming the dynamics in equation (1) into the operational space, and then performing inverse dynamics to cancel out nonlinear terms and produce motion in a desired direction based on equation (3). </span></p><p class="c17"><span class="c5">Our operational space controller requires a tracking and filtering subsystem to produce estimates of the desired target position to drive to. Our tracking system leverages an existing state-of-the-art model based tracking software called the ViSP Tracker. The tracker functions by taking in an initial estimate of the client satellite to be tracked, a CAD model of the client satellite, and a camera feed with the client satellite present. Using these inputs, the ViSP tracker produces an estimate of the pose of our client satellite. This estimate is then fed into an extended Kalman filter, and then passed into our operational space controller. &nbsp;</span></p><p class="c17"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 412.50px; height: 159.50px;"><img alt="" src="images/SatelliteInspectionandServicing/image56.png" style="width: 412.50px; height: 159.50px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c17"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 410.88px; height: 258.40px;"><img alt="" src="images/SatelliteInspectionandServicing/image107.jpg" style="width: 410.88px; height: 258.40px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c17"><span class="c5">A robot servicing vehicle prepares to deliver a life-extension payload to a client vehicle. </span></p><hr style="page-break-before:always;display:none;"><p class="c2"><span class="c4"></span></p><!-- <div class="six columns">
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