<?php 
declare(strict_types=1);
require_once 'Podcast.php';

$flow = new Podcast('Autor', 'Titulo', 120);
echo $flow->DuracaoFormatada();

?>