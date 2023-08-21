---
image: img/posts/variable_length_skill_execution.gif
date: '2023-08-21 16:49 -0500'
published: false
title: Skill Learning
categories: research
tags:
  - skill_learning
---
Agents that can build temporally abstract representations of their environment are better able
to understand their world and make plans on extended time scales, with limited computational
power and modeling capacity. However, existing
methods for automatically learning temporally
abstract world models usually require millions
of online environmental interactions and incentivize agents to reach every accessible environmental state, which is infeasible for most real-world robots both in terms of data efficiency and
hardware safety. Our lab has developed an approach for simultaneously learning sets of skills
and temporally abstract, skill-conditioned world
models purely from offline data, enabling agents
to perform zero-shot online planning of skill sequences for new tasks.

### Learning skills and their induced temporally abstract dynamics

![skill_learning_overview.jpg]({{site.baseurl}}/img/posts/skill_learning_overview.jpg)

Our approach consists of an offline skill-learning phase and an online planning phase. In the former, given an offline dataset of trajectories, we jointly learn a latent space of skills, skill-conditioned low-level policies, and the temporally abstract dynamics induced by the execution of those low-level policies with a modified, variational inference based approach. In the latter, we plan over the learned space of skills to maximize a reward function we are given at test time.

### Allowing for skills of variable length

We further extend this approach to build agents that can dynamically vary the coarseness of their temporal abstractions. We do so by assuming an underlying hierarchical data-generating process where skills of variable length are responsible for producing the trajectories in the dataset we are given. We then use an unsupervised, variational approach to learn the unobserved segmentation points between skills. Once we have a decomposition of trajectories into skills of variable length, we follow our previous work by learning a space of skills, policies, and abstract dynamics. In addition, we also learn a __state-dependent__ termination condition that allows us to end the execution of a skill only after its intended goal has been accomplished and not just after a predetermined amount of time. We find that allowing for skills of variable lengths allows us to learn more accurate and precise temporally abstract dynamics and perform better in downstream planning than skills of fixed-length.

![variable_length_skill_pgm.png]({{site.baseurl}}/img/posts/variable_length_skill_pgm.png)
