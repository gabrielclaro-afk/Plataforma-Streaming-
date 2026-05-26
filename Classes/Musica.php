<?php
declare(strict_types=1);
require_once 'Midia.php';
require_once 'Reproduzivel.php';

class Musica extends Midia implements Reproduzivel {
    private int $id;
    private string $genero;
    private string $album;

    public function __construct(
        string $autor,
        string $titulo,
        int $duracaoSegundos,
        int $id,
        string $genero,
        string $album
    ) {
        parent::__construct($autor, $titulo, $duracaoSegundos);
        $this->id = $id;
        $this->genero = $genero;
        $this->album = $album;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getGenero(): string {
        return $this->genero;
    }

    public function getAlbum(): string {
        return $this->album;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setGenero(string $genero): void {
        $this->genero = $genero;
    }

    public function setAlbum(string $album): void {
        $this->album = $album;
    }

    public function reproduzir(): string {
        return 'Reproduzindo a musica ' . $this->getTitulo();
    }
}
