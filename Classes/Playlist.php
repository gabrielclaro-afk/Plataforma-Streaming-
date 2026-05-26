<?php
declare(strict_types=1);

require_once 'Midia.php';
require_once 'Reproduzivel.php';

class Playlist {
    private array $midias = [];

    public function __construct(
        private string $nome
    ) {}

    public function adicionarMidia(Midia&Reproduzivel $midia): void {
        $this->midias[] = $midia;
    }

    public function reproduzirTodos(): void {
        foreach ($this->midias as $midia) {
            echo $midia->reproduzir() . PHP_EOL;
        }
    }

    public function getNome(): string {
        return $this->nome;
    }
}
