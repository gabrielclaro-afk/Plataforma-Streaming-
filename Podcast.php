<?php

declare(strict_types=1);
require_once 'Midia.php';
require_once 'Reproduzivel.php';

class Podcast extends Midia implements Reproduzivel {
    private string $descricao;
    private int $episodio;

    public function __construct(string $descricao, int $episodio) {
        $this->descricao = $novodescricao;
        $this->episodio = $novoepisodio;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao($novodescricao): void {
        $this->descricao = $novodescricao;
    }

    public function getEpisodio(): int {
        return $this->episodio;
    }

    public function setEpisodio($novoepisodio): void {
        $this->episodio = $novoepisodio;
    }


}

?>