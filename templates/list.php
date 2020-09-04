<?php $this->layout('template', ['title' => $title, 'gc' => $globalConfiguration]) ?>

<main>
    <?php foreach ($pages as $page): ?>
		<h1><a href="<?= $page['path'] ?>"><?=$page['title'] ?></a></h1>
        <div>
            <?= $page['more'] ?>
        </div>
    <?php endforeach; ?>
    <div id="pagination">
        <?php if($hasPrev): ?>
        <a href="<?=$prev ?>"><<<</a>
        <?php endif; ?>
        <?= $pageNumber ?> / <?= $maxPage ?>
        <?php if($hasNext): ?>
        <a href="<?=$next ?>">>>></a>
        <?php endif; ?>
    </div>
</main>