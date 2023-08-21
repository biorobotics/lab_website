---
image: img/posts/MMPUG_staircase.gif
date: '2023-08-21 15:20 -0400'
published: true
title: Full Stack Autonomy
categories: research
tags:
  - full_stack_autonomy
---
This project seeks novel approaches to rapidly map, navigate, and search environments for situational awareness during time-sensitive combat operations. In particular, the project focuses on fast moving autonomous vehicles designed for multi-modal exploration across various terrains and environments. To do this we integrate and iterate upon previously designed algorithms for exploration, finding areas where common algorithms fail when used on high-speed ugv’s and creating novel solutions to push the boundaries of what these vehicles are capable of. In addition, our system boasts a heterogeneous robot setup via legged robots that can aid exploration between multiple floors. 

![Convoy of three robots]({{site.baseurl}}/img/posts/MMPUG_Convoy.gif)

The current design combines a viewpoint based exploration planner, trajectory libraries for rapid elimination of paths intersecting with obstacles, and a low level planner capable of following paths at a high speed. An important aspect of the software architecture is its hierarchical design which allows the operator of the UGV to insert human feedback at any stage of the process. Specifically this allows the operator to bias the exploration planner, give direct waypoint input, operate in a smart joystick mode (which follows the operators input while avoiding obstacles), or directly follow user input. The stack is then able to optimize the exploration process by utilizing different levels of autonomy to flexibly perform what the operator desires. 

![Multi robot staircase detection and navigation with map merging and sharing features]({{site.baseurl}}/img/posts/MMPUG_staircase.gif)

Our recent efforts involved creating a convoy of wheeled robots that could operate at higher speeds in both indoor and outdoor environments. We extended this capability to heterogeneous agents involving the Spot robots and illustrated that our optimal control algorithms are vehicle agnostic. Further, an explicit peel off behavior was designed to ensure the trail vehicles could peel off from the convoy and act as radio beacons for the lead vehicles. In some scenarios, peeling off a part of the convoy to explore unknown terrains when there is a fork in the road has proven to be extremely helpful for heterogeneous agent exploration. This is further enhanced via our fast staircase detection algorithm that is capable of multi-platform merging, ledger based map sharing, and autonomous stair navigation. 

