<?php

$cacheFile = 'cache.html';
$cacheTimeSec = 20;

if (file_exists($cacheFile)) {
    $fileCreated = filemtime($cacheFile);
    if ((time() - $cacheTimeSec) < $fileCreated) {
        require_once $cacheFile;
        echo '<!-- Última vez em cache: ' . date('H:i:s', $fileCreated) . ' -->';
        exit;
    }
}

ob_start();

?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Treina Web</title>
    </head>
    <body>
        <h1>TreinaWeb Cursos</h1>

        <h3>Cursos:</h3>
        <ul>
            <li>PHP Básico</li>
            <li>PHP Intermediário</li>
            <li>PHP Avançado</li>
        </ul>
    </body>
</html>

<?php

$cachedFile = fopen($cacheFile, 'w');
fwrite($cachedFile, ob_get_contents());
fclose($cachedFile);

ob_end_flush();

?>