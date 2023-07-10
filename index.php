<?php
//!importiamo il class.php
include './class.php';

class Post {
    public $title;
    public $category;
    public $tag;
    public function __construct($title, Category $category, $tag){
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
        echo $this->printMyArticle();
    }
    public function printMyArticle(){
        return "Titolo: " . $this->title . " Categoria: " . $this->category->getMyCategory() . " Tag: " . $this->tag . "\n";
    }
}

$articoloUno = new Post("E' caduto il governo dei Paese Bassi", new Attualita(), "PB, oggi, cronaca, attualità");
$articoloDue = new Post("La prima volta di un borsone di lusso a Wimbledon", new Sport(), "FB, sport, nuovi post");
$articoloTre = new Post("E' morto Napoleone Bonaparte", new Storia(), "ST, oggi, Sardegna");
$articoloQuattro = new Post("Napoleone tradiva le mogli, non tutte ma na bonaparte!", new Gossip(), "Adulterio, Finestra, Cane, Cuccia, Casa Bianca");


?>