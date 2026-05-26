<?php

declare(strict_types=1);

class VideoCurto extends Midia implements Reproduzivel
{
    public function __construct(
        private string $titulo,
        private string $criador,
        private int $duracaoSegundos
    ) {
        parent::__construct($titulo, $criador);
    }

    public function reproduzir(): string
    {
        return "Reproduzindo vídeo curto: {$this->titulo} "
            . "de {$this->criador} "
            . "({$this->duracaoSegundos} segundos)";
    }
}
