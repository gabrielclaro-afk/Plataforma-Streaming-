<?php
declare(strict_types=1);

require_once 'Midia.php';
require_once 'Reproduzivel.php';

class VideoCurto extends Midia implements Reproduzivel {

    public function __construct(
        string $criador,
        string $titulo,
        int $duracaoSegundos
    ) {
        parent::__construct($criador, $titulo, $duracaoSegundos);
    }

    public function reproduzir(): string {
        return "Reproduzindo vídeo curto: {$this->getTitulo()} "
            . "de {$this->getAutor()} "
            . "({$this->getDuracaoSegundos()} segundos)";
    }
}
