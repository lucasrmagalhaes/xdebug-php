<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>var_dump</title>
    </head>
    
    <body>
        <?php
        
        require __DIR__ .  '/vendor/autoload.php';

        $leilao = new Alura\Leilao\Model\Leilao('Fiat 147 0Km');

        var_dump('<pre>', $leilao);

        ?>
    </body>
</html>