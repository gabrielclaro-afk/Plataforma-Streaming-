<?php

declare(strict_types=1);

class Podcast extends Midia {
    private string $descricao;
    private int $episodio;

    public function __construct(string $descricao, int $episodio) {

        $this->descricao = $novoDescricao;
        $this->episodio = $novoEpisodio;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao($novoDescricao): void {
        $this->descricao = $novoDescricao;
    }

    public function getEpisodio(): int {
        return $this->episodio;
    }

    public function setEpsodio($novoEpisodio): void {
        $this->episodio = $novoEpisodio;
    }



}