---
image: /img/posts/MMPUG_hetero_fleet.jpg
date: '2023-11-24 20:27 -0500'
published: true
title: Heterogeneous fleet
categories: robots
tags:
  - full_stack_autonomy
  - multi-agent_planning
  - locomoting_systems
---
![Overview of our custom payload]({{site.baseurl}}/img/posts/MMPUG_hetero_fleet.jpg) 

At the heart of our heterogeneous fleet of robots lies a custom designed multi-purpose payload. The payload is designed to map urban, outdoor, indoor and subterranean environments while being platform-agnostic in that it can serve as a plug-and-play SLAM Box for any heterogeneous platform. This includes our RC cars that cover larger distances at speed, the Spot robot that maps multiple levels with ease, and our U0 robot that can handle uneven terrains. In addition to mapping, the payload performs localization and provides easy integration capabilities to vehicle autonomy control and data sharing over any WiFi network. Our in-house developed software includes a smart joystick control that utilizes the robot's local map to avoid static and dynamic obstacles in an unknown environment. The perception system on the payload uses a LIDAR and six visual cameras to detect obstacles and other features in the environment. 

![Overview of our custom payload]({{site.baseurl}}/img/posts/MMPUG_Payload_Overview.gif)

Additionally, a thermal camera and a gas sensor are used for situational awareness and to detect potential threats. Our payload functions with a mapping resolution of 0.1 m - 0.8 m and a localization error of 0.05 m within 1000 m in normal environments. Any new components can use Ethernet, USBc, or Serial connections to communicate with the payload over a software interface built via Robot Operating System (ROS 1). Our payload has been extensively tested in a number of mock search and rescue missions.

Equipped with this payload, the fleet of RC cars form a convoy of robots to serve two purposes: (1) to minimize the operator payload where the operator commands the lead vehicle while the autonomy handles inter-robot command structure to maintain the convoy, and (2) to maintain communication from base station to the fleet in a comms-deprived environment, the convoy starts peeling the trail robots to act as comms nodes. 

![Overview of our homogeneous fleet]({{site.baseurl}}/img/posts/MMPUG_convoy_img.jpg)

Once again, the unifying factor in our heterogeneous fleet of robots is the payload. While staircases can only be handled by the Spot, our system leverages the payloads to transfer information about staircases detected by RC cars to the Spot robot which can then navigate to the staircase to explore additional levels in the environment. 

![Multi robot staircase detection and navigation with map merging and sharing features]({{site.baseurl}}/img/posts/MMPUG_staircase.gif)

This heterogeneous fleet of robots seeks to serve as a robotic testbed to develop and evaluate novel approaches to rapidly map, navigate, and search environments for situational awareness during time-sensitive combat operations.
