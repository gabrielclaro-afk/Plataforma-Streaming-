<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Classes/Midia.php';
require_once __DIR__ . '/../Classes/Reproduzivel.php';
require_once __DIR__ . '/../Classes/Musica.php';
require_once __DIR__ . '/../Classes/Podcast.php';
require_once __DIR__ . '/../Classes/Playlist.php';

final class MidiaTest extends TestCase
{
    public function testMusicaGettersESetter(): void
    {
        $musica = new Musica('Autor', 'Titulo', 125, 1, 'Rock', 'Album');

        $this->assertSame('Autor', $musica->getAutor());
        $this->assertSame('Titulo', $musica->getTitulo());
        $this->assertSame(125, $musica->getDuracaoSegundos());
        $this->assertSame('Rock', $musica->getGenero());
        $this->assertSame('Album', $musica->getAlbum());

        $musica->setTitulo('Novo Titulo');
        $this->assertSame('Novo Titulo', $musica->getTitulo());
    }

    public function testDuracaoFormatada(): void
    {
        $musica = new Musica('Autor', 'Titulo', 125, 1, 'Rock', 'Album');
        $this->assertSame('02:05', $musica->duracaoFormatada());
    }

    public function testPlaylistReproduzirTodosExibeSaida(): void
    {
        $musica = new Musica('Autor', 'Titulo', 125, 1, 'Rock', 'Album');
        $podcast = new Podcast('Autor2', 'PodTitulo', 300, 'Descricao', 5);

        $playlist = new Playlist('Minha Playlist');
        $playlist->adicionarMidia($musica);
        $playlist->adicionarMidia($podcast);

        $this->expectOutputString(
            "Reproduzindo a musica Titulo" . PHP_EOL .
            "Reproduzindo podcast: PodTitulo (Ep. 5)" . PHP_EOL
        );

        $playlist->reproduzirTodos();
    }
}