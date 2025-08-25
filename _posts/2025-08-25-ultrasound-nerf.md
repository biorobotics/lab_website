---
date: '2025-08-25 00:00 -0400'
image: img/posts/ultrasound-nerf-square.png
published: true
title: Implicit 3D Functions for Ultrasound
categories: research
tags:
  - medical_robotics
---
Ultrasound Imaging is largely still 2 dimensional as 3D probes are very expensive and sonographers have classically been trained on 2D cross-sectional images. This brings into focus the somewhat abstract problem of reconstructing anatomy in 3D from 2D cross-sectional (tomographic) images. While compounding pixels in 3D (voxel compounding) is somewhat effective, it largely relies on near-perfect pose estimation and dense scanning. Even when these criteria are met, the reconstruction may have gaps and filling these with interpolation-like methods can cause artifacts which may affect diagnosis accuracy. Further, these compounded reconstructions are ‘frozen’, capturing fixed voxel intensities - meaning that slicing this volume for a new 2D image will not necessarily yield a physically plausible view as this volume has no understanding of how ultrasound voxel intensities change with viewing angles. This is due to the lack of physics grounding in volumetric reconstruction.

<figure>
 <img src="img/posts/ultrasound-nerf-angles.jpg"/>
 <figcaption>How the pixel intensities vary with varying viewing angle</figcaption>
</figure>

Ultrasound NeRF is an implicit function that uses the physical equations governing ultrasound wave propagation in tissue to learn a 3D volumetric reconstruction from one or more scans. Our student [Ananya Bal](https://ananyabal.github.io/) enhanced this method and made it view-dependent. By using pixel differentials as sparse initialization, Ananya enables the NeRF function to also learn a surface normal field within the ultrasound volume. This, combined with adding the regressed viewing angle to the rendering function, allows her to train the network to identify subtle voxel intensity changes associated with changes in viewing angles. The reconstructed volume can then yield physically accurate pixel intensities that actually capture artifacts such as shadows and energy damping from dense tissues.

<figure>
 <img src="img/posts/ultrasound-nerf-normals.png" width="70%"/>
 <figcaption>Learned Surface Normals by the implicit function</figcaption>
</figure>
<figure>
 <img src="img/posts/ultrasound-nerf-orientations.png" width="70%"/>
 <figcaption style="margin:0 15%;">Our reconstructed views from varying viewing angles showing how our method understand ultrasound wave propagation when the incidence angle changes</figcaption>
</figure>

Reconstructing the entire ultrasound volume is great but perhaps, diagnosticians also care about recovering the shape of individual anatomy within the volume. For example, doctors or even robotic probes may need a vessel or a bone reconstructed in 3D from a scan. To do this, Ananya formulated a binary occupancy function which utilizes the homogeneous tissue properties regressed by NeRF. This is trained with sparse segmentation labels (~5-10% are enough) to fit a solid 3D shape to the anatomy of interest. 

<figure>
 <img src="img/posts/ultrasound-nerf-reconstruction.png" width="100%"/>
 <figcaption>Reconstructed vessels from our method from three subjects with as low as 10% supervision (segmentation labels from 10% of the frames were provided). Ultrasound volume is also reconstructed in parallel. </figcaption>
</figure>