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
                    <a href="/" title="<?= $this->e($gc['title'])?>"><?= $this->e($gc['title'])?></a>
                </div>
                <div class="menu">
                    <?php foreach ($gc['menu'] as $text => $link): ?>
                    <a href="<?= $link ?>" title="<?= $text ?>"><?= $text ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </header>
        <?=$this->section('content')?>
        <footer>
            <div class="footer">
                <?= $this->e($gc['footer'])?>
            </div>
        </footer>
    </body>
</html>
