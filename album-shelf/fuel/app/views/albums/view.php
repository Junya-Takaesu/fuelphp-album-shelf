<a href="/" class="btn btn-outline-dark">Go Back</a>
<div class="float-end">
    <a href="/albums/edit/<?= $album->id ?>" class="btn btn-success">Edit</a>
    <a href="/albums/delete/<?= $album->id ?>" class="btn btn-danger">Delete</a>
</div>
<hr>

<div class="row album">
    <div class="col-md-5">
        <img src="<?= $album->cover_url?>" class="img-fluid " alt="album cover">
    </div>
    <div class="col-md-7">
        <h3><? $album->title; ?></h3>
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Artist: </strong><?= $album->artist ?>
            </li>
            <li class="list-group-item">
                <strong>Release Year: </strong><?= $album->year_released ?>
            </li>
            <li class="list-group-item">
                <strong>Label: </strong><?= $album->label ?>
            </li>
            <li class="list-group-item">
                <strong>Genre: </strong><?= $album->genre ?>
            </li>
        </ul>
        <div class="card mt-4">
            <div class="card-body">
                <h3 class="card-title">Other Details</h3>
                <p class="card-text"><?= $album->details ?></p>
            </div>
        </div>
    </div>
</div>