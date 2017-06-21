<?php foreach($this->items as $item) : ?>

	<h1 class="ui centered header"><?= $item->title; ?></h1>
	<article>
		<?= $item->text; ?>
	</article>

<?php endforeach; ?>