<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptograma</title>
    <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= statics('styles.css') ?>" rel="stylesheet" type="text/css">
    <script src="js/conf.js"></script>
    <script src="js/criptograma.js"></script>
    <script>
        Criptograma.armarCriptograma("contenedor");
    </script>
</head>
<body>
    <?php 
        require 'nav.view.php';
     ?>
    <div id="contenedor">
        
    </div>
</body>
</html>