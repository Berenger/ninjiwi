<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$this->e($title)?></title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <header>
            <div class="header">
                <div class="title">
                    <a href="/" title="Ninjiwi PHP">Ninjiwi PHP</a>
                </div>
                <div class="menu">
                    <a href="/pages/exemple-page.html" title="Example Page">Example Page</a>
                </div>
            </div>
        </header>

    <?=$this->section('content')?>
    </body>

</html>
