<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Classes/VideoCurto.php';

class VideoCurtoTest extends TestCase {

    private VideoCurto $videoCurto;

    protected function setUp(): void {
        $this->videoCurto = new VideoCurto('João Silva', 'Dia Ensolarado', 45);
    }

    public function testConstrutor(): void {
        $this->assertInstanceOf(VideoCurto::class, $this->videoCurto);
        $this->assertEquals('João Silva', $this->videoCurto->getAutor());
        $this->assertEquals('Dia Ensolarado', $this->videoCurto->getTitulo());
        $this->assertEquals(45, $this->videoCurto->getDuracaoSegundos());
    }

    public function testReproducir(): void {
        $resultado = $this->videoCurto->reproduzir();
        $this->assertStringContainsString('Reproduzindo vídeo curto', $resultado);
        $this->assertStringContainsString('Dia Ensolarado', $resultado);
        $this->assertStringContainsString('João Silva', $resultado);
        $this->assertStringContainsString('45 segundos', $resultado);
    }

    public function testSetAutor(): void {
        $this->videoCurto->setAutor('Maria Santos');
        $this->assertEquals('Maria Santos', $this->videoCurto->getAutor());
    }

    public function testSetTitulo(): void {
        $this->videoCurto->setTitulo('Novo Título');
        $this->assertEquals('Novo Título', $this->videoCurto->getTitulo());
    }

    public function testSetDuracaoSegundos(): void {
        $this->videoCurto->setDuracaoSegundos(120);
        $this->assertEquals(120, $this->videoCurto->getDuracaoSegundos());
    }

    public function testDuracaoFormatada(): void {
        $this->assertEquals('00:45', $this->videoCurto->duracaoFormatada());
        
        $videoCurto2 = new VideoCurto('Ana', 'Teste', 125);
        $this->assertEquals('02:05', $videoCurto2->duracaoFormatada());
    }

    public function testImplementaInterface(): void {
        $this->assertInstanceOf(Reproduzivel::class, $this->videoCurto);
    }
}
