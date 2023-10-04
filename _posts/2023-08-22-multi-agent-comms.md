---
image: img/posts/comms_visualization.gif
date: '2023-08-22 16:49 -0500'
published: true
title: Multi-Agent Comms Learning
categories: research
tags:
  - multi_agent_reinforcement_learning
  - multi-agent_planning
  - skill_learning
---

Efficient inter-agent communication is an important requirement for both cooperative multi-agent robotics tasks, as well as distributed computing.  In both of these domains, the rate at which information can be transferred between robots or computing nodes is a bottleneck.  Techniques exist for learning communication protocols in such bandwidth-limited applications, however these approaches tend to converge very slowly, requiring large amounts of computational power and/or data.  This project seeks to develop methods for efficient communication learning on discrete, bandwidth-limited, and noisy networks.  Our initial work has developed a discrete communication learning approach, which utilizes a stochastic message encoding/decoding procedure to make discrete communication channels mathematically equivalent to an analog channel with additive noise.  Gradients can thus be backpropagated through the communication channel, enabling rapid, efficient and robust communication learning.  By virtue of using discrete messages, this approach is naturally incorporates bandwidth limitations and is ideally suited to real-world (digital) communication networks.  To enable communicating agents to further decrease the amount of information they transmit, we introduce a variable-length message code that provides agents with a means to modulate the number of bits they send to their neighbors, and encourage agents to send short messages when possible.  We find that in both tasks, our discrete differentiable communication approach enables communication learning with convergence rates comparable to approaches that allow the transmission of real-valued messages, which have been shown to converge much faster than typical discrete messaging approaches.  Additionally, we find that our approach enables comparable levels of task performance with up to 34-fold fewer bits exchanged, compared to an approach in which nodes communicate 32-bit precision messages.

If you are interested in this project, or related areas in reinforcement learning, please contact Ben Freed (bfreed@andrew.cmu.edu).




![comms_graph.jpg]({{site.baseurl}}/img/posts/comms_graph.jpg)


[1] Freed, Benjamin, et al. "Sparse discrete communication learning for multi-agent cooperation through backpropagation." 2020 IEEE/RSJ International Conference on Intelligent Robots and Systems (IROS). IEEE, 2020.

[2] Freed, Benjamin, Guillaume Sartoretti, and Howie Choset. "Simultaneous policy and discrete communication learning for multi-agent cooperation." IEEE Robotics and Automation Letters 5.2 (2020): 2498-2505.

[3] Freed, Benjamin, et al. "Communication learning via backpropagation in discrete channels with unknown noise." Proceedings of the AAAI conference on artificial intelligence. Vol. 34. No. 05. 2020.