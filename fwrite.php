<html>
    <head>
        <title>Pemrosesan File</title>
    </head>
    <body>
    <h2> Penulisan Data</h2>
    <?php
    $file='C:\\Text.txt';
    $fo=fopen($file, 'W');
    $data='Tes fwrite OK in'.$file.' !';
    fwrite($fo,$data);
    fclose($fo);
    echo("Cek isi file di <b> $file <b/> !");
    ?>
</body>
</html>