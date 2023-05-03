<?php
class Movie {
    public $title;
    public $cast;
    public $genre;
    public $year;
    public $duration;

    function __construct(string $title, Cast $cast, string $genre, int $year, int $duration)
    {
        $this->title = $title;
        $this->cast = $cast;
        $this->genre = $genre;
        $this->year = $year;
        $this->duration = $duration;

    }
}
?>