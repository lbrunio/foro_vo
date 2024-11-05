<?php
function countWords($text) {
    return str_word_count($text);
}

function repeatedLeters($text) {
    $text = strtolower($text);
    $leters = array_count_values(str_split(preg_replace("/[^a-zA-Z]/", "", $text))); 
    arsort($leters);
    return key($leters); 
}

function repeatedWords($text) {
    $text = strtolower($text);
    $words = str_word_count($text, 1);
    $countedWords = array_count_values($words);
    arsort($countedWords);
    return key($countedWords);
}
?>

<div>
<b>Detalles:</b><br>
<table>
<tr><td>Longitud: </td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras: </td><td><?= countWords($_REQUEST['comentario']) ?></td></tr>
<tr><td>Letra + repetida: </td><td><?= repeatedLeters($_REQUEST['comentario']) ?></td></tr>
<tr><td>Palabra + repetida: </td><td><?= repeatedWords($_REQUEST['comentario']) ?></td></tr>
</table>
</div>


