<?php 
declare(strict_types=1);
require_once 'Midia.php';

$midia = new Midia('Autor', 'Titulo', 120);
echo $midia->DuracaoFormatada();

?>