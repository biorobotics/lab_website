---
title:  "Heterogeneous Multi-Agent Ergodic Search"
categories:
    - research
description: "Heterogeneoug Multi-Agent Ergodic Search"
published: true
image: img/posts/maergodic_fig1.png
tags:
  - multi_agent
---

Multi-robot systems can provide greater sensor coverage and reliability than single robot systems. Among multi-robot applications, significant research effort has been devoted to multi-agent search, where deploying numerous agents can greatly improve the time-efficiency and robustness of search. Motivated by such problems, we consider the large-scale deployment of heterogeneous robots in time-critical scenarios, where search can be further improved by leveraging the natural synergies between agents’ sensing and motion capabilities. By optimizing the formation and coordination of teams of heterogeneous agents, we can efficiently cover a large search area, while managing complexity, to allow for rapid, online re-planning as more information is gathered. This work addresses the question: How can we best form and coordinate heterogeneous agent teams?

<figure>
 <img src="img/posts/dars2021_gaussian.gif" alt="" />
</figure>

Our approach is based on ergodic search processes, which, similar to other information-theoretic coverage methods, rely on an a priori information distribution, representing the likelihood of finding a target at any point over the search domain, to guide the search. Ergodicity is a measure of how much time an agent spends in a region of space weighted by the likelihood of a target being located in that region. By optimizing over search paths (really the parameters that describe the paths) the ergodic metric drives agents to spend time in areas of the domain in proportion to the a priori likelihood of finding targets in these areas,  while still covering the whole domain, thus balancing exploration and exploitation. Often, this optimization is performed in the spectral domain, by minimizing the difference between the coefficients associated to the team's time-average statistics (i.e., fraction of the time spent in each area) and those of the information distribution.

The contribution of this work is to exploit the spectral nature of the ergodic metric in search scenarios involving heterogeneous agents. We do this by planning search paths for each agent type based on a smaller subset of the spectral coefficients associated with the information map, thus driving agents to search the domain at a spatial scale that best matches their motion and sensing capabilities. This technique decomposes the search task and distributes the subtasks to agents based on their capabilities. We demonstrate that these new insights lead to improvements in search domain coverage and time taken to find targets.

Current research focuses on applying machine learning techniques to automate both the creation and distribution of search subtasks. By allowing agents to thus learn and utilize their unique strengths, we can generalize this approach to more complex agents, where human intuition may not suffice. Additionally, we are exploring extending this work to incorporate decentralized planning in order to efficiently scale to large numbers of agents. Finally, branch-and-bound techniques are being explored as a way to efficiently analyze assignments of heterogeneous agents to different search tasks.

