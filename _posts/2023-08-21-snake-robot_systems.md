---
title:  "Snake Robot Systems"
categories:
    - research
description: "Biologically Inspired Robots"
published: true
image: img/posts/reu_system.png
tags:
    - locomoting_systems
    - modular_robotics
---

<figure>
 <img src="img/posts/snake_systems.png" width="60%"/>
</figure>

Builiding from our first generation systems, our snake robots have evolved into a snake robot system from both a hardware and control strategy. Our Re-United (ReU) snake provides modular communication using Ethernet communicatio, our series elastic actuated snake compliantly responds to obstacles and adds another layer of safety to operators, and our large-scale R-snake robot uses waterproof actuators enabling it to go underwater. 

<figure>
 <img src="img/posts/reu_system.png" width="50%"/>
</figure>

All of these robots are controlled using our control and estimation library based on the Robot Operating System (ROS) that brings together our group’s decades of research on snake robots under a unified software architecture. This library implements gaits, state estimation algorithms, compliant motion controllers, and user-friendly interfaces to control the snake robots and provide sensor feedback (robot state and camera feeds) for deploying our robots into the field. Our modular hardware using Ethernet-based communication protocols furthermore enables deploying this library on different snake robot designs and rapidly testing and evaluating new controllers we are developing across different hardware platforms.

