<?php
declare(strict_types=1);

class Playlist {
    private array $midias = [];

    public function __construct(
        private string $nome
    ) {}

    public function adicionarMidia(Midia $midia): void {
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

?>