---
title:  "Modular Robotics - Mechanism and Control Design"
categories:
    - research
description: "Modular Robotics"
published: true
image: img/posts/eigenbot.gif
tags:
    - locomoting_systems
    - modular_robotics
---

<figure>
 <img src="img/posts/Eigenbot.png" alt="" />
</figure>

The Biorobotics group has embraced and advanced modular robot systems, first starting with our snake robots and now virtually all of our hardware and software systems. The obvious immediate benefit for modular robotic systems is that a core set of modules can be combined and recombined to form a customized robot, perhaps on a daily basis. They also allow for better serviceability of the robots because if a modular should fail, it simply needs to be replaced. We have discovered, in our work, that modularity also allows for rapid design of near-final systems, sometimes creating a tight design loop between the designer and the user. 

{% include youtube.html video="ok8E6Bc1Jc4" %}

Our group’s work toward modularity has taken a comprehensive view, ranging from low-level hardware and software support, to mid-level parameter estimation and control, and all the way to high-level artificial intelligence.Regardless of level or aspect of modularity development, scalability pervades all aspects of our research. Scalability can take on several forms; for example, the number of possible robot designs grows exponentially with the number of core modules (really modular types) in a given set of modules. The number of system level controllers, and the number of behaviors that depend on such controllers also grows exponentially, but even faster than the number of robot designs. 

## Questions this project asks: 
- What is in “scope” for the definition of a module? (I.e. Structure, power, actuation, sensing, computation, controller, and interfaces)
- A small set of modules can be used to construct a large number of designs. Can one control architecture be applied to any and all of these designs at once?
- Given a task, how can one determine the best robot design to achieve that task?
- Given a range of tasks, how can one determine the set of modules whose combinations of modules form robots to achieve these tasks? How can one optimize the design of the individual modules within that set?


<figure>
 <img src="img/posts/EGAN.png" alt="" />
</figure> 

## Design Composition of Fixed Topology Modular Robots

An abstracted version of our pipeline assumes that the components used for composition can be represented as shown in the blue box. At each training iteration, a task is generated at random from a predefined distribution of tasks. The generator implicitly maps the task into a population of compositions, symbolized in the red box. The evolution-guided data creation step explores around the generated compositions by evolving them using a procedure inspired by Evolutionary Algorithms, and creates a population of evolved compositions, symbolized in the green box. The discriminator takes as input the task and a robot composition that is either from the generated compositions or the evolved compositions, and tries to distinguish from which population the composition comes from. The output of the discriminator feeds into the loss function 𝐿𝐺, guiding the generator towards generating high-performing compositions.

{% include youtube.html video="oDI1rKeFpU4" %}

## Design Composition of Variable Topology Modular Robots (based on Robo-grammar)

Our framework begins by collecting a dataset of robot designs based on a set of graph grammar rules, as shown on the top left. This process of enumerating designs is computationally inexpensive, as no controller is needed. The collected data (example on bottom left) is subsequently used to train a graph variational autoencoder (VAE), which defines a mapping between a low-dimensional continuous latent space and the combinatorial design space. A property predictor (shown as the green trapezoid) is simultaneously trained to predict the world space features  grounding of the robots from the latent vector, in order to encourage physically similar robots to be grouped together in the latent space. After the VAE is trained, optimization can be performed in the latent space in search of high-performing designs. This VAE can further be used for multiple distinct tasks without the need for retraining.