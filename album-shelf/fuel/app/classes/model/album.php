<?php
class Model_Album extends Orm\Model {
    protected static $_properties = [
        "id",
        "artist",
        "genre",
        "title",
        "year_released",
        "label",
        "cover_url",
        "details"
    ];
}