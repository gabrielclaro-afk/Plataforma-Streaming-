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
        $musica = new Musica('AC/DC', 'Back in Black', 125, 1, 'Rock', 'Back in Black');

        $this->assertSame('AC/DC', $musica->getAutor());
        $this->assertSame('Back in Black', $musica->getTitulo());
        $this->assertSame(125, $musica->getDuracaoSegundos());
        $this->assertSame('Rock', $musica->getGenero());
        $this->assertSame('Back in Black', $musica->getAlbum());

        $musica->setTitulo('Dirty Deeds Done Dirt Cheap');
        $this->assertSame('Dirty Deeds Done Dirt Cheap', $musica->getTitulo());
    }

    public function testDuracaoFormatada(): void
    {
        $musica = new Musica('Queen', 'We Will Rock You', 125, 1, 'Rock', 'News of the World');
        $this->assertSame('02:05', $musica->duracaoFormatada());
    }

    public function testPlaylistReproduzirTodosExibeSaida(): void
    {
        $musica = new Musica('Nirvana', 'Smells Like Teen Spirit', 125, 1, 'Rock', 'Nevermind');
        $podcast = new Podcast('Flow Podcast', 'Conversa com Lula', 300, 'Conversando com Lula', 5);

        $playlist = new Playlist('minhas musicas e podcasts');
        $playlist->adicionarMidia($musica);
        $playlist->adicionarMidia($podcast);

        $this->expectOutputString(
            "Reproduzindo a musica: Smells Like Teen Spirit" . PHP_EOL .
            "Reproduzindo podcast: Conversa com Lula (Ep. 5)" . PHP_EOL
        );

        $playlist->reproduzirTodos();
    }
}