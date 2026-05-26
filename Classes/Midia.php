<?php
declare(strict_types=1);

abstract class Midia {
    public function __construct(
        private string $autor,
        private string $titulo,
        private int $duracaoSegundos
    ) {}

    public function getAutor(): string {
        return $this->autor;
    }

    public function setAutor(string $novoAutor): void {
        $this->autor = $novoAutor;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $novoTitulo): void {
        $this->titulo = $novoTitulo;
    }

    public function getDuracaoSegundos(): int {
        return $this->duracaoSegundos;
    }

    public function setDuracaoSegundos(int $novaDuracao): void {
        $this->duracaoSegundos = $novaDuracao;
    }

    public function duracaoFormatada(): string {
        $minutos = intdiv($this->duracaoSegundos, 60);
        $segundos = $this->duracaoSegundos % 60;
        return sprintf('%02d:%02d', $minutos, $segundos);
    }
}
