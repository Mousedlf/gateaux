
<div class="row d-flex">

    <div class="row m-0 g-2 col-9">
        <?php foreach ($posts as $post) :  ?>

            <div class="card col-4 p-0">
                <div class="card-img-top bg-secondary p-5">
                    <p>future image</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $post->getTitle() ?></h5>
                    <p class="card-text"><?= $post->getContent() ?></p>
                    <a href="index.php?type=post&action=show&id=<?= $post->getId() ?>" class="btn btn-warning">Voir recette</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

    <div class="col-3 bg-danger sticky-top">
        <p>kzkzkzz</p>
    </div>


</div>