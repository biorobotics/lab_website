---
title:  "Multi-Agent Path Finding"
categories:
    - research
description: "Multi-Agent Path Finding"
published: true
image: img/posts/mapf_MATSPF.gif
tags:
  - multi_agent
---

### Table of Contents

<a href="{{page.url | relative_url}}#multi-agent-path-finding">1. Multi-Agent Path Finding</a>

<a href="{{page.url | relative_url}}#multi-agent-multi-objective-path-finding">2. Multi-Agent Multi-Objective Path Finding</a>

<a href="{{page.url | relative_url}}#multi-agent-target-sequencing-path-finding">3. Multi-Agent Target Sequencing Path Finding</a>



### Multi Agent Path Finding

With the rapid development of affordable robots with embedded sensing and computation capabilities, we are quickly approaching a point at which real-life applications will involve the deployment of hundreds, if not thousands, of robots. Most existing algorithms can be categorized as coupled approaches, which search the full configuration space of a system, and decoupled approaches, which search some low-dimensional representation. Coupled approaches can be guaranteed to find an optimal path, but are computationally infeasible for large numbers of robots. In other words, these approaches suffer from the curse of dimensionality, which states that the size of a system's configuration space grows exponentially with the dimensionality of the system. Decoupled approaches scale better with the number of robots, but cannot generally be guaranteed to find a path. Most prior works give us a choice: scalability or guarantees, but not both.

We seek to obtain the benefits of both coupled and decoupled approaches: we made the observation that in multi-agent planning, not all agents come into close proximity to each other and therefore do not require a coordinated planner. These agents can simply rely on a computationally efficient single agent planner, until they come into close proximity to each other, at which point the agents nearby to each other must use a coordinated planner among themselves. The idea here is that if agents only coordinate when needed, then the curse of dimensionality may not be realized, but in actuality, in the worst case it will. We call this dynamic coupling of agents, as needed, subdimensional expansion.

<figure>
 <img src="img/posts/mapf_subdimExp.png" alt="" />
</figure>

Subdimensional expansion is an approach that is able to adapt existing planners, such as A* and RRTs, to solve Multi-Agent Path Finding (MA-PF) problems. This approach first generates an individually (sometimes optimal) plan for each agent, ignoring the other agents. For an N-agent system, the initial search yields N paths, which essentially is a one-dimensional subset of the NM-dimensional configuration space where M is the number of degrees of freedom each agent has. Subdimensional expansion that directs the robots to follow these paths until the goal is reached or an agent-agent collision is detected. At the collision, the search space is then locally increased in dimensionality along any path found by the planning algorithm leading to the collision. Such a space grows, as needed, to determine the (optimal) path to the goal. Doing so constructs a variable dimensional search space of minimal size which will contain the optimal path. We implemented subdimensional expansion for the case where the configuration space of each robot can be represented as a graph, using A* as the underlying path planning algorithm. We name the resulting algorithm M*.
M* can be proven to find an optimal path in finite time, or to terminate in finite time that no path exists.


### Multi Agent Multi Objective Path Finding


<figure>
 <img src="img/posts/mapf_multiObj.png" alt="" />
</figure>


Starting from the subdimensional expansion and the conventional (standard) MA-PF problem, we investigated other variants of MA-PF problems while exploiting the dynamic-coupled planning strategy. Conventional multi-agent path planners typically aim to plan an ensemble of paths that optimizes a single objective, such as path length. Many applications, however, may require multiple objectives, say time-to-completion, fuel use and path risk, to be simultaneously optimized in the planning process. Often, these criteria may not be directly compared and sometimes lie in competition with each other. Simply applying standard multi-objective search algorithms to multi-agent path finding may prove to be inefficient because the size of the space of possible solutions, i.e., the Pareto-optimal set, can grow exponentially with the number of agents. We therefore formulated the problem called Multi-Agent Multi-Objective Path Finding (MA-MO-PF) and developed planners, such as Multi-Objective M* (MO-M*) and Multi-Objective Conflict-Based Search (MO-CBS), to solve the problem, which leverage both dynamic-coupled planning strategy for MA-PF and dominance principles from the multi-objective optimization literature. Consequently, the developed planners are able to compute the entire Pareto-optimal front while searching efficiently by constructing a variable dimensional search space.

The foundation of Multi-Agent Multi-Objective Path Finding (MA-MO-PF) is Single-Agent Multi-Objective Path Finding (SA-MO-PF), which is still an active research area with many open questions.
A fundamental challenge in SA-MO-PF is the large number of Pareto-optimal solutions, i.e., start-goal paths.
To find these Pareto-optimal start-goal paths, one has to maintain a large number of Paret-optimal paths from the starting location to any other intermediate location when planning towards the goal.
We address this challenge by incrementally building a data structure during the planning process to efficiently manage these Pareto-optimal paths.
We call the resulting algorithm Enhanced Multi-Objective A* (E-MO-A*).
E-MO-A* expedites the existing multi-objective search for up to an order of magnitude and is particularly advantageous for those hard instances with many Pareto-optimal solutions.
Furthermore, we have also developed multi-objective planners to handle dynamic environments such as planning among moving obstacles and planning in graphs where edge costs can change.


### Multi Agent Target Sequencing Path Finding


<figure>
 <img src="img/posts/mapf_MATSPF.gif" alt="" />
</figure>


Another important variant of MA-PF we considered is to let a team of agents collectively visit a large number of goal locations (also called waypoints) before reaching their destinations. We call this problem Multi-Agent Traveling-Salesman Path Finding (MA-TS-PF) and this problem arises in applications ranging from surveillance to logistics. MA-TS-PF involves not only planning collision-free paths but also sequencing multiple goal locations, i.e. assigning goals to agents as well as specifying the visiting order of goals. Solving MA-TS-PF to optimality is challenging as it requires addressing simultaneously the curses of dimensionality arising from both MA-PF and traveling salesman problems. We develop a new approach that handles agent-agent conflicts via subdimensional expansion while simultaneously allocating and sequencing targets for agents via state of the art traveling salesman solvers: the subdimensional expansion dynamically modifies the dimension of the new search space based on agent-agent conflicts and defers planning in the joint space until necessary. Concurrently, the complexity in target allocation and sequencing is addressed by embedding the mTSP solvers in the form of (1) heuristics that underestimate the cost-to-go from any state, and (2) individual optimal policies that constructs the low dimensional search space for subdimensional expansion. Numerically, we perform simulations with at most 20 agents and 50 targets to verify the performance of the proposed approach.

