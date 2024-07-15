<?php

use andrewdanilov\adminpanel\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $siteName string */
/* @var $directoryAsset false|string */

?>

<div class="page-left">
	<div class="sidebar-heading">
        <a href="<?= \yii\helpers\Url::to(['/']) ?>">
            <?= $siteName ?>
        </a>
    </div>
	<?= Menu::widget(['items' => [
		['label' => 'Dashboard', 'url' => ['/site/index'], 'icon' => 'desktop'],
		[],
		['label' => 'System'],
		['label' => 'Users', 'url' => ['/user/index'], 'icon' => 'users'],
		['label' => 'Books', 'url' => ['/book/index'], 'icon' => 'book'],
		['label' => 'Authors', 'url' => ['/author/index'], 'icon' => 'male'],
        [],
        [],
		['label' => 'Log Out', 'url' => ['/user/logout'], 'icon' => 'sign-out-alt'],
	]]) ?>
</div>
