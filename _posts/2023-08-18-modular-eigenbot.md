---
image: img/posts/default.png
date: '2023-08-18 12:10 -0400'
published: false
title: Modular EigenBot
---
Modular components need to be developed for both hardware and software modularity. Over the past few years we have been developing systems made of multiple modules that could be replicated to expand or modify an existing robot. We had to develop a full menu of components that work together and allow field technicians and end consumers to assemble components to build a custom modular robot. This approach lets users build robots to meet their needs and the environment; and does not force them to work around the robot.

![EigenBot Family]({{site.baseurl}}/img/posts/EigenBot_Family.png)

In this project, we have begun to ask ourselves: what are the core components that make up a modular robot system? For these core components, how is information shared among them and what level of abstraction do they require. These core components we call Eigenbots, the moral analogy to Eigen vectors in a standard PCA decomposition. As a first step toward determining the Eigen basis for Eigenbots, we started to build a system that leverages our group's experience with embedded electronics design and software development for miniaturized mechatronic and robotic systems that directly interact with the physical worlds.

In the EigenBot design, each of the EigenModule includes  self-contained sensing, compute, and motor driver printed circuit board design that provides onboard feedback control and motion planning, which we call an EigenBrain. The EigenBrains are naturally designed to enable a distributed system scheme that allows each functioning module to execute and adjust locally. This approach reduces the need for bulky computer hardware, minimizes network load, and eliminates complex cable routing needs for host systems. Embedded control also enables the robot modules to interface with conventional robotic software architectures, so that the EigenBot only requires high-level commands such as motion primitives, but is capable of handling the motor and motion control behind the scenes.


The EigenBot design also follows a modular system architecture approach for custom-designed electronics. Which enables component-sharing and subassembly-swapping capabilities for the EigenBot robotic systems. At the component level, there will be generic embedded computing (EigenBrain), sensor and actuation subassemblies to be reused without major hardware redesign, and at system level, EigenModules can be interchanged and swapped based on the need of the application. Each of the subassemblies and subsystem modules will be connected via a power and data bus using a standardized mechanical and electrical interface that allows flexible network topology, and a variety of robot configurations.


We designed a set of robotic modules that can be rearranged into a wide range of designs for mobile manipulation. The modules include actuated joints, static links, a body, and end effectors. All modules use the same custom microcontroller and interfaces, and are made mainly from 3D printed PLA and aluminum. Actuated modules contain a Dynamixel actuator. The interfaces were designed to be assembled toollessly, while still bearing enough loading to support the weight of a walking robot design or a cantilevered manipulator. Each interface input has eight contact pads, and the module detects which of these pads is in contact with the output pins of a connected module.
