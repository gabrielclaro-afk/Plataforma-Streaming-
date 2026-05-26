<?php
declare (strict_types= 1);
require_once 'Midia.php';
require_once 'Reproduzivel.php';

    class Musica extends Midia implements Reproduzivel {
        private int $id;
        private string $genero;
        private string $album;

        public function __construct(int $id, string $genero, string $album) {
            $this->id = $id;
            $this->genero = $genero;
            $this->album = $album;
        } 

        public function getId() : int {
            return $this->id;
        }

        public function getGenero() : string {
            return $this->genero;
        }

        public function getAlbum() : string {
            return $this->album;
        }

        public function setID(int $id) : void {
            $this->id = $id;
        }

        public function setGenero(string $genero) : void {
            $this->genero = $genero;
        }

        public function setAlbum(string $album) : void {
            $this->album = $album;
        }

        public function reproduzir() : string {
            echo 'Reproduzindo a musica ' . $this->getTitulo() . PHP_EOL;
        }
            
    }
?>