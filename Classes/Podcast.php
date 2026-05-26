<?php
declare(strict_types=1);
require_once 'Midia.php';
require_once 'Reproduzivel.php';

class Podcast extends Midia implements Reproduzivel {
    private string $descricao;
    private int $episodio;

    public function __construct(
        string $autor,
        string $titulo,
        int $duracaoSegundos,
        string $descricao = '',
        int $episodio = 0
    ) {
        parent::__construct($autor, $titulo, $duracaoSegundos);
        $this->descricao = $descricao;
        $this->episodio = $episodio;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao): void {
        $this->descricao = $novaDescricao;
    }

    public function getEpisodio(): int {
        return $this->episodio;
    }

    public function setEpisodio(int $novoEpisodio): void {
        $this->episodio = $novoEpisodio;
    }

    public function reproduzir(): string {
        return "Reproduzindo podcast: {$this->getTitulo()} (Ep. {$this->episodio})";
    }
}

?>
