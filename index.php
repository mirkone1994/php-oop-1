<?php

class Movie
{
  public $title;
  public $genre;
  public $length;
  public $directedby;
  public $writtenby;
  public $release;
  public $originallang;


  public function __construct($_title, $_genre, $_length, $_directedby, $_writtenby, $_release, $_originallang)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->length = $_length;
    $this->directedby = $_directedby;
    $this->writtenby = $_writtenby;
    $this->release = $_release;
    $this->originallang = $_originallang;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

$movie = new Movie('Star Wars: Episode I – The Phantom Menace', 'Fantasy', 133, 'George Lucas', 'George Lucas', 1999, 'English');
$movie2 = new Movie('Star Wars: Episode II – Attack of the Clones', 'Fantasy', 142, 'George Lucas', 'George Lucas, Jonathan Hales', 2002, 'English');

var_dump($movie);
var_dump($movie2);

echo $movie->getTitle();
?>

<br>

<?php
echo $movie2->getTitle();
?>