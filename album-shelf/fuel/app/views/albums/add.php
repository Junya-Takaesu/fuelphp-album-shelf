<h1 class="page-header">Add Album</h1>
<?= Form::open("/albums/add") ?>
    <p>
        <?= Form::label("Title", "title") ?>
        <?= Form::input("title", Input::post("title", isset($album) ? $album->title : ""), ["class" => "form-control"]) ?>
    </p>
    <p>
        <?= Form::label("Artist", "artist") ?>
        <?= Form::input("artist", Input::post("artist", isset($album) ? $album->artist : ""), ["class" => "form-control"]) ?>
    </p>
    <p>
        <?= Form::label("Genre", "genre") ?>
        <?= Form::select("genre", "0", [
            "0" => "Select",
            "Rock" => "Rock",
            "Rap" => "Rap",
            "Pop" => "Pop",
            "Country" => "Country",
            "R&B" => "R&B",
            "Dance" => "Dance",
            "Jazz" => "Jazz",
            "Other" => "Other",
        ], ["class" => "form-control"])?>
    </p>
    <p>
        <?= Form::label("Year Released", "year_released") ?>
        <?= Form::input("year_released", Input::post("year_released", isset($album) ? $album->year_released : ""), ["class" => "form-control"]) ?>
    </p>
    <p>
        <?= Form::label("Label", "label") ?>
        <?= Form::input("label", Input::post("label", isset($album) ? $album->label : ""), ["class" => "form-control"]) ?>
    </p>
    <p>
        <?= Form::label("Cover URL", "cover_url") ?>
        <?= Form::input("cover_url", Input::post("cover_url", isset($album) ? $album->cover_url : ""), ["class" => "form-control"]) ?>
    </p>
    <p>
        <?= Form::label("Details", "details") ?>
        <?= Form::Textarea("details", Input::post("details", isset($album) ? $album->details : ""), ["cols" => 60, "rows" => "8", "class" => "form-control"]) ?>
    </p>
    <div class="actions">
        <?= Form::submit("send") ?>
    </div>
<?= Form::close() ?>