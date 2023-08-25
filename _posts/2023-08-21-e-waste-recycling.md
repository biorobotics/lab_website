---
image: img/posts/Wombat_Punchstation.gif
date: '2023-08-21 15:16 -0400'
published: true
title: E-waste Recycling
categories: research
tags:
  - recycling_robotics
---
We live in a world where most sensitive information is stored on our devices. Eventually, like many things, those devices are thrown away. Existing waste management has more than half a century of experience in handling materials the right way, but dealing with electronics items poses a new challenge and if not done properly can be hazardous to the environment. The main idea is to identify parts that can be remarketed or recycled. In this work, we are trying to classify electronics, develop semantic understanding of their components using X-ray images, manipulate them to respective stations and then autonomously disassemble them to smaller components. 

![Fastener removal station to liberate fasteners in an adaptive manner]({{site.baseurl}}/img/posts/Wombat_Punchstation.gif)

The key idea in classification is to train a visual classifier using simulated images and then test it on real world images using domain randomization. We are using an attention based classification approach, augmented with a contrastive learning pipeline to detect multiple classes of e-waste devices, for instance, phones, tablets, and smart watches. For developing semantic understanding of the internal components, we are using a state of the art registration approach to match the given electronics with their ground truth label and segment out components such as batteries, speakers, cameras and fasteners. Finally, our robotics testbed features indigenous fastener and battery removal stations that use advanced computer vision, mechanical design, and state estimation techniques to liberate internal components of these e-waste devices. 
