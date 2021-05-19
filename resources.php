<!DOCTYPE html>
<html lang="pl">

<head>
<?php include 'meta.php';?>
</head>

<body>
    <?php include 'header.php';?>
    <?php printHeader('resources');?>

    <!-- PointNet -->
    <div>
        <div class="column-left">
            <article>
                <h2>PointNet</h2>
                <p>
                    PointNet is a NN architesture that operates on point clouds instead of more conventional data.
                    Its main goal is to be invariant to input ordering, which requires it to only use symetric functions.
                    Architecture also aims to be invatiant to certain geometric transformations.

                    It is a foundation for other architectures that came afterwards and is in general mech better than solutions that came before that aimed
                    to either voxelize to volume or project pointclouds into 2D views.
                </p>
            </article>
        </div>
        <div class="column-right">
            <p>
                <a href="https://arxiv.org/pdf/1612.00593.pdf">Original Paper on Arxiv</a>
            </p>
        </div>
    </div>

    <!-- 3dAAE -->
    <div>
        <div class="column-left">
            <article>
            <h2>Adversarial Autoencoders for Compact Representations of 3D Point Clouds</h2>
            <p>
                3D Adversarial Autoencoder encodes input to a latent space using PointNet as an encoder
                and decodes the latent space trying to be as close to identity function as possible.
                Contrary to more traditional GAN latent space is meant to represent probability distrubution.
                This allows user to sample from latent space and achive never seen point clouds (like new, made up chairs).
            </p>
            </article>
        </div>
        <div class="column-right">
            <p>
                <a href="https://arxiv.org/pdf/1811.07605.pdf">Original Paper on Arxiv</a>
            </p>
        </div>
    </div>

    <?php include 'footer.php';?>
</body>

</html>