<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Classes/Midia.php';
require_once __DIR__ . '/../Classes/Reproduzivel.php';
require_once __DIR__ . '/../Classes/Musica.php';

final class MusicaTest extends TestCase
{
    public function testConstrutorEGetters(): void
    {
        $musica = new Musica('AC/DC', 'Back in Black', 125, 1, 'Rock', 'Back in Black');

        $this->assertSame('AC/DC', $musica->getAutor());
        $this->assertSame('Back in Black', $musica->getTitulo());
        $this->assertSame(125, $musica->getDuracaoSegundos());
        $this->assertSame(1, $musica->getId());
        $this->assertSame('Rock', $musica->getGenero());
        $this->assertSame('Back in Black', $musica->getAlbum());
    }

    public function testSetters(): void
    {
        $musica = new Musica('AC/DC', 'Back in Black', 125, 1, 'Rock', 'Back in Black');

        $musica->setId(42);
        $musica->setGenero('Hard Rock');
        $musica->setAlbum('Highway to Hell');

        $this->assertSame(42, $musica->getId());
        $this->assertSame('Hard Rock', $musica->getGenero());
        $this->assertSame('Highway to Hell', $musica->getAlbum());
    }

    public function testSettersHerdados(): void
    {
        $musica = new Musica('AC/DC', 'Back in Black', 125, 1, 'Rock', 'Back in Black');

        $musica->setAutor('Queen');
        $musica->setTitulo('We Will Rock You');
        $musica->setDuracaoSegundos(122);

        $this->assertSame('Queen', $musica->getAutor());
        $this->assertSame('We Will Rock You', $musica->getTitulo());
        $this->assertSame(122, $musica->getDuracaoSegundos());
    }

    public function testDuracaoFormatada(): void
    {
        $musica = new Musica('Queen', 'We Will Rock You', 125, 1, 'Rock', 'News of the World');

        $this->assertSame('02:05', $musica->duracaoFormatada());
    }

    public function testReproduzir(): void
    {
        $musica = new Musica('Nirvana', 'Smells Like Teen Spirit', 125, 1, 'Rock', 'Nevermind');

        $this->assertSame('Reproduzindo a musica Smells Like Teen Spirit', $musica->reproduzir());
    }

    public function testImplementaReproduzivel(): void
    {
        $musica = new Musica('Nirvana', 'Smells Like Teen Spirit', 125, 1, 'Rock', 'Nevermind');

        $this->assertInstanceOf(Reproduzivel::class, $musica);
        $this->assertInstanceOf(Midia::class, $musica);
    }
}
