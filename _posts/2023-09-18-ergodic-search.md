---
image: img/posts/default.png
date: '2023-09-18 22:51 -0400'
published: false
title: Ergodic Search
---
### Table of Contents

1. [Multi-Objective Ergodic Search]({{page.url | relative_url}}#multi-objective-ergodic-search)

2. [Multi-Agent Multi-Objective Ergodic Search]({{page.url | relative_url}}#multi-agent-multi-objective-ergodic-search)

### Multi Objective Ergodic Search

<figure>
 <img src="img/posts/moes_alg_overview.png" alt="MO-ES algorithm overview" />
</figure>

Our work is motivated by humanitarian assistant and disaster relief (HADR) where often it is critical to find signs of life in the presence of conflicting criteria, objectives, and information. 

We believe ergodic search can provide a framework for exploiting available information as well as exploring for new information in applications such as HADR. Ergodic search algorithms plan trajectories such that the time spent in a region is proportional to the amount of information in that region, and is able to naturally balance between exploitation and exploration.

Existing ergodic search methods typically consider search using only a single information map.
However, one can readily envision many scenarios where multiple information maps that encode different types of relevant information are used. Ergodic search methods currently do not possess the ability to simultaneously search multiple information maps, nor do they have a way to balance which information gets priority.

This leads us to formulate a Multi-Objective Ergodic Search (MO-ES) problem, which aims to find the so-called Pareto-optimal solutions, for the purpose of providing human decision makers various solutions that trade off among conflicting criteria.

To efficiently solve {MO-ES}, we develop a framework called Sequential Local Ergodic Search (SLES), which leverages the recent advances in ergodic search methods as well as the idea of local optimization to efficiently compute Pareto-optimal solutions. Our numerical results show that SLES computes solutions of better quality and runs faster than the baselines.


### Multi Agent Multi Objective Ergodic Search


<figure>
 <img src="img/posts/mamoes_alg_overview.png" alt="Algorithm Overview" />
</figure>


Having formulated the multi-objective ergodic search problem, this work deals with the extension of the work to multiple agents.

In order to find points of interest in a given domain, many planners use **a priori** information to guide the search to expedite the detection of targets. Information-based search techniques use an **a priori** information map, typically represented as a probability distribution, to guide their search. An information map can describe, for example, the likelihood of finding survivors at a location in search and rescue applications. We present an approach to direct multiple agents (MA) to search a given domain subject to multiple objectives (MO), each characterized by its own information map. Our approach embraces an information-based method, called **ergodic search** (ES). ES utilizes an ergodic metric, defined later in this work, that is minimized when the time spent by an agent in a region is proportional to the amount of information contained in that region. In this thesis, we introduce the Multi-Agent Multi-Objective Ergodic Search (MA-MO-ES) problem and prescribe computationally efficient methods to solve it.

The primary goal of this work is to determine the trajectories for all agents such that the worst-case objective or highest ergodic metric on any information map is minimized (minmax objective). Naively computing a joint trajectory of all the agents by optimizing the ergodic metric on the average of all the information maps results in a high ergodic metric with respect to each map. This is because spending time in the high-information region on one map can correspond to spending time in the low-information regions of another map. If each agent's trajectory is instead computed by considering a subset of maps, our results show that the maximum ergodic metric on the information maps can be considerably reduced. This requires determining which information maps should be considered when optimizing the trajectory of a particular agent. In other words, this work computes the optimal allocation, of information maps to agents, that minimizes the maximum ergodic metric on the given information maps.

The main challenge in determining the optimal allocation is the exponential growth of the number of possible allocations with the number of maps and agents. Further, computing the cost of an allocation is itself an expensive planning problem. This is because evaluating an allocation requires identifying the maximum ergodic metric with respect to the information maps by computing the trajectory for each agent that optimizes the ergodic metric on its assigned maps. The expensive evaluation of one allocation coupled with the exponentially growing number of possible allocations makes solving for an optimal allocation using brute force computationally intractable. 

To mitigate the computational challenge of exponential growth, we present a branch and bound-based algorithm with pruning techniques that reduce the number of allocations to be searched to find the optimal allocation. To reduce the branching factor in branch and bound, we propose two approaches for clustering information maps before allocation: k-means and minimum bounding sphere clustering. This sacrifices guaranteed optimality in exchange for improved computational performance. These clustering approaches leverage the similarity between information maps to approximate the cluster of maps that should be assigned to a  single agent to achieve minmax ergodic metric on the information maps. Clustering information maps before allocation decreases the number of possible allocations and thus the branching factor in the branch and bound, further reducing the problem's computational complexity. Testing on 70 randomly generated test cases shows an order of magnitude improvement in runtime for our branch and bound approach compared to an exhaustive brute force approach. Using similarity clustering, the runtime further reduces by two orders of magnitude even for tests with ten information maps and four agents while maintaining good quality allocations with an average 20\% deviation from the optimal minmax ergodic metric.
