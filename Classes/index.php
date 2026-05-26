<?php
declare(strict_types=1);
require_once 'Musica.php';
require_once 'Podcast.php';
require_once 'VideoCurto.php';
require_once 'Playlist.php';

echo "=== Testando Musica ===" . PHP_EOL;
$musica = new Musica('Linkin Park', 'Numb', 187, 1, 'Rock', 'Meteora');
echo $musica->reproduzir() . PHP_EOL;
echo "Duração: " . $musica->duracaoFormatada() . PHP_EOL;

echo PHP_EOL . "=== Testando Podcast ===" . PHP_EOL;
$podcast = new Podcast('Monark', 'FlowPodcast', 3600, 'Entrevista especial', 2100);
echo $podcast->reproduzir() . PHP_EOL;
echo "Duração: " . $podcast->duracaoFormatada() . PHP_EOL;

echo PHP_EOL . "=== Testando VideoCurto ===" . PHP_EOL;
$video = new VideoCurto('Nabi o libanes', 'Comédia', 58);
echo $video->reproduzir() . PHP_EOL;
echo "Duração: " . $video->duracaoFormatada() . PHP_EOL;

echo PHP_EOL . "=== Testando Playlist ===" . PHP_EOL;
$playlist = new Playlist('Minha Playlist');
$playlist->adicionarMidia($musica);
$playlist->adicionarMidia($podcast);
$playlist->adicionarMidia($video);
echo "Playlist: " . $playlist->getNome() . PHP_EOL;
$playlist->reproduzirTodos();
?>
