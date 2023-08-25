---
title:  "Automatic Needle Insertion for Vessel Access"
categories:
    - research
description: "Automatic Needle Insertion for Vessel Access"
published: true
image: img/posts/AutoNeedleInsertionforVesselAccess.png
tags: 
    - medical_robotics
---

<figure>
 <img src="img/posts/AutoNeedleInsertionforVesselAccess.png" alt="" />
</figure>

The most important component in case of high-tempo, traumatic scenarios on the battlefield is inserting a needle in the vessel of the patient autonomously, as there is no professional medical person present. One challenge in this problem is how to model the needle dynamics and kinematics as it shifts through different scenarios: outside the skin, in contact with the skin surface and inside the skin surface. The needle will behave differently in different scenarios. Furthermore, other challenges are the constant movement of the skin surface of insertion due to heavy breathing of the patient, needle passing through the vessel due to excess force applied, needle slipping off the vessel due to which the vessel can form a haematoma. Moreover, the exact location of the needle tip is also not accurate. To counter these problems, we are designing a control law which takes force measurement at the needle tip as feedback and will be modeling the needle dynamics based on different scenarios. Furthermore, we’ll also model the approximate behavior of the needle when it contacts a vessel and how we can exploit the geometry of the vessel to ensure guarantee in needle insertion. Finally, we are developing a roboto module that uses optical sensors and pressure sensors to detect and confirm successful insertion into the vessel. 