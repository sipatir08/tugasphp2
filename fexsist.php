<html>
<head>
    <title>Pemrosesan file</title>
</head>
<body>
    <h2>Pemeriksaan file</h2>
    <?php
    $file='c:\\Teks.txt';
    if(file_exists($file))
    {
        echo("File <b> $file </b> sudah ada !");
    }else
    {
        echo("File <b> $file </b> tidak ada !");
    }
    ?>
</body>
</html>