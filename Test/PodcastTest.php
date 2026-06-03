<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Classes/Midia.php';
require_once __DIR__ . '/../Classes/Reproduzivel.php';
require_once __DIR__ . '/../Classes/Podcast.php';

final class PodcastTest extends TestCase
{
    public function testPodcastGettersESetter(): void
    {
        $podcast = new Podcast('Flow Podcast', 'Conversa com Lula', 300, 'Conversando com Lula', 5);

        $this->assertSame('Flow Podcast', $podcast->getAutor());
        $this->assertSame('Conversa com Lula', $podcast->getTitulo());
        $this->assertSame(300, $podcast->getDuracaoSegundos());
        $this->assertSame('Conversando com Lula', $podcast->getDescricao());
        $this->assertSame(5, $podcast->getEpisodio());

        $podcast->setDescricao('Entrevista especial com convidado');
        $podcast->setEpisodio(6);

        $this->assertSame('Entrevista especial com convidado', $podcast->getDescricao());
        $this->assertSame(6, $podcast->getEpisodio());
    }

    public function testPodcastReproduzirRetornaTextoEsperado(): void
    {
        $podcast = new Podcast('Flow Podcast', 'Conversa com Lula', 300, 'Conversando com Lula', 5);

        $this->assertSame(
            'Reproduzindo podcast: Conversa com Lula (Ep. 5)',
            $podcast->reproduzir()
        );
    }
}

