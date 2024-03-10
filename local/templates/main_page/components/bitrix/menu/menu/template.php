<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

if (empty($arResult['ALL_ITEMS']))
	return; ?>

<div class="nav">
	<ul>
		<? foreach ($arResult['ALL_ITEMS'] as $arItem): ?>
			<? if ($arItem["SELECTED"] && $_SERVER["REQUEST_URI"] !== '/'): ?>
				<li class="active">
					<a href="<?= $arItem['LINK']; ?>">
						<?= $arItem['TEXT']; ?>
					</a>
				</li>
			<? else: ?>
				<li>
					<a href="<?= $arItem['LINK']; ?>">
						<?= $arItem['TEXT']; ?>
					</a>
				</li>
			<? endif; ?>
		<? endforeach; ?>
	</ul>
</div>