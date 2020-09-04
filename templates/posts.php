<?php
$this->layout('template', ['title' => $title]) ?>
<main>
    <article>
        <h1><?= $title ?></h1>
        <?= $content ?>
    </article>
</main>