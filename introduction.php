If \(f\) and \(\psi\) are sets and \( \psi \subseteq f \) then \( \emptyset
\subseteq \psi \cap f \subseteq \psi \). Using \(f(\mathbf{x})\),
\(\psi(\mathbf{x})\) as the boolean function representations of \(f\), \(\psi\)
and letting \(\psi\left(\mathbf{x}\right) = \left[ \mathbf{0} \lt \mathbf{x}
\leq \mathbf{1} \right]\) where \(\left[\cdot\right]\) is the Iverson bracket,
then the optimization function that maximizes \( \psi \cap f \) is given by

$$<?php include 'latex/equations/cwt-compression.tex' ?>$$

To generate a compressed version of \(f\left(\mathbf{x}\right)\) from the
equation above, the following recursive formula is used.

$$<?php include 'latex/equations/cwt-recursion.tex' ?>$$

The representation of \(f\left(\mathbf{x}\right)\) using the coefficients
\(\left(\mathbf{s}_n, \mathbf{t}_n\right)\) is given by

$$<?php include 'latex/equations/psi-uncompression.tex' ?>$$

At an absolute worst, the compression size will be proportional to the surface
of \(f\left(\mathbf{x}\right)\). To produce the resolution needed to generate
precision machining operations of 10'' diameter gear (say to do surface
crowning) a ~\((2^{16})^3\) resolution is needed to achieve the necessary
precision. The resolution needed to create accurate toolpaths for gear crowning
implies that further compression is needed. Since most of the compressed data
resides at the surface for in the worst case scenerio, this suggest that we
would get most of the secondary compression in the coefficients
\(\left(\mathbf{s}_N, \mathbf{t}_n\right)\), where \(\mathbf{s}_N\) is likely to
be the \(\langle 1,1,1 \rangle\) vector, therefore we need to only consider the
compression for the \(\mathbf{t}_n\)'s at each \(\mathbf{s}_m\). This would
indicate to store the \(\left(\mathbf{s}_n, \mathbf{t}_n\right)\) tuples in the
following form

$$<?php include 'latex/equations/st-map.tex' ?>$$


