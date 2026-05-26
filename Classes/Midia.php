<?php 
declare(strict_types=1);
abstract class Midia {
    public function __construct(private string $autor, private string $titulo, 
    private int $duracaoSegundos) {}

    public function getAutor():string {
        return $this->autor;
    }
    public function setAutor($novoAutor):void {
        $this->autor = $novoAutor;
    }

    public function getTitulo():string {
        return $this->titulo;
    }
    public function setTitulo($novoTitulo):void {
        $this->titulo = $novoTitulo;
    }

    public function getDuracaoSegundos():int {
        return $this->duracaoSegundos;
    }
    public function setDuracaoSegundos($novaDuracao):void {
        $this->duracaoSegundos = $novaDuracao;
    }
    public function DuracaoFormatada(): string {
        $tempoMinuto = $this->duracaoSegundos / 60;
        return number_format($tempoMinuto, 2);
    }
}

?>