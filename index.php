<?php

if ( $_POST['text'] ) {
    
    $lstr_text = $_POST['text'];
    $llng_quantityWords = str_word_count($lstr_text);
    $llng_quantityLines = str_lines_count($lstr_text);
}

function str_lines_count($pstr_text = '') {
    $larr_textLines = preg_split('/\n/', $pstr_text);
    return count($larr_textLines); 
}
?>
<HTML>
<head>
    <title>Contador de Palavras</title>
    <meta name="charset" value="UTF-8">
    <link rel='stylesheet' id='theme-css' href='./theme.css' type='text/css' media='all' />
</head>
<BODY>
    <form action='index.php' method='post'>
        Texto:<BR><BR>
        <textarea name="text" rows="20" cols="100" wrap="soft" ><?=$lstr_text?></textarea><BR><BR>
        <input type="submit" name="submit" value="Contar">
    </form>
    <?php

        if ( $_POST['text'] ) {           
            echo "Número de Palavas: ".$llng_quantityWords."<BR>";
            echo "Número de Linhas: ".$llng_quantityLines."\r\n";
        }

    ?>
</BODY>
</HTML>