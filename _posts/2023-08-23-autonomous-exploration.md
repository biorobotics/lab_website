---
title:  "Autonomous Exploration"
date: '2023-08-23 22:59 -0500'
categories:
    - research
description: "Autonomous Exploration Using a Fleet of Heterogeneous Robots"
published: true
image: img/posts/ground_exploration_crop.gif
tags:
  - multi_agent
  - full_stack_autonomy
---

Our work on autonomous exploration won <a href="https://roboticsconference.org/2021/program/awards/index.html">**Best Paper Award and Best System Paper Award**</a> of RSS 2021! The first time that one paper won both awards in the history of RSS. The succeeding work is published on <a href="https://www.science.org/doi/10.1126/scirobotics.adf0970">**Science Robotics**</a>.

Autonomous exploration is crucial for applications where the environments are often inaccessible or hazardous to humans, such as in search-and-rescue, surveillance, and planetary exploration. Here we consider determining paths for one or more robots to navigate in an a priori unknown environment, so that the robots can be directed to thoroughly sweep their sensors to make a representation, namely a map, of the target environment. The contribution of this work is to prescribe a novel two-level approach that efficiently explores an unknown region, where efficiency is measured by both explored volume over time and computational runtime. We validate this approach in several large-scale, complex, and cluttered environments both in simulation and in the real world, including the DARPA Subterranean Challenge (SubT).

<iframe width="720" height="405" src="https://www.youtube.com/embed/kbKSOGPYZww" frameborder="0" allowfullscreen="true">
</iframe>

This video shows an aerial vehicle autonomously exploring and mapping a 3D environment on Carnegie Mellon University campus. The environment crosses multiple levels with uphills and downhills. The exploration algorithm uses a hierarchy, planning detailed paths within a local area surrounding the vehicle (green box) and at the same time keeping additional areas to explore (green blocks) on the global scale. The algorithm produces high efficiency in terms of time complexity and navigation patterns for exploration. The vehicle runs onboard state estimation and mapping leveraging range, vision, and inertial sensing, and local planning for collision avoidance. The vehicle flies at 2.5m/s through the exploration run.

<iframe width="720" height="405" src="https://www.youtube.com/embed/pIo64S-uOoI" frameborder="0" allowfullscreen="true">
</iframe>


This video shows a ground vehicle autonomously exploring and mapping a 3D environment on Carnegie Mellon University campus. The environment crosses multiple levels covering both indoors and outdoors. The exploration algorithm uses a hierarchy, planning detailed paths within a local area surrounding the vehicle (green box) and at the same time keeping additional areas to explore (green blocks) on the global scale. The algorithm produces high efficiency in terms of time complexity and navigation patterns for exploration. The vehicle runs onboard state estimation and mapping leveraging range, vision, and inertial sensing, local planning for collision avoidance, and terrain analysis. All processing is real-time and no post-processing involved. The vehicle drives at 2m/s through the exploration run.


<iframe width="720" height="405" src="https://www.youtube.com/embed/O3AjmlrafeQ" frameborder="0" allowfullscreen="true">
</iframe>

The <a href="https://www.darpa.mil/program/darpa-subterranean-challenge">DARPA Subterranean Challenge (SubT)</a> highlighted autonomous navigation and exploration in underground, GPS-denied environments. The challenge involved three types of environments: tunnel systems, urban underground, and cave networks. Teams deployed a fleet of autonomous vehicles to search for artifacts (backpacks, cellphones, and so on) and reported their locations. A human operator was allowed to command the vehicles from the entrance of the environment over intermittent wireless networks. Our method was deployed by Team Explorer in the competition with three ground vehicles. The video shows Team Explorer's three ground robots exploring the competition course of the SubT Final Event held in Louisville, Kentucky. The course mixes urban, tunnel, and cave environments. The robots made the most complete exploration (26 out of 28 sectors) of the course among all teams and won the "Most Sectors Explored Award".

We are currently working towards multi-robot exploration with a fleet of heterogeous robots, as shown below. The challenges include coordinating robots with different mobilities and sensor modalities, as well as rendezvous strategies under limited communication. For more information, please contact <a href="https://www.caochao.me/">**Chao Cao**</a>, or visit <a href="https://www.cmu-exploration.com">**cmu-exploration.com**</a>.

<figure>
 <img src="img/posts/multirobot_exploration.jpeg" alt="" />
</figure>
