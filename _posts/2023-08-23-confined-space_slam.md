---
image: img/posts/handheld-blaser.png
date: '2023-08-23 16:29 -0400'
published: false
title: 'Confined-Space Sensing and 3D Reconstruction'
---
Confined-space applications require specialized 3D sensors to scan the environment, detect objects, and avoid obstacles. Compared to mainstream sensors being widely used among the robotics community, such as Lidar and machine vision cameras, 3D sensors for confined spaces have additional requirements on the miniature size, ultra-short sensing ranges, and high accuracy.

There are no COTS solutions available to fulfill the ultra-short-range but high-precision 3D perception challenge. Most of the commercially available sensor systems are bulky, “farsighted”, and require external computers to perform 3D processing. It would be difficult to even obtain and let alone miniaturize an integrated sensor system, and through our work, we have developed a deep insight into creating these sensors and intelligently processing information from these sensors.

## Ultra-Compact Sensor for High-Accuracy Close-Up 3D Reconstruction

<figure>
 <img src="img/posts/handheld-blaser.png" width="55%"/>
</figure>

We have developed several working prototypes of miniature 3D sensors which are well-suited to confined-space manufacturing and inspection applications. The foundamental and enabling technology behind these sensors is a multi-sensor fusion simultaneous localization and mapping (SLAM) framework. It integrates a camera, a laser profiler, and an inertial measurement unit (IMU) into an ultra-compact sensor package capable of performing real-time, dense, and colorized 3D reconstruction of close-range objects with sub-milimeter-grade scanning accuracy. We are actively working on improving the hardware performance, software efficiency, and integrability with other robotic systems, with the goal to make it the best option for short-range industrial robotic perception solutions for all applications.

<figure>
 <img src="img/posts/blaser-scanning.png" width="55%"/>
</figure>

**Example use case: Industrial Part 3D Scanning**
<figure class="image is-16by9"><iframe class="has-ratio" src="https://www.youtube.com/embed/LECQlbpoq1g" frameborder="0" allowfullscreen></iframe></figure>