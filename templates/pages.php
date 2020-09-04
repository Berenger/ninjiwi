<?php $this->layout('template', ['title' => $title, 'gc' => $globalConfiguration]) ?>

<main>
    <article>
        <h1><?= $title ?></h1>
        <?= $content ?>
    </article>
</main>