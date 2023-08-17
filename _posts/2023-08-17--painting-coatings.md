---
image: img/posts/corvette.png
date: '2023-08-17 15:23 -0400'
published: true
title: ' Painting & Coatings'
categories: applications
tags:
  - manufacturing
---


Many applications require the deposition of spray paints or coatings. Most often, the goal is to acheive complete, uniform coverage of a precise thickness. This quality can be challenging to acheive even in simple planar surfaces, let alone complex curved surfaces or within confined spaces. The Biorobotics Lab's research is relevant to painting and coating applications in two ways:

- Coverage algorithms to ensure uniform paint or coating coverage of complex surfaces while minimizing waste and cycle time
- Snakelike mechanisms and control strategies for applying paint or coatings in complex confined spaces

### Coverage Algorithms for Painting and Coating

![paintingprofiles.png]({{site.baseurl}}/img/posts/paintingprofiles.png)

For painting applications such as car painting, the programming of a spray painting robot by a paint application specialist requires three to five months. This process requires so much time because the application specialist must generate a sequence of way points, one point at a time, for the robot to follow. These way points must describe a path that completely covers the car body while attempting to ensure uniform paint thickness; such a task is very difficult for a person to do and must be done manually. The first goal of this work is to automate the programming process allowing the paint specialist to save time and improve quality.

Many painting and coating applications also demand constant uniform paint thickness onto the surface, in addition to complete coverage of complex surfaces. Even in the planar case, ensuring "uniform" coverage can be challenging when considering a simple spray deposition model like a circle. This problem gets more complicated when we consider surfaces with curvature and tangent discontinuities that have an effect on deposition.

Reduction in waste of the paint and in the cycle time are some other features that we are interested in. Our work also explores aspects like the use of multiple robots and determination of their interaction, and the kinematics and dynamics of the painting robot.

### Snakelike Robots for Confined Space Painting and Coating

Robots are ideal for many industrial applications since they can perform repetitive work quickly and precisely. Given that speed, consistency, and precision are highly desirable characteristics for painting and coating deposition, robots are an ideal fit for the task. However, many industrial robots are ill-suited to reach into complex, cluttered volumes to perform difficult painting or coating work in confined spaces. Combined with specialized algorithms for achieving complete, uniform coverage in painting applications, the lab's snake robots used for confined space manufacturing can be used to apply coatings or painting within confined spaces such as tanks or railcars. The use of robots in this application can lead to savings in cost, time, and material waste while improving quality and eliminating the need for humans to enter confined spaces.

