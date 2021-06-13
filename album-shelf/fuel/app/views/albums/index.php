<div class="col-lg-12">
    <h1 class="page-header">My Alubms</h1>
</div>

<?php if(Session::get_flash("success")) : ?>
    <div class="alert alert-success"><?= Session::get_flash("success") ?></div>
<?php endif ?>
<?php if(Session::get_flash("error")) : ?>
    <div class="alert alert-danger"><?= Session::get_flash("error") ?></div>
<?php endif ?>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php foreach($albums as $album): ?>
    <div class="col">
        <div class="card shadow-sm">
            <img src="<?= $album->cover_url ?>" alt="">

            <div class="card-body">
                <h5><strong><?= $album->artist ?> - <?= $album->title ?></strong></h5>
                <p class="card-text"><?= Str::truncate($album->details, 100) ?></p>
                <div class="d-grid">
                    <a href="/albums/view/<?= $album->id ?>" class="btn btn-outline-secondary">View</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>